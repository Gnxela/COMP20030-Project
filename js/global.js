
$(document).ready(function() {
	headerScroll();
	$(window).scroll(headerScroll);
	footerUpdate();
});

function headerScroll() {
	console.log(1);
	var header = $(".header")
	var scroll = $(window).scrollTop();

	if (scroll >= $(".headerContainer").offset().top) {
		header.addClass("stuck");
	} else {
		header.removeClass("stuck");
	}
}

function footerUpdate() {
	if ($(document).height() <= $(window).height()) {
		$(".footer").addClass("stick");
	} else {
		$(".footer").removeClass("stick");
	}
}
