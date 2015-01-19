<ui class="menu-tags">
	<form action="" method="GET">
		<li>
			<button type="submit" name="tag" value="all">all</button>
		</li>
		<?php foreach(page('projects')->children() as $project): ?>
			<li>
				<button type="submit" name="tag" value="<?php echo $project->tags() ?>"><?php echo $project->tags() ?></button>
			</li>
		<?php endforeach ?>
	</form>
</ui>