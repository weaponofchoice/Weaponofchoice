<section id="projects">
 <h1><?php echo html($data->title()) ?></h1>
 <?php echo kirbytext($data->text()) ?>

 <ul>
  <?php foreach($data->children()->visible() as $project): ?>
  <li>
    <figure>
		<a href="<?php echo $project->url() ?>">
     	   <img src="<?php echo $project->images()->first()->url() ?>" alt="<?php echo html($project->title()) ?>" />
	   </a>
    </figure>
  </li>
  <?php endforeach ?>
 </ul>

</section>