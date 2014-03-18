<!DOCTYPE html>
<html>
<head>
	<title>Избранные товары</title>
	<? include './mobile/php/head.php'; ?>
</head>

<body>
<div id="wrapper">
	<div id="header">
		<header>
			<div id="header_title">Избранные товары</div>
			<div id="total_number">29</div>
		</header>
		<a href="#slide_panel" id="toggle_menu" data-iconpos="notext">Меню</a>
	</div>
	<div id="content_area">
		<div id="favorit_empty">
			<p>Товары не выбраны.</p><p>Добавляйте с помощью кнопок </p>
			<a href="#" class="add_product">Добавить товар</a>
			<a href="#" class="add_favorit">В избранное</a>
		</div>
	</div>
	
	<div id="footer">
		<a href="#" class="add_product">Добавить товар</a>
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
	$('#footer .add_product').on('touchstart',function() {
		$('#modal_window').modal();
	});
});
</script>	
</body>
</html>