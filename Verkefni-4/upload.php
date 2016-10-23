<html>
		
	<head>
    <?php require($_SERVER['DOCUMENT_ROOT'] . "/2T/0506992429/GSO2B3U/Verkefni-4/includes/head.php");
					require($_SERVER['DOCUMENT_ROOT'] . "/2T/0506992429/GSO2B3U/Verkefni-4/includes/title.php"); ?>
    <title>Verkefni 4 - <?php echo "{$title}"; ?></title>
	</head>
		
	<body>
  <?php
    // define variables and set to empty values
    $urlErr = $titleErr = $locationErr = $resErr = $descErr = "";
    $url = $title = $location = $res = $desc = $display = "";
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (empty($_POST["url"])) {
        $urlErr = "Url is required";
      } else {
        $url = test_input($_POST["url"]);
      }
      
      if (empty($_POST["title"])) {
        $titleErr = "title is required";
      } else {
        $title = test_input($_POST["title"]);
      }
      
      if (empty($_POST["desc"])) {
        $descErr = "description is required";
      } else {
        $desc = test_input($_POST["desc"]);
      }
      
      $value = $_POST['display'];  
      if ($value == "yes") {          
        $display = '1';      
      }
      else {
        $display = '0'  ;
      } 
    }
    
    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
  ?>
  <section>
		<?php require($_SERVER['DOCUMENT_ROOT'] . "/2T/0506992429/GSO2B3U/Verkefni-4/includes/header.php");
    require($_SERVER['DOCUMENT_ROOT'] . "/2T/0506992429/GSO2B3U/Verkefni-4/includes/images.php"); ?>
    <form action="process.php" method="post">
    <div class="form">
      
      Url: <input type="text" name="url" placeholder="http://website.com/image.jpg" required>
      <span class="error"><?php echo $urlErr;?></span>
      <br>
      Titill:
      <input type="text" name="title" placeholder="Picture" required>
      <span class="error"><?php echo $titleErr;?></span>
      <br>
      <br>
      Lýsing: <br>
      <textarea name="desc" rows="5" cols="40" placeholder="A picture of earth" required></textarea>
      <br><span class="error"><?php echo $descErr;?></span><br><br>
      
    </div>
    <div class="radio">
      Birta ?<br>
      <input type="radio" name="display" value="yes" checked>Já<br>
      <input type="radio" name="display" value="no">Nei<br><br>
    </div>
      <input type="submit" value="Staðfesta">

    </form>
  </body>

	<footer>
		<?php require($_SERVER['DOCUMENT_ROOT'] . "/2T/0506992429/GSO2B3U/Verkefni-4/includes/footer.php"); ?>
	</footer>
  </section>
		
</html>