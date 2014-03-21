<!DOCTYPE html>
<html>
<head>
	<title>Избранные товары</title>
	<? include './mobile/php/head.php'; ?>
</head>

<body>
<div id="wrapper">
	<main id="content_region">
		<div>
			<div id="header_region">
				<div id="header">
					<header>
						<div id="header_title">Избранные товары</div>
						<div id="total_number">29</div>
					</header>
					<div id="toggle_menu">Меню</div>
				</div>
			</div>
			<section id="section_region">
				<div class="empty_content_wrap">
					<div id="content_area">
						<div id="favorit_empty" class="empty_block_content">
							<img src="/mobile/images/favorit_empty.png">
							<p>Товары не выбраны.</p><p>Добавляйте с помощью кнопок </p>
						</div>
					</div>					
				</div>
			</section>
			<div id="footer_region">
				<div id="footer">
					<div id="popup_add_tovar">
						<a href="#" class="add_tovar_by_name">Добавить по наименованию</a>
						<a href="#" class="add_tovar_by_kod">Сканировать штрихкод</a>
					</div>	
					<button class="add_product">Добавить товар</button>	
				</div> 
			</div>
		</div>
	</main>
	<? include './mobile/php/slide_panel.php'; ?>	
</div>

<div id="modal_window" class="modal_window">
	<div class="modal_window_header">Добавить товар</div>
	<div class="modal_window_content"><div class="input_text_wrap"><input type="text" value=""></div></div>
	<div class="modal_window_footer">
		<div class="simplemodal-close">Отмена</div>
		<div class="modal_window_ok">Ok</div>
	</div>
</div>


<? include './mobile/php/bottom_block.php'; ?>

<script>
$(document).ready(function() {
	$('#popup_add_tovar .add_tovar_by_name').on('touchstart',function() {
		$('#modal_window').modal(
			{onShow:function() {
				$("#modal_window input").focus();
				$("#footer").addClass("absolute");
			}},
			{onClose:function() {
				$("#footer").removeClass("absolute");
			}}		
		);
		$("#popup_add_tovar").css("display","none").removeClass("show");
	});
});
</script>
	
</body>
</html>