
<section id="work" class="fullscreen"  >
	<div class="work-nav">
	    <span id="prevControl">Prev </span>
	    <span id="nextControl"> Next</span>
	</div>	
	
	<div class="cycle-slideshow" data-cycle-fx="scrollHorz" data-cycle-slides="> div" data-cycle-timeout="0" data-cycle-prev="#prevControl" data-cycle-next="#nextControl" height="100%">
	
		   <?php foreach($data->children()->visible() as $work): ?>
  			   <?php if($work->hero() !='' && $work->hero() !='0'): ?>  		
  			 	 <?php $image = $work->images()->find( html($work->hero()) ) ?>
				 <a class="case-link" href="<?php echo $work->url() ?>" >more</a>
			   	<div class="case">
					
			   		<div class="case-container container_3 " style="background-image:url('<?php echo $image->url() ?>');background-position: center; background-repeat: no-repeat; background-size: cover; -webkit-background-size: cover;
				-moz-background-size: cover;
				-o-background-size: cover;">
					
						
			   		</div>
			   	</div>  
			 
			 
						
						
			<?php endif ?>
		   <?php endforeach ?>
		
	   </div>
		   
		
		  
	 
</section>
 <div class="clearfix"></div>