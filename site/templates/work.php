<?php snippet('header') ?>

  <main class="main container work-page" role="main">

    <h1 class="work-title"><?php echo $page->title()->html() ?></h1>


    <div class="work-by">
      <strong>By </strong>

                  <?php
                    $stu_id = $page->studentid();
                    $arrStu_id = explode(", ", $stu_id);

                    for ($i=0; $i < count($arrStu_id); $i++) { 
                      $path = "profile/" . $arrStu_id[$i];
                      

                      foreach(page('profile')->children() as $profile){
                        if ($profile == $path) {
                          if ($i==0) {
                            echo $profile->fname();
                          }
                          else {
                            echo ", " . $profile->fname();
                          }

                          
                        }
                      }
                    }
                  ?>
    </div>

    <div class="text">
      <div class="work-content">
        <b>Description</b>
        <div class="content-text">
          <?php echo $page->content1()->kirbytext() ?>
        </div>
        
      </div> 

      <?php foreach($page->images()->sortBy('sort', 'asc')->limit(3) as $image): ?>
      <figure>
        <img src="<?php echo $image->url() ?>" alt="<?php echo $page->title()->html() ?>">
      </figure>
      <?php endforeach ?>

      <div class="work-content">
        <div class="content-text">
          <?php echo $page->content2()->kirbytext() ?>
      </div>
        
      </div> 
    </div>

    <div class="work-end">
      <img src="<?php echo url('assets/images/end.png') ?>">
    </div>
  </main>
  
  <?php snippet('profile') ?>



<?php snippet('footer') ?>