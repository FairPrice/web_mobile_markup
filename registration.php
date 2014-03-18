<!DOCTYPE html>
<html>
<head>
	<title>Регистрация</title>
	<? include './mobile/php/head.php'; ?>
</head>

<body>
<div id="wrapper">

	<div id="header">
		<header>
			<div id="header_title">Регистрация</div>
			<!--<div id="total_number">29</div>-->
		</header>
		<div id="toggle_menu">Меню</div>
	</div>

	<div id="content_area">
		<div class="page_form_wrap">
			<form action="#" method="POST">
			<div class="input_text_wrap"><input type="text" value="" placeholder="Адрес электронной почты"></div>
			<div class="input_text_wrap"><input type="password" placeholder="Введите пароль"></div>			
			<div class="auth_reg">
				<input type="submit" class="green_button" value="Регистрация">
				<a class="gray" href="#">Забыли пароль?</a>
				<div class="social_links">
					<div>Быстрый вход через:</div>
					<a href="#" class="google">Google+</a>
					<a href="#" class="twitter">Twitter</a>
				</div>
			</div>
			</form>
		</div>

	</div>
	
	<? include './mobile/php/slide_panel.php'; ?>

</div>

<? include './mobile/php/bottom_block.php'; ?>

</body>
</html>