<!DOCTYPE html>
<html>
<head>
	<title>Каталог товаров</title>
	<? include './mobile/php/head.php'; ?>	
</head>

<body>
<div id="wrapper">
	<div id="header">
		<header>
			<div id="header_title">Каталог товаров</div>
			<div id="header_right_icons">				
				<div class="header_search"></div>
				<div class="barcode"></div>
			</div>
		</header>
		<div id="toggle_menu">Меню</div>
	</div>
	<div id="content_area">
		<div id="catalog_item">
			<div class="catalog_item_img">
				<img src="/mobile/images/catalog_item.jpg" />
				<img class="disable" src="/mobile/images/icon/48/ic_action_replay.png" />
				<img class="add" src="/mobile/images/add_imag_cart.png" />
				<div class="item_poll"></div>
			</div>	
			<div class="catalog_item_content">
				<div class="catalog_item_header">Каша УМНИЦА 5 ЗЛАКОВ</div>
				<div class="catalog_item_text">для детского питания, молочная с земляникой и тыквой, с 6 месяцев, в картоной коробке,<span>0.2 кг</span><span class="kod">4602804563852</span></div>
			</div>
		</div>
		<ul id="sellers_list_tabs">
			<li><a href="#seller_price">Цены</a></li>
			<li><a href="#seller_content">Описание</a></li>
		</ul>
		<div id="sellers_list">
			<div id="seller_price" class="tab_content">
				<!--<div class="seller_price_item"><div class="no_name">Моя цена</div><div class="price"><em>834</em>15.04.2013</div></div>-->
				<div class="seller_price_item"><div class="name"><em>Перекрёсток</em>пр-т Тракторостроителей, 76</div><div class="price"><em>834</em>15.04.2013</div></div>
				<div class="seller_price_item"><div class="name"><em>Перекрёсток</em>пр-т Тракторостроителей, 76</div><div class="price"><em>834</em>15.04.2013</div></div>
				<div class="seller_price_item"><div class="name"><em>Перекрёсток</em>пр-т Тракторостроителей, 76</div><div class="price"><em>834</em>15.04.2013</div></div>
				<div class="seller_price_item"><div class="name"><em>Перекрёсток</em>пр-т Тракторостроителей, 76</div><div class="price"><em>834</em>15.04.2013</div></div>
				<div class="seller_price_item"><div class="name"><em>Перекрёсток</em>пр-т Тракторостроителей, 76</div><div class="price"><em>834</em>15.04.2013</div></div>
				<div class="seller_price_item"><div class="name"><em>Перекрёсток</em>пр-т Тракторостроителей, 76</div><div class="price"><em>834</em>15.04.2013</div></div>
			</div>
			<div id="seller_content" class="tab_content">для детского питания, молочная с земляникой и тыквой, с 6 месяцев, в картоной коробке, для детского питания, молочная с земляникой и тыквой, с 6 месяцев, в картоной коробке, для детского питания, молочная с земляникой и тыквой, с 6 месяцев, в картоной коробке, для детского питания, молочная с земляникой и тыквой, с 6 месяцев, в картоной коробке, для детского питания, молочная с земляникой и тыквой, с 6 месяцев, в картоной коробке, для детского питания, молочная с земляникой и тыквой, с 6 месяцев, в картоной коробке,</div>	
		</div>

	</div>
	
	<div id="footer">
		<div id="footer_action">
			<button id="add_to_list"><span class="button_text">В список</span></button>
			<button id="add_price"><span class="button_text">Доб.цену</span></button>
			<button id="edit"><span class="button_text">Изменить</span></button>
			<button id="add_to_favorit"><span class="button_text">Избранное</span></button>
		</div>
	</div>

	<div id="download_app">
		<div class="close"></div>
		<a href="http://play.google.com/store/apps/details?id=ru.chestnayacena.fairprice.android">Скачать приложение</a>
	</div>
	
	
	
	<? include './mobile/php/slide_panel.php'; ?>
	
	
	<div id="add_price_window" class="modal_window">
		<div class="modal_window_header">Добавить цену</div>
		<div class="modal_window_content">
			<div class="select_seller green_border">
				<span>Перекресток</span> ул 139 стрековой дивизии Колчака, д.138, к.2<a href="#"><img src="/mobile/images/icon/48/ic_action_edit.png"/></a>
			</div>
			<div class="input_price">
				<div class="input_text_wrap"><input class="price_row" type="text" onfocus="this.type='number'" onblur="this.type='text'" placeholder="Введите цену" value=""/></div>
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
		</div>
		<div class="modal_window_footer">
			<div class="simplemodal-close">Отмена</div>
			<div class="modal_window_ok">Ok</div>
		</div>
	</div>	
	
	<div id="add_to_list_window" class="modal_window">
		<div class="modal_window_header">Добавление товара</div>
		<div class="modal_window_content">
			<div class="list_name slide_list"><span>Не задано название списка</span>
				<div class="list_name_items">
					<div class="list_name_item">Название списка 1</div>
					<div class="list_name_item">Название списка 2</div>
					<div class="list_name_item">Название списка 3</div>
					<div class="list_name_item">Название списка 4</div>
				</div>
			</div>
			<div class="edit_adress green_border">
				<span>Перекресток</span> ул 139 стрековой дивизии Колчака, д.138, к.2<a href="#"><img src="/mobile/images/icon/48/ic_action_edit.png"/></a>
			</div>
			<div class="edit_price">
				<div class="input_text_wrap"><input type="number" value="2132.58"></div>
				<div class="currency">руб</div>
			</div>
			<div class="edit_number">
				<div class="input_text_wrap">
					<div class="down"></div>
					<input type="number" value="1">
					<div class="up"></div>
				</div>
			</div>
			<div class="modal_chekbox"><input type="checkbox" id="go_go"><label for="go_go">Перейти в список</label></div>
		</div>
		<div class="modal_window_footer">
			<div class="simplemodal-close">Отмена</div>
			<div class="modal_window_ok">Добавить</div>
		</div>
	</div>		
	
	<? include './mobile/php/bottom_block.php'; ?>
	
	<script>
	$(document).ready(function() {

		$('.item_poll').rating({
			fx: 'float',
			image: '/mobile/images/poll_sprite.png',
			width: '18',
			url: 'rating.php',
			callback: function(responce){           
				this.vote_success.fadeOut(2000);
			}
		});	
			
		$$(".catalog_item_img img").tap(function() {
			if($(this).next("img").length) {
				$(this).hide();
				$(this).next().show();			
			} else {
				$(this).hide();
				$(".catalog_item_img img:first").show();
			}

		});	
		
	});
	</script>
	
</div>

</body>
</html>