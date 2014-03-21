<!DOCTYPE html>
<html>
<head>
	<title>Списки покупок</title>
	<? include './mobile/php/head.php'; ?>
</head>

<body>
<div id="wrapper">
	<main id="content_region">
		<div>
			<div id="header_region">
				<div id="header_action_list">
					<div href="#" class="header_action_list_left"></div>
					<div class="header_action_list_right">Мои любимые товары</div>
				</div>
				<div id="header">
					<header>
						<div id="header_title">Списки покупок</div>
						<div id="total_number">6</div>
					</header>
					<div id="toggle_menu">Меню</div>
				</div>	
			</div>
			<section id="section_region">
				<div class="bg_color_wrap">
					<div id="content_area">		
						<div id="shopping_lists">
							<div class="shopping_lists_item received"><p>Продукты на 8 марта</p><span></span></div>
							<div class="shopping_lists_item have_info"><p>Мои любимые товары</p><div class="information"></div><span>23</span><div class="chekbox"></div></div>
							<div class="shopping_lists_item have_info"><p>Мои любимые товары которые я ем каждый день на завтрак</p><div class="information"></div><span>23</span><div class="chekbox"></div></div>
							<div class="shopping_lists_item"><p>Мои любимые товары</p><span>23</span><div class="chekbox"></div></div>
							<div class="shopping_lists_item"><p>Мои любимые товары которые я ем каждый день на завтрак</p><span>23</span><div class="chekbox"></div></div>	
							<div class="shopping_lists_item"><p>Мои любимые товары</p><span>586</span><div class="chekbox"></div></div>
							<div class="shopping_lists_item"><p>Мои любимые товары</p><span>2</span><div class="chekbox"></div></div>
							<div class="shopping_lists_item"><p>Мои любимые товары</p><span>376</span><div class="chekbox"></div></div>					
						</div>
					</div>					
				</div>
			</section>
			<div id="footer_region">
				<div id="footer">
					<button href="#add_shopping_lists_modal" class="add_button">Новый список</button>		
					<div id="footer_action_list">
						<a href="#" class="edit"><span class="button_text">Изменить</span></a>
						<a href="#" class="copy"><span class="button_text">Копировать</span></a>
						<a href="#" class="delete"><span class="button_text">Удалить</span></a>
						<a href="#submit_list" class="submit"><span class="button_text">Отправить</span></a>
					</div>
					<div id="footer_select_button"><span class="button_text">Выделить</span></div>
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
	/*
	$$('#footer .add_button').tap(function() {
		$('#modal_window').modal({onShow: function() {
			$('#modal_window input').focus();
		}});
	});	
	*/
	$$("#modal_window .modal_window_ok").tap(function() {
		var input_val = $("#modal_window .input_text_wrap input").val();
		if($(this).parent().parent().find("input:text").val() != "") {
			$("<div class='shopping_lists_item'><p>" + input_val + "</p><span>1</span><div class='chekbox'></div>").prependTo("#shopping_lists");
			$("#footer").removeClass("absolute");
			$.modal.close();		
		}
	});
	$$('#shopping_lists .received').tap(function() {
		$('#modal_window_receiv').modal(
			{onShow:function() {
				$("#footer").addClass("absolute");
			}},
			{onClose:function() {
				$("#footer").removeClass("absolute");
			}}			
		);
	});
	$$('#modal_window_receiv .simplemodal-close').tap(function() {
		$("#shopping_lists .received").remove();
		$("#footer").removeClass("absolute");
		$.modal.close();
	});	
	$$('#modal_window_receiv .modal_window_ok').tap(function() {
		$("#shopping_lists .received").removeClass("received").find("span").text("10").parent().prepend('<div class="chekbox"></div>');
		$("#footer").removeClass("absolute");
		$.modal.close();
	});
	
	
	$$('#footer #footer_action_list .delete').tap(function() {
		$("#shopping_lists .shopping_lists_item.selected").remove();
	});
	
	
	$$('#footer #footer_action_list .copy').tap(function() {		
		var shopping_list_copy = $("#shopping_lists .selected").html();	
		$("<div class='shopping_lists_item'>" + shopping_list_copy + "</div").prependTo("#shopping_lists");
	});	
	
	$$('#footer #footer_action_list .edit').tap(function() {		
		var edit_data = $("#shopping_lists .selected p").text();
		$('#modal_window_edit .input_text_wrap input').val(edit_data);
		$('#modal_window_edit').modal(
			{onShow:function() {
				$("#modal_window_edit input").focus();
				$("#footer").addClass("absolute");
			}},
			{onClose:function() {
				$("#footer").removeClass("absolute");
			}}			
		);
	});
	
	$$('#modal_window_edit .modal_window_ok').tap(function() {
		var input_val = $("#modal_window_edit .input_text_wrap input").val();
		$("#shopping_lists .selected p").text(input_val);
		$("#footer").removeClass("absolute");
		$.modal.close();
	});
	

	
});
</script>

</body>
</html>