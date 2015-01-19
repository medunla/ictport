<style type="text/css">
.person-card{
	background: pink;
	margin-bottom: 10px;
}
</style>
<!-- ************************** -->
<h1>TEST</h1>
<!-- <div
  class="fb-like"
  data-send="true"
  data-width="450"
  data-show-faces="true">
</div> -->
<ul class="teaser cf">
  <?php foreach(page('profile')->children() as $person): ?>
  	<div class="person-card">
  	<?php 
  		echo "URL = ".$person->url(); 
  		echo "<br>";
  		echo "IMG = ".$person->images();
  	?>
  	
  	<button onclick="shareFB('www.panupat.in.th')">PRESS SHARE</button>
  	</div>
  <?php endforeach ?>
</ul>


<?php echo js('assets/js/fb-share.js') ?>