<!DOCTYPE html>
<html>
<head>
	<title>Перекресток, г.Чебоксары ул.Ленинградская, 31, к.2</title>
	<? include './mobile/php/head.php'; ?>
</head>

<body>
<div id="wrapper">
	<main id="content_region">
		<div>
			<div id="header_region">
				<div id="header_action_list">
					<div class="header_action_list_left"></div>
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
			</div>
			<section id="section_region">
				<div class="main_seller_wrap">
					<div id="search_filter_result">Выбрать из <span>4 325</span> товаров:</div>
					<div id="main_seller_top">
						<div class="item scan"><a href="#"><div class="icon"></div><span>Сканировать</span></a></div>
						<div class="item by_name"><a href="#"><div class="icon"></div><span>По наименованию</span></a></div>
						<div class="item by_categorys"><a href="#"><div class="icon"></div><span>По категориям</span></a></div>
						<div class="item action"><a href="#"><div class="icon"></div><span>Акции</span></a></div>
					</div>
					<div id="popular_goods">Популярные товары</div>
					<div id="content_area">
						<div id="favorits_list">
							<div class="favorit_item">
								<div class="img"><img src="/mobile/images/fav_1.jpg" /></div>
								<p>Увелка хлопья 5-ти ЗЕРНОВЫЕ тонкие кор(Ресурс) <span>(0.600 кг)</span></p>
								<div class="favorit_price"><em>52.20 р.</em><span>12.08.2013</span><div class="chekbox"></div></div>
							</div>
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
								<div class="favorit_price"><em>52.20 р.</em><span>12.08.2013</span><div class="chekbox"></div></div>
							</div>
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
						</div>
					</div>					
				</div>
			</section>
			<div id="footer_region">
				<div id="footer">
					<button id="footer_select_button"><span class="button_text">Выделить</span></button>
					<button id="footer_busket"><span class="button_text">Удалить</span></button>					
				</div>	
			</div>
		</div>
	</main>
	<? include './mobile/php/slide_panel.php'; ?>
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
		$('#popup_add_tovar .add_tovar_by_name').on('touchstart',function() {
			$('#modal_window').modal();
			$("#popup_add_tovar").css("display","none").removeClass("show");
		});
	});
	</script>

<? include './mobile/php/autocompit.php'; ?>

</body>
</html>