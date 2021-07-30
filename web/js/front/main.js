$(document).on('ready', function() {

	$(".regular").slick({
		infinite: true,
		slidesToShow: 3,
		slidesToScroll: 3,
		dots: true,
		arrows: false,
		responsive: [
			{
				breakpoint: 991,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2,
					infinite: true,
					dots: true
				}
			},
			{
				breakpoint: 600,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				}
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				}
			}]
	});

	if ($(window).width() < 575) {
		$('#main-mobil-1').text('Физ. лица');
		$('#main-mobil-2').text('Юр. лица');
	}
});

$(".navbar-toggler").on('click',function () {
	if($('.navbar-collapse').is('.show')){
		$('.shadow-section').hide();
	}else{
		$('.shadow-section').show();
	}
})






