<?php
$class = "";


$allWork = array ();
$workSort = array ();

foreach(page('work')->children() as $project) {
	array_push($allWork, $project->modified('Y/m/d - H:i'). " - " .$project );
}
rsort($allWork);

for ($i=0; $i < 5; $i++) { 
	$x = explode(" - ", $allWork[$i]);
	array_push($workSort, $x[2] );
}

?>
<div class="recent-upload-project">
	<div class="head cf">
		<p><strong>Recent Upload</strong></p>
	</div>
	<div class="projects">
		<?php
		for ($i=0; $i < 5; $i++) { 
		
			foreach(page('work')->children() as $project){
				if ($project == $workSort[$i]) {
				
					if ($i==0) { $class = "first"; }
					else { $class = ""; }
				
		?>
					<a class="a-recent" href="<?php echo $project->url() ?>" title="<?= $project->title()->html() ?>">
						<div class="project <?= $class ?>">
							<p><strong><?= $project->title()->html() ?></strong></p>
							<p class="cut-word"><?= $project->Content1()->excerpt(80) ?></p>
						</div>
					</a>
		<?php 
				}
			}// end foreach
		}// end for
		?>
	</div>
</div>