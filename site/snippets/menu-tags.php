<?php 
if (empty($_GET["tag"])) {
  $_GET["tag"] = "WebStudio1";
}

// Check active
$active_ws1 = "";
$active_ws2 = "";
$active_ui  = "";
$active_wp  = "";
$active_ws3 = "";
$active_aw  = "";
if 		($_GET["tag"] == "WebStudio1")  { $active_ws1 	= "active"; }
elseif 	($_GET["tag"] == "WebStudio2")  { $active_ws2 	= "active"; }
elseif 	($_GET["tag"] == "UI")			{ $active_ui 	= "active"; }
elseif 	($_GET["tag"] == "WebPro") 		{ $active_wp 	= "active"; }
elseif 	($_GET["tag"] == "WebStudio3")  { $active_ws3 	= "active"; }
elseif 	($_GET["tag"] == "WebAdvance")  { $active_aw 	= "active"; }

?>

<div class="menu-tags">
	<div class="container">
		<ui class="menu-tags-ui cf">
			<li class="<?= $active_ws1 ?>">
				<a href="?tag=WebStudio1" title="Web Studio I Project" alt="Web Studio I Project">
					<p class="amount-page"><strong>40</strong></p>
					<p class="name-tag">Web Studio I <br>Project</p>
				</a>
			</li>
			<li class="<?= $active_ws2 ?>">
				<a href="?tag=WebStudio2" title="Web Studio II Project" alt="Web Studio II Project">
					<p class="amount-page"><strong>40</strong></p>
					<p class="name-tag">Web Studio II <br>Project</p>
				</a>
			</li>
			<li class="<?= $active_ui ?>">
				<a href="?tag=UI" title="User Interface Project" alt="User Interface Project">
					<p class="amount-page"><strong>40</strong></p>
					<p class="name-tag">User Interface <br>Project</p>
				</a>
			</li>
			<li class="<?= $active_wp ?>">
				<a href="?tag=WebPro" title="Web Programming Project" alt="Web Programmig Project">
					<p class="amount-page"><strong>40</strong></p>
					<p class="name-tag">Web Programming <br>Project</p>
				</a>
			</li>
			<li class="<?= $active_ws3 ?>">
				<a href="?tag=WebStudio3" title="Web Studio III Project" alt="Web Studio III Project">
					<p class="amount-page"><strong>40</strong></p>
					<p class="name-tag">Web Studio III <br>Project</p>
				</a>
			</li>
			<li class="<?= $active_aw ?>">
				<a href="?tag=WebAdvance" title="Advance Web Project" alt="Advance Web Project">
					<p class="amount-page"><strong>40</strong></p>
					<p class="name-tag">Advance Web <br>Project</p>
				</a>
			</li>
		</ui>
	</div>

</div>