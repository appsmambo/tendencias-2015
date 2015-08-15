function redimensionar() {
	var anchoWindow;
	anchoWindow = $(window).width();
	$('#wrapper').width(anchoWindow - 130);
}

$(document).ready(function () {
	redimensionar();
	$(".bar-toogle").on("click", function () {
		if ($(this).hasClass('active')) {
			$(".navs .menu-list").fadeOut("slow");
			$(this).removeClass('active');
			setTimeout(function () {
				$(".navs.yellow").removeClass("nav-ancho animated");
				$("nav.header").removeClass('left-margin');
			}, 500);
		} else {
			$(this).addClass('active');
			$("nav.header").addClass('left-margin');
			$(".navs.yellow").addClass("nav-ancho easeOutExpo animated");
			setTimeout(function () {
				$(".navs .menu-list").fadeIn("slow");
			}, 500);
		}
	});
	/*$( ".menu-lookbook" ).on( "click", function() {
	 $( ".lista-lookbook" ).slideToggle( "slow");
	 });*/
	$('.item').hover(
		function () {
			$('.detalle-item', this).fadeIn("slow");
		},
		function () {
			$('.detalle-item', this).fadeOut("slow");
		}
	);
	
	var div_alto = $(".marca-right").height();
	var div_alto_2 = $(".video-marca").height();

	var altototal = div_alto - div_alto_2;
	$(".content-tendencias").height(altototal);

	$('#marcas .col-sm-12 img[usemap]').rwdImageMaps();
	
	

	$(".fancybox").fancybox({
		maxWidth: 800,
		padding: 0
	});
	$(".combinando").fancybox({
		maxWidth: 800,
		padding: 0,
		onUpdate: function () {
			$(".fancybox-close").addClass("close-combinalo");
		}
	});
	$('.bxslider').bxSlider({
		pagerCustom: '#bx-pager',
		mode: 'fade',
		controls: false
	});
	
	$(window).scroll(function () {
		/* Check the location of each desired element */
		$('.item').each(function (i) {
			var bottom_of_object = $(this).offset().top + $(this).outerHeight();
			var bottom_of_window = $(window).scrollTop() + $(window).height();
			/* If the object is completely visible in the window, fade it it */
			if (bottom_of_window > bottom_of_object) {
				$(this).animate({'opacity': '1'}, 500);
			}
		});
	});
	window.onresize = redimensionar;
});