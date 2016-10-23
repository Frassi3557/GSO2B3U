<?php $currentPage = basename($_SERVER['SCRIPT_FILENAME']); ?>
<header>
	<?php include($_SERVER['DOCUMENT_ROOT'] . "/2T/0506992429/GSO2B3U/Verkefni-4/includes/images.php"); ?>
	<img class="header-pic" src="<?= $headerImages[0]['img_url']; ?>" alt="Header image">
	<h1 class="header-title"><?= $headerImages[0]['title'] ?></h1>
</header>
<div class="header-nav">
	<nav>
		<li><a href="index.php"<?php if ($currentPage == 'index.php') {echo 'id="here"';}?>>Home</a></li>
		<li><a href="myndir.php"<?php if ($currentPage == 'myndir.php') {echo 'id="here"';}?>>Myndir</a></li>
		<li><a href="upload.php"<?php if ($currentPage == 'upload.php') {echo 'id="here"';}?>>+</a></li>
	</nav>
</div>