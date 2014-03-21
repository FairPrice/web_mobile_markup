<!DOCTYPE html>
<html>
<head>
	<title>Нет интернета</title>
	<? include './mobile/php/head.php'; ?>
</head>

<body>
<div id="wrapper">
	<div id="header">
		<header>
			<div id="header_title">Избранные товары</div>
			<div id="total_number">29</div>
		</header>
		<div id="toggle_menu">Меню</div>
	</div>
	<div id="content_area">		
		<div class="attention">Добавление без интернет</div>
		<div id="adding_product_favorites" class="block_indent">
			<div class="add_name">
				<span>Ввести наименование</span>
				<div class="input_values"><input type="text" value="Хлопья" data-role="none"></div>
			</div>
			<div class="add_kod">
				<span>Сканировать штрих-код</span>
				<div class="input_values"><label>Штрих код</label><input type="number" value="4605283257891" data-role="none"></div>
			</div>
			<div class="half add_price first">
				<span>Добавить цену</span>
				<div class="input_values"><input type="number" value="425.00" data-role="none"><label>руб.</label></div>
			</div>
			<div class="half add_weight">
				<span>Масса/объем</span>
				<div class="input_values"><input type="number" value="500" data-role="none"><label>шт.</label></div>
			</div>
			<div class="half add_foto">
				<span>Добавить фото товара</span>
				<div class="input_values"><img src="/images/add_foto_img.jpg"><div class="remove_img"></div></div>
			</div>			

		</div>
		<div id="go_favorit"><input type="checkbox" data-role="none" id="go_go"><label for="go_go">Перейти в избранное после добавления</label></div>
	</div>
	
	<div id="footer">
		<button type="button" class="cancel_link">Отмена</button>
		<button type="button" class="add_link">Добавить</button>
	</div>	
	
	
	
	<? include './mobile/php/slide_panel.php'; ?>
	
</div>

	<? include './mobile/php/bottom_block.php'; ?>
	
<? include './mobile/php/autocompit.php'; ?>

</body>
</html>