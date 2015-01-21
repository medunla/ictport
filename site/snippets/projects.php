
<?php 
if (empty($_GET["tag"])) {
  $_GET["tag"] = "outdoor";
}

?>


<ul class="container teaser cf">
  <?php foreach(page('projects')->children() as $project): ?>
  <?php if ($project->tags() == $_GET["tag"] || $_GET["tag"] == "all") { ?>
    <li>
      <?php if($image = $project->images()->sortBy('sort', 'asc')->first()): ?>
        <a href="<?php echo $project->url() ?>">
          <img src="<?php echo $image->url() ?>" alt="<?php echo $project->title()->html() ?>" >
        </a>
      <?php endif ?>
      <div>
        <p class="title"><strong>
          <a href="<?php echo $project->url() ?>"><?php echo $project->title()->html() ?></a>
        </strong></p>
        <p class="text"><?php echo $project->text()->excerpt(80) ?></p>
        <div class="profile cf">
          <img src="" alt="">
          <p><strong>medunla</strong></p>
          
        </div>
      </div>
      
      
    </li>
  <?php } ?>
  <?php endforeach ?>
</ul>
