<?php

  session_start();
  if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] != 'Auth Session') {
    header('Location: http://tsuts.tskoli.is/2t/0506992429/GSO2B3U/Verkefni-5/session.php');
    exit;
  } 
  $visits =  0;
	if (isset($_COOKIE["visits"])) {
		$visits = (int)$_COOKIE["visits"];
	} 
	setcookie("visits", $visits + 1); 
?>
<html>
  
	<head>
    <?php require($_SERVER['DOCUMENT_ROOT'] . "/2T/0506992429/GSO2B3U/Verkefni-5/includes/head.php");
					require($_SERVER['DOCUMENT_ROOT'] . "/2T/0506992429/GSO2B3U/Verkefni-5/includes/title.php"); ?>
    <title><?php echo "{$title}"; ?></title>
	</head>
		
	<body>
    
    <div class="logout">
    <a href="logout.php">Útksrá</a>
    </div>
    
		<section class="group">
			<article class="col-2-3"> 
        
				<div class><?php if($visits > 1): ?>
          <h1>Þú aftur ?</h1>
          <?php endif; ?>
          
        </div>
				
				<div class="myndir">
          
          <?php require($_SERVER['DOCUMENT_ROOT'] . "/2T/0506992429/GSO2B3U/Verkefni-5/includes/images.php"); ?>
          <?php foreach($images as $key => $value): ?>
          <a href="mynd.php?id=<?= $key ?>"><img src="<?= $images[$key]['img_url']; ?>"></a>
          <?php endforeach; ?>
		    </div>
        
			</article>
      
      <!-- Nýlega skoðaðar myndir -->
      
      <div class="cookimages">
        <?php
     
          echo "<br> Nýlega skoðaðar myndir: <hr>";
          for ($x = 1; $x <= 4; $x++) {
            if(isset($_COOKIE["img$x"])) {
              $mynd = $_COOKIE["img$x"];
              echo "<img src=\"{$mynd}\">"; 
            }
          }
        ?>
      </div>
      
  </body>

	<footer>
		<?php require($_SERVER['DOCUMENT_ROOT'] . "/2T/0506992429/GSO2B3U/Verkefni-5/includes/footer.php"); ?>
	</footer>
</section>
		
</html>