<?php
include("path.php");
include("app/database/db.php")
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Мой сайт</title>
    <link rel="stylesheet" href="assets/css/gallery.css">
    <?php if (isset($_SESSION['id'])): ?>
        <style>
            .container {
                filter: blur(0);
                pointer-events: auto;
            }
        </style>
    <?php else: ?>
        <style>
            body {
                position: fixed;
                overflow: hidden
            }
            .container {
                filter: blur(20px);
                pointer-events: none;
            }
        </style>
    <?php endif; ?>
</head>
<body>

    <?php include("app/include/header.php"); ?>

    <div class="container">
		<div class="gallery">
			<figure class="element-animation">
				<img src="assets/universe_pics/03.jpg" alt="Gallery image 1" data-link="https://v-kosmose.com/tumannosti/tumannost-konskaya-golova/" class="gallery-img popup-image">
			</figure>
			<figure class="element-animation">
				<img src="assets/universe_pics/astro-19-15-tumannost-pesochnye-chasy.jpg" alt="Gallery image 2" data-link="https://v-kosmose.com/tumannosti/tumannost-pesochnyie-chasyi/" class="gallery-img popup-image">
			</figure>
			<figure class="element-animation">
				<img src="assets/universe_pics/CRAB-2098816411_0161e26bb1_b.jpg" alt="Gallery image 3" data-link="https://o-kosmose.com/glubokiy-kosmos/tumannosti/krabovidnaya-tumannost" class="gallery-img popup-image">
			</figure>
			<figure class="element-animation fourth-image">
				<img src="assets/universe_pics/16326710782_8a486bb0c0_b.jpg" alt="Gallery image 4" data-link="https://ru.wikipedia.org/wiki/Солнечная_вспышка" class="gallery-img popup-image">
			</figure>
			<figure class="element-animation">
				<img src="assets/universe_pics/nasa-photos-22.jpg" alt="Gallery image 5" data-link="https://life.ru/p/1552459" class="gallery-img popup-image">
			</figure>
			<figure class="element-animation">
				<img src="assets/universe_pics/16189387096_d83815da9a_b.jpg" alt="Gallery image 6" data-link="https://v-kosmose.com/stolpy-tvoreniya-i-zvezdnyj-zagadochnye-yavleniya-tumannosti-oryol/" class="gallery-img popup-image">
			</figure>
			<figure class="element-animation">
				<img src="assets/universe_pics/33.jpg" alt="Gallery image 7" data-link="https://news.cosmoport.com/2003/12/08/8.htm" class="gallery-img popup-image">
			</figure>
			<figure class="element-animation">
				<img src="assets/universe_pics/tumannost-vual-takzhe-petlya.jpg" alt="Gallery image 8" data-link="https://mks-onlain.ru/news/vedmina-metla-tumannost-kotoraya-zavorazhivaet/" class="gallery-img popup-image">
			</figure>
			<figure class="element-animation">
				<img src="assets/universe_pics/1424686305_snimki-nasa-6.jpg" alt="Gallery image 9" data-link="https://24hitech.ru/blijaishaia-k-zemle-sverhnovaia-vot-vot-vzorvetsia-chem-eto-grozit-dlia-zemlian.html" class="gallery-img popup-image">
			</figure>
			<figure class="element-animation">
				<img src="assets/universe_pics/nasa-photos-18.jpg" alt="Gallery image 10" data-link="https://o-kosmose.com/glubokiy-kosmos/tumannosti/tumannost-koshachiy-glaz-oshibochna-nazvannaya-planetarnoy" class="gallery-img popup-image">
			</figure>
			<figure class="element-animation">
				<img src="assets/universe_pics/1424686325_snimki-nasa-5.jpg" alt="Gallery image 11" data-link="https://kiri2ll.livejournal.com/325506.html" class="gallery-img popup-image">
			</figure>
			<figure class="element-animation">
				<img src="assets/universe_pics/d047a1106cfef3e4393ba7f7cc9698f6.jpg" alt="Gallery image 12" data-link="https://rus.team/events/vspyshka-sverkhnovoj-zvezdy-sn-1993j-v-galaktike-m81" class="gallery-img popup-image">
			</figure>
			<figure class="element-animation">
				<img src="assets/universe_pics/14172908657_0244dc9408_b.jpg" alt="Gallery image 13" data-link="https://cosmos-online.ru/news/ngc-1566-spiralnaya-galaktika-ispanskoj-tancovshhicy.html" class="gallery-img popup-image">
			</figure>
			<figure class="element-animation">
				<img src="assets/universe_pics/16188684.jpg" alt="Gallery image 14" data-link="https://habr.com/ru/post/413337/" class="gallery-img popup-image">
			</figure>
			<figure class="element-animation">
				<img src="assets/universe_pics/nasa-photos-15.jpg" alt="Gallery image 15" data-link="https://spacegid.com/tumannost-oriona.html" class="gallery-img popup-image">
			</figure>
		</div>
	</div>
	<div class="popup">
		<img src="" alt="Popup Image" class="popup-image">
		<span class="close">&times;</span>
		<span class="icon">&#128269;</span>
	</div>
	
	<script src="assets/js/gallery_animation.js"></script>
	<script src="assets/js/gallery_popup.js"></script>
	<script src="assets/js/cookies.js"></script>

</body>

</html>