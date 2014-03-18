<!DOCTYPE html>
<html>
<head>
	<title>Перекресток, г.Чебоксары ул.Ленинградская, 31, к.2</title>
	<meta charset="utf-8">
	<? include './mobile/php/head.php'; ?>
</head>

<body>
<div id="wrapper">
	<div class="product_search_seller_wrap">
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
				<div id="header_title"><span>Перекресток</span>, г.Чебоксары ул.Ленинградская, 31, к.2</div>
				<div id="header_label"></div>
			</header>
			<div id="toggle_menu">Меню</div>
		</div>
		<div id="product_search_seller">
			<div class="total"><span>4 235</span>товаров</div>
			<div class="item scan"><a href="#"><div class="icon"></div></a></div>
			<div class="item by_name"><a href="#"><div class="icon"></div></a></div>
			<div class="item by_categorys"><a href="#"><div class="icon"></div></a></div>
			<div class="item action"><a href="#"><div class="icon"></div></a></div>
		</div>
		<div id="search">
			<form action="#">
				<div class="input_text_wrap"><input type="text" autocomplete="off" value="Хлопья" id="search_text" placeholder="Поиск товаров продавца"></div>
				<input type="submit" class="search_button">
			</form>
			<div class="search_result">Найдено товаров у продавца: 3</div>			
		</div>	
		<div id="content_area">
			<div id="favorits_list">
				<div class="favorit_item">
					<div class="img"><img src="/mobile/images/fav_3.jpg" /></div>
					<p>Каша УМНИЦА 5 ЗЛАКОВ для детского питания <span>(0.2 кг)</span></p>
					<div class="favorit_price"><em>64.20 р.</em><span>12.08.2013</span><div class="chekbox"></div></div>
				</div>
				<div class="favorit_item">
					<div class="img"><img src="/mobile/images/fav_1.jpg" /></div>
					<p>Увелка хлопья 5-ти ЗЕРНОВЫЕ тонкие кор(Ресурс) <span>(0.600 кг)</span></p>
					<div class="favorit_price"><em>64.20 р.</em><span>12.08.2013</span><div class="chekbox"></div></div>
				</div>	
				<div class="favorit_item">
					<div class="img"><img src="/mobile/images/fav_1.jpg" /></div>
					<p>Увелка хлопья 5-ти ЗЕРНОВЫЕ тонкие кор(Ресурс) <span>(0.600 кг)</span></p>
					<div class="favorit_price"><em>64.20 р.</em><span>12.08.2013</span><div class="chekbox"></div></div>
				</div>				
			</div>		
		</div>
		
		<div id="footer">
			<button id="footer_busket"></button>
			<button id="footer_select_button"></button>		
		</div>
		
		
		
	<? include './mobile/php/slide_panel.php'; ?>
		
		
	</div>
</div>

	<div id="modal_window" class="modal_window">
		<div class="modal_window_header">Добавить товар</div>
		<div class="modal_window_content"><div class="input_text_wrap"><input type="text" value=""></div></div>
		<div class="modal_window_footer">
			<div class="simplemodal-close">Отмена</div>
			<div class="modal_window_ok">Ok</div>
		</div>
	</div>

	<? include './mobile/php/bottom_block.php'; ?>
	
	<script>
	$(document).ready(function() {
		$("#footer #footer_select_button").trigger('click');
	});
	</script>

<? include './mobile/php/autocompit.php'; ?>

</body>
</html>