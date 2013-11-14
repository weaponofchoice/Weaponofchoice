
<section id="work" class="fullscreen"  >
	<div class="work-nav icon">
	    <span id="prevControl">p </span>
	    <span id="nextControl">n</span>
	</div>	

	
		   <?php foreach($data->children()->visible() as $work): ?>
  			   <?php if($work->header() !='' && $work->header() !='0'): ?>  		
  			 	 <?php $image = $work->images()->find( html($work->header()) ) ?>
			
						
			<?php endif ?>
		   <?php endforeach ?>
		

		   
		   <div class="cycle-slideshow" data-cycle-fx="scrollHorz" data-cycle-slides="> div" data-cycle-timeout="0" data-cycle-prev="#prevControl" data-cycle-next="#nextControl">
			   <?php foreach($data->children()->visible() as $work): ?>
	  			   <?php if($work->header() !='' && $work->header() !='0'): ?>  		
	  			 	 <?php $image = $work->images()->find( html($work->header()) ) ?>
					 
					<div class="work-cases work_<?php echo $work->num() ?>">
						 <a class="work-link" href="<?php echo $work->url() ?>"></a>
					 </div>
					 <script>
		 		 		$(document).ready(function(){
		 		 			$('.work_<?php echo $work->num() ?>').backstretch("<?php echo $image->url() ?>");
							$('.work_<?php echo $work->num() ?>').css({"background" :"#<?php echo $work->background() ?>"});
							
					
					
		 					//$('.backstretch').css({'width':'100%', 'height':'100%', 'overflow':'hidden'}); //Dirty backstretch Hack
		 					//$('.case-container').find('img').addClass('succes').css({'width':'100%', 'height':'100%'}); //Dirty backstretch Hack
		 					//$('.succes').css({'min-width':'100%', 'min-height':'100%'}) //Dirty backstretch Hack
		 		 		})
	 		 		</script>	
				<?php endif ?>
			   <?php endforeach ?>
		   </div>
		  
	 
</section>
 <div class="clearfix"></div>