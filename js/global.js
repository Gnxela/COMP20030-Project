
$(document).ready(function() {
	headerScroll();
	$(window).scroll(headerScroll);
	footerUpdate();
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
