function redimensionar() {
	var anchoWindow;
	anchoWindow = $(window).width();
	$('#wrapper').width(anchoWindow - 118);
}
function redimensionarEmbed(embed) {
	var control = $('#'+embed);
	control.fadeIn('slow');
}

var player;
var player2;

// this function gets called when API is ready to use
function onYouTubePlayerAPIReady() {
	// create the global player from the specific iframe (#video)
	player = new YT.Player('iframe-video-1', {
		events: {
			// call this function when player is ready to use
			'onReady': onPlayerReady
		}
	});

	player2 = new YT.Player('iframe-video-2', {
		events: {
			// call this function when player is ready to use
			'onReady': onPlayerReady2
		}
	});
}

function onPlayerReady(event) {
	var playButton = document.getElementById("video-1");
	playButton.addEventListener("click", function () {
		player.playVideo();
		if (typeof player2.pauseVideo == 'function')
			player2.pauseVideo();
	});

	/*var pauseButton = document.getElementById("pause-button");
	 pauseButton.addEventListener("click", function() {
	 player.pauseVideo();
	 });*/
}

function onPlayerReady2(event) {
	var playButton2 = document.getElementById("video-2");
	playButton2.addEventListener("click", function () {
		player2.playVideo();
		player.pauseVideo();
	});

	/*var pauseButton = document.getElementById("pause-button");
	 pauseButton.addEventListener("click", function() {
	 player.pauseVideo();
	 });*/
}

$(document).ready(function () {
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
	$('.play').click(function () {
		var control = $(this);
		control.fadeTo('slow', 0, function () {
			var embed = control.data('embed');
			redimensionarEmbed(embed);
		});
		return false;
	});
	window.onresize = redimensionar;

	setTimeout(function () {
		$(".bar-toogle").trigger("click");
	}, 5000);
});