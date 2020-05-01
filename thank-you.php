<!DOCTYPE html>
<html lang="ru-RU">
<head>
	<?php 
		$title = "Спасибо!";
		$description = "";
		include("php/meta.php");
	?>
	<link rel="stylesheet" href="css/thank-you.css">
</head>
<body>
	<?php include("php/header.php"); ?>
	<div class="page-header">
	    <h1>Спасибо!<img class="svg" src="img/heart.svg"></h1>
	    <div class="order-info">Ваш запрос принят. Мы свяжемся с вами в течение 2-х часов рабочего времени для уточнения необходимой информации.</div>
	    <a href="<?php echo "//" . $_SERVER['HTTP_HOST']; ?>"><button type="button" class="button-yellow">На главную страницу</button></a>
	</div>
	<div class="special-offers">
		<h2><?php echo $_GET['client']; ?>, обратите внимание<br>на наши сезонные акции:</h2>
		<?php 
			info_box("Для всей семьи", "Курортный отдых для всей семьи - программы «‎все включено» и с пользой для здоровья!‎", "block1", true);
			info_box("Для мужчин", "Специальные программы для поддержания мужского здоровья, чтобы всегда чувствовать уверенность и силу.", "block1"); 
			info_box("Для женщин", "Программы с оптимальным сочентнием процедур специально для поддержания хорошего самочувствия женщин.", "block1");
			info_box("Для детей", "Программы для укрепления детского иммунитета. Особенно актуальны в период простуд и повышенных нагрузок.", "block1", true); 
		?>
	</div>
	<?php include("php/footer.php"); ?>
</body>
</html>