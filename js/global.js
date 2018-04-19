
$(document).ready(function() {
	headerScroll();
	footerUpdate();
	$(window).on('scroll', headerScroll);
	$("img").on('load', footerUpdate);//Images aren't always fully loaded the the DOM tree finishes loading. So we have to recalculate every time an image loads.
});

function headerScroll() {
	var header = $(".header")
	var scroll = $(window).scrollTop();
	header.removeClass("stuck");
	if (scroll >= $(".headerContainer").offset().top) {
		header.addClass("stuck");
	}
}

function footerUpdate() {
	$(".footer").removeClass("stick");
	if ($(document).height() <= $(window).height()) {
		$(".footer").addClass("stick");
	}
}
