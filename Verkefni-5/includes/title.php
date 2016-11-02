<?php
$title = basename($_SERVER['SCRIPT_FILENAME'], '.php');

if ($title == 'index') {
  $title = 'home';
}
if ($title == 'session') {
  $title = 'Innskrá';
}

$title = "Verkefni 5 - " . ucfirst($title);