<section id="archive" class="normal">
 <h1><?php echo html($data->title()) ?></h1>


	
	
 
	
				
	<div class="container_3 mosaicflow" id="container" data-min-item-width="400">
		   <?php foreach($data->children()->visible() as $project): ?>
			<div class="mosaicflow__item">
			   
					<a class="various fancybox.ajax" href="<?php echo $project->url() ?>">
			     		<img src="<?php echo $project->images()->first()->url() ?>" class="img-responsive" alt="<?php echo html($project->title()) ?>" />
					</a>
		   </div>
		   <?php endforeach ?>
		
	  </div>
		  
	  <div class="clearfix"></div>
</section>	