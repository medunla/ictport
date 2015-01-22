<?php
$i = 0;
$class = "";
?>
<div class="recent-upload-project">
	<div class="head cf">
		<p><strong>Recent Upload</strong></p>
	</div>
	<div class="projects">
		<?php foreach(page('work')->children()->limit(5) as $project):

			if ($i==0) { $class = "first"; }
			else { $class = ""; }
				
		?>
			<a class="a-recent" href="<?php echo $project->url() ?>" title="<?= $project->title()->html() ?>">
				<div class="project <?= $class ?>">
					<p><strong><?= $project->title()->html() ?></strong></p>
					<p class="cut-word"><?= $project->Content1()->excerpt(80) ?></p>
				</div>
			</a>
		<?php $i++; endforeach ?>
	</div>
</div>