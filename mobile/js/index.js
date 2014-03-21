$(document).ready(function() {

	$('#content_slider').carouFredSel({
		align:"left",
		responsive: true,
		auto:false,
		items: {
			visible: 1,
			width: 100,
			height: 165
		},
		scroll: {
			duration: 1000,
			timeoutDuration: 500,
			fx: 'uncover-fade'
		},
		swipe: {
			onTouch:true,
			onMouse:true
		},
		pagination: '#content_slider_pagination'
	});		

/****************************/

    var slide_panel = $("#slide_panel");
    var slide_panel_header_wrap = $("#slide_panel_header_wrap");
    var slide_panel_content = $("#slide_panel_content");
	
	

    function auto_resize() {
        var height = $(window).height();
        var width = $(window).width();

        slide_panel.css("height",height+52);
        slide_panel_content.css("height", height-60);
        slide_panel_header_wrap.css("width",width);
    }


    $(window).resize(function(){
        if($("#slide_panel").hasClass("disclosed")) {
            auto_resize();
        }
    });

    window.addEventListener('load', function(){
        setTimeout(scrollTo, 0, 0, 1);
    }, false);


    /*****************************************************/

    var panel_width = $("#slide_panel").width();

    $$("#slide_panel .close").tap(function() {
        slide_panel.css("left",-panel_width);
        slide_panel.removeClass("disclosed");
        slide_panel_header_wrap.css("width",panel_width);
    });


    $$("#toggle_menu").tap(function() {
        if(slide_panel.hasClass("disclosed")) {
            slide_panel.css("left",-panel_width);
            slide_panel_header_wrap.css("width",panel_width);
        } else {
            slide_panel.addClass("disclosed");
            slide_panel.css("left","0px");
            auto_resize();
        }
    });
		

    $$("#toggle_menu_active").tap(function() {
        slide_panel.css("left",-panel_width);
        slide_panel.removeClass("disclosed");
        slide_panel_header_wrap.css("width",panel_width);
    });

    $(window).swipe({
        allowPageScroll: "auto",
        swipeRight:function(event, direction, distance, duration, fingerCount) {
            slide_panel.css("left","0px");
            slide_panel.addClass("disclosed");
            auto_resize();
        },
        click:function (event, target) {
            if ($(target).attr('for')!==undefined) {
                $("input[id='" + $(target).attr('for') + "']").click();
            }
            if ($(target).attr('href')!==undefined) {
                window.location = $(target).attr('href');
            } else {
                $(target).on('click');
                $(target).on('touchstart');
            }
        },
        triggerOnTouchLeave: true,
        triggerOnTouchEnd: true,
        fallbackToMouseEvents: false,
        excludedElements: "label, button, input, select, textarea, .noSwipe",
        threshold:100
    });

    $("#slide_panel").swipe( {
        allowPageScroll: "auto",
        swipeLeft:function(event, direction, distance, duration, fingerCount) {
            slide_panel.css("left",-panel_width);
            slide_panel.removeClass("disclosed");
            slide_panel_header_wrap.css("width",panel_width);
        },
        threshold:100
    });
	
	$$(window).swipeLeft(function() {
		alert("LEFT");
	});

    /*****************************************************/

    $$("#slide_panel_user_select").tap(function() {
        if($(this).find("#slide_panel_user_menu").hasClass("active")) {
            $(this).find("#slide_panel_user_menu").fadeOut(200).removeClass("active");
        } else {
            $(this).find("#slide_panel_user_menu").fadeIn(200).addClass("active");
        }
    });

    $$("#slide_panel_user_menu a").tap(function() {
        $("#slide_panel_user_menu").fadeOut(200);
    });

    /******************************************************/
	
});		