<?php 
$count = 3;
$db = mysqli_connect('localhost', 'root', '', 'site');
$user_check_query = "SELECT * FROM news";
$result = mysqli_query($db, $user_check_query);
$i = 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="img/ico.jpg" type="image/png">
	<link rel="stylesheet" href="css/swiper.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@200&display=swap" rel="stylesheet">
	<title>Warframe</title>
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
					<a href="download.php">Загрузить игру</a>
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
						<a href="javascript: sessionStorage.setItem('prev', 'main.php'); document.location.replace('login.php')">Ввойти</a>
						<a href="javascript: sessionStorage.setItem('prev', 'main.php'); document.location.replace('register.php')">Зарегистрироваться</a>
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

			<div class="play" onclick="document.location.replace('download.php')" style="cursor: pointer;">
				<p>играть</p>
			</div>
		</div>
	</header>

	<section>
		<div class="slider">
			<div class="swiper-container">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="slider-content">
							<div class="content">
								<h3 class="header"></h3>
								<p class="paragraph"></p>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="slider-content">
							<div class="content">
								<h3 class="header"></h3>
								<p class="paragraph"></p>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="slider-content">
							<div class="content">
								<h3 class="header"></h3>
								<p class="paragraph"></p>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="slider-content">
							<div class="content">
								<h3 class="header"></h3>
								<p class="paragraph"></p>
							</div>
						</div>
					</div>
				</div>

				<script type="text/javascript" src="js/main.slider.init.js"></script>
				<div class="swiper-pagination"></div>
			</div>
		</div>

		<div class="news-box">
			<div class="platform-but">
				<div class="active" id="pc"><p>PC</p></div>
				<div class="" id="psn"><p>PSN</p></div>
				<div class="" id="xb"><p>XBOX</p></div>
				<div class="" id="ns"><p>NINTENDO </p></div>
			</div>

			<div class="fresh-news">
				<div class="new">
					<img src="img/main/fresh1.png" alt="">
					<div class="fresh-news-des">
						<p class="head">Отпразднуйте год быка</p>
						<p>Получите эксклюзивные награды до 5-го марта</p>
						<a href="#"><p>Почитать подробнее</p></a>
					</div>
				</div>

				<div class="new">
					<img src="img/main/fresh1.png" alt="">
					<div class="fresh-news-des">
						<p class="head">Отпразднуйте год быка</p>
						<p>Получите эксклюзивные награды до 5-го марта</p>
						<a href="#"><p>Почитать подробнее</p></a>
					</div>
				</div>

				<div class="new">
					<img src="img/main/fresh1.png" alt="">
					<div class="fresh-news-des">
						<p class="head">Отпразднуйте год быка</p>
						<p>Получите эксклюзивные награды до 5-го марта</p>
						<a href=""><p>Почитать подробнее</p></a>
					</div>
				</div>				
			</div>

			<hr>
			<div class="articles">
				<?php
				
				while ($row = $result->fetch_assoc() and $i < $count): ?>
					<div class="old-news">
						<img src="<?=$row['imglink']?>" alt="">
						<div>
							<p class="head"><?=$row['title']?></p>
							<p class="date"><?=$row['date']?></p>
							<hr>
							<p><?=$row['description']?></p>
							<a href="<?=$row['link']?>"><p>Почитать подробнее</p></a>
						</div>
					</div>

					<?php $i=$i+1;endwhile;$count=$count+3;$i=0?>


				<!-- <div class="old-news">
					<img src="img/main/old1.png" alt="">
					<div>
						<p class="head">ДОСТУП ОКТАВИЯ ПРАЙМ</p>
						<p class="date">Написано на 2021-02-23 14:10:00</p>
						<hr>
						<p>Исполните симфонию разрушения с Октавией Прайм!</p>
						<a href="#"><p>Почитать подробнее</p></a>
					</div>
				</div> -->


				<div class="load" onclick="">
					<p>Загрузить еще</p>
				</div>
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

	<script type="text/javascript" src="js/swiper.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</body>
</html>