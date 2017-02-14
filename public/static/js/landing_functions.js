/************************ new custom js *************************/
$(document).ready(function() {
	function heightDetect(){
		$(".landscape_head").css("height", $(window).height()-190);
	};
	heightDetect();
	$(window).resize(function() {
		heightDetect();
	});
	$('.slick-carousel').slick({
		dots: true,
		infinite: true,
		speed: 300,
		slidesToShow: 1,
		adaptiveHeight: true,
    autoplay: true,
	});
	$('.payroll-carousel').slick({
		arrows: true
	});

	var updateSlider = document.getElementById('tap');
    if (updateSlider != null) {
    	noUiSlider.create(updateSlider, {
    		start: 4,
    		behaviour: 'tap',
    		connect: 'upper',
    		range: {
    			'min':  1,
    			'max':  50
    		},
    		step: 1
    	});

    	var sliderBlock = $('.slider-value').clone();
    	$('.slider-value').remove();
    	$('.noUi-handle').append(sliderBlock);

    	updateSlider.noUiSlider.on('update', function( values, handle ) {
    		$('.users').text(1*values[handle]);
    		$('.rmCounter').text(100 + values[handle] * 6);
    	});
    }
    
	$('#scroll-navigation').find('a').click(function(e){
    / animate to position /
    var offsetPosition = $($(this).attr('href')).offset().top;
    $("html, body").stop().animate({ scrollTop: offsetPosition }, 1000);

    / change class when click /
    $('#scroll-navigation').find('li').removeClass('active');
    $(this).parent().addClass('active');

    e.preventDefault();
  });
});
