<h2>x</h2>

<?php 
if (empty($_GET["tag"])) {
  $_GET["tag"] = "all";
}

?>




<ul class="teaser cf">
  <?php foreach(page('projects')->children() as $project): ?>
  <?php if ($project->tags() == $_GET["tag"] || $_GET["tag"] == "all") { ?>
    <li>
      <?php if($image = $project->images()->sortBy('sort', 'asc')->first()): ?>
        <a href="<?php echo $project->url() ?>">
          <img src="<?php echo $image->url() ?>" alt="<?php echo $project->title()->html() ?>" >
        </a>
      <?php endif ?>
      <h3><a href="<?php echo $project->url() ?>"><?php echo $project->title()->html() ?></a></h3>
      <p><?php echo $project->text()->excerpt(80) ?> <a href="<?php echo $project->url() ?>">read&nbsp;more&nbsp;→</a></p>
      
    </li>
  <?php } ?>
  <?php endforeach ?>
</ul>
