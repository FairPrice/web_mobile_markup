<!DOCTYPE html>
<html>
<head>
	<title>Честная цена</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">	
	<!--<link rel="stylesheet" href="/mobile/css/tmp.css" type="text/css">	-->
	<link rel="stylesheet" href="/mobile/css/style.css" type="text/css">

	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>	
	<script src="/mobile/js/quo.js"></script>

	<script src="/mobile/js/jquery.carouFredSel-6.2.1-packed.js"></script>
	<script src="/mobile/js/jquery.touchSwipe.min.js"></script>
	<script src="/mobile/js/index.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Roboto&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
</head>

<body>
<div id="wrapper">
	<main id="content_region">
		<div class="main">
			<div id="header_region"> 
				<div id="header">
					<header>
						<h1>Честная цена</h1>		
					</header>
					<div id="toggle_menu">Меню</div>
				</div>
			</div>
			<section id="section_region">
				<div id="content_area">	
					<div id="top_search"><input placeholder="Введите название товара" type="search" name="search-mini" id="search-mini" value="" /></div>
					<div class="subtitle">МОБИЛЬНЫЙ СЕРВИС ПОКУПОК<br>С нами управлять покупками легко!</div>
					<div id="content_slider_wrap">
						<div id="content_slider">
							<div class="item one"><div class="title">Найдите  необходимые  товары!</div><div class="subtitle">Сканируя штрих-код  или ищите по наименованию.</div></div>
							<div class="item two"><div class="title">Составьте свой  список покупок!</div><div class="subtitle">На сайте или в <br>мобильном приложении,  <br>отсылайте друзьям!</div></div>
							<div class="item three"><div class="title">Сохраняйте  цены!</div><div class="subtitle">Сохраняйте цены на <br>товары в разных <br>магазинах.</div></div>
							<div class="item four"><div class="title">Делайте выгодные покупки!</div><div class="subtitle">Синхронизируйте  списки с мобильным  приложением.</div></div>
						</div>
						<div id="content_slider_pagination"></div>
					</div>
					<div id="google_play_wrap"><a target="_blank" href="https://play.google.com/store"><img src="/mobile/images/google_button.png" /></a></div>
					<div class="red_text">Все товары в твоём телефоне!</div>
				</div>
			</section>
		</div><!-- .main -->
	</main>

	<? include './mobile/php/slide_panel.php'; ?>
	
</div>

<? include './mobile/php/bottom_block.php'; ?>

</body>
</html>