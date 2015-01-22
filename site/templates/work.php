<?php snippet('header') ?>
<div class="container">
  <main class="main" role="main">

    <h1 class="work-title"><?php echo $page->title()->html() ?></h1>
    <div class="work-by"><b>Project by</b> <?php echo $page->fullname() ?></div>

    <!-- <ul class="meta cf">
      <li><b>Year:</b> <time datetime="<?php echo $page->date('c') ?>"><?php echo $page->date('Y', 'year') ?></time></li>
      <li><b>Tags:</b> <?php echo $page->tags() ?></li>
    </ul> -->

    <div class="text">
      <div class="work-content">
        <b>Description</b>
        <div class="content-text">
          <?php echo $page->content1()->kirbytext() ?>
        </div>
        
      </div> 

      <?php foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
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

    <nav class="nextprev cf" role="navigation">
      <?php if($prev = $page->prevVisible()): ?>
      <a class="prev" href="<?php echo $prev->url() ?>">&larr; previous</a>
      <?php endif ?>
      <?php if($next = $page->nextVisible()): ?>
      <a class="next" href="<?php echo $next->url() ?>">next &rarr;</a>
      <?php endif ?>
    </nav>


  </main>
</div>
<!-- footer profile -->
<div class="profile-wrap">
  <div class="container">
    <div class="profile-img"></div>
  </div>
</div>
<?php snippet('footer') ?>