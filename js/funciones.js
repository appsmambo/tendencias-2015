function redimensionar() {
	var anchoWindow;
	anchoWindow = $(window).width();
	$('#wrapper').width(anchoWindow - 116);
}

	var player;
	var player2;

	// this function gets called when API is ready to use
	function onYouTubePlayerAPIReady() {
	  // create the global player from the specific iframe (#video)
	  player = new YT.Player('video-1', {
	    events: {
	      // call this function when player is ready to use
	      'onReady': onPlayerReady
	    }
	  });

	  player2 = new YT.Player('video-2', {
	    events: {
	      // call this function when player is ready to use
	      'onReady': onPlayerReady2
	    }
	  });
	}

	function onPlayerReady(event) {
	  
	  // bind events
	  var playButton = document.getElementById("sarah-1");
	  playButton.addEventListener("click", function() {
	    player.playVideo();
	     player2.pauseVideo();
	  });

	 
	  
	  /*var pauseButton = document.getElementById("pause-button");
	  pauseButton.addEventListener("click", function() {
	    player.pauseVideo();
	  });*/
	  
	}

	function onPlayerReady2(event) {
	  
	 var playButton2 = document.getElementById("sarah-2");
	  playButton2.addEventListener("click", function() {
	    player2.playVideo();
	    player.pauseVideo();
	  });
	  
	  /*var pauseButton = document.getElementById("pause-button");
	  pauseButton.addEventListener("click", function() {
	    player.pauseVideo();
	  });*/
	  
	}

	

$(document).ready(function () {

	$('a').smoothScroll();
	$('.cerrar-full-size').click(function() {
		$(this).fadeOut();
		$('.contenedor-home').fadeIn('fast', function() {
			$('.contenedor-home-full-size').slideToggle('slow');
		});
	});

	// Inject YouTube API script
	var tag = document.createElement('script');
	tag.src = "//www.youtube.com/player_api";
	var firstScriptTag = document.getElementsByTagName('script')[0];
	firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

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

	

	$('.maped').rwdImageMaps();
	
	$('.play').click(function() {
		$(this).fadeTo('slow', 0, function() {
			$(this).hide();
		});
		return false;
	});

	$(".fancybox").fancybox({
		maxWidth: 800,
		maxHeight: 716,
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
		mode: 'fade'
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