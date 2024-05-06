$(document).ready(function slider_3() {
	console.log("slider");
	$(".slider").slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		arrows: false,
		dots: false,
		autoplay: true
	})
});
