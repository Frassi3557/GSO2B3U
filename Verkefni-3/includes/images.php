<?php
# Fylki sem heldur utan um myndirnar
$images = array(
	array(
		'img_url' => 'http://tsuts.tskoli.is/2t/0506992429/pictures/background_.jpg',
		'description' 	=> 'Sample text _'
	),
	array(
		'img_url' => 'http://tsuts.tskoli.is/2t/0506992429/pictures/background_0.jpg',
		'description' 	=> 'Sample text 0'
	),
	array(
		'img_url' => 'http://tsuts.tskoli.is/2t/0506992429/pictures/background_1.jpg',
		'description' 	=> 'Sample text 1'
	),
	array(
		'img_url' => 'http://tsuts.tskoli.is/2t/0506992429/pictures/background_2.jpg',
		'description' 	=> 'Sample text 2'
	),
	array(
		'img_url' => 'http://tsuts.tskoli.is/2t/0506992429/pictures/background_3.jpg',
		'description' 	=> 'Sample text 3'
	),
	array(
		'img_url' => 'http://tsuts.tskoli.is/2t/0506992429/pictures/background_4.jpg',
		'description' 	=> 'Sample text 4'
	),
	array(
		'img_url' => 'http://tsuts.tskoli.is/2t/0506992429/pictures/background_5.jpg',
		'description' 	=> 'Sample text 5'
	),
	array(
		'img_url' => 'http://tsuts.tskoli.is/2t/0506992429/pictures/background_6.jpg',
		'description' 	=> 'Sample text 6'
	)
);
# Endurraða fylkinu í random röð
shuffle($images);

# Fylki sem heldur utan um fylki, sem halda utan um header myndirnar og titlanna
$headerImages = array
(
	array(
		'img_url' => 'http://tsuts.tskoli.is/2t/0506992429/pictures/background_7.jpg',
		'title' 	=> '南韓国'
	),
	array(
		'img_url' => 'http://tsuts.tskoli.is/2t/0506992429/pictures/background_8.jpg',
		'title' 	=> 'ユートピア'
	),
	array(
		'img_url' => 'http://tsuts.tskoli.is/2t/0506992429/pictures/background_9.jpg',
		'title' 	=> 'ネオ - 東京'
	),
	array(
		'img_url' => 'http://tsuts.tskoli.is/2t/0506992429/pictures/background_10.jpg',
		'title' 	=> '東京の繁華街'
	),
	array(
		'img_url' => 'http://tsuts.tskoli.is/2t/0506992429/pictures/background_11.jpg',
		'title' 	=> '火災'
	),
	array(
		'img_url' => 'http://tsuts.tskoli.is/2t/0506992429/pictures/background_12.jpg',
		'title' 	=> '奈良公園'
	)
);
# Endurraða fylkinu í random röð
shuffle($headerImages);