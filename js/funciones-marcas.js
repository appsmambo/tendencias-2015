function redimensionar() {
	var anchoWindow;
	anchoWindow = $(window).width();
	$('#wrapper').width(anchoWindow - 120);
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
	$('.play').click(function() {
		$(this).fadeTo('slow', 0, function() {
			$(this).hide();
		});
		return false;
	});
	window.onresize = redimensionar;

	setTimeout(function(){
		$(".bar-toogle").trigger("click");
	}, 5000);
});