'use strict';
$(document).ready(function(){
//------------ start code for homepage heroswipe here ------------
	let heroHomeSwipe = $('.heroHomeSwipe');
	if ($(heroHomeSwipe)[0]){
		$(heroHomeSwipe).slick({
			infinite: true,
			slidesToShow: 3,
			slidesToScroll: 3,
			dots: true,
			speed: 500,
			autoplay: true,
			autoplaySpeed: 5000,
			arrows:false,
			responsive: [
			    {
					breakpoint: 480,
					settings: {
						slidesToShow: 1.1,
						slidesToScroll: 1.1,
				    }
			    }
			]
        });
	}
	let testimonialSwipe = $('.testimonialSwipe');
	if ($(testimonialSwipe)[0]){
		$(testimonialSwipe).slick({
			infinite: true,
			slidesToShow: 1,
			slidesToScroll: 1,
			dots: true,
			speed: 500,
			autoplay: true,
			autoplaySpeed: 5000,
			arrows:false
        });
	}
	let imgGalSwipe = $('.imgGalSwipe');
	if ($(imgGalSwipe)[0]){
		$(imgGalSwipe).slick({
			infinite: true,
			slidesToShow: 1,
			slidesToScroll: 1,
			dots: true,
			speed: 500,
			autoplay: true,
			autoplaySpeed: 5000,
			arrows:false
        });
	}
//------------ end code for homepage heroswipe here --------------
//------------ start code for LRItemSwipe here -------------------
	let lrItemSwipe = $('.lrItemSwipe');
	if ($(lrItemSwipe)[0]){
		$(lrItemSwipe).slick({
			infinite: false,
			slidesToShow: 4,
			slidesToScroll: 2,
			dots: true,
			speed: 500,
			arrows:false,
			responsive: [
			    {
					breakpoint: 480,
					settings: {
						slidesToShow: 1.5,
						slidesToScroll: 1.5,
				    }
			    }
			]
        });
	}
//------------ end code for LRItemSwipe here ---------------------
//------------ start code for 2 column swipe here ----------------
	let col2Swipe = $('.col2Swipe');
	if ($(col2Swipe)[0]){
		$(col2Swipe).slick({
			infinite: true,
			slidesToShow: 2,
			slidesToScroll: 2,
			dots: true,
			speed: 500,
			autoplay: true,
			autoplaySpeed: 5000,
			arrows:false
        });
	}
	let col3Swipe = $('.col3Swipe');
	if ($(col3Swipe)[0]){
		$(col3Swipe).slick({
			infinite: true,
			slidesToShow: 3,
			slidesToScroll: 3,
			dots: true,
			speed: 500,
			autoplay: true,
			autoplaySpeed: 5000,
			arrows:false,
			responsive: [
			    {
			      breakpoint: 480,
			      settings: {
			        slidesToShow: 1.2,
			        slidesToScroll: 1.2,
			      }
			    }
			]
        });
	}	
//------------ end code for 2 column swipe here ------------------
//------------ start code for partner logo ------------
	let partnerLogo = $('.partnerLogos');
	if ($(partnerLogo)[0]){
		$(partnerLogo).slick({
			infinite: true,
			slidesToShow: 6,
			slidesToScroll: 6,
			dots: true,
			speed: 500,
			autoplay: true,
			autoplaySpeed: 5000,
			arrows:false,
			responsive: [
			    {
			      breakpoint: 480,
			      settings: {
			        slidesToShow: 2,
			        slidesToScroll: 2,
			      }
			    }
			]
      });
	}	
//------------ end code for partner logo --------------
//------------ start code for course/program swipe --------------
let productSwipe = $('.productSwipe');
	if ($(productSwipe)[0]){
		$(productSwipe).slick({
			infinite: false,
			slidesToShow: 5,
			slidesToScroll: 5,
			dots: true,
			speed: 1000,
			arrows:false,
			responsive: [
			    {
					breakpoint: 884,
					settings: {
						slidesToShow: 3,
						slidesToScroll: 3
				    }
			    },
			    {
					breakpoint: 680,
					settings: {
						slidesToShow: 2.25,
						slidesToScroll: 2.25,
				    }
			    }
			]
      });
	}
//------------ end code for course/program swipe ----------------
});