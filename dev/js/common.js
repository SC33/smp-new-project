function send_e(e,t){
	var n=$(e).find('#name').val(),
		tel=$(e).find('#tel').val();
	$.post('/email.php',
			{n:n, t:t, tel:tel, key:'qtSQtDyOAomGcSZWgoUFJbelb7gFz1fq'},function(data){if (!(data)){alert('Ошибка отправки данных.');}}
		).done(function(data) {
			$('#modal-ok').fadeIn().delay(1000).fadeOut();
		}).fail(function() {
			alert('Ошибка подключения.');
		});
}

$(function() {
	$('#images > div').each(function() {
		var $cfs = $(this);
		$cfs.carouFredSel({
			direction: 'up',
			circular: false,
			infinite: false,
			auto: false,
			scroll: {queue: 'last'},
			items: {visible: 1,width: 292,height: 292}
		});
		$cfs.hover(
			function() {$cfs.trigger('next');},
			function() {$cfs.trigger('prev');}
		);
	});
});

$(document).ready(function() {
	$(".fancybox-thumb").fancybox({
		prevEffect	: 'none',
		nextEffect	: 'none',
		showNavArrows : 'true',
		helpers	: {
			title	: {type: 'outside'},
			thumbs	: {width: 50,height: 50}
		}
	});
	$('ul.nav li.dropdown').hover(function() {$(this).find('.dropdown-menu').stop(true, true).delay(100).fadeIn(400);}, 
		function() {$(this).find('.dropdown-menu').stop(true, true).delay(100).fadeOut(400);});
	$('.open-modal').click(function(){$('#modal-zakaz').modal('show');});
	$('#tel').mask("+7 (999) 999-9999");
	$('#send_btn').click(function () {if ($('#tel').val!='') {send_e('#contact-form','Заказ с сайта')}});
//Back To Top	
	var offset = 300,
		offset_opacity = 1200,
		scroll_top_duration = 700,
		$back_to_top = $('.cd-top');
	$(window).scroll(function(){
		( $(this).scrollTop() > offset ) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
		if( $(this).scrollTop() > offset_opacity ) {$back_to_top.addClass('cd-fade-out');}
	});
	$back_to_top.on('click', function(event){
		event.preventDefault();
		$('body,html').animate({scrollTop: 0 ,}, scroll_top_duration);
	});
});

//bxslider
$(function () {
    var pixSlider = $('.pixroll-images').bxSlider({
        useCSS: false,
        pager: false,
        auto: true,
        pause: 8000,
        controls: false,
        slideWidth: 830,
        autoHover: true,
        minSlides: 3,
        maxSlides: 3,
        moveSlides: 1,
        onSlideNext: function ($slideElement, oldIndex, newIndex) {
            $('.parallax-container').removeClass('pulse_2').removeClass('css-animate');
            $slideElement.find('.parallax-container').addClass('pulse_2').addClass('css-animate');
            $('.bx-next').trigger('click');

        },
        onSlidePrev: function ($slideElement, oldIndex, newIndex) {
            $('.parallax-container').removeClass('pulse_2').removeClass('css-animate');
            $slideElement.find('.parallax-container').addClass('pulse_2').addClass('css-animate'); 
            $('.bx-prev').trigger('click');            
        },
        onSliderLoad: function(){
            $('.parallax-container').removeClass('pulse_2').removeClass('css-animate');
            $('.pixroll-images li').eq(3).find('.parallax-container').addClass('pulse_2').addClass('css-animate');
        }
    });

    $('.promo-slider').bxSlider({
        useCSS: false,
        pager: false,
        touchEnabled: false,
        onSlideNext: function ($slideElement, oldIndex, newIndex) {
            pixSlider.goToNextSlide();
        },
        onSlidePrev: function ($slideElement, oldIndex, newIndex) {
            pixSlider.goToPrevSlide();
        }
    });
});