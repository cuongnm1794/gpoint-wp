/**
 * GPoint Theme JavaScript
 * Slider, mobile menu, and interactions
 */

(function() {
	'use strict';

	// Wait for DOM to be ready
	if (document.readyState === 'loading') {
		document.addEventListener('DOMContentLoaded', init);
	} else {
		init();
	}

	function init() {
		initHeroSlider();
		initMobileMenu();
		initSmoothScroll();
		initFormValidation();
		initAnimations();
	}

	/**
	 * Hero Slider Functionality using Swiper.js
	 */
	function initHeroSlider() {
		// Check if Swiper is available
		if (typeof Swiper === 'undefined') {
			console.warn('Swiper.js is not loaded');
			return;
		}

		const heroSliders = document.querySelectorAll('.hero-slider');
		
		heroSliders.forEach(function(sliderElement) {
			new Swiper(sliderElement, {
				// Basic settings
				loop: true,
				speed: 800,
				autoplay: {
					delay: 5000,
					disableOnInteraction: false,
					pauseOnMouseEnter: true,
				},
				
				// Pagination
				pagination: {
					el: '.swiper-pagination',
					clickable: true,
					dynamicBullets: true,
				},
				
				// Navigation arrows (optional - uncomment if needed)
				// navigation: {
				// 	nextEl: '.swiper-button-next',
				// 	prevEl: '.swiper-button-prev',
				// },
				
				// Effect
				effect: 'slide',
				
				// Responsive breakpoints
				breakpoints: {
					// when window width is >= 320px
					320: {
						slidesPerView: 1,
						spaceBetween: 0,
					},
					// when window width is >= 768px
					768: {
						slidesPerView: 1,
						spaceBetween: 0,
					},
					// when window width is >= 1024px
					1024: {
						slidesPerView: 1,
						spaceBetween: 0,
					},
				},
				
				// Accessibility
				a11y: {
					prevSlideMessage: 'Previous slide',
					nextSlideMessage: 'Next slide',
					firstSlideMessage: 'This is the first slide',
					lastSlideMessage: 'This is the last slide',
				},
			});
		});
	}

	/**
	 * Mobile Menu Toggle
	 */
	function initMobileMenu() {
		const navigation = document.querySelector('.wp-block-navigation');
		if (!navigation) return;

		// Create mobile menu toggle button
		const menuToggle = document.createElement('button');
		menuToggle.className = 'mobile-menu-toggle';
		menuToggle.innerHTML = '☰';
		menuToggle.style.cssText = 'display: none; background: none; border: none; font-size: 24px; cursor: pointer; color: #1A1A1A; padding: 10px;';

		// Insert toggle button before navigation
		const navParent = navigation.parentElement;
		if (navParent) {
			navParent.insertBefore(menuToggle, navigation);
		}

		// Toggle menu on button click
		menuToggle.addEventListener('click', function() {
			navigation.classList.toggle('is-open');
			menuToggle.innerHTML = navigation.classList.contains('is-open') ? '✕' : '☰';
		});

		// Show/hide toggle button based on screen size
		function handleResize() {
			if (window.innerWidth <= 767) {
				menuToggle.style.display = 'block';
				navigation.style.display = navigation.classList.contains('is-open') ? 'flex' : 'none';
				navigation.style.flexDirection = 'column';
				navigation.style.width = '100%';
			} else {
				menuToggle.style.display = 'none';
				navigation.style.display = 'flex';
				navigation.style.flexDirection = 'row';
			}
		}

		window.addEventListener('resize', handleResize);
		handleResize();
	}

	/**
	 * Smooth Scroll for Anchor Links
	 */
	function initSmoothScroll() {
		document.querySelectorAll('a[href^="#"]').forEach(function(anchor) {
			anchor.addEventListener('click', function(e) {
				const href = this.getAttribute('href');
				if (href === '#' || href === '') return;

				const target = document.querySelector(href);
				if (target) {
					e.preventDefault();
					target.scrollIntoView({
						behavior: 'smooth',
						block: 'start'
					});
				}
			});
		});
	}

	/**
	 * Form Validation
	 */
	function initFormValidation() {
		const contactForm = document.querySelector('.gpoint-contact-form');
		if (!contactForm) return;

		contactForm.addEventListener('submit', function(e) {
			e.preventDefault();

			// Get form fields
			const name = contactForm.querySelector('input[name="name"]');
			const email = contactForm.querySelector('input[name="email"]');
			const phone = contactForm.querySelector('input[name="phone"]');
			const message = contactForm.querySelector('textarea[name="message"]');

			// Basic validation
			let isValid = true;

			if (!name || !name.value.trim()) {
				showError(name, 'Vui lòng nhập họ và tên');
				isValid = false;
			}

			if (!email || !email.value.trim() || !isValidEmail(email.value)) {
				showError(email, 'Vui lòng nhập email hợp lệ');
				isValid = false;
			}

			if (isValid) {
				// Here you would typically send the form data to a server
				alert('Cảm ơn bạn đã liên hệ! Chúng tôi sẽ phản hồi trong vòng 24 giờ.');
				contactForm.reset();
			}
		});

		function showError(field, message) {
			if (!field) return;

			// Remove existing error
			const existingError = field.parentElement.querySelector('.error-message');
			if (existingError) {
				existingError.remove();
			}

			// Add error message
			const errorDiv = document.createElement('div');
			errorDiv.className = 'error-message';
			errorDiv.style.cssText = 'color: #FF6B35; font-size: 14px; margin-top: 5px;';
			errorDiv.textContent = message;
			field.parentElement.appendChild(errorDiv);

			// Highlight field
			field.style.borderColor = '#FF6B35';

			// Remove error on input
			field.addEventListener('input', function() {
				field.style.borderColor = '#E0E0E0';
				const error = field.parentElement.querySelector('.error-message');
				if (error) {
					error.remove();
				}
			}, { once: true });
		}

		function isValidEmail(email) {
			const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
			return emailRegex.test(email);
		}
	}

	/**
	 * Scroll Animations
	 */
	function initAnimations() {
		const observerOptions = {
			threshold: 0.1,
			rootMargin: '0px 0px -50px 0px'
		};

		const observer = new IntersectionObserver(function(entries) {
			entries.forEach(function(entry) {
				if (entry.isIntersecting) {
					entry.target.classList.add('is-visible');
				}
			});
		}, observerOptions);

		// Observe elements for animation
		document.querySelectorAll('.wp-block-group').forEach(function(element) {
			element.classList.add('fade-in');
			observer.observe(element);
		});
	}

	/**
	 * Sticky Header on Scroll
	 */
	let lastScroll = 0;
	const header = document.querySelector('.wp-block-group.alignfull.has-white-background-color');

	if (header) {
		window.addEventListener('scroll', function() {
			const currentScroll = window.pageYOffset;

			if (currentScroll > 100) {
				header.style.boxShadow = '0 2px 20px rgba(0, 0, 0, 0.1)';
			} else {
				header.style.boxShadow = '0 2px 10px rgba(0, 0, 0, 0.05)';
			}

			lastScroll = currentScroll;
		});
	}

})();

