<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/download.css">	
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@200&display=swap" rel="stylesheet">
	<title>Document</title>
</head>
<body>
	<header>
		<div class="left">
			<img src="img/main/logo.png" alt="logo" class="logo" onclick="document.location.replace('main.php')" style="cursor: pointer;">

			<div class="game menu" id='menu'>
				<p id="menu">игра</p>
				<img src="" class="bot-but" id='menu'>
				<div class="menu-list" style="left: 40px;">
					<a href="#">Сюжет</a>
					<a href="download.html">Загрузить игру</a>
				</div>
			</div>

			<div class="news menu" id="menu">
				<p id="menu">новости</p>
				<img src="" alt="" class="bot-but" id="menu">
				<div class="menu-list" style="left: 180px;">
					<a href="main.html">Новости PC</a>
					<a href="main.html">Новости PSN</a>
					<a href="main.html">Новости XBOX</a>
					<a href="main.html">Новости NINTENDO</a>
				</div>
			</div>
		</div>

		<div class="right">
			<div class="log menu" id="menu">
				<?php
				if (empty($_COOKIE['user'])): 
					?>
					<p id="menu" class="login">войти</p>
					<img src="" alt="" class="bot-but" id="menu">
					<div class="menu-list" style="left: -10px;">
						<a href="javascript: sessionStorage.setItem('prev', 'download.php'); document.location.replace('login.php')">Ввойти</a>
						<a href="javascript: sessionStorage.setItem('prev', 'download.php'); document.location.replace('register.php')">Зарегистрироваться</a>
					</div>
					<?php else: ?>
						<p id="menu" class="login"><?=$_COOKIE['user']?></p>
						<img src="" alt="" class="bot-but" id="menu">
						<div class="menu-list" style="left: -10px;">
							<a href="#">Настройки</a>
							<a href="php/exit.php">Выйти</a>
						</div>
					<?php endif;?>

				</div>

				<div class="play" onclick="document.location.replace('download.html')" style="cursor: pointer;">
					<p>играть</p>
				</div>
			</div>
		</header>

		<div class="progressbar"></div>
		<div class="scrollpath"></div>

		<section class="main-content">
			<div class="download">
				<div class="head">ЗАГРУЗИТЬ</div>
				<a href="download/Warframe.msi"><div class="btn">Начать загрузку</div></a>
				<p style="border-top: 2px solid white;border-bottom: 2px solid white;width: 60%;margin: 0 auto;padding: 15px;">Системные требования</p>
				<div class="scrollable">				
					<p style="padding-top: 40px;">ОС: Windows 7 64-Бит (32-разрядная не поддерживается)</p>
					<p>Процессор: Intel Core 2 Duo e6400 или AMD Athlon x64 4000+ (~2.2 Гигагерц двухъядерный процессор)</p>
					<p>Видео: DirectX 11+ совместимая Графическая Карта</p>
					<p>Оперативная память: 4 Гигабайт RAM</p>
					<p>Жесткий диск: 50 Гигабайт доступного пространства HD</p>
					<p style="padding-bottom: 40px;">Интернет: Широкополосное Подключение к Интернету</p>
				</div>			
			</div>		
		</section>

		<footer>
			<div class="soc-logo">
				<img src="img/main/vk.png" alt="">
				<img src="img/main/tw.png" alt="">
				<img src="img/main/yt.png" alt="">
				<img src="img/main/in.png" alt="">
				<img src="img/main/th.png" alt="">
				<img src="img/main/ds.png" alt="">
			</div>

			<div class="pl-logo">
				<img src="img/main/1.png" alt="">
				<img src="img/main/2.png" alt="">
				<img src="img/main/3.png" alt="">
				<img src="img/main/4.png" alt="">
				<img src="img/main/5.png" alt="">
				<img src="img/main/6.png" alt="">
				<img src="img/main/7.png" alt="">
				<img src="img/main/8.png" alt="">
				<img src="img/main/9.png" alt="">
				<img src="img/main/10.png" alt="">
			</div>

			<div class="terms">
				<p>Интерактивное взаимодействие не классифицируется ESRB.
					©2021 Digital Extremes Ltd. Все права защищены.
					Warframe, эмблема Warframe и Evolution Engine являются зарегистрированными товарными знаками Digital Extremes Ltd.
					“PlayStation Family Mark“, “PlayStation“, “Логотип PS5”, “PS5“, “Логотип PS4”, “PS4“, “Логотип PlayStation Shapes” и “Play Has No Limits“ - зарегестрированные товарные марки Sony Interactive Entertainment Inc.
					Nintendo Switch является торговой маркой Nintendo.
				</p>
			</div>
		</footer>

		<script src="js/download.js"></script>
	</body>
	</html>