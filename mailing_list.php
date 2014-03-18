<!DOCTYPE html>
<html>
<head>
	<title>Отправка списка покупок</title>
	<? include './mobile/php/head.php'; ?>
</head>

<body>
<div id="wrapper">
	<div id="header">
		<header>
			<div id="header_title">Отправка списка</div>
			<div id="submit_list_button"><span class="button_text">Отправить</span></div>
		</header>
		<div id="toggle_menu">Меню</div>
	</div>
	<div id="content_area">
		<div id="submit_list_data">
			<div class="submit_list_header">Мои любимые товары (24)</div>
			<div class="submit_list_form">
				<form action="#">
					<div class="label_form">Отправитель:</div>
					<div class="input_text_wrap"><input class="input" type="text" placeholder="Ваше имя" value=""></div>
					<div class="input_text_wrap"><input class="input" type="text" placeholder="Телефон (+7 999 999 99 99)" value=""></div>
					<div class="input_text_wrap"><input class="input" type="text" placeholder="Введите текст сообщения" value=""></div>
					<div class="label_form">Получатель:</div>
					<div class="input_text_wrap"><input class="input" type="email" placeholder="e-mail пользователя" value=""></div>									
				</form>
			</div>
		</div>
	</div>
	<div id="footer">
		<button id="cancel_link" class="left cross" type="button">Отмена</button>
		<button id="add_link" class="right accept" type="button">Отправить</button>
	</div>
	
	<? include './mobile/php/slide_panel.php'; ?>
	
	
</div>
	
<? include './mobile/php/bottom_block.php'; ?>

</body>
</html>