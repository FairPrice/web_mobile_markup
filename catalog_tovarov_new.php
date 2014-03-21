<!DOCTYPE html>
<html>
<head>
	<title>Каталог товаров</title>
	<? include './mobile/php/head.php'; ?>
</head>

<body>
<div id="wrapper" class="cartochka">
	<div id="header">
		<header>
			<div id="header_title">Каталог товаров</div>
		</header>
		<!--<div id="toggle_menu">Меню</div>-->
	</div>
	<div id="content_area">
		<div id="catalog_item">
			<div class="catalog_item_img">
				<img src="/mobile/images/catalog_item.jpg" />
				<!--<div class="item_poll"></div>-->
			</div>	
			<div class="catalog_item_content">
				<div class="catalog_item_header">Каша УМНИЦА 5 ЗЛАКОВ</div>
				<div class="catalog_item_text"><p>для детского питания, молочная с земляникой и тыквой, с 6 месяцев, в картоной коробке,</p><span>0.2 кг</span><span class="kod">4602804563852</span></div>
			</div>
		</div>
		<div id="catalog_content">
			<div class="header">Описание</div>
			<p>для детского питания, молочная с земляникой и тыквой, с 6 месяцев, в картоной коробке, для детского питания, молочная с земляникой и тыквой, с 6 месяцев, в картоной коробке, для детского питания, молочная с земляникой и тыквой, с 6 месяцев, в картоной коробке</p>
		</div>
	</div>
	
	<div id="footer">
		<div id="footer_google_link"><a href="#"><span>все товары в одном приложении на googleplay</span></a></div>
	</div> 
	
	
	
	<? include './mobile/php/slide_panel.php'; ?>
	
	
	<div id="add_price_window" class="modal_window">
		<div class="modal_window_header">Добавить цену</div>
		<div class="modal_window_content">
			<div class="select_seller">
				<div class="input_text_wrap no_remove">
					<input type="text" value="" placeholder="Выберите продавца">
					<div class="edit"></div>
				</div>
			</div>
			<div class="input_price">
				<div class="input_text_wrap"><input type="number" value=""></div>
				<div class="currency">руб</div>
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
		$$('#footer_action #add_price').tap(function() {
			var name = $("#catalog_item .catalog_item_header").text();			
			$("#add_price_window .modal_window_header").text(name);
			$('#add_price_window').modal(
				{onShow:function() {
					$("#add_price_window input").focus();
					$("#footer").addClass("absolute");
				}},
				{onClose:function() {
					$("#footer").removeClass("absolute");
				}}			
			);
		});	
		$$('#add_price_window .modal_window_ok').tap(function() {			
			var cur_price = $("#add_price_window .input_price input").val();
			if(!cur_price.length == '') {
				var D = new Date();
				var Day = D.getDate();
				var Day = String(Day);
				if(Day.length < 2) {
					var Day = 0 + Day;
				}
				var Month = D.getMonth() + 1;
				var Year = D.getFullYear();
				var current_date = Day + "." + Month + "." + Year;
				var seller_price_item = "<div class='seller_price_item'><div class='no_name'><em>Моя цена</em></div><div class='price'><em>"+ cur_price +"</em>"+ current_date +"</div></div>";
				$("#seller_price").prepend(seller_price_item);
				$(this).prev().trigger('click');
				$("#footer").removeClass("absolute");
			} else {
				alert("Необходимо указать цену");
			}

		});

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
	
</div>

</body>
</html>