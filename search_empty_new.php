<!DOCTYPE html>
<html>
<head>
	<title>Результата поиска нет</title>
	<? include './mobile/php/head.php'; ?>
</head>

<body>
<div id="wrapper">
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
			<div id="header_title">Каталог товаров</div>
			<div id="heder_search_name"></div>
			<div id="heder_search_kod"></div>
		</header>
		<div id="toggle_menu">Меню</div>
	</div>
	<div id="content_area">	
		<div id="search">
			<form action="#">
				<div class="input_text_wrap"><input type="search" placeholder="Поиск в избранном" id="search_text" autocomplete="on"></div>
				<input type="submit" class="search_button">
			</form>
		</div>
		<div id="empty_search_result">
			<p>Товар “тжщоорауцлоои” не найден. Мы добавим его в каталог если он есть в интернет. Или вы можете добавить его самостоятельно.</p>
			<a href="#" class="green_button add_tovar">Добавить товар</a>
			<a href="#" class="green_button">Поиск в Google</a>
		</div>
	</div>
	
	<div id="footer">
		<div id="popup_add_tovar">
			<a href="#" class="add_tovar_by_name">Добавить по наименованию</a>
			<a href="#" class="add_tovar_by_kod">Сканировать штрихкод</a>
		</div>	
		<button class="add_product">Добавить товар</button>	
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