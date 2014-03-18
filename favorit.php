<!DOCTYPE html>
<html>
<head>
	<title>Избранные товары</title>
	<? include './mobile/php/head.php'; ?>
</head>

<body>
<div id="wrapper">
	<div id="header_action_list">
		<div href="#" class="header_action_list_left"></div>
		<div class="header_action_list_right">
			<span>0</span> выбран
			<div id="header_action_list_select_all"></div>
			<div id="header_action_list_clear_select"></div>
		</div>
	</div>	
	<div id="header">
		<header>
			<div id="header_title">Избранные товары</div>
			<div id="total_number">29</div>
		</header>
		<div id="toggle_menu">Меню</div>
	</div>
	<div id="content_area">

		<div id="favorits_list">
			<div class="favorit_item no_price">
				<div class="img"><img src="/mobile/images/fav_1.jpg" /></div>
				<p>Увелка хлопья 5-ти ЗЕРНОВЫЕ тонкие кор(Ресурс) <span>(0.600 кг)</span></p>
				<div class="favorit_price"><div class="chekbox"></div></div>
			</div>
			<div class="favorit_item">
				<div class="img"><img src="/mobile/images/fav_3.jpg" /></div>
				<p>Каша УМНИЦА 5 ЗЛАКОВ для детского питания <span>(0.2 кг)</span></p>
				<div class="favorit_price"><em>64.20 р.</em><span>12.08.2013</span><div class="chekbox"></div></div>
			</div>
			<div class="favorit_item">
				<div class="img"><img src="/mobile/images/no_foto.png" /></div>
				<p>Увелка хлопья 5-ти ЗЕРНОВЫЕ тонкие кор(Ресурс) <span>(0.600 кг)</span></p>
				<div class="favorit_price"><em>64.20 р.</em><span>12.08.2013</span><div class="chekbox"></div></div>
			</div>		
		</div>
	</div>
	
	<div id="footer">
		<div id="popup_add_tovar">
			<a href="#" class="add_tovar_by_name">Добавить по наименованию</a>
			<a href="#" class="add_tovar_by_kod">Сканировать штрихкод</a>
		</div>	
		<button class="add_product">Добавить товар</button>
		<button id="footer_to_list">Добавить в список</button>		
		<button id="footer_select_button"><span class="button_text">Выделить</span></button>	
		<button id="footer_busket" class="right"><span class="button_text">Удалить</span></button>	
	</div>
	
	
	
	<? include './mobile/php/slide_panel.php'; ?>
	
</div>

	
	<div id="add_to_list_window" class="modal_window">
		<div class="modal_window_header">Добавление товара</div>
		<div class="modal_window_content">
			<div class="list_name slide_list"><span>Не задано название списка</span>
				<div class="list_name_items">
					<div class="list_name_item">Название списка 1</div>
					<div class="list_name_item">Название списка 2</div>
					<div class="list_name_item">Название списка 3</div>
					<div class="list_name_item">Название списка 4</div>
				</div>
			</div>
			<div class="edit_adress green_border">
				<span>Перекресток</span> ул 139 стрековой дивизии Колчака, д.138, к.2<a href="#"><img src="/mobile/images/icon/48/ic_action_edit.png"/></a>
			</div>
			<div class="edit_price">
				<div class="input_text_wrap"><input type="number" value="2132.58"></div>
				<div class="currency">руб</div>
			</div>
			<div class="edit_number">
				<div class="input_text_wrap">
					<div class="down"></div>
					<input type="number" value="1">
					<div class="up"></div>
				</div>
			</div>
			<div class="modal_chekbox"><input type="checkbox" id="go_go"><label for="go_go">Перейти в список</label></div>
		</div>
		<div class="modal_window_footer">
			<div class="simplemodal-close">Отмена</div>
			<div class="modal_window_ok">Добавить</div>
		</div>
	</div>		

<? include './mobile/php/bottom_block.php'; ?>

</body>
</html>