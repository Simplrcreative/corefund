window.scrollTo(0, 0);

jQuery(document).ready(function($) {
	
	setTimeout(function() {
		$("body").scrollspy({
			target: ".scrollspy-nav",
			offset: 100
		});
	}, 500);
	
	//GSAP
	gsap.registerPlugin(ScrollTrigger, ScrollSmoother);
	
	let smoother;
	
	var screenWidth = $(window).width();
	
	if (screenWidth > 991) {
	
		
		function smoothScroll() {
				smoother = ScrollSmoother.create({
				wrapper: '#smooth-wrapper',
				content: '#smooth-content',
				normalizeScroll: false,
				smooth: 2,
				effects: true
			});

			//smoother.scrollTo(0);
			gsap.utils.toArray('.scroll-to').forEach(link => {
				const target = link.getAttribute('href');
				link.addEventListener('click', (e) => {
					e.preventDefault();
					smoother.scrollTo(target, true, "top top")
				});
			});
		}
		smoothScroll();
		
	} else {
		
		//SCROLL
		$('a[href^="#"]').on('click',function (e) {
			e.preventDefault();
			var target = this.hash;
			var $target = $(target);
			$('html, body').stop().animate({
				'scrollTop': $target.offset().top
				}, 900, 'swing', function () {
				window.location.hash = target;
			});
		});
		
	}
	
	//ANIMATIONS
	function animatedAmount() {
		$('.scoot-hide').css('display', 'block');
		
		setTimeout(function(){ 
			$('#learn-more').css('opacity', '1');
		}, 1500);
		
		$('.animated-amount').each(function () {
			var $this = $(this);
			var $thisAmt = $(this).attr('data-amt');
			if($thisAmt % 1 != 0) {
				$({ Counter: 0 }).animate({ Counter: $thisAmt }, {
					duration: 500,
					easing: 'swing',
					step: function () {
						$this.text(this.Counter.toFixed(2));
						
					}
				});
			} else {
				$({ Counter: 0 }).animate({ Counter: $thisAmt }, {
					duration: 1000,
					easing: 'swing',
					step: function () {
						var number = Math.ceil(this.Counter);
						$this.text(number.toLocaleString("en-GB"));
					}
				});
			}
		});
		
	}
	
	window.sr = ScrollReveal();
	sr.reveal('.scoot-up', {
		duration: 2000,
		origin: 'bottom',
		distance: '75px',
		viewFactor: 0.1,
		beforeReveal: animatedAmount
	});
	
	sr.reveal('#learn-more', {
		duration: 2000,
		origin: 'bottom',
		distance: '75px',
		viewFactor: 0.1,
		beforeReveal: animatedAmount
	});
	
	//ACTIVATE DRAW ON REVEAL
	sr.reveal('.draw-svg', {
		duration: 1000,
		origin: 'left',
		distance: '50px',
		viewFactor: 0.1,
		beforeReveal: animatedAmount,
		afterReveal: coreDrawSvg 
	});
	
	//DRAW SVG
	var learnMoreID = $('#learn-more-line');
	var learnMore = learnMoreID.drawsvg({
		duration: 3000,
		callback: coreRevealLine(learnMoreID)
	});
	learnMore.drawsvg('animate'); 
	
	function coreDrawSvg () {
		coreRevealLine('#info-pack-line');
		var svg = $('#info-pack-line').drawsvg({
			duration: 2000,
		});
		svg.drawsvg('animate'); 
	}
	
	function coreRevealLine(id) {
		$(id).css('display', 'block');
	}
	
	///TABS & NAVS
	$('.nav-tabs .nav-item').on('click',function () {
		var tabID = $(this).attr('data-tab');
		$(this).addClass('active');
		$('.nav-tabs .nav-item').not(this).removeClass('active');
		$(tabID).fadeIn();
		$('.tab').not(tabID).fadeOut();
	});

	$('.main-nav .nav-item').on('click',function () {
		$(this).addClass('active');
		$('.main-nav .nav-item').not(this).removeClass('active');
		$('.main-nav .nav-item').removeAttr('style');
		$('.mobile-nav-icon-hamburger').removeClass('active');
		$('.main-nav').removeClass('active');
		$('.modal-bg').fadeOut();
		$('body, html, #smooth-wrapper').removeClass('no-scroll');
	});
	
	$('.mobile-nav-icon').on('click',function () {
		$('.mobile-nav-icon-hamburger').toggleClass('active');
		$('.main-nav').toggleClass('active');
		if($('.main-nav').hasClass('active')) {
			$('.modal-bg-mobile-menu').fadeIn();
			$('body, html, #smooth-wrapper').addClass('no-scroll');
		} else {
			$('.modal-bg-mobile-menu').fadeOut();
			$('body, html, #smooth-wrapper').removeClass('no-scroll');
		}
	});
	
	$('.modal-bg-mobile-menu, .mobile-logo a').on('click',function () {
		$('body, html, #smooth-wrapper').removeClass('no-scroll');
		$('.mobile-nav-icon-hamburger').removeClass('active');
		$('.main-nav').removeClass('active');
		$('.modal-bg').fadeOut();
	});
	
	$('.modal-btn, .modal-open').on('click',function (e) {
		e.preventDefault();
		var modalId = $(this).attr('data-modal');
		gsap.to(modalId, {
			opacity: 1,
			x: 2000,
			ease: 'power4.out',
			duration: 1,
			onComplete: function() {
				$(modalId).addClass('active');
			  }
		});
		$('body, html, #smooth-wrapper').addClass('no-scroll');
		$('.modal-bg').fadeIn();
  		if (screenWidth > 991) {
			smoother.paused(true);
		}
		//$('.core-modal').addClass('active');
	});
	
	$('.modal-close, .modal-bg, .modal-close-col').on('click',function () {
		$('.core-modal').removeClass('active');
		gsap.to('.core-modal', {
			opacity: 1,
			x: -2000,
			ease: 'power4.in',
			duration: 1
		});
		$('body, html, #smooth-wrapper').removeClass('no-scroll');
		$('.modal-bg').fadeOut();
		if (screenWidth > 991) {
			smoother.paused(false);
		}
	});

	//ACCORDION
	$('.accordion-btn').on('click',function () {
		if($(this).hasClass('collapsed')) {
			$(this).text('See more');
		} else {
			$(this).text('See less');
		}
		$('.accordion-btn').not(this).text('See more');
	});
	
	if (screenWidth > 991) {
		var maxHeight = -1;
		$('.tab.panel').each(function() {
			maxHeight = maxHeight > $(this).height() ? maxHeight : $(this).height();
		});
		$('section.difference').height(maxHeight * 1.9);
	}
	
	//VIDEO
	$('.lity-close, .lity-wrap, .close-video').on('click',function () {
		$('.video-loader').fadeOut();
	});
	
});