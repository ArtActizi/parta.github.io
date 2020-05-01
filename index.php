<!DOCTYPE html>
<html lang="ru-RU">
<head>
	<?php 
		$name = "Санаторий Металлург";
		$description = "";
		$home = true;
		include("php/meta.php");
		include("php/landing.php"); 
	?>
	<link rel="stylesheet" href="css/landing.css"></link>
</head>
<body>
	<?php include("php/header.php"); ?>

	<div class="slider-box">
		<div class="slider">
			<!-- slide 1 -->
			<div class="slide slide1">
				<img src="img/slider1.jpg">
				<div class="slider-content">
					<div class="slider-title">ХИТ СЕЗОНА!</div>
					<div class="slider-subtitle">номера улучшенной комфортности по цене стандартов!</div>
					<button type="button" class="button-yellow">Узнать подробнее</button>
				</div>
				<img class="slider-img" src="img/slide1.png">
			</div>
			<!-- slide 2 -->
			<div class="slide slide2">
				<img src="img/slider2.jpg">
				<div class="slider-content">
					<div class="slider-title">АКТИВНАЯ ВЕСНА!</div>
					<div class="slider-subtitle">скидка 10% на все виды путевок по пенсионному удостоверению!</div>
					<button type="button" class="button-yellow">Узнать подробнее</button>
				</div>
				<img class="slider-img" src="img/slide2.png">
			</div>
			<!-- slide 3 -->
			<div class="slide slide3">
				<img src="img/slider3.jpg">
				<div class="slider-content">
					<div class="slider-title">МОБИЛЬНЫЙ ОТПУСК!</div>
					<div class="slider-subtitle">курсовки в дневное<br>и вечернее время по выгодным ценам!</div>
					<button type="button" class="button-yellow">Узнать подробнее</button>
				</div>
				<img class="slider-img" src="img/slide3.png">
			</div>
		</div>
		<div class="slider-nav">
            <div class="slider-nav-text">01</div>
            <div class="slider-nav-block n1"></div><div class="slider-nav-block n2"></div><div class="slider-nav-block n3"></div>
            <div class="slider-nav-text">03</div>
    	</div>
        <div class="slider-button slider-button-left">&#10094;</div>
        <div class="slider-button slider-button-right">&#10095;</div>
		
	</div>

	<div class="frontpage-block frontpage-block2">
		<div class="headline">
			<h2>Мы готовы подарить вам привычку быть здоровыми уже сегодня!</h2>
			<div class="subtitle">Мы не предлагаем мгновенный эффект, потому что знаем, что стабильное здоровье – это результат последовательного, системного и комплексного подхода.</div>
		</div>
		<?php 
			info_box("Для всей семьи", "Курортный отдых для всей семьи - программы «‎все включено» и с пользой для здоровья!‎", "block1", "whole-family", true);
			info_box("Для мужчин", "Специальные программы для поддержания мужского здоровья, чтобы всегда чувствовать уверенность и силу.", "block1", ""); 
			info_box("Для женщин", "Программы с оптимальным сочентнием процедур специально для поддержания хорошего самочувствия женщин.", "block1", "");
			info_box("Для детей", "Программы для укрепления детского иммунитета. Особенно актуальны в период простуд и повышенных нагрузок.", "block1", "",true); 
			info_box("Для отдыха", "Каждый день в санатории - на пользу! Уютный номер, вкусная еда и 100% гарантия сервиса.", "block1". "");
			info_box("Для активного долголетия", "Отдых и восстановление здоровья для пенсионеров по лечебным программам с проживанием «‎все включено».", "block1", ""); 
			info_box("Для восстановления и реабилитации", "Персональное внимание, заботливый персонал, эффективные лечебные методики.", "block1", "", true); 
			info_box("Для Ижевска", "Полный комплекс санаторного лечения по минимальной цене!", "block1", ""); 
		?>
	</div>

	<div class="frontpage-block frontpage-block3">
		<div class="text-block">
			<div class="text-block-inner">
				<h2>Стабильное здоровье – залог успешной жизни!</h2>
				<ul>
					<li>Мы поможем вам быть здоровыми без лекарств и аптек</li>
					<li>Для вас лесопарковая территория в целебном микроклиматом в самом центре мегаполиса</li>
					<li>Мы ЗА эффективное применение собственных минеральных источников и лечебной грязи: мы не используем их повторно, сохраняя все лечебные свойства только для вас</li>
					<li>Мы создаем кофортные условия для отдыха и лечения каждого члена вашей семьи</li>
				</ul>
			</div>
		</div>
		<div class="photo-block">
			<?php photo_block(1); ?>
			<div class="photo-block-row">
				<?php photo_block(2); photo_block(4); ?>
			</div>
			<div class="photo-block-row">
				<?php photo_block(3); photo_block(5); ?>
			</div>
			<div class="load-more"><a href="#">Еще фотографии</a><img src="img/reload.png"></div>
		</div>
	</div>

	<div class="frontpage-block frontpage-block4">
		<img class="form-bg" src="img/form-bg.jpg">
		<form method="post">
			<h2>Узнайте о наличии номеров прямо сейчас:</h2>
			<input name="name" type="text" placeholder="Имя" id="name">
			<input name="phone" type="text" placeholder="Телефон" id="phone">
			<input name="date-in" type="text" placeholder="Дата заезда" id="date-in">
			<input name="date-out" type="text" placeholder="Дата отъезда" id="date-out">
			<input name="mobile-date-in" type="text" placeholder="Дата заезда" id="mobile-date-in">
			<input name="mobile-date-out" type="text" placeholder="Дата отъезда" id="mobile-date-out">
			<button type="button" class="button-yellow" id="form-submit">Найти свободный номер</button>
		</form>
	</div>

	<div class="frontpage-block frontpage-block5">
		<!--<div class="chevron"></div>-->
		<img class="svg chevron-bg" src="img/block5-arrow-bg.svg">
		<img class="svg chevron" src="img/block5-arrow.svg">
		<div class="list-title">
			<div class="number">5</div>
			гарантий качественного лечения и удобного сервиса
		</div>
		<h2>5 гарантий качественного лечения и удобного сервиса:</h2>
		<div class="list">
			<?php 
				gurantee("Мы гарантируем, что план лечения вам назначит только квалифицированный врач", "в соотвествии с профилем заболевания");
				gurantee("Мы гарантируем безопасность лечения", "поэтому принимаем отдыхающих только по санаторно-курортной карте");
				gurantee("Мы работаем только с проверенными методиками и качественными материалами", "в соотвествии с международными системами качества СМК и ХАССП"); 
				gurantee("Мы несем отвественность за результат, поэтому всегда назначаем комплексное лечение.", "У нас нет врачей, которые назначат вам разовую, дорогостоющую, но «‎модную» процедуру");
				gurantee("Мы гарантируем 100% сервис", "и организуем заезды в любой день с понедельника по пятницу", true);
			?>
		</div>
	</div>

	<div class="frontpage-block frontpage-block6">
		<!--<div class="corner-triangle"></div>-->
		<h2 class="mobile-h2">Слово генерального директора-главного врача санатория</h2>
		<div class="text-block">
			<h2>Слово генерального директора-главного врача санатория</h2>
			<h3>Кононова Наталья Юрьевна</h3>
			<div class="sub-title">Генеральный директор</div>
			<img class="mobile-director" src="img/director.png">
			<hr>
			<div class="letter">
				<p>Санаторий «‎Металлург» - один из крупнейших современных санаторно-курортных комплексов Ижевска, предоставляющий услуги европейского уровня: лечение, оздоровление, активный отдых и SPA. Санаторий находится в центре курортной зоны, располагая территорией ухоженного природного парка площадью в несколько гектаров. По словам гостей, здесь царит особая атмосфера душевности, комфорта и отменного сервиса.</p>
				<p>Санаторий «‎Металлург» - это целая Страна Здоровья, активного отдыха и отличного настроения, созданная для людей, стремящихся быть здоровыми, активными и счастливыми.</p>
				<p>Остановите свой выбор на санатории «‎Металлург», и ваш отдых станет действительно особенным!</p>
				<img src="img/signature.png">
			</div>
		</div>
		<img class="director" src="img/director.png">
	</div>

	<div class="frontpage-block frontpage-block7 gallery">
		<h2>Фотогалерея</h2>
		<div class="photo-block-row">
			<?php photo_gallery(1); photo_gallery(2); photo_gallery(3); photo_gallery(4); ?>
		</div>
		<div class="photo-block-row">
			<?php photo_gallery(5); photo_gallery(6); photo_gallery(7); photo_gallery(8); ?>
		</div>
		<div class="load-more"><a href="#">Еще фотографии</a><img src="img/reload.png"></div>
	</div>

	<div class="frontpage-block frontpage-block8 testimonials">
		<h2>Отзывы</h2>
		<?php 
			for ($i = 0; $i < 4; $i++) { testimonial(); }
		?>
		<div class="load-more"><a href="#">Еще отзывы</a><img src="img/reload.png"></div>
	</div>

	<div class="frontpage-block frontpage-block9 map">
		<h2>Как к нам проехать</h2>
		<div class="map-body">
			<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A9dd46a0ec0f2e35a83a16885f1319d98e802f0d6187fb0cca91dd5eeb041a55b&amp;width=100%25&amp;height=100%&amp;lang=ru_RU"></script>
		</div>
	</div>

	<div class="frontpage-block frontpage-block10 news">
		<h2>Новости</h2>
		<div class="news-row">
		<?php 
			for ($i = 0; $i < 3; $i++) { news_block(); }
		?>
		</div>
		<div class="more-news"><a href="news.php">Посмотреть все новости</a></div>
	</div>

	<?php include("php/footer.php"); ?>
	<script src="js/landing.js"></script>

</body>
</html>