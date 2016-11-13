<?php $currentPage = basename($_SERVER['SCRIPT_FILENAME']); ?>
<div class="header-img"></div>
<div class="header-nav">
	<nav>
		<li><a href="index.php"<?php if ($currentPage == 'index.php') {echo 'id="here"';}?>>Textaskrá / CSV</a></li>
		<li><a href="json.php"<?php if ($currentPage == 'json.php') {echo 'id="here"';}?>>Json</a></li>
		<li><a href="sql.php"<?php if ($currentPage == 'sql.php') {echo 'id="here"';}?>>SQL / Database</a></li>
	</nav>
</div>