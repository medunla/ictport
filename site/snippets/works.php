
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

        $stu_id = $project->studentid();
        $arrStu_id = explode(", ", $stu_id);
        $path = "profile/" . $arrStu_id[0];
        $profile_pic = "profile/" . $arrStu_id[0] . "/profile.jpg";
        $fname;
        foreach(page('profile')->children() as $profile){
          if ($profile == $path) {
              $fname = $profile->fname()->short(14);
          }
        }
  ?>
    <li class="<?= $classli ?>">
      <?php if($image = $project->images()->sortBy('sort', 'asc')->first()): ?>
        <a href="<?php echo $project->url() ?>">
          <img src="<?php echo $image->url() ?>" alt="<?php echo $project->title()->html() ?>" >
        </a>
      <?php endif ?>
      <div>
        <p class="title">
          <strong><a href="<?php echo $project->url() ?>"><?php echo $project->title()->html() ?></a></strong>
        </p>
        <p class="text"><?php echo $project->Content1()->short(95) ?></p>
        <div class="profile cf">
          <img class="img" src="<?php echo url($profile_pic) ?>" alt="<?= $fname ?>">
          <p><strong><?= $fname ?></strong></p>
          <?php
            $url = $project->url();
          // $url = "panupat.in.th";
          ?>
          <button type="button" class="share_btn" onclick="shareFB('<?= $url ?>')">
            <img  src="<?php echo url('assets/images/facebook_button.svg') ?>" alt="Share Facebook">
          </button>
          
        </div>
      </div>
      
      
    </li>
  <?php $i++;} ?>
  <?php endforeach ?>
</ul>
