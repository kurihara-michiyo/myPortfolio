$(function () {

	function fadeUpEffect() {
		$('.fadeUpEffect').each(function () {
			var elemPos = $(this).offset().top + 100;
			var scroll = $(window).scrollTop();
			var windowHeight = $(window).height();
			if (scroll >= elemPos - windowHeight) {
				$(this).addClass('fadeUp');
			}
		});
	}
	$(window).scroll(function () {
		fadeUpEffect();
	});


	function fadeIn() {
		$('.fadeIn').each(function () {
			var elemPos = $(this).offset().top + 100;
			var scroll = $(window).scrollTop();
			var windowHeight = $(window).height();
			if (scroll >= elemPos - windowHeight) {
				$(this).addClass('fade-in');
			}
		});
	}
	$(window).scroll(function () {
		fadeIn();
	});




	// ページトップへ戻る
	var $pageTop = $('.page-top_btn');
	$(window).scroll(function () {
		if ($(this).scrollTop() > 400) {
			$pageTop.fadeIn();
		} else {
			$pageTop.fadeOut();
		}
	});
	$pageTop.on('click', function () {
		$('body,html').animate({
			scrollTop: 0
		}, 600);
		return false;
	});

});