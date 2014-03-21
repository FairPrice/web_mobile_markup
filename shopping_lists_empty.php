<!DOCTYPE html>
<html>
<head>
	<title>Мои списки покупок</title>
	<? include './mobile/php/head.php'; ?>
</head>

<body>
<div id="wrapper">
	<main id="content_region">
		<div>
			<div id="header_region">
				<div id="header">
					<header>
						<div id="header_title">Мои списки покупок</div>
						<div id="total_number">6</div>
					</header>
					<div id="toggle_menu">Меню</div>
				</div>
			</div>
			<section id="section_region">
				<div class="empty_content_wrap">
					<div id="content_area">	
						<div id="empty_list" class="empty_block_content">
							<img src="/mobile/images/empty_list_bg.png">
							<p>Нет списков покупок.</p><p>Создайте новый!</p>
						</div>
					</div>
				</div>
			</section>
			<div id="footer_region">
				<div id="footer">
					<button href="#add_shopping_lists_modal" class="add_button">Новый список</button>		
					<div id="footer_action_list">
						<a href="#" class="edit"></a>
						<a href="#" class="copy"></a>
						<a href="#" class="delete"></a>
						<a href="#submit_list" class="submit"></a>
					</div>
				</div>
			</div>
		</div>
	</main>
	<? include './mobile/php/slide_panel.php'; ?>
</div>

<div id="add_shopping_lists_modal">
	<div class="modal_head">Создать список</div>
	<div class="modal_content">Введите название</div>
	<div class="modal_footer">OK</div>
</div>	
	
<div id="modal_window" class="modal_window">
	<div class="modal_window_header">Создать список</div>
	<div class="modal_window_content"><div class="input_text_wrap"><input type="text" value="" placeholder="Введите название"></div></div>
	<div class="modal_window_footer">
		<div class="simplemodal-close">Отмена</div>
		<div class="modal_window_ok">Ok</div>
	</div>
</div>

<div id="modal_window_receiv" class="modal_window">
	<div class="modal_window_header">Получения списка покупок</div>
	<div class="modal_window_content">Пользователь nekulin123123@gmail.com прислал Вам список покупок</div>
	<div class="modal_window_footer">
		<div class="simplemodal-close">Удалить</div>
		<div class="modal_window_ok">Сохранить</div>
	</div>
</div>	

<div id="modal_window_edit" class="modal_window">
	<div class="modal_window_header">Редактирование списка</div>
	<div class="modal_window_content"><div class="input_text_wrap"><input type="text" value=""></div></div>
	<div class="modal_window_footer">
		<div class="simplemodal-close">Отмена</div>
		<div class="modal_window_ok">Ok</div>
	</div>
</div>	

<? include './mobile/php/bottom_block.php'; ?>

<script>
$(document).ready(function() {
	$('#footer .add_button').on('touchstart',function() {
		$('#modal_window').modal({onOpen: function(){
			alert("lk");
		}});
	});
	$("#modal_window .modal_window_ok").bind('touchstart', function() {
		var input_val = $("#modal_window .input_text_wrap input").val();
		if($(this).parent().parent().find("input:text").val() != "") {
			$("<div class='shopping_lists_item'><p>" + input_val + "</p><span>5</span><div class='chekbox'></div>").prependTo("#shopping_lists");
			$(this).prev().trigger("click");		
		}
	});
	$('#shopping_lists .received').on('touchstart',function() {
		$('#modal_window_receiv').modal();
	});
	$('#modal_window_receiv .simplemodal-close').bind('touchstart', function() {
		$("#shopping_lists .received").remove();
	});	
	$('#modal_window_receiv .modal_window_ok').bind('touchstart', function() {
		$("#shopping_lists .received").removeClass("received").find("span").text("10");
		$(this).prev().trigger("click");
	});
	
	$('#footer #footer_action_list .copy').live('touchstart',function() {		
		var shopping_list_copy = $("#shopping_lists .selected").html();	
		$("<div class='shopping_lists_item'>" + shopping_list_copy + "</div").prependTo("#shopping_lists");
	});	
	
	$('#footer #footer_action_list .edit').live('touchstart',function() {		
		var edit_data = $("#shopping_lists .selected p").text();
		$('#modal_window_edit .input_text_wrap input').val(edit_data);
		$('#modal_window_edit').modal();
	});
	$('#modal_window_edit .modal_window_ok').bind('touchstart', function() {
		var input_val = $("#modal_window_edit .input_text_wrap input").val();
		$("#shopping_lists .selected p").text(input_val);
		$(this).prev().trigger("click");
	});
	
});
</script>

</body>
</html>