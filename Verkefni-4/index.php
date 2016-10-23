<html>
		
	<head>
    <?php require($_SERVER['DOCUMENT_ROOT'] . "/2T/0506992429/GSO2B3U/Verkefni-4/includes/head.php");
					require($_SERVER['DOCUMENT_ROOT'] . "/2T/0506992429/GSO2B3U/Verkefni-4/includes/title.php"); ?>
    <title>Verkefni 4 - <?php echo "{$title}"; ?></title>
	</head>
		
	<body>
		<?php require($_SERVER['DOCUMENT_ROOT'] . "/2T/0506992429/GSO2B3U/Verkefni-4/includes/header.php"); ?>
		<section class="group">
			<article class="col-2-3"> 
				<h2>Verkefnalýsing</h2>
				<hr>
				<h3>Verkefni 4</h3>
				<div class="myndir">
          <?php require($_SERVER['DOCUMENT_ROOT'] . "/2T/0506992429/GSO2B3U/Verkefni-4/includes/images.php"); ?>
          <?php foreach($indexImages as $key => $value):
          if($indexImages[$key]['display'] == 1): ?>
          <a href="mynd.php?id=<?= $key ?>"><img src="<?= $indexImages[$key]['img-thumb_url']; ?>"></a>
          <?php endif;
          endforeach; ?>
		    </div>
        
			</article>          
			<aside>
			<div class="teasers">
			<h2>Reusable Code</h2>
			<p>One of the largest performance drawbacks comes with bloated file sizes and unnecessary browser rendering. One quick way to help largely cut down on CSS file sizes is to reuse styles as much as possible. Any repeating styles or interface patterns should be combined, allowing code to be shared. If two modules share a background, rounded corners, and a box shadow there is no reason to explicitly state those same styles twice. Instead they can be combined, within a single class, allowing the styles to be written once and then shared. <a href="http://learn.shayhowe.com/advanced-html-css/performance-organization/#reusable-code">Reusable Code</a></p>
			</div>
			<div class="teasers">
			<h2>Reduce HTTP Requests</h2>
			<p>Next to file size, the number of HTTP requests a website makes is one of the largest performance pitfalls. Each time a request is made to the server the page load time increases. Some request have to finish before others can start, and too many request can bloat the server.
			Combine Like Files. One way, and perhaps the easiest way, to reduce the number of HTTP requests is to combine like files.
			</p>
			</div>
		</aside>
  </body>

	<footer>
		<?php require($_SERVER['DOCUMENT_ROOT'] . "/2T/0506992429/GSO2B3U/Verkefni-4/includes/footer.php"); ?>
	</footer>
</section>
		
</html>