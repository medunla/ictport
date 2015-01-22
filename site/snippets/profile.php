<?php

$stu_id = $page->studentid();
$arrStu_id = explode(", ", $stu_id);

for ($i=0; $i < count($arrStu_id); $i++) { 
	$path = "profile/" . $arrStu_id[$i];
	$img = "content/profile/" . $arrStu_id[$i] . "/profile.jpg";
	foreach(page('profile')->children() as $profile){
		if ($profile == $path) {
?>
			<div class="profile cf">
				<div class="container cf">
					<figure class="profile-pic cf">
						<img src="<?php echo url($img) ?>">
					</figure>
					<div class="profile-text">
						<p class="name"><strong><?= $profile->fname() ?> <?= $profile->lname() ?> <?= $profile->studentid() ?></strong></p>
						<p><strong>WEB AND INTERACTIVE MEDIA #9</strong></p>
						<br>
						<p><strong>BIOGRAPHY</strong></p>
						<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?= $profile->biography() ?></p>
						<br>
						<p><strong>CONTACT</strong></p>
						<p><a href="https://www.facebook.com/<?= $profile->facebook() ?>" alt="facebook.com/<?= $profile->facebook() ?>">facebook.com/<?= $profile->facebook() ?></a> | <?= $profile->mail() ?> | <?= $profile->phonenumber() ?></p>
					</div>
				</div>
			</div>
<?php
		}
	}
}


?>