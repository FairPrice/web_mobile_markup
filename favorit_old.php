<!DOCTYPE html>
<html>
<head>
	<title>Избранные товары</title>
	<? include './mobile/php/head.php'; ?>
</head>

<body>
<div data-role="page" class="jqm-demos" data-quicklinks="true" id="wrapper">
	<div id="header_action_list">
		<div href="#" class="header_action_list_left"></div>
		<div class="header_action_list_right">
			<span></span> выбран
			<div id="header_action_list_select_all"></div>
			<div id="header_action_list_clear_select"></div>
		</div>
	</div>	
	<div data-role="header" id="header">
		<header>
			<div id="header_title">Избранные товары</div>
			<div id="total_number">29</div>
		</header>
		<a href="#slide_panel" id="toggle_menu" data-iconpos="notext">Меню</a>
		<!--<a href="#slide_panel" class="shtih_kod" data-iconpos="notext">Штрих код</a>-->
	</div>
	<div data-role="content" id="content_area">
		<!--<div id="top_search"><input placeholder="Введите название товара" type="search" name="search-mini" id="search-mini" value="" data-mini="true"/></div>-->
		<div id="search">
			<form action="#">
				<input type="search" placeholder="Поиск в избранном" data-theme="none" id="search_text" autocomplete="on">
				<input type="submit" class="search_button">
			</form>
		</div>
		<div id="favorits_list">
			<div class="favorit_item">
				<div class="img"><img src="/mobile/images/fav_1.jpg" /></div>
				<p>Увелка хлопья 5-ти ЗЕРНОВЫЕ тонкие кор(Ресурс) <span>(0.600 кг)</span></p>
			</div>
			<div class="favorit_item">
				<div class="img"><img src="/mobile/images/fav_2.jpg" /></div>
				<p>Смесь HORTEX Грибной жюльен лоитлилипплифи пвдюордшлпрппывап рввавывапывлорвалорва оараоаолдлорвадорд роддлллоаврп <span>(0.4 кг)</span></p>
			</div>
			<div class="favorit_item">
				<div class="img"><img src="/mobile/images/fav_3.jpg" /></div>
				<p>Каша УМНИЦА 5 ЗЛАКОВ для детского питания <span>(0.2 кг)</span></p>
				<div class="favorit_price">64.20 р.<span>12.08.2013</span></div>
			</div>
			<div class="favorit_item">
				<div class="img"><img src="/mobile/images/fav_1.jpg" /></div>
				<p>Увелка хлопья 5-ти ЗЕРНОВЫЕ тонкие кор(Ресурс) <span>(0.600 кг)</span></p>
				<div class="favorit_price">64.20 р.<span>12.08.2013</span></div>
			</div>			
		</div>
	</div>
	
	<div id="footer">
		<div data-role="popup" id="popup_add_tovar">
			<a href="#" class="add_tovar_by_name">Добавить по наименованию</a>
			<a href="#" class="add_tovar_by_kod">Сканировать штрихкод</a>
		</div>	
		<a href="#popup_add_tovar" data-rel="popup" class="add_product">Добавить товар</a>
		<a href="#" id="footer_busket" class="ui-link"></a>
	</div>	
	
	
	
	<? include './mobile/php/slide_panel.php'; ?>
	
</div>

<? include './mobile/php/bottom_block.php'; ?>

<? include './mobile/php/autocompit.php'; ?>

</body>
</html>