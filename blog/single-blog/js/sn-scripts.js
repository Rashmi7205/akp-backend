jQuery(function($){
	$(document).ready(function(){
		$('.jarallax').jarallax();
	});

	$('[data-fancybox]').fancybox({
	    youtube : {
	        controls : 0,
	        showinfo : 0
	    },
	    vimeo : {
	        color : 'f00'
	    }
	});


	$(document).ready(function() {
		var header = $('#header .bottom-header');
		var stickyStart = 100;
		var prevScrollpos = window.pageYOffset;

		$(window).scroll(function() {
			var currentScrollPos = window.pageYOffset;

			if (prevScrollpos > currentScrollPos) {
				header.removeClass('sticky').css('top', '0');
			} else {
				if (currentScrollPos > stickyStart) {
			    	header.addClass('sticky').css('top', '0');
			  	} else {
			    	header.removeClass('sticky').css('top', '-100px');
			  	}
			}
			prevScrollpos = currentScrollPos;
		});
	});
});