<!DOCTYPE html>
<html>
<head>
	<title>Избранные товары</title>
	<? include './mobile/php/head.php'; ?>
</head>

<body>
<div data-role="page" class="jqm-demos" data-quicklinks="true" id="wrapper">
	<div data-role="header" id="header">
		<header>
			<div id="header_title">Избранные товары</div>
			<div id="total_number">29</div>
		</header>
		<a href="#slide_panel" id="toggle_menu" data-iconpos="notext">Меню</a>
		<!--<a href="#slide_panel" class="shtih_kod" data-iconpos="notext">Штрих код</a>-->
	</div>
	<div data-role="content" id="content_area">
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

<? include './mobile/php/bottom_block.php'; ?>

</body>
</html>