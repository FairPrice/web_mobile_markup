<!DOCTYPE html>
<html>
<head>
	<title>Избранные товары</title>
	<? include './mobile/php/head.php'; ?>
</head>

<body>
<div id="wrapper">
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
			<div id="header_title">Избранные товары</div>
			<div id="total_number">29</div>
		</header>
		<div id="toggle_menu">Меню</div>
	</div>	
	<div id="content_area">	
		<div id="search">
			<form action="#">
				<div class="input_text_wrap"><input type="search" placeholder="Поиск в избранном" id="search_text" autocomplete="on"></div>
				<input type="submit" class="search_button">
			</form>
			<div class="search_result">Найдено в избранном: 3</div>
		</div>
		<div id="favorits_list" class="no_foto">
			<div class="favorit_item">
				<div class="img"><a href="#"><img src="/mobile/images/no_foto.png" /></a></div>
				<p>Увелка хлопья 5-ти ЗЕРНОВЫЕ тонкие кор(Ресурс) <span>(0.600 кг)</span></p>
				<div class="favorit_price"><div class="chekbox"></div></div>
			</div>
			<div class="favorit_item">
				<div class="img"><a href="#"><img src="/mobile/images/no_foto.png" /></a></div>
				<p>Смесь HORTEX Грибной жюльен лоитлилипплифи пвдюордшл прппывап рввавывап ывлорвалорва оараоаолдл орвадорд роддлллоаврп <span>(0.4 кг)</span></p>
				<div class="favorit_price"><div class="chekbox"></div></div>
			</div>
			<div class="favorit_item">
				<div class="img"><a href="#"><img src="/mobile/images/no_foto.png" /></a></div>
				<p>Каша УМНИЦА 5 ЗЛАКОВ для детского питания <span>(0.2 кг)</span></p>
				<div class="favorit_price"><em>64.20 р.</em><span>12.08.2013</span><div class="chekbox"></div></div>
			</div>
			<div class="favorit_item">
				<div class="img"><a href="#"><img src="/mobile/images/no_foto.png" /></a></div>
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
		<button id="footer_select_button"><span class="button_text">Выделить</span></button>
		<button id="footer_busket"><span class="button_text">Удалить</span></button>				
	</div>
	
	
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