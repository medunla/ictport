<?php 
if (empty($_GET["tag"])) {
  $_GET["tag"] = "outdoor";
}

?>

<div class="menu-tags">
	<div class="container">
		<ui class="menu-tags-ui cf">
			<form action="" method="GET">
				<?php foreach(page('projects')->children() as $project): ?>
				<?php 
					$active = "";
					if ($_GET["tag"] == $project->tags()) {
						$active = "active";
					}
				?>
					<li>
						<button type="submit" class="tag-button <?= $active ?>" name="tag" value="<?php echo $project->tags() ?>">
							<!--<p><?= page('projects')->children()->count() ?></p>-->
							<p class="amount-page"><strong>40</strong></p>
							<p class="name-tag"><?= $project->tags() ?></p>
						</button>
					</li>
				
				<?php endforeach ?>
			</form>
		</ui>
	</div>

</div>