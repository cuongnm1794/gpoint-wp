/**
 * BusinessOrange Theme JavaScript
 * Side menu, tabs, Swiper carousel, and interactions
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
		initSideMenu();
		initTabs();
		initClientsCarousel();
		initSmoothScroll();
		initFormValidation();
		initAnimations();
	}

	/**
	 * Side Menu Toggle
	 */
	function initSideMenu() {
		const sideMenu = document.getElementById('sideMenu');
		const toggleButton = document.querySelector('.side-menu-toggle');
		const closeButton = document.querySelector('.side-menu-close');
		const overlay = document.querySelector('.side-menu-overlay');

		if (!sideMenu || !toggleButton) return;

		// Open menu
		toggleButton.addEventListener('click', function() {
			sideMenu.classList.add('active');
			document.body.style.overflow = 'hidden';
		});

		// Close menu
		function closeMenu() {
			sideMenu.classList.remove('active');
			document.body.style.overflow = '';
		}

		if (closeButton) {
			closeButton.addEventListener('click', closeMenu);
		}

		if (overlay) {
			overlay.addEventListener('click', closeMenu);
		}

		// Close on ESC key
		document.addEventListener('keydown', function(e) {
			if (e.key === 'Escape' && sideMenu.classList.contains('active')) {
				closeMenu();
			}
		});
	}

	/**
	 * About Tabs Functionality
	 */
	function initTabs() {
		const tabButtons = document.querySelectorAll('.tab-button');
		const tabPanes = document.querySelectorAll('.tab-pane');

		if (tabButtons.length === 0 || tabPanes.length === 0) return;

		tabButtons.forEach(function(button) {
			button.addEventListener('click', function() {
				const targetTab = this.getAttribute('data-tab');

				// Remove active class from all buttons and panes
				tabButtons.forEach(function(btn) {
					btn.classList.remove('active');
				});

				tabPanes.forEach(function(pane) {
					pane.classList.remove('active');
					pane.style.display = 'none';
				});

				// Add active class to clicked button and corresponding pane
				this.classList.add('active');
				const targetPane = document.getElementById(targetTab);
				if (targetPane) {
					targetPane.classList.add('active');
					targetPane.style.display = 'block';
				}
			});
		});
	}

	/**
	 * Clients Carousel using Swiper
	 */
	function initClientsCarousel() {
		// Check if Swiper is available
		if (typeof Swiper === 'undefined') {
			console.warn('Swiper.js is not loaded');
			return;
		}

		const clientsCarousel = document.querySelector('.clients-carousel');
		if (!clientsCarousel) return;

		new Swiper(clientsCarousel, {
			// Basic settings
			loop: true,
			speed: 800,
			autoplay: {
				delay: 3000,
				disableOnInteraction: false,
			},
			
			// Responsive breakpoints
			breakpoints: {
				// when window width is >= 320px
				320: {
					slidesPerView: 1,
					spaceBetween: 20,
				},
				// when window width is >= 640px
				640: {
					slidesPerView: 2,
					spaceBetween: 30,
				},
				// when window width is >= 768px
				768: {
					slidesPerView: 3,
					spaceBetween: 30,
				},
				// when window width is >= 1024px
				1024: {
					slidesPerView: 4,
					spaceBetween: 40,
				},
				// when window width is >= 1280px
				1280: {
					slidesPerView: 6,
					spaceBetween: 40,
				},
			},
			
			// Accessibility
			a11y: {
				prevSlideMessage: 'Previous slide',
				nextSlideMessage: 'Next slide',
			},
		});
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
		const contactForm = document.querySelector('.businessorange-contact-form');
		if (!contactForm) return;

		contactForm.addEventListener('submit', function(e) {
			e.preventDefault();

			// Get form fields
			const name = contactForm.querySelector('input[name="name"]');
			const email = contactForm.querySelector('input[name="email"]');
			const message = contactForm.querySelector('textarea[name="message"]');

			// Basic validation
			let isValid = true;

			if (!name || !name.value.trim()) {
				showError(name, 'Vui lòng nhập tên');
				isValid = false;
			}

			if (!email || !email.value.trim() || !isValidEmail(email.value)) {
				showError(email, 'Vui lòng nhập email hợp lệ');
				isValid = false;
			}

			if (!message || !message.value.trim()) {
				showError(message, 'Vui lòng nhập tin nhắn');
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

