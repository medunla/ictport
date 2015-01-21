
<?php 
if (empty($_GET["tag"])) {
  $_GET["tag"] = "WebStudio1";
}
$i=1;
$classli = "";
?>


<ul class="container teaser cf">
  <?php foreach(page('work')->children() as $project): ?>
  <?php if ($project->tags() == $_GET["tag"] || $_GET["tag"] == "all") { 
        if ($i%3==1 || $i==1) { $classli = "first"; }
        else { $classli = ""; }
  ?>
    <li class="<?= $classli ?>">
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
          <div class=""><button>btn_face</button></div>
        </div>
      </div>
      
      
    </li>
  <?php $i++;} ?>
  <?php endforeach ?>
</ul>
