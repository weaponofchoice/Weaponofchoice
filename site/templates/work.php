<?php snippet('header') ?>

<script>
$(document).ready(function(){
//$(document).ready(function(){
	$('header').removeClass().addClass('bg-transparent  secondary');
//	$('header').addClass('work secondary');
	
	
})
	
//})
</script>

<div class="hero_unit">
	<div class="headerbg" style="background :#<?php echo $page->background() ?>">
	</div>
	<?php if($page->hero() !='' && $page->hero() !='0'): ?>
	<?php $image = $page->images()->find( html($page->hero()) ) ?>
	<div class="headerimg">
		<img src="<?php echo $image->url() ?>" class="img-responsive">
	</div>
	
	
	
	<?php endif ?>
	
</div>


<div class="container_12">

	<section id="body" class="normal">
	
			<div class="grid_5">
				<h2 class="work-title  "><?php echo html($page->title()) ?></h2>
		
				<div class="clear"></div>
		
				<blockquote class="no-margin ">
					<?php echo multiline($page->quote()) ?>
				</blockquote>
				<div class="clear"></div>
				<p class="  ">
					<?php echo multiline($page->copy01()) ?>
				</p>
			</div>
	
		<div class="clear"></div>
	
	
	
	
		
			<?php echo kirbytext($page->midden()) ?>
		
	
	</section>

	<?php if($page->onder() !='' && $page->onder() !='0'): ?>
	<?php $image = $page->images()->find( html($page->onder()) ) ?>

	<section id="onder">
		<img src="<?php echo $image->url() ?>" class="img-responsive">
	</section>

	<?php endif ?>

	<section id="meta" class="normal">
		
			<div class="grid_5  meta">
		
				<?php echo kirbytext($page->meta()) ?>
		
		    </div>
		
	</section>
</div>
<?php snippet('footer-work') ?>