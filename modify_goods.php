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
						<div id="header_title">Изменение товара</div>
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
						<div id="adding_product_favorites" class="block_indent">
							<div class="input_values name_row"><div class="wrap"><input type="text" value="Хлопья"></div>	</div>
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
						<div id="go_favorit"><input type="checkbox" id="go_go"><label for="go_go">Перейти в список после добавления</label></div>
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