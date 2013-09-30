
<section id="work" class="fullscreen"  >
	<div class="work-nav icon">
	    <span id="prevControl">p </span>
	    <span id="nextControl">n</span>
	</div>	
	
	<div class="cycle-slideshow" data-cycle-fx="scrollHorz" data-cycle-slides="> div" data-cycle-timeout="0" data-cycle-prev="#prevControl" data-cycle-next="#nextControl" height="100%">
	
		   <?php foreach($data->children()->visible() as $work): ?>
  			   <?php if($work->hero() !='' && $work->hero() !='0'): ?>  		
  			 	 <?php $image = $work->images()->find( html($work->hero()) ) ?>
				 
			   	<div class="case">
					<a class="case-link icon" href="<?php echo $work->url() ?>" >+</a>
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