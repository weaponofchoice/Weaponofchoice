<section id="archive" class="normal">
 <h1><?php echo html($data->title()) ?></h1>
 <?php echo kirbytext($data->text()) ?>


	<div class="container_3 mosaicflow" id="container" data-min-item-width="400">
	
 
	  <?php foreach($data->children()->visible() as $archive): ?>

	    <div class="mosaicflow__item <?php echo $css_class; ?>">
			<a href="<?php echo $archive->url() ?>">
	     	   <img src="<?php echo $archive->images()->first()->url() ?>" class="img-responsive" alt="<?php echo html($archive->title()) ?>" />
		   </a>
	    </div>
	
	  <?php endforeach ?>
	</div>
	<div class="clearfix"></div>
</section>