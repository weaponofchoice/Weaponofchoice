
<?php if($page->hasImages()): ?>
<div class="cycle-slideshow">
	 <?php foreach($page->images() as $image): 
		  if(strpos($image, '@2x')===false){
		  ?>
	 
		  <img class="archive-img"  src="<?php echo $image->url() ?>" >
	  
	  <?php
	  	
	  }; endforeach ?> 
</div>
	<?php endif ?>		



	
