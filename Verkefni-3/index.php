<html>
		
	<head>
    <?php require($_SERVER['DOCUMENT_ROOT'] . "/2T/0506992429/GSO2B3U/Verkefni-3/includes/head.php");
					require($_SERVER['DOCUMENT_ROOT'] . "/2T/0506992429/GSO2B3U/Verkefni-3/includes/title.php"); ?>
    <title>Verkefni 3 - <?php echo "{$title}"; ?></title>
	</head>
		
	<body>
		<?php require($_SERVER['DOCUMENT_ROOT'] . "/2T/0506992429/GSO2B3U/Verkefni-3/includes/header.php"); ?>
		<section class="group">
			<article class="col-2-3"> 
				<h2>Verkefnalýsing</h2>
				<hr>
				<h3>Verkefni 3</h3>
					<ul class="verkefnalysing">
						<p>
						<li><b>(14%)</b> – Vefur, uppsetning Búðu til myndavef sem mun geymamyndir í möppu á miðlara. 
						Frjáls útfærslaerá uppsetningu og efni.
						Við munum vinna áfram með það sem við gerum hér í næstu verkefnum.</li>  
						<li><b>(1%)</b> - Stofnaðu GitHub reikning og hýstu kóðann sem þú gerir í þessu verkefni þar.</li>
						<li><b>(2%</b>) - Hönnun. Notaðu eitthvað framenda framework, template eða álíka til að vinna með fyrir uppsetningu á viðmótinu (css/html). Búðu til og stílaðu forsíðuna.Settu smávegisinnihald.</li>
						<li><b>(4%)</b> - Uppsetning. Hlutaðu niður vefinn sem hefur að geyma t.d. header, menu og footer á sambærilegan hátt og gert er í kafla 4.
						Notaðu til þess include og viðeigandi path lausnir og aðferðirsem kynntir eru í 4.kafla (error, missing osfrv.).</li>
						<li><b>(1%)</b> - Búðu til menu og notaðu php til að sýna á hvaða síðu notandi er staddur.</li>
						<li><b>(1%)</b> - Footer -Búðu til copyright með php sbr. Lausn í kafla 4</li>
						<li><b>(1%)</b> - Title  notaðu php fyrirtitle sbr.  lausn í kafla 4</li> 
						<li><b>(2%)</b> - Búðu til ,,random“ mynd(úr array) sem t.d. banner fyrir header eða background mynd fyrir vefsíðu, láttu fyrirsögn h1
						eða caption breytast með myndum. Notaðu nokkrar myndir að eigin vali.</li>
						<li><b>(2%)</b> - Láttu nokkrar myndir birtast í einu „random“á forsíðu, þannig að sama mynd kemur ekki fyrir tvisvar.</li>
						</p>
					</ul>
				</div>
			<hr>
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
		<?php require($_SERVER['DOCUMENT_ROOT'] . "/2T/0506992429/GSO2B3U/Verkefni-3/includes/footer.php"); ?>
	</footer>
</section>
		
</html>