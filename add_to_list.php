<!DOCTYPE html>
<html>
<head>
	<title>Добавление в список</title>
	
	<? include './mobile/php/head.php'; ?>
	
</head>

<body>
<div id="wrapper">
	<main id="content_region">
		<div>
			<div id="header_region">
				<div id="header">
					<header>
						<div id="header_title">Каша умница 5 злаков (200 г) с виноградом и зеленью в стакане</div>
					</header>
					<a id="toggle_menu">Меню</a>
				</div>
			</div>
			<section id="section_region">
				<div class="edit_page_wrap">
					<div id="content_area" class="edit_page">
						<div id="chois_list_wrap">
							<div id="chois_list">Выберите список</div>
							<div id="chois_list_variants">
								<div class="chois_list_item">Вкусняшки</div>
								<div class="chois_list_item">Для шашлыка</div>
								<div class="chois_list_item">Лучшие блюда</div>
								<div class="chois_list_item">Тещще на блины</div>
								<div class="chois_list_item">Очень длинное предлинное название</div>
							</div>
						</div>
						<div class="edit_adress green_border">
							<span>Перекресток</span> ул 139 стрековой дивизии Колчака, д.138, к.2<a href="#"><img src="/mobile/images/icon/48/ic_action_edit.png"/></a>
						</div>
						<div class="edit_price">
							<div class="input_text_wrap"><input type="number" value="2132.58"></div>
							<div class="currency">
								<span>руб</span>
								<div class="currency_list">
									<div class="currency_list_item">руб</div>
									<div class="currency_list_item">$</div>
									<div class="currency_list_item">eur</div>
									<div class="currency_list_item">грн.</div>
								</div>
							</div>
						</div>
						<div class="edit_number">
							<div class="input_text_wrap">
								<div class="down"></div>
								<input type="number" value="1">
								<div class="up"></div>
							</div>
						</div>
						<div class="modal_chekbox"><input type="checkbox" id="go_go" checked><label for="go_go">Перейти в список</label></div>
					</div>
				</div>
			</section>
			<div id="footer_region">
				<div id="footer">
					<button id="cancel_link" class="left cross" type="button" onclick="history.back(); return false;">Отмена</button>
					<button id="add_link" class="right accept" type="button">Добавить</button>
				</div>			
			</div>
		</div>
	</main>
	<? include './mobile/php/slide_panel.php'; ?>
</div>

<? include './mobile/php/bottom_block.php'; ?>		

</body>
</html>