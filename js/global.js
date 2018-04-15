
$(document).ready(function() {
	headerScroll();
	$(window).scroll(headerScroll);
});

function headerScroll() {
	var header = $(".header")
	var scroll = $(window).scrollTop();

	if (scroll > $(".frontpage").height()) {
		header.addClass("stuck");
	} else {
		header.removeClass("stuck");
	}
}
