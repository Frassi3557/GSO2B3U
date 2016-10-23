<html>
		
	<head>
    <?php require($_SERVER['DOCUMENT_ROOT'] . "/2T/0506992429/GSO2B3U/Verkefni-4/includes/head.php");
    			require($_SERVER['DOCUMENT_ROOT'] . "/2T/0506992429/GSO2B3U/Verkefni-4/includes/title.php"); ?>
    <title>Verkefni 4 - <?php echo "{$title}"; ?></title>
	</head>
		
	<body>
		<?php require($_SERVER['DOCUMENT_ROOT'] . "/2T/0506992429/GSO2B3U/Verkefni-4/includes/header.php");
          require($_SERVER['DOCUMENT_ROOT'] . "/2T/0506992429/GSO2B3U/Verkefni-4/includes/images.php"); ?>
		<section class="group">
		<?php 
      $url = $_POST['url'];
      $titill = $_POST['title'];
      $desc = $_POST['desc'];
      
      if($_POST['display'] == 'yes'): ?>
      
      <img src="<?= $url ?>">
      <?php endif; ?>
      <h1><?= $titill ?></h1>
      <p><?= $desc ?></p>
      
      
      
      <?php
        if($_POST['display'] == 'yes') {
          $display = '1';
        }
        else {
          $display = '0'; 
        }
        
        $mynd = array(
          'img-thumb_url' => $url,
          'img-full_url'  => $url,
          'img-name'      => $title,
          'img-desc'      => $desc,
          'display'       => $display
      ); ?>
      
	</body>
	
	<footer>
		<?php require($_SERVER['DOCUMENT_ROOT'] . "/2T/0506992429/GSO2B3U/Verkefni-4/includes/footer.php"); ?>
	</footer>
	</section>
</html>