<?php
session_start();
// if session variable not set, redirect to login page
if (!isset($_SESSION['authenticated'])) {
 header('Location: http://tsuts.tskoli.is/2t/1811992029/GSO_onn3/verkefni5/session.php');
 exit;
} 
?>

<?php  
 if(isset($_GET['id'])){
   $mynd = "";
   $id = $_GET["id"];
   foreach ($_GET as $key => $value) {
     $algo = $key + 4;
     if($id > 4) {
       $img_url = "http://tsuts.tskoli.is/2t/0506992429/pictures/background_$algo.jpg";
       echo $algo;
       echo $img_url;
       setcookie("img$algo", $img_url);
     }
     else {
       $img_url = "http://tsuts.tskoli.is/2t/0506992429/pictures/background_$key.jpg";
       setcookie("img$key", $img_url);
     }
   }
 }
?> 
<html>
  
  <head>
    <?php require($_SERVER['DOCUMENT_ROOT'] . "/2T/0506992429/GSO2B3U/Verkefni-5/includes/head.php");
    require($_SERVER['DOCUMENT_ROOT'] . "/2T/0506992429/GSO2B3U/Verkefni-5/includes/title.php"); ?>
    <title><?php echo "{$title}"; ?></title>
  </head>
  
  <body> 
      <?php		
      require($_SERVER['DOCUMENT_ROOT'] . "/2T/0506992429/GSO2B3U/Verkefni-5/includes/images.php");
      
      foreach($images as $key => $value): ?>
      <div class="birtamynd">
       <?php if($_GET["id"] == $key): ?>
        <img src="<?= $images[$key]['img_url']; ?>">
        <?php endif; ?>
      </div>
      <?php endforeach; ?>
  </body>
</html>