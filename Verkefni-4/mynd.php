<html>
  
  <head>
    <?php require($_SERVER['DOCUMENT_ROOT'] . "/2T/0506992429/GSO2B3U/Verkefni-4/includes/head.php");
    require($_SERVER['DOCUMENT_ROOT'] . "/2T/0506992429/GSO2B3U/Verkefni-4/includes/title.php"); ?>
    <title>Verkefni 4 - <?php echo "{$title}"; ?></title>
  </head>
  
  <body>
      <?php		
      require($_SERVER['DOCUMENT_ROOT'] . "/2T/0506992429/GSO2B3U/Verkefni-4/includes/images.php");
      
      foreach($indexImages as $key => $value): ?>
      <div class="birtamynd">
       <?php if($_GET["id"] == $key): ?>
        <img src="<?= $indexImages[$key]['img-full_url']; ?>">
        <div class="birtamynd-info">
          <h1><?= $indexImages[$key]['img-name']; ?></h1>
          <h2>Staðsetning: <?= $indexImages[$key]['img-location']; ?></h2>
          <p>Upplausn: <b><?= $indexImages[$key]['img-res']; ?></b></p>
          <p><?= $indexImages[$key]['img-desc']; ?></p>
        </div>
        <?php endif; ?>
      </div>
      <?php endforeach; ?>
  </body>
</html>