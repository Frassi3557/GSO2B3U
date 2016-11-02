<?php
$error = '';
if (isset($_POST['login'])) {
  session_start();
  if ($_POST["username"] == "admin" && $_POST["pwd"] == "1234") {
    $_SESSION['authenticated'] = 'Auth Session';
    session_regenerate_id();
    if (isset($_SESSION['authenticated'])) {
      header('Location: http://tsuts.tskoli.is/2t/0506992429/GSO2B3U/Verkefni-5/index.php');
      exit;
    }
  }
  else{
    $error = '* Lykilorð er ekki rétt *';
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
    <form action="" method="post">
      <p><label for="username">Notendanafn:</label>
        <input type="text" name="username" id="username" placeholder="admin"></p>
      <p><label for="pwd">Lykiliorð:</label>
        <input type="password" name="pwd" id="pwd" placeholder="1234"></p>
      <p><input name="login" type="submit" value="Staðfesta"></p>
      <p class="sign-in-error"><?php echo $error; ?></p>
    </form>
  </body>
</html>