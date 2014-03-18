<!DOCTYPE html>
<html>
<head>
	<title>Пригласить друга</title>
	<? include './mobile/php/head.php'; ?>
</head>

<body>
<div id="wrapper">

	<div id="header">
		<header>
			<div id="header_title">Пригласить друга</div>
			<!--<div id="total_number">29</div>-->
		</header>
		<div id="toggle_menu">Меню</div>
	</div>

	<div id="content_area">
		<div class="page_form_wrap">
			<form action="#" method="POST">
			<div class="input_text_wrap"><input type="text" value="" placeholder="Адрес электронной почты"></div>			
			<input type="submit" class="green_button" value="Отправить">
			</form>
		</div>

	</div>
	
	<? include './mobile/php/slide_panel.php'; ?>

</div>

<? include './mobile/php/bottom_block.php'; ?>

</body>
</html>