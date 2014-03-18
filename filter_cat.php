<!DOCTYPE html>
<html>
<head>
	<title>Фильтр по категориям</title>
	<? include './mobile/php/head.php'; ?>
</head>

<body>
<div id="wrapper">
	<div class="filter_cat_wrap">	
		<div id="header">
			<header>
				<div id="header_title">Фильтр по категориям</div>
			</header>
			<a href="/" id="toggle_menu">Меню</a>
		</div>
		<div id="search" class="fix">
			<form action="#">
				<div class="input_text_wrap"><input type="text" placeholder="Введите название товара" id="search_text" autocomplete="on"></div>
				<input type="submit" class="search_button">
			</form>
			<div class="selection_parameters">
				<a href="filter_cat_param.html">фильтр по категориям</a>
			</div>
			<div class="search_result">Найдено в каталоге: <span>5</span></div>
		</div>			
		<div id="content_area">
			<div id="favorits_list">
				<div class="favorit_item">
					<div class="img"><img src="/mobile/images/fav_1.jpg" /></div>
					<p>Увелка хлопья 5-ти ЗЕРНОВЫЕ тонкие кор(Ресурс) <span>(0.600 кг)</span></p>
				</div>
				<div class="favorit_item">
					<div class="img"><img src="/mobile/images/fav_1.jpg" /></div>
					<p>Увелка хлопья 5-ти ЗЕРНОВЫЕ тонкие кор(Ресурс) <span>(0.600 кг)</span></p>
					<div class="favorit_price"><em>64.20 р.</em><span>12.08.2013</span></div>
				</div>
				<div class="favorit_item">
					<div class="img"><img src="/mobile/images/fav_1.jpg" /></div>
					<p>Увелка хлопья 5-ти ЗЕРНОВЫЕ тонкие кор(Ресурс) <span>(0.600 кг)</span></p>
					<div class="favorit_price"><em>64.20 р.</em><span>12.08.2013</span></div>
				</div>	
				<div class="favorit_item">
					<div class="img"><img src="/mobile/images/fav_1.jpg" /></div>
					<p>Увелка хлопья 5-ти ЗЕРНОВЫЕ тонкие кор(Ресурс) <span>(0.600 кг)</span></p>
					<div class="favorit_price"><em>64.20 р.</em><span>12.08.2013</span></div>
				</div>	
				<div class="favorit_item">
					<div class="img"><img src="/mobile/images/fav_1.jpg" /></div>
					<p>Увелка хлопья 5-ти ЗЕРНОВЫЕ тонкие кор(Ресурс) <span>(0.600 кг)</span></p>
					<div class="favorit_price"><em>64.20 р.</em><span>12.08.2013</span></div>
				</div>					
			</div>
		</div>
		
		<div id="footer">
			<button class="add_new_product left">Добавить новый товар</button>
			<button class="google_search">Google</button>
		</div>
	
	<? include './mobile/php/slide_panel.php'; ?>
		
	</div>
</div>


<? include './mobile/php/bottom_block.php'; ?>

<? include './mobile/php/autocompit.php'; ?>

</body>
</html>