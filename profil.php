<!DOCTYPE html>
<html>
<head>
	<title>Профиль</title>
	<? include './mobile/php/head.php'; ?>
</head>

<body>
<div id="wrapper">
	<main id="content_region">
		<div>
			<div id="header_region">
				<div id="header">
					<header>
						<div id="header_title">Профиль</div>
						<!--<div id="total_number">29</div>-->
					</header>
					<div id="toggle_menu">Меню</div>
				</div>
			</div>
			<section id="section_region">
				<div id="content_area">
					<div id="edit_user_profil">
						<div class="edit_user_profil_item">
							<div class="name">E-mail:</div>
							<div class="input_text_wrap"><input type="text" value="zhukoffm@gmail.com"></div>
						</div>
						<div class="edit_user_profil_item avatar">
							<div class="name">Аватар:</div>
							<div class="profil_image">
								<img src="/mobile/images/user_empty.jpg" />
							</div>
							<div class="add_foto green_button">Загрузить<input type="file" accept="image/*"></div>
						</div>
						<div class="edit_user_profil_item">
							<div class="name">Имя:</div>
							<div class="input_text_wrap"><input type="text" value="Владимир Владимирович"></div>
						</div>			
					</div>
				</div>
			</section>
			<div id="footer_region">
				<div id="footer">
					<button id="save" class="center accept">Сохранить</button>
				</div>
			</div>
		</div>
	</main>
	<? include './mobile/php/slide_panel_noreg.php'; ?>

</div>

<div id="chois_city_modal" class="modal_window">
	<div class="modal_window_header">Выбрать город</div>
	<div class="modal_window_content"><div class="input_text_wrap"><input id="city_list" type="text" value="" autocomplete="off"></div></div>
	<div class="modal_window_footer">
		<div class="simplemodal-close">Отмена</div>
		<div class="modal_window_ok">Ok</div>
	</div>	
</div> 

<? include './mobile/php/bottom_block.php'; ?>

</body>
</html>