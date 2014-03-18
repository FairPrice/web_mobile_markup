<!DOCTYPE html>
<html>
<head>
	<title>Результата поиска нет</title>
	<? include './mobile/php/head.php'; ?>
</head>

<body>
<div id="wrapper">
	<div id="header">
		<header>
			<div id="header_title">Каталог товаров</div>
			<div id="header_right_icons">				
				<a href="search.php" class="header_search">Поиск</a>
				<div class="barcode"></div>
			</div>
		</header>
		<div id="toggle_menu">Меню</div>
	</div>
	<div id="content_area">	
		<div id="search">
			<form action="#">
				<div class="input_text_wrap"><input type="search" placeholder="Введите название товара" id="search_text" autocomplete="on"></div>
				<input type="submit" class="search_button">
			</form>
		</div>
		<div id="empty_search_result">
			<p>Товар не найден.<br>Попробуйте перейти к поиску</p>
			<a href="#" class="google_button">Google</a>
			<p>Если и google вам не помог, то вы можете быть первым кто добавит информацию в интернет</p>
			<a href="#" class="add_tovar_button">Добавить новый товар</a>
		</div>
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
		$$('#popup_add_tovar .add_tovar_by_name').tap(function() {
			$('#modal_window').modal();
			$("#popup_add_tovar").css("display","none").removeClass("show");
		});
	});
	</script>
	
<? include './mobile/php/autocompit.php'; ?>

</body>
</html>