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
    <form action="includes/process_csv.php" method="post">
    <div class="form">
      <p>Titill:
      <input type="text" name="title" placeholder="Picture" required></p>
			<p>Url: <input type="text" name="url" placeholder="http://website.com/image.jpg" required></p>
    </div>
    <div class="radio">
      <p><input type="submit" value="Hlaða inn mynd"></p>
    </form>
    
    <hr>
    
    <?php
    require($_SERVER['DOCUMENT_ROOT'] . "/2T/0506992429/GSO2B3U/Verkefni-6/includes/process_csv.php");
    foreach($users as $key => $value): ?>
    <div class="image-text">
    <h1><?php echo '"' . ucfirst($users[$key]['name']) . '"'; ?></h1>
    <img class="image" src="<?= $users[$key]['url']; ?>">
    </div>
    <?php endforeach; ?>
    </section>
    <section>
    <footer><?php require($_SERVER['DOCUMENT_ROOT'] . "/2T/0506992429/GSO2B3U/Verkefni-6/includes/footer.php"); ?></footer>
		</section>
  </body>
</html>