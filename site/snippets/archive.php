<section id="archive" class="normal">



	
	
 
	
				
	<div class="container_3 mosaicflow" id="container" data-min-item-width="400">
		   <?php foreach($data->children()->visible() as $project): ?>
			<div class="mosaicflow__item">
			<?php 
			 $first = true;
			 foreach($project->images()->shuffle() as $image): 
	     		  if(strpos($image, '@2x')===false //&& strpos($image, '@color')===false// 
				  					){
					  if ($first){ ?>
						  
					 <a class=" des various archive-img first <?php echo $project->tinyurl() ?>" href="<?php echo $image->url() ?>" rel="<?php echo $project->tinyurl() ?>" ><img src="<?php echo $image->url() ?>" class="img-responsive desaturate" alt="<?php echo html($project->title()) ?>" /></a>
					 
					 <?php
						$first = false;
						}
						else{ ?>
			   	  
			   		   <a class="various archive-img hidden <?php echo $project->tinyurl() ?>" href="<?php echo $image->url() ?>" rel="<?php echo $project->tinyurl() ?>" ></a>
					   
			    	  <?php
  					  	 }
			    	  }; endforeach ?> 
					 
		   </div>
	  	 
		  
		   <?php endforeach ?>
		
	  </div>
	  
	  
  	 
		  
	  <div class="clearfix"></div>
</section>	



