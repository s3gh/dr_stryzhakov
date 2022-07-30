// Прелоадер
window.onload = function () {
	document.body.classList.add('loaded_hiding');
	window.setTimeout(function () {
		document.body.classList.add('loaded');
		document.body.classList.remove('loaded_hiding');
	}, 500);
}



$(document).ready(function() {	

    // появление меню при нажатии кнопки
	$('#menubtn').click(function(event) {
		$('#menu, .menubtn-ico').toggleClass('active');
		$('body').toggleClass('lock');
	});
	
	$('#menu a').click(function(event) {
		$('#menu, .menubtn-ico').removeClass('active');
		$('body').removeClass('lock');
	});
	

    // выделение текущего пункта меню
	$('#menu a').each(function() {
		if ( (window.location.pathname.indexOf( $(this).attr('href') ) ) > -1) {
			$(this).addClass('current');
		}
	});
    
    // выезжаение блока в шапке
    $(window).scroll(function(){
		if ($(this).scrollTop() > 200) {
			$('#top-block-scrl').addClass('fixed');
		} 
		else {
			$('#top-block-scrl').removeClass('fixed');
		}
	});
    
    // переход вверх страницы
    $(window).scroll(function(){
		if ($(this).scrollTop() > 200) {
			$('.arrow-up').addClass('up');
		} else {
	$('.arrow-up').removeClass('up');
		}
	});
    
	// плавный переход вверх страницы	
	$("#arrowup").on("click","a", function (event) { 
		//отменяем стандартную обработку нажатия по ссылке
		event.preventDefault();
		//забираем идентификатор бока с атрибута href
		let id  = $(this).attr('href'),
		//узнаем высоту от начала страницы до блока на который ссылается якорь
			top = $(id).offset().top;
		//анимируем переход на расстояние - top за 1000 мс
		$('body,html').animate({scrollTop: top}, 1000);
	});	
	
	// плавный скроинг к якорю
	$('.flowing-scroll').on( 'click', function(){ 
		let el = $(this),
			dest = el.attr('action'), // получаем направление для "кнопки"
			dest1 = el.attr('href');	//дополнительна переменная для "ссылки"
		if (dest !== undefined && dest !== '') { 
			$('html').animate({ 
				scrollTop: $(dest).offset().top
			}, 1000 // скорость прокрутки
			);
		}
		if (dest1 !== undefined && dest1 !== '') { 
			$('html').animate({ 
				scrollTop: $(dest1).offset().top
			}, 1000 // скорость прокрутки
			);
		}
		return false;
	});	
	
	//плавный скролинг из "выпадающего списка"
	$('.js-example-basic-single').on('change', function(){ 
		let dest = $(this).val();
		if (dest !== undefined && dest !== '') { 
			$('html').animate({ 
				scrollTop: $(dest).offset().top
			}, 1000
			);
		}
		return false;
	}); 
	
	//скролинг и выделение пунктов бокового меню
	const article = $('.article'),
		  nav = $('.scroll-menu'),
		  underheader = $('.underheader-fixed');             

	$(window).on('scroll', function () {
		let underheaderHeight = underheader.outerHeight();
		const position = $(this).scrollTop();
		article.each(function () {
			const top = $(this).offset().top - underheaderHeight - 5,
				  bottom = top + $(this).outerHeight();
			if (position >= top && position <= bottom) {
				nav.find('.aside-anchor').removeClass('active-scroll');
				nav.find('.aside-anchor[href="#' + $(this).attr('id') + '"]').addClass('active-scroll');
			}
		});
	});
	
	nav.find('.aside-anchor').on('click', function () {
		let underheaderHeight = underheader.outerHeight(); // получаем высоту блока
		const id = $(this).attr('href');

		$('html, body').animate({
			scrollTop: $(id).offset().top - underheaderHeight
		}, 1000);
		
		return false;
	});
	
	//подключение капчи
    $('#form_message').submit(function(e) {
       if ($("#g-recaptcha-response").val() === '') {
          e.preventDefault();
          document.getElementById('recaptcha-check').classList.add('recaptcha-not-check');
       }
    });
    
    $('#review').submit(function(e) {
       if ($("#g-recaptcha-response").val() === '') {
          e.preventDefault();
          document.getElementById('recaptcha-check').classList.add('recaptcha-not-check');
       }
    });

});


