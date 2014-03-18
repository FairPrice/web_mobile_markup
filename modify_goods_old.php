<!DOCTYPE html>
<html>
<head>
	<title>Изменение товара</title>
	<? include './mobile/php/head.php'; ?>
	
	<script type="text/javascript">
		jQuery(function()
		{
			jQuery('textarea').autoResize();
		});
	</script>
	
</head>

<body>
<div id="wrapper">

	<div id="header">
		<header>
			<div id="header_title">Изменение товара</div>
			<!--<div id="total_number">29</div>-->
		</header>
		<div id="toggle_menu">Меню</div>
	</div>

	<div id="content_area">
		<div id="change_product">
			<div class="input_text_wrap"><input type="text" value="Яйцо куриное птичий двор"></div>
			<!--<div class="input_text_wrap"><input type="text" value="Описание"></div>-->
			<div class="input_text_wrap"><textarea placeholder="Описание"></textarea></div>
			<div class="add_foto green_button">Добавить фото<input type="file" accept="image/*"></div>
			<div class="foto"><img src="/mobile/images/add_foto_teaser.jpg"/></div>
		</div>

	</div>
	
	<div id="footer">
		<button class="left cross">Отмена</button>
		<button class="right accept">Изменить</button>
	</div>
	
	
	
	<? include './mobile/php/slide_panel.php'; ?>

</div>

<? include './mobile/php/bottom_block.php'; ?>

</body>
</html>