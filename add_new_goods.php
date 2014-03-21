<!DOCTYPE html>
<html>
<head>
	<title>Изменение товара</title>
	<? include './mobile/php/head.php'; ?>
</head>

<body>
<div id="wrapper">
	<main id="content_region">
		<div>
			<div id="header_region">
				<div id="header">
					<header>
						<div id="header_title">Добавление нового товара Добавление нового товара Добавление нового товара Добавление нового товара</div>
						<div id="header_right_icons">				
							<div class="barcode"></div>
						</div>				
					</header>
					<div id="toggle_menu">Меню</div>
				</div>
			</div>
			<section id="section_region">
				<div class="bg_color_wrap">
					<div id="content_area">		
						<div id="chois_list_wrap" class="add_goods">
							<div id="chois_list">Мои любимые товары</div>
							<div id="chois_list_variants">
								<div class="chois_list_item">Вкусняшки</div>
								<div class="chois_list_item">Для шашлыка</div>
								<div class="chois_list_item">Жратва</div>
								<div class="chois_list_item">Лучшие блюда</div>
								<div class="chois_list_item">На охоту зимой</div>
								<div class="chois_list_item">На охоту весной</div>
								<div class="chois_list_item">На охоту летом</div>
								<div class="chois_list_item">На охоту осенью</div>
								<div class="chois_list_item">Тещще на блины</div>
								<div class="chois_list_item">Очень длинное предлинное название</div>
							</div>
						</div>
						<div id="adding_product_favorites" class="block_indent">
							<div class="add_name">
								<span>Ввести наименование</span>
								<div class="input_values"><div class="wrap"><input type="text" value="Хлопья"></div></div>
							</div>
							<!--
							<div class="add_kod">
								<span>Сканировать штрих-код</span>
								<div class="input_values"><label>Штрих код</label><input type="number" value="4605283257891" /></div>
							</div>
							-->
							<div class="half add_price first">
								<span>Добавить цену</span>
								<div class="input_values"><input type="number" value="425.00"><label>руб.</label></div>
							</div>
							<div class="half add_weight">
								<span>Масса/объем</span>
								<div class="input_values"><input type="number" value="500"><label>шт.</label></div>
							</div>
							<div class="half add_foto min first">
								<span>Добавить фото товара</span>
								<input type="file" accept="image/*" size="1" />
								<!--<div class="input_values"><img src="/mobile/images/add_foto_img.jpg"><div class="remove_img"></div></div>-->
							</div>	
							<div class="half add_foto min">
								<span>Добавить фото описания</span>
								<input type="file" accept="image/*" size="1" />
								<!--<div class="input_values"><input type="file" accept="image/*" size="1" /></div>-->
							</div>			
							<div class="add_comment">
								<span>Добавить описание</span>
								<div class="input_values"><div class="wrap"><input type="text" value=""></div></div>
							</div>
						</div>
						<div id="go_favorit"><input type="checkbox" data-role="none" id="go_go"><label for="go_go">Перейти в список после добавления</label></div>
					</div>
					
				</div>
			</section>
			<div id="footer_region">
				<div id="footer">
					<button type="button" id="cancel_link" class="left cross">Отмена</button>
					<button type="button" id="add_link" class="right accept">Добавить</button>
				</div>			
			</div>
		</div>
	</main>
	<? include './mobile/php/slide_panel.php'; ?>
</div>

<? include './mobile/php/bottom_block.php'; ?>

<? include './mobile/php/autocompit.php'; ?>

	
</body>
</html>