<!DOCTYPE html>
<html>
<head>
	<title>Выбор продавца в г.Чебоксары</title>
	<? include './mobile/php/head.php'; ?>
</head>

<body>
<div id="wrapper">
		<div id="header">
			<div id="header_action_list">
				<div class="header_action_list_left"></div>
				<div class="header_action_list_right">
					<span></span> выбран
					<div id="header_action_list_select_all"></div>
					<div id="header_action_list_clear_select"></div>
				</div>
			</div>
			<header>
				<div id="header_title">Продавцы в г.Чебоксары</div>
			</header>
			<div id="toggle_menu" >Меню</div>
		</div>
    <div class="address_selection_result_wrap">

         <div class="fix" id="search">
			<form action="#">
				<div class="input_text_wrap"><input type="text" id="search_text" placeholder="Введите наименование продавца"></div>
				<input type="submit" class="search_button">
			</form>
			<form action="#">
				<div class="input_text_wrap"><input type="text" id="street_chois" class="input_text" placeholder="Введите название улицы"></div>
				<input type="submit" class="search_button">
			</form>			
			<div class="search_result">7 адресов</div>
		</div>	
		
		<div id="content_area">		
			<div id="search_sellers_list">
				<div class="seller_item">
					<div class="seller_item_name">
						пр-т Тракторостроителей, 76
					</div>
					<div class="seller_item_result">
						<em>4 325</em>товаров
					</div>
				</div>
			</div>
		</div>
		
		<div id="footer">
			<button id="cancel" class="left cross">Отмена</button>
			<button id="seller_other_address" class="right">Другой адрес</button>
		</div>
			
	<? include './mobile/php/slide_panel.php'; ?>
		
	</div>
</div>

<? include './mobile/php/bottom_block.php'; ?>	
<? include './mobile/php/autocompit.php'; ?>

</body>
</html>