<?php
$title = basename($_SERVER['SCRIPT_FILENAME'], '.php');

if ($title == 'index') {
  $title = 'Textaskrá / CSV';
}
if ($title == 'json') {
  $title = 'Json';
}
if ($title == 'sql') {
    $title = 'SQL / Database';
}

$title = "Verkefni 6 - " . ucfirst($title);