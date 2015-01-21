<div class="recent-upload-project">
	<div class="head cf">
		<p>Recent Upload</p>
		<p>21 January 2015</p>
	</div>
	<div class="projects">
		<?php foreach(page('work')->children()->limit(5) as $project): ?>
			<a href="<?php echo $project->url() ?>" title="<?= $project->title()->html() ?>">
				<div class="project">
					<p><strong><?= $project->title()->html() ?></strong></p>
					<p class="cut-word"><?= $project->text()->excerpt(80) ?></p>
				</div>
			</a>
		<?php endforeach ?>
	</div>
</div>