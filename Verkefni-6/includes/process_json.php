<?php
 // if the form has been submitted, process the input text
if (isset($_POST['url'])) {
	
	$file_json = file_get_contents('myndir/myndir.json');
  $json_myndir = json_decode($file_json, true);
	$name = htmlspecialchars($_POST['title']);
	$url = htmlspecialchars($_POST['url']);
	$file_json = json_encode($name, $url)
  header('Location:http://tsuts.tskoli.is/2t/0506992429/GSO2B3U/Verkefni-6/json.php');
  exit;
}
 */ 