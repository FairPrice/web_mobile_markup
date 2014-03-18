<!DOCTYPE html>
<html>
<head>
	<title>Поиск по наименованию</title>
	<? include './mobile/php/head.php'; ?>
</head>

<body>
<div id="wrapper">
	<div id="header">
		<header>
			<div id="header_title">Каталог товаров</div>
			<div id="header_right_icons">				
				<div class="barcode"></div>
			</div>			
		</header>
		<div id="toggle_menu" >Меню</div>
	</div>
	<div id="content_area">		
		<div id="search">
			<form action="#">
				<div class="input_text_wrap"><input type="search" placeholder="Введите название товара" id="search_text" autocomplete="on"></div>
				<input type="submit" class="search_button">
			</form>
		</div>	
	</div>
	

	
	<? include './mobile/php/slide_panel.php'; ?>
	
</div>

<? include './mobile/php/bottom_block.php'; ?>

<? include './mobile/php/autocompit.php'; ?>

</body>
</html>