<?php snippet('header') ?>

<div class="hero_unit">
	<div class="headerbg">
	</div>
	<?php if($page->hero() !='' && $page->hero() !='0'): ?>
	<?php $image = $page->images()->find( html($page->hero()) ) ?>
	<div class="headerimg">
		<div class="case-container " style="background-image:url('<?php echo $image->url() ?>');background-position: left; background-repeat: no-repeat; background-size: cover; -webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;">
		</div>
	</div>
	<?php endif ?>
	
</div>

<section id="body" class="normal">
	<div class="container_3">
		<h2 class="work-title grid_1 indent"><?php echo html($page->title()) ?></h2>
		
		<div class="clear"></div>
		
		<blockquote class="grid_1 indent">
			<?php echo multiline($page->quote()) ?>
		</blockquote>
		<div class="clear"></div>
		<p class="grid_1 indent copy01">
			<?php echo multiline($page->copy01()) ?>
		</p>
		
	</div>
	<div class="clear"></div>
	
	
	
	
	<div class="container_3">
		<?php echo kirbytext($page->midden()) ?>
		
	</div>
	
</section>

<?php if($page->onder() !='' && $page->onder() !='0'): ?>
<?php $image = $page->images()->find( html($page->onder()) ) ?>

<section id="onder" class="fullscreen" style="background-image:url('<?php echo $image->url() ?>');background-position: center; background-repeat: no-repeat; background-size: cover; -webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;">
</section>

<?php endif ?>

<section id="meta" class="normal">
	<div class="container_3">
		<div class="grid_1 indent meta">
		
			<?php echo kirbytext($page->meta()) ?>
		
	    </div>
	</div>
</section>

<?php snippet('footer-work') ?>