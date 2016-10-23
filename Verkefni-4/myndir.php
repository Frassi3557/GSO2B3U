<html>
		
	<head>
    <?php require($_SERVER['DOCUMENT_ROOT'] . "/2T/0506992429/GSO2B3U/Verkefni-4/includes/head.php");
    			require($_SERVER['DOCUMENT_ROOT'] . "/2T/0506992429/GSO2B3U/Verkefni-4/includes/title.php"); ?>
    <title>Verkefni 4 - <?php echo "{$title}"; ?></title>
	</head>
		
	<body>
		<?php require($_SERVER['DOCUMENT_ROOT'] . "/2T/0506992429/GSO2B3U/Verkefni-4/includes/header.php"); ?>
		<section class="group">
		<div class="myndir">
			<?php require($_SERVER['DOCUMENT_ROOT'] . "/2T/0506992429/GSO2B3U/Verkefni-4/includes/images.php"); ?>
			<img src="<?= $images[0]['img_url']; ?>" alt="Random image">
			<img src="<?= $images[1]['img_url']; ?>" alt="Random image">
			<img src="<?= $images[2]['img_url']; ?>" alt="Random image">
			<img src="<?= $images[3]['img_url']; ?>" alt="Random image">
		</div>
	</body>
	
	<footer>
		<?php require($_SERVER['DOCUMENT_ROOT'] . "/2T/0506992429/GSO2B3U/Verkefni-4/includes/footer.php"); ?>
	</footer>
	</section>
</html>