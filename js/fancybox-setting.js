$(document).ready(function() {	

	// дополнительна настройка fancybox
	$('[data-fancybox="gallery"]').fancybox({
		image: {
			// Wait for images to load before displaying
			//   true  - wait for image to load and then display;
			//   false - display thumbnail and load the full-sized image over top,
			//           requires predefined image dimensions (`data-width` and `data-height` attributes)
			preload: true
		},
		animationEffect: "zoom-in-out",
		buttons: [
			//"zoom",
			//"share",
			"slideShow",
			//"fullScreen",
			//"download",
			"thumbs",
			"close"
		],
		lang: "ua",
		i18n: {
			en: {
				CLOSE: "Close",
				NEXT: "Next",
				PREV: "Previous",
				ERROR: "The requested content cannot be loaded. <br/> Please try again later.",
				PLAY_START: "Start slideshow",
				PLAY_STOP: "Pause slideshow",
				FULL_SCREEN: "Full screen",
				THUMBS: "Thumbnails",
				DOWNLOAD: "Download",
				SHARE: "Share",
				ZOOM: "Zoom"
			},
			ua: {
				CLOSE: "Закрити",
				NEXT: "Далі",
				PREV: "Попередній",
				ERROR: "Запитаний вміст не можна завантажити. <br/> Будь ласка, спробуйте пізніше.",
				PLAY_START: "Почати слайд-шоу",
				PLAY_STOP: "Призупинити показ слайдів",
				FULL_SCREEN: "На весь екран",
				THUMBS: "Ескізи",
				DOWNLOAD: "Завантажити",
				SHARE: "Поділитися",
				ZOOM: "Збільшити"
			},
			ru: {
				CLOSE: "Закрыть",
				NEXT: "Дальше",
				PREV: "Предыдущий",
				ERROR: "Запрошенный содержание нельзя загрузить. <br/> Пожалуйста, повторите попытку позже.",
				PLAY_START: "Начать слайд-шоу",
				PLAY_STOP: "Приостановить показ слайдов",
				FULL_SCREEN: "На весь экран",
				THUMBS: "Эскизы",
				DOWNLOAD: "Загрузить",
				SHARE: "Поделиться",
				ZOOM: "Увеличить"
			}
		}
	});
	
	// защита от скачивания фото
	$('[data-fancybox]').fancybox({
		protect: true
	});
});