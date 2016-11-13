<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
      require($_SERVER['DOCUMENT_ROOT'] . "/2T/0506992429/GSO2B3U/Verkefni-6/includes/head.php");
      require($_SERVER['DOCUMENT_ROOT'] . "/2T/0506992429/GSO2B3U/Verkefni-6/includes/title.php"); 
    ?>
    <title><?php echo "{$title}"; ?></title>
  </head>
  <body>
    <?php require($_SERVER['DOCUMENT_ROOT'] . "/2T/0506992429/GSO2B3U/Verkefni-6/includes/header.php"); ?>
    <section>
    <form action="includes/process_sql.php" method="post">
    <div class="form">
      <p>Titill:
      <input type="text" name="title" placeholder="Picture" required></p>
			<p>Url: <input type="text" name="url" placeholder="http://website.com/image.jpg" required></p>
			<p>Lýsing:
			<input type="text" name="description" placeholder="A picture of a cat"></p>
    </div>
      <p><input type="submit" value="Hlaða inn mynd"></p>
    </form>
    
    <hr>
    
    <?php
    require($_SERVER['DOCUMENT_ROOT'] . "/2T/0506992429/GSO2B3U/Verkefni-6/includes/process_sql.php");
    require($_SERVER['DOCUMENT_ROOT'] . "/2T/0506992429/GSO2B3U/Verkefni-6/database/dbcon.php");
    require($_SERVER['DOCUMENT_ROOT'] . "/2T/0506992429/GSO2B3U/Verkefni-6/database/query.php");
    ?>
    <div class="image-text">
			<?php foreach($images as $key => $value): ?>
    	<h1><?php echo $images[$key][0]; ?></h1>
    	<img class="image" src="<?= $images[$key][1]; ?>">
			<p class="description"><?php echo $images[$key][2]; ?></p>
			<?php endforeach; ?>
    </div>

    </section>
    <section>
    <footer><?php require($_SERVER['DOCUMENT_ROOT'] . "/2T/0506992429/GSO2B3U/Verkefni-6/includes/footer.php"); ?></footer>
		</section>
  </body>
</html>