<!DOCTYPE html>
<html lang="ru-RU">
<head>
	<?php 
		$title = "Новости";
		$description = "";
		$svg = "";
		include("php/meta.php");
	?>
	<link rel="stylesheet" href="css/news.css"></link>
</head>
<body>
	<?php include("php/header.php"); ?>
	<?php include("php/page-header.php"); ?>

	<div class="news-row">
	<?php 
		for ($i = 0; $i < 4; $i++) { news_block(); }
	?>
	</div>

	<?php include("php/footer.php"); ?>
</body>
</html>