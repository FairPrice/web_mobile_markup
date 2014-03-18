<!DOCTYPE html>
<html>
<head>
	<title>Фильтр по категориям - параметры</title>
	<? include './mobile/php/head.php'; ?>
</head>

<body>
<div id="wrapper">
	<div class="addres_selection_wrap">
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
				<div id="header_title">Фильтр по категориям</div>
			</header>
			<div id="toggle_menu" >Меню</div>
		</div>
		
		<div id="search_filter_result">параметры</div>
		
		<div id="content_area">		
			<div id="seller_choice_parameters">
				<div class="item"><div class="modal_chekbox"><input type="checkbox" id="go_go1"><label for="go_go1">Категория 1</label></div></div>	
				<div class="item"><div class="modal_chekbox"><input type="checkbox" id="go_go2"><label for="go_go2">Категория 2</label></div></div>
				<div class="item"><div class="modal_chekbox"><input type="checkbox" id="go_go3"><label for="go_go3">Категория 3</label></div></div>
			</div>
		</div>
		
		<div id="footer">
			<button id="reset_all" class="left cross">Сбросить все</button>
			<button id="ready" class="right accept">Готово</button>
		</div>	
			
	<? include './mobile/php/slide_panel.php'; ?>
		
	</div>
</div>

<? include './mobile/php/bottom_block.php'; ?>

</body>
</html>