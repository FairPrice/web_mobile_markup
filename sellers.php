<!DOCTYPE html>
<html>
<head>
	<title>Продавцы в г.Чебоксары</title>
	<? include './mobile/php/head.php'; ?>
</head>

<body>
<div id="wrapper">
	<div class="seller_filter_wrap">
		<div id="header">
			<div id="header_action_list">
				<div class="header_action_list_left"></div>
				<div class="header_action_list_right">
					<span></span> выбран
					<div id="header_action_list_select_all"></div>
					<div id="header_action_list_clear_select"></div>
				</div>
			</div>
			<header>
				<div id="header_title">Продавцы в г.Чебоксары</div>
			</header>
			<div id="toggle_menu" >Меню</div>
		</div>
		
			<div id="search" class="fix">
				<form action="#">
					<div class="input_text_wrap"><input type="text" placeholder="Введите наименование продавца" id="search_text" autocomplete="on"></div>
					<input type="submit" class="search_button">
				</form>
				<!--
				<div class="search_result">фильтры</div>
				<div class="selection_parameters">
					<a href="seller_param.php">Подобрать по параметрам</a>
				</div>
				-->
				<div class="search_result">найдено: <span>3</span></div>
			</div>	
		<div id="content_area">		
			<div id="search_sellers_list">
				<div class="seller_item">
					<div class="seller_item_name">
						<em>Магнит</em>12 магазинов
					</div>
					<div class="seller_item_result">
						<em>3 325</em>товаров
					</div>
				</div>
				<div class="seller_item">
					<div class="seller_item_name">
						<em>Перекрёсток</em>пр-т Тракторостроителей, 76
					</div>
					<div class="seller_item_result">
						<em>4 325</em>товаров
					</div>
				</div>
				<div class="seller_item">
					<div class="seller_item_name">
						<img src="/mobile/images/ozon.png">интернет магазин
					</div>
					<div class="seller_item_result">
						<em>2 164 325</em>товаров
					</div>
				</div>
				<div class="seller_item">
					<div class="seller_item_name">
						<em>Магнит</em>12 магазинов
					</div>
					<div class="seller_item_result">
						<em>3 325</em>товаров
					</div>
				</div>
				<div class="seller_item">
					<div class="seller_item_name">
						<em>Перекрёсток</em>пр-т Тракторостроителей, 76
					</div>
					<div class="seller_item_result">
						<em>4 325</em>товаров
					</div>
				</div>
				<div class="seller_item">
					<div class="seller_item_name">
						<img src="/mobile/images/ozon.png">интернет магазин
					</div>
					<div class="seller_item_result">
						<em>2 164 325</em>товаров
					</div>
				</div>
				<div class="seller_item">
					<div class="seller_item_name">
						<em>Магнит</em>12 магазинов
					</div>
					<div class="seller_item_result">
						<em>3 325</em>товаров
					</div>
				</div>
				<div class="seller_item">
					<div class="seller_item_name">
						<em>Перекрёсток</em>пр-т Тракторостроителей, 76
					</div>
					<div class="seller_item_result">
						<em>4 325</em>товаров
					</div>
				</div>
				<div class="seller_item">
					<div class="seller_item_name">
						<img src="/mobile/images/ozon.png">интернет магазин
					</div>
					<div class="seller_item_result">
						<em>2 164 325</em>товаров
					</div>
				</div>

			</div>
		</div>
			
	<? include './mobile/php/slide_panel.php'; ?>
	
</div>
	
<? include './mobile/php/bottom_block.php'; ?>

<? include './mobile/php/autocompit.php'; ?>

</body>
</html>