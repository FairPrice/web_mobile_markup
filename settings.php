<!DOCTYPE html>
<html>
<head>
	<title>Настройки</title>
	<? include './mobile/php/head.php'; ?>
</head>

<body>
<div id="wrapper">

	<div id="header">
		<header>
			<div id="header_title">Настройки</div>
			<!--<div id="total_number">29</div>-->
		</header>
		<div id="toggle_menu">Меню</div>
	</div>

	<div id="content_area">
		<div id="settings_page">
			<div class="settings_page_item">Показывать фото товара?<span>В списках, в избранном</span><div class="chekbox"><input type="checkbox" id="chek"><label for="chek"></label></div></div>
			<div class="settings_page_item"><a href="#">О приложении</a></div>
			<div class="settings_page_item">
				Выбор города
				<div class="input_text_wrap"><input type="text" value="Чебоксары"></div>
				<ul>
					<li>Москва</li>
					<li>Чебоксары</li>
					<li>Питер</li>
				</ul>
			</div>
		</div>

	</div>
	
	<div id="footer">
		<button class="center accept">Сохранить</button>
	</div>
	
	
	
	<? include './mobile/php/slide_panel.php'; ?>

</div>

<? include './mobile/php/bottom_block.php'; ?>

</body>
</html>