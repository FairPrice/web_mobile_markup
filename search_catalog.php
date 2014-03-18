<!DOCTYPE html>
<html>
<head>
	<title>Поиск по каталогу</title>
	<? include './mobile/php/head.php'; ?>
</head>

<body>
<div id="wrapper">
	<div id="header">
		<header>
			<div id="header_title">Каталог товаров</div>
			<div id="header_right_icons">				
				<!--
				<div class="header_search">
					<input class="header_search_input" type="text" placeholder="Поиск">
					<input type="submit" class="header_search_button">				
				</div>
				-->
				<a class="header_search" href="search.php">Поиск</a>
				<div class="barcode"></div>
			</div>			
		</header>
		<div id="toggle_menu">Меню</div>
	</div>
	<div id="content_area">		
		<div id="search_categorys">
			<a href="#" class="search_categorys_item">Продукты питания<span>12 324</span><div class="arrow"></div></a>
			<a href="#" class="search_categorys_item">Алкогольные напитки<span>1 546</span><div class="arrow"></div></a>
			<a href="#" class="search_categorys_item">Бытовая химия<span>230</span><div class="arrow"></div></a>
			<a href="#" class="search_categorys_item">Детские товары<span>12 124</span><div class="arrow"></div></a>
			<a href="#" class="search_categorys_item">Зоотовары<span>3 590</span><div class="arrow"></div></a>
			<a href="#" class="search_categorys_item">Косметика и гигиена<span>1 450</span><div class="arrow"></div></a>
			<a href="#" class="search_categorys_item">Медицинские товары<span>15 000</span><div class="arrow"></div></a>
			<a href="#" class="search_categorys_item">Строительные товары<span>5 845</span><div class="arrow"></div></a>
			<a href="#" class="search_categorys_item">Табачные изделия<span>0</span><div class="arrow"></div></a>
		</div>
	</div>

	
	<? include './mobile/php/slide_panel.php'; ?>
	
</div>

<? include './mobile/php/bottom_block.php'; ?>

<? include './mobile/php/autocompit.php'; ?>

</body>
</html>