


	




	
	<?php if($page->hero() !='' && $page->hero() !='0'): ?>
	<?php $image = $page->images()->find( html($page->hero()) ) ?>
	<div class="headerimg" style="background-image:url('<?php echo $image->url() ?>');background-position: center; background-repeat: no-repeat; background-size: cover; -webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;">
	</div>
	<?php endif ?>
	
	<section class="project">
		<h1 class="project"><?php echo html($page->title()) ?></h1>
		<div class="divider"></div>
		<div class="projectText">
			<?php echo kirbytext($page->text()) ?>
		</div>

	</section>

	
	<?php if($page->hasImages()): ?>
	<ul class="gallery">
	  <?php foreach($page->images() as $image): 
		  if(strpos($image, '@2x')===false){
		  ?>
	  <li>
	    <img rel="gallery" src="<?php echo $image->url() ?>" >
	  </li>
	  <?php
	  	
	  }; endforeach ?>
	</ul>
	<?php endif ?>
		
		
		
		
			




