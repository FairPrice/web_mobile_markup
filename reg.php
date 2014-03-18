<!DOCTYPE html>
<html>
<head>
	<title>Вход и регистрация</title>
	<? include './mobile/php/head.php'; ?>
</head>

<body>
	<div id="registration_page_wrap">
		<div id="registration_page">
			<div id="registration_page_title">Быстрый вход через:</div>
			<div id="registration_page_link">
				<a href="#" class="google">Google+</a>
				<a href="#" class="twitter">Twitter</a>
				<a href="#" class="facebook">Facebook</a>
				<a href="#" class="mail">Mail</a>
			</div>
			<div id="registration_form_header">Вход и регистрация</div>
			<form action="#">
				<div class="email"><input type="email" placeholder="Адрес электронной почты"></div>
				<div class="pass"><input type="password" placeholder="Пароль"></div>
				<a href="#" class="green_button">Войти</a>
				<a class="fogot_pass" href="#">Забыли пароль?</a>
				<a href="#" class="red_button">Попробовать</a>
				<span>Без регистрации</span>
			</form>
		</div>
	</div>
	
	<!--<div class="alert_warning">Неправильный адрес электронной почты</div>-->

</body>

<? include './mobile/php/bottom_block.php'; ?>

	<script>
	$(document).ready(function() {
		var registration_page = $("#registration_page");
		var height = $(window).height();
		registration_page.css("height",height);
		$(window).resize(function(){
			var height_r = $(window).height();
			registration_page.css("height",height_r);
		});
	});
	</script>
</html>