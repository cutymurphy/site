<?php
include("path.php");
include("app/database/db.php")
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Мой сайт</title>
	<link rel="stylesheet" href="assets/css/contacts.css">
</head

<body link="#c8642c" alink="#000">

    <?php include("app/include/header.php"); ?>

	<div class="author-block">
		<div class="author-img">
			<img src="assets/main_pics/article_black-hole-spin-courtesy-of-nasa-jpl-caltech.jpg" alt="Author Image">
		</div>
		<div class="author-info">
			<div class="text-1">
				<p>Как меня найти?</p>
			</div>
			<div class="text-2">
				<p><span class="iconify" data-icon="material-symbols:location-on-outline"></span>Адрес</p>
			</div>
			<div class="map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3297.620344592078!2d39.18330947468108!3d51.72517519503288!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x413b28a6ecc0e02b%3A0xd069916b9422d976!2z0K_QsdC70L7QvdC10LLRi9C5INGB0LDQtA!5e0!3m2!1sru!2sru!4v1678345415687!5m2!1sru!2sru" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
			<div class="text-2">
				<p><span class="iconify" data-icon="bi:telephone"></span> Телефон</p>
			</div>
			<div class="text-3">
				<p><a href="tel:+79518654777">+79518654777</a></p>
			</div>
			<div class="text-2">
				<p><span class="iconify" data-icon="mdi:envelope-open-outline"></span> Электронный адрес</p>
			</div>
			<div class="text-3">
				<p><a href="mailto:dasha.030105@gmail.com">dasha.030105@gmail.com</a>	</p>
			</div>
			<div class="text-2">
				<p><span class="iconify" data-icon="mdi-account-circle-outline"></span> Ссылки на соц-сети</p>
			</div>
			<div class="icon">
				<p><a href="https://vk.com/ssssssushkova" target="_blank"> <img src="assets/icons/vk-128.png" alt="VKontakte"></a>
				<a href="https://t.me/Ssushkova" target="_blank"> <img src="assets/icons/tg-128.png" alt="Telegram"></a>
				</p>
			</div>
		</div>
	</div>
	<script src="assets/js/cookies.js"></script>
	
</body>

</html>