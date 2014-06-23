$('body.single #share-side').sticky({
	zIndex: 100, // z-index
	stopper: ".tags" // Id, class, or number value
});


mediaCheck({
	media: '(max-width: 600px)',
	entry: function() {
		console.log('starting 600');

		// set up the related stories slider
		$('#related-stories .slider').removeClass('row').find('.slide').removeClass('columns medium-4');
		$('#related-stories .slider').slick({
			onInit      : function(slick){
				console.log(slick);
			},
			dots          : true,
			infinite      : false,
			speed         : 300,
			slidesToShow  : 1,
			slidesToScroll: 1,
			slide		  : '.slide',
			arrows		  : true,
			draggable     : false,
		});

		// make the newsletter signup be the first thing in the footer
		$('.inner-wrap > footer .join').insertBefore('footer > .footer-nav');

		$('.inner-wrap > footer').removeClass('collapse');
	},
	exit: function() {
		console.log('leaving 600');

		// destroy the slick slider
		$('#related-stories .slider').addClass('row').find('.slide').addClass('columns medium-4');
		$('#related-stories .slick-initialized').unslick();

		// put the newsletter signup back at the lower right
		$('.inner-wrap > footer .join').insertAfter('footer > .social');
		$('.inner-wrap > footer').addClass('collapse');
	},
	both: function() {
		console.log('changing state');
	}
});