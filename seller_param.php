<!DOCTYPE html>
<html>
<head>
	<title>Продавцы в г.Чебоксары</title>
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
				<div class="addres_selection_wrap">
					<div id="search_filter_result">параметры</div>
					
					<div id="content_area">		
						<div id="seller_choice_parameters">
							<div class="item"><div class="modal_chekbox"><input type="checkbox" id="go_go1"><label for="go_go1">Интернет-магазины</label></div></div>	
							<div class="item"><div class="modal_chekbox"><input type="checkbox" id="go_go2"><label for="go_go2">Магазины в вашем городе</label></div></div>
							<div class="item"><div class="modal_chekbox"><input type="checkbox" id="go_go3"><label for="go_go3">Доставка на дом</label></div></div>
						</div>
					</div>
				</div>
			</section>
			<div id="footer_region">
				<div id="footer">
					<button id="reset_all" class="left cross">Сбросить все</button>
					<button id="ready" class="right accept">Готово</button>
				</div>
			</div>
		</div>
	</main>
	
	<? include './mobile/php/slide_panel.php'; ?>
</div>

<? include './mobile/php/bottom_block.php'; ?>

</body>
</html>