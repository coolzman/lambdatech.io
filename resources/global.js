var timeout;

$(document).ready(function(){
	
	
	
	set_footer();
	toggle_sub_menu();
	
	$("img").load(function(){
		set_footer();
	});
});

$(window).resize(function(){
	set_footer();
});

function set_lambda(){
	if( $(".img-lambda").length ){
		var content_h	= $("#header-wrapper").outerHeight() - $("#main-menu-wrapper").outerHeight() + $("#content-wrapper").outerHeight();
		var total_h		= content_h + 100;
		
		$(".img-lambda").height(total_h);
	}	
}

function set_footer(test){
	set_lambda();
	set_content_bg();
	
	$("#footer-wrapper").height(100);
	
	var visible_h	= window.innerHeight;
	var doc_h		= $(document).height();
	var content_h	= $("#header-wrapper").outerHeight() + $("#content-wrapper").outerHeight() + 2; //border-top
	var total_h		= content_h + 100;
	
	//console.log( total_h+"|"+visible_h+"|"+doc_h );
	
	if( total_h < visible_h ){
		var footer_h = visible_h - content_h;
		$("#footer-wrapper").height(footer_h);
	}/*else if( total_h < doc_h ){
		var footer_h = doc_h - content_h;
		$("#footer-wrapper").height(footer_h);
	}*/
}

function set_content_bg(){
	if( $("#content-bg").length ){
		var el_content_bg	= $("#content-bg");
		var el_content_w	= $("#content-wrapper");
		
		el_content_bg.css({
			width: el_content_w.width() + "px",
			height: el_content_w.height() + "px"
		});
	}
}



function toggle_sub_menu(){
	$(".menu-toggle").mouseenter(function(){
		
		/*setTimeout(function () {
        $(this).addClass("active");
		$(".sub-menu:visible").hide();
		$(this).find(".sub-menu").show();
    }, 100);*/
	
	
	
	
	
	
	$(this).addClass("active");
		$(".sub-menu:visible").hide();
		$(this).find(".sub-menu").show();
		
		
		
		
	});
	
	
	
	
	
	$(".menu-toggle").mouseleave(function(){
		
		/*setTimeout(function () {
        $(this).removeClass("active");
		$(".sub-menu:visible").hide();
    }, 100);*/
	
	$(this).removeClass("active");
		$(".sub-menu:visible").hide();
		
		
	});
	
	
	
	$(".menu-toggle2").mouseenter(function(){
		
		//setTimeout(function () {
        $(this).addClass("active");
		$(".sub-menu2:visible").hide();
		$(this).find(".sub-menu2").show();
    //}, 100);
		
	});
	
	
	$(".menu-toggle2").mouseleave(function(){
		//setTimeout(function () {
        $(this).removeClass("active");
		$(".sub-menu2:visible").hide();
    //}, 100);
	});
}

function set_timer(callback, delay) {
    var timer_id, start, remaining = delay;

    this.clear = function() {
        window.clearTimeout(timer_id);
    };

    this.pause = function() {
        window.clearTimeout(timer_id);
        remaining -= new Date() - start;
    };

    this.resume = function() {
        start = new Date();
        timer_id = window.setTimeout(callback, remaining);
    };

    this.resume();
}