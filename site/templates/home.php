<?php 

snippet('header');



?>

<section id="home" class="fullscreen ">
	<div class="container_3">
		<h2 class="home-text position-fixed">
			
			<?php echo multiline($page->home()) ?>
		</h2>
	</div>
	
</section>

<section id="profile" class="fullscreen">
	<div class="container_3">
		<div class="profile-text">
			<h2>
			<?php echo multiline($page->profile()) ?>
			</h2>
			<h3>
				<?php echo multiline($page->profile_tagline()) ?>
				
			</h3>
		</div>
	</div>
</section>






<?php 
foreach($pages->visible() as $section) {
  snippet($section->uid(), array('data' => $section));
}

?>

<?php

snippet('footer');

?>