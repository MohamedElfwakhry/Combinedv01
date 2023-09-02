(function ($) {
	'use strict';
	/*----------------------------------------*/
	/*  Check if element exists
/*----------------------------------------*/
	$.fn.elExists = function () {
		return this.length > 0;
	};

    /*--
        Custom script to call Background
        Image & Color from html data attribute
    -----------------------------------*/
    $('[data-bg-image]').each(function () {
        var $this = $(this),
            $image = $this.data('bg-image');
        $this.css('background-image', 'url(' + $image + ')');
    });
    $('[data-bg-color]').each(function () {
        var $this = $(this),
            $color = $this.data('bg-color');
        $this.css('background-color', $color);
	});

	/*----------------------------------------*/
	/*  WOW
/*----------------------------------------*/
	new WOW().init();

	/*---------------------------------------
		Header Sticky
---------------------------------*/
	$(window).on('scroll', function () {
		if ($(this).scrollTop() >= 300) {
			$('.header-sticky').addClass('sticky');
		} else {
			$('.header-sticky').removeClass('sticky');
		}
	});

	/*----------------------------------------*/
	/*  HasSub Item
/*----------------------------------------*/
	$('.hassub-item li.hassub a').on('click', function () {
		$(this).removeAttr('href');
		var element = $(this).parent('li');
		if (element.hasClass('open')) {
			element.removeClass('open');
			element.find('li').removeClass('open');
			element.find('ul').slideUp();
		} else {
			element.addClass('open');
			element.children('ul').slideDown();
			element.siblings('li').children('ul').slideUp();
			element.siblings('li').removeClass('open');
			element.siblings('li').find('li').removeClass('open');
			element.siblings('li').find('ul').slideUp();
		}
	});

	/*---------------------------------------
		Swiper All Slider
---------------------------------*/
	/* ---Main Slider--- */
	if ($('.main-slider').elExists()) {
		var swiper = new Swiper('.main-slider', {
			loop: true,
			slidesPerView: 1,
			speed: 750,
			autoplay: {
				disableOnInteraction: false,
				delay: 7000
			},
			effect: "fade",
			fadeEffect: {
				crossFade: true
			},
			disableOnInteraction: false,
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			},
			pagination: {
				el: '.swiper-pagination',
				clickable: true,
				type: 'bullets'
			},
		});
	}

	/* ---News Slider--- */
	if ($('.news-slider').elExists()) {
		var mySwiper = new Swiper('.news-slider', {
			loop: true,
			spaceBetween: 30,
			autoplay: {},
			speed: 750,
			effect: "slide",
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			},
			pagination: {
				el: '.swiper-pagination',
				clickable: true,
				type: 'custom'
			},
			breakpoints: {
				320: {
				  slidesPerView: 1,
				},
				576: {
				  slidesPerView: 1
				},
				768: {
				  slidesPerView: 2
				},
				992: {
				  slidesPerView: 2
				},
				1501: {
				  slidesPerView: 3
				}
			}
		});
	}
	if ($('.news-slider-2').elExists()) {
		var mySwiper = new Swiper('.news-slider-2', {
			loop: true,
			slidesPerView: 2,
			spaceBetween: 30,
			autoplay: {},
			speed: 750,
			effect: "slide",
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			},
			pagination: {
				el: '.swiper-pagination',
				clickable: true,
				type: 'custom'
			},
		});
	}

	/* ---Brand Slider--- */
	if ($('.brand-slider').elExists()) {
		var mySwiper = new Swiper('.brand-slider', {
			loop: true,
			spaceBetween: 50,
			slidesPerGroup: 1,
			autoplay: {},
			speed: 750,
			effect: "slide",
			navigation: {
				nextEl: '.brand-button-next',
				prevEl: '.brand-button-prev',
			},
			pagination: {
				el: '.brand-pagination',
				clickable: true,
				type: 'custom'
			},
			breakpoints: {
				0: {
					slidesPerView: 3
				},
				576: {
					slidesPerView: 4
				},
				768: {
				  slidesPerView: 5
				},
			}
		});
	}

	/* ---Project Slider--- */
	if ($('.project-slider').elExists()) {
		var mySwiper = new Swiper('.project-slider', {
			loop: true,
			spaceBetween: 15,
			effect: "slide",
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			},
			pagination: {
				el: '.swiper-pagination',
				clickable: true,
				type: 'bullets'
			},
			breakpoints: {
				320: {
				  slidesPerView: 1,
				},
				576: {
				  slidesPerView: 2
				},
				992: {
				  slidesPerView: 3
				},
				1501: {
				  slidesPerView: 4
				}
			}
		});
	}
	/* ---Team Member Slider--- */
	if ($('.team-member-slider').elExists()) {
		var mySwiper = new Swiper('.team-member-slider', {
			loop: true,
			slidesPerView: 4,
			spaceBetween: 30,
			effect: "slide",
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			},
			pagination: {
				el: '.swiper-pagination',
				clickable: true,
				type: 'bullets'
			},
			breakpoints: {
				320: {
				  slidesPerView: 1,
				},
				576: {
				  slidesPerView: 2
				},
				992: {
				  slidesPerView: 3
				},
				1501: {
				  slidesPerView: 4
				}
			}
		});
	}
	/* ---Testimonial Slider--- */
	if ($('.testimonial-slider').elExists()) {
		var mySwiper = new Swiper('.testimonial-slider', {
			loop: true,
			slidesPerView: 1,
			// autoplay: {},
			// speed: 750,
			effect: "slide",
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			},
			pagination: {
				el: '.swiper-pagination',
				clickable: true,
				type: 'bullets'
			},
		});
	}
	if ($('.testimonial-slider-2').elExists()) {
		var mySwiper = new Swiper('.testimonial-slider-2', {
			loop: false,
			slidesPerView: 1,
			autoplay: {},
			speed: 750,
			effect: "slide",
			navigation: {
				nextEl: '.testimonial-button-next',
				prevEl: '.testimonial-button-prev',
			},
			pagination: {
				el: '.swiper-pagination',
				clickable: true,
				type: 'bullets'
			},
		});
	}

	/* ---Service Gallery--- */
	if ($('.service-gallery').elExists()) {
		var mySwiper = new Swiper('.service-gallery', {
			loop: true,
			slidesPerView: 1,
			autoplay: {},
			speed: 750,
			effect: "slide",
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			},
			pagination: {
				el: '.swiper-pagination',
				clickable: true,
				type: 'bullets'
			},
		});
	}

	/*------------------------------------
	Toolbar Button
	------------------------------------- */
	var $overlay = $('.global-overlay');
	$('.toolbar-btn').on('click', function (e) {
		e.preventDefault();
		e.stopPropagation();
		var $this = $(this);
		var target = $this.attr('href');
		var prevTarget = $this.parent().siblings().children('.toolbar-btn').attr('href');
		$(target).toggleClass('open');
		$(prevTarget).removeClass('open');
		$($overlay).addClass('overlay-open');
	});

	/*----------------------------------------*/
	/*  Click on Documnet
/*----------------------------------------*/
	var $body = $('.global-overlay');

	$body.on('click', function (e) {
		var $target = e.target;
		var dom = $('.main-wrapper').children();

		if (!$($target).is('.toolbar-btn') && !$($target).parents().is('.open')) {
			dom.removeClass('open');
			dom.find('.open').removeClass('open');
			$overlay.removeClass('overlay-open');
		}
	});

	/*----------------------------------------*/
	/*  Close Button Actions
/*----------------------------------------*/
	$('.button-close').on('click', function (e) {
		var dom = $('.main-wrapper').children();
		e.preventDefault();
		var $this = $(this);
		$this.parents('.open').removeClass('open');
		dom.find('.global-overlay').removeClass('overlay-open');
	});

	/*----------------------------------------*/
	/*  Offcanvas
/*----------------------------------------*/
	var $offcanvasNav = $('.mobile-menu'),
		$offcanvasNavWrap = $(
			'.mobile-menu_wrapper'
		),
		$offcanvasNavSubMenu = $offcanvasNav.find('.sub-menu'),
		$menuToggle = $('.menu-btn'),
		$menuClose = $('.button-close');

	$offcanvasNavSubMenu.slideUp();

	$offcanvasNav.on('click', 'li a, li .menu-expand', function (e) {
		var $this = $(this);
		if (
			$this.parent().attr('class').match(/\b(menu-item-has-children|has-children|has-sub-menu)\b/) &&
			($this.attr('href') === '#' || $this.attr('href') === '' || $this.hasClass('menu-expand'))
		) {
			e.preventDefault();
			if ($this.siblings('ul:visible').length) {
				$this.siblings('ul').slideUp('slow');
			} else {
				$this.closest('li').siblings('li').find('ul:visible').slideUp('slow');
				$this.closest('li').siblings('li').removeClass('menu-open');
				$this.siblings('ul').slideDown('slow');
				$this.parent().siblings().children('ul').slideUp();
			}
		}
		if ($this.is('a') || $this.is('span') || $this.attr('class').match(/\b(menu-expand)\b/)) {
			$this.parent().toggleClass('menu-open');
		} else if ($this.is('li') && $this.attr('class').match(/\b('menu-item-has-children')\b/)) {
			$this.toggleClass('menu-open');
		}
	});

	$('.button-close').on('click', function (e) {
		e.preventDefault();
		$('.mobile-menu .sub-menu').slideUp();
		$('.mobile-menu .menu-item-has-children').removeClass('menu-open');
	})

	/*--------------------------------
    directionalHover
-------------------------------- */
	$('.hover-direction').on('mouseenter mouseleave', hoverDirection);

	function hoverDirection(event) {
		var $overlay = $(this).find('figcaption'),
			side = getMouseDirection(event),
			animateTo,
			positionIn = {
				top: '0%',
				left: '0%'
			},
			positionOut = (function () {
				switch (side) {
					case 0:
						return {
							top: '-100%', left: '0%'
						};
						break;
					case 1:
						return {
							top: '0%', left: '100%'
						};
						break;
					case 2:
						return {
							top: '100%', left: '0%'
						};
						break;
					default:
						return {
							top: '0%', left: '-100%'
						};
						break;
				}
			})();
		if (event.type === 'mouseenter') {
			animateTo = positionIn;
			$overlay.css(positionOut);
		} else {
			animateTo = positionOut;
		}
		$overlay.stop(true).animate(animateTo, 200, 'linear');
	}

	function getMouseDirection(event) {
		var $item = $(event.currentTarget),
			offset = $item.offset(),
			w = $item.outerWidth(),
			h = $item.outerHeight(),
			x = (event.pageX - offset.left - w / 2) * ((w > h) ? h / w : 1),
			y = (event.pageY - offset.top - h / 2) * ((h > w) ? w / h : 1),
			direction = Math.round((Math.atan2(y, x) * (180 / Math.PI) + 180) / 90 + 3) % 4;
		return direction;
	}

	/*--------------------------------
    Masonary
-------------------------------- */
	$('.projects-masonary-wrapper,.masonry-activation').imagesLoaded(function () {

		// filter items on button click
		$('.masonary-menu').on('click', 'button', function () {
			var filterValue = $(this).attr('data-filter');
			$(this).siblings('.is-checked').removeClass('is-checked');
			$(this).addClass('is-checked');
			$grid.isotope({
				filter: filterValue
			});
		});
		// Masonry
		var $grid = $('.masonry-wrap').masonry({
			itemSelector: '.masonary-item',
			percentPosition: true,
			transitionDuration: '0.7s',
			//itemSelector: '.grid-item',
			columnWidth: '.masonary-sizer'
		});
		// init Isotope
		var $grid = $('.mesonry-list').isotope({
			percentPosition: true,
			transitionDuration: '0.7s',
			layoutMode: 'masonry',
			/*
			masonry: {
				columnWidth: '.resizer',
			}*/
		});

	});

	/*----------------------------------------*/
	/*  Nice Select
/*----------------------------------------*/
	if ($('.nice-select').elExists()) {
		$('.nice-select').niceSelect();
	}
	
	/*--------------------------------
    Ajax Contact Form
-------------------------------- */
	$(function () {
		// Get the form.
		var form = $('#contact-form');
		// Get the messages div.
		var formMessages = $('.form-messege');
		// Set up an event listener for the contact form.
		$(form).submit(function (e) {
			// Stop the browser from submitting the form.
			e.preventDefault();
			// Serialize the form data.
			var formData = $(form).serialize();
			// Submit the form using AJAX.
			$.ajax({
					type: 'POST',
					url: $(form).attr('action'),
					data: formData
				})
			.done(function (response) {
				// Make sure that the formMessages div has the 'success' class.
				$(formMessages).removeClass('error');
				$(formMessages).addClass('success');

				// Set the message text.
				$(formMessages).text(response);

				// Clear the form.
				$('#contact-form input,#contact-form textarea').val('');
			})
			.fail(function (data) {
				// Make sure that the formMessages div has the 'error' class.
				$(formMessages).removeClass('success');
				$(formMessages).addClass('error');

				// Set the message text.
				if (data.responseText !== '') {
					$(formMessages).text(data.responseText);
				} else {
					$(formMessages).text('Oops! An error occured and your message could not be sent.');
				}
			});
		});

	});

	/*----------------------------------------*/
	/*  CounterUp
/*----------------------------------------*/
	if ($('.count').elExists()) {
		$('.count').counterUp({
			delay: 10,
			time: 1000
		});
	}
	
	/*--------------------------------
    Scroll To Top
-------------------------------- */
	function scrollToTop() {
		var $scrollUp = $('.scroll-to-top'),
			$lastScrollTop = 0,
			$window = $(window);

		$window.on('scroll', function () {
			var topPos = $(this).scrollTop();
			if (topPos > $lastScrollTop) {
				$scrollUp.removeClass('show');
			} else {
				if ($window.scrollTop() > 200) {
					$scrollUp.addClass('show');
				} else {
					$scrollUp.removeClass('show');
				}
			}
			$lastScrollTop = topPos;
		});

		$scrollUp.on('click', function (evt) {
			$('html, body').animate({
				scrollTop: 0
			}, 600);
			evt.preventDefault();
		});
	}

	scrollToTop();

})(jQuery);
