<!DOCTYPE html>
<html>
<head>
	<title>Выбор продавца в г.Чебоксары</title>
	<? include './mobile/php/head.php'; ?>
</head>

<body>
<div id="wrapper">
	<main id="content_region">
		<div>	
			<div id="header_region">
				<div id="header">
					<header>
						<div id="header_title">Продавцы в г.Чебоксары</div>
					</header>
					<div id="toggle_menu" >Меню</div>
				</div>
			</div>
			<section id="section_region">
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
				</div>
			</section>
			<div id="footer_region">
				<div id="footer">
					<button id="cancel" class="left cross">Отмена</button>
					<button id="seller_other_address" class="right">Другой адрес</button>
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