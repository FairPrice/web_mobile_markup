<!DOCTYPE html>
<html>
<head>
	<title>Нет товаров в списке</title>
	<? include './mobile/php/head.php'; ?>
</head>

<body>
<div id="wrapper">
	<div class="empty_content_wrap">
		<div id="header">
			<header>
				<div id="header_title">На день рождения Теще..</div>
				<div id="total_number">29</div>
			</header>
			<div id="toggle_menu">Меню</div>
		</div>

		<div id="content_area">
			<div id="empty_block_content" class="empty_block_content">
				<img src="/mobile/images/empty_list.png" />
				<p>Товары не выбраны.</p>
				<p>Добавьте товары!</p>
			</div>
		</div>
		
		<div id="footer">
			<div id="popup_add_tovar">
				<a href="#" class="add_write_name">Написать наименование</a>
				<a href="search.php" class="add_tovar_by_name">Добавить по наименованию</a>
				<a href="#" class="add_tovar_by_kod">Сканировать штрихкод</a>
				<a href="#" class="add_tovar_by_favorit">Добавить из избранного</a>
			</div>
			<button class="add_product">Добавить товар</button>
			<button id="footer_send_list"><span class="button_text">Отправить</span></button>
		</div>
		
		
		
	<? include './mobile/php/slide_panel.php'; ?>
		
	</div>
</div>


	
	<? include './mobile/php/bottom_block.php'; ?>
		

</body>
</html>