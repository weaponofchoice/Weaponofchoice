<?php 

snippet('header');



?>

<section id="home" class="fullscreen">
	<div class="container_3">
		<h2 class="position-fixed">
			Weaponofchoice is een ontwerp<br/>
			bureau voor 2d en 3d, we creëren<br/> 
			doordachte visuele ervaringen op het<br/> 
			web, in print en in de fysieke ruimte.
		</h2>
	</div>
	
</section>

<section id="profile" class="fullscreen">
	<div class="container_3">
		<div class="profile-text">
			<h2>
				We geloven in de kracht van goede <br/>
				ideeën en een esthetische realisatie. <br/> 
				Ons team is toegewijd, flexibel en <br/> 
				werkt heel precies.
			</h2>
			<h3>
				We werken voor ondernemers, creatieve bureau's, <br/>
				de culturele sector en multinationals.<br/>
			</h3>
		</div>
	</div>
</section>

<?php

foreach($pages->visible() as $section) {
  snippet($section->uid(), array('data' => $section));
}

snippet('footer');

?>