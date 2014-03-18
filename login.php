<!DOCTYPE html>
<html>
<head>
	<title>Вход</title>
	<? include './mobile/php/head.php'; ?>
</head>

<body>
	<div id="header_title"></div>
	<div id="registration_page_wrap">
		<div id="registration_page">
			<h1>Честная цена</h1>
			<form action="#">
				<div class="email"><input type="email" placeholder="Адрес электронной почты"></div>
				<div class="pass"><input type="password" placeholder="Пароль"></div>
				<a href="#" class="green_button">Войти</a>
			</form>
		</div>
	</div>

	<? include './mobile/php/slide_panel.php'; ?>	

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
	
</body>

</html>