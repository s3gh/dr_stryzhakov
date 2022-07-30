$(document).ready(function() {	

	//активация плагина select2 для изменения вида <select>
	$('.js-example-basic-single').select2({
		placeholder: "виберите год",
		minimumResultsForSearch: Infinity
	});
	
	var headblock = window.document.getElementById('head-logo-20');
	var head = window.document.getElementById('top-block-1');
	var side = window.document.getElementById('sticky-block');
	var foot = window.document.getElementById('foot');

	$(window).width(function() {
	  if(document.documentElement.clientWidth > 980) {

		window.requestAnimationFrame(function step() {
			var offset = Math.max(head.offsetHeight*2, headblock.offsetHeight + head.offsetHeight - window.pageYOffset) +
						 Math.max(0, foot.offsetHeight + window.pageYOffset + window.innerHeight - window.document.documentElement.scrollHeight);
			side.style.minHeight = window.document.documentElement.clientHeight - offset + 'px';
			window.requestAnimationFrame(step);
		});
	  }
	});

	$(window).resize(function() {
	  if(document.documentElement.clientWidth > 980) {

		window.requestAnimationFrame(function step() {
			var offset = Math.max(head.offsetHeight*2, headblock.offsetHeight + head.offsetHeight - window.pageYOffset) +
						 Math.max(0, foot.offsetHeight + window.pageYOffset + window.innerHeight - window.document.documentElement.scrollHeight);
			side.style.minHeight = window.document.documentElement.clientHeight - offset + 'px';
			window.requestAnimationFrame(step);
		});
	  }
	});
	
});