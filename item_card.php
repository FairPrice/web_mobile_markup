<!DOCTYPE html>
<html>
<head>
	<title>Карточка продавца</title>
	<? include './mobile/php/head.php'; ?>
</head>

<body>
<div id="wrapper">
	<div class="top_panel_wrap">
		<div id="header">
			<header>
				<div id="header_title"><span>Перекресток</span>, г.Чебоксары ул.Ленинградская, 31, к.2</div>
				<div id="header_label"></div>
			</header>
			<div id="toggle_menu">Меню</div>
		</div>
		<div id="product_search_seller">
			<div class="total"><span>4 235</span>товаров</div>
			<div class="item scan"><a href="#"><div class="icon"></div></a></div>
			<div class="item by_name"><a href="#"><div class="icon"></div></a></div>
			<div class="item by_categorys"><a href="#"><div class="icon"></div></a></div>
			<div class="item action"><a href="#"><div class="icon"></div></a></div>
		</div>
		<div id="content_area">
			<div id="catalog_item">
				<div class="catalog_item_img">
					<img src="/mobile/images/catalog_item.jpg" />
					<div class="item_poll"></div>
				</div>	
				<div class="catalog_item_content">
					<div class="catalog_item_header">Какаша УМНИЦА 5 ЗЛАКОВ</div>
					<div class="catalog_item_text">для детского питания, молочная с земляникой и тыквой, с 6 месяцев, в картоной коробке,<span>0.2 кг</span></div>
				</div>
			</div>	
			<div id="item_card_header">
				<div class="item_card_header_name">Цена продавца</div>
				<div class="item_card_header_val">
					<em>834</em>15.04.2013
				</div>
			</div>
			<div id="item_card_content">для детского питания, молочная с земляникой и тыквой, с 6 месяцев, в картоной коробке, для детского питания, молочная с земляникой и тыквой, с 6 месяцев, в картоной коробке, для детского питания, молочная с земляникой и тыквой, с 6 месяцев, в картоной коробке, для детского питания, молочная с земляникой и тыквой, с 6 месяция, молочная с земляникой и тыквой, с 6 месяцев, в картоной коробке</div>
		</div>
		
		<div id="footer">
			<div id="footer_action">
				<button id="add_to_list" onClick="javascript:document.location.href='/add_to_list.php'"><span class="button_text">В список</span></button>
				<button id="add_price"><span class="button_text">Доб.цену</span></button>
				<button id="edit"><span class="button_text">Изменить</span></button>
				<button id="add_to_favorit"><span class="button_text">Избранное</span></button>
			</div>			
		</div> 
		
	<? include './mobile/php/slide_panel.php'; ?>
		
	</div>
</div>	

	<div id="add_price_window" class="modal_window">
		<div class="modal_window_header">Добавить цену</div>
		<div class="modal_window_content">
			<div class="select_seller green_border">
				<span>Перекресток</span> ул 139 стрековой дивизии Колчака, д.138, к.2<a href="#"><img src="/mobile/images/icon/48/ic_action_edit.png"/></a>
			</div>
			<div class="input_price">
				<div class="input_text_wrap"><input type="text" onfocus="this.type='number'" onblur="this.type='text'" placeholder="Введите цену" value=""/></div>
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
		
	});
	</script>	

</body>
</html>