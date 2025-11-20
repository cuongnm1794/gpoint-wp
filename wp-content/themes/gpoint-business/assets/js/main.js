(function () {

    /*=====================================
    Sticky
    ======================================= */
    window.onscroll = function () {
        var header_navbar = document.querySelector(".navbar-area");
        var sticky = header_navbar.offsetTop;

        if (window.pageYOffset > sticky) {
            header_navbar.classList.add("sticky");
        } else {
            header_navbar.classList.remove("sticky");
        }



        // show or hide the back-top-top button
        var backToTo = document.querySelector(".scroll-top");
        if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
            backToTo.style.display = "flex";
        } else {
            backToTo.style.display = "none";
        }
    };

    // section menu active
	function onScroll(event) {
		var sections = document.querySelectorAll('.page-scroll');
		var scrollPos = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop;

		for (var i = 0; i < sections.length; i++) {
			var currLink = sections[i];
			var val = currLink.getAttribute('href');
			var refElement = document.querySelector(val);
			var scrollTopMinus = scrollPos + 73;
			if (refElement.offsetTop <= scrollTopMinus && (refElement.offsetTop + refElement.offsetHeight > scrollTopMinus)) {
				document.querySelector('.page-scroll').classList.remove('active');
				currLink.classList.add('active');
			} else {
				currLink.classList.remove('active');
			}
		}
	};

    window.document.addEventListener('scroll', onScroll);
    
    // for menu scroll 
    var pageLink = document.querySelectorAll('.page-scroll');

    // Contact Form Handler
    (function() {
        // Handle default HTML form
        var contactForm = document.getElementById('gpoint-contact-form');
        if (contactForm && typeof gpointContactForm !== 'undefined') {
            contactForm.addEventListener('submit', function(e) {
                e.preventDefault();
                
                var submitBtn = document.getElementById('contact-submit-btn');
                var originalText = submitBtn.textContent;
                submitBtn.disabled = true;
                submitBtn.textContent = 'Đang gửi...';
                
                var formData = new FormData();
                formData.append('action', 'gpoint_contact_form');
                formData.append('nonce', gpointContactForm.nonce);
                formData.append('name', document.getElementById('contact-name').value);
                formData.append('email', document.getElementById('contact-email').value);
                formData.append('phone', document.getElementById('contact-phone').value);
                formData.append('subject', document.getElementById('contact-subject').value);
                formData.append('message', document.getElementById('contact-message').value);
                
                fetch(gpointContactForm.ajax_url, {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        // Show thank you modal
                        var modal = new bootstrap.Modal(document.getElementById('thankYouModal'));
                        modal.show();
                        
                        // Reset form
                        contactForm.reset();
                    } else {
                        alert(data.data.message || 'Có lỗi xảy ra. Vui lòng thử lại.');
                    }
                    submitBtn.disabled = false;
                    submitBtn.textContent = originalText;
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Có lỗi xảy ra. Vui lòng thử lại.');
                    submitBtn.disabled = false;
                    submitBtn.textContent = originalText;
                });
            });
        }

        // Handle Contact Form 7
        if (typeof wpcf7 !== 'undefined') {
            document.addEventListener('wpcf7mailsent', function(event) {
                // Show thank you modal
                var modalElement = document.getElementById('thankYouModal');
                if (modalElement) {
                    var modal = new bootstrap.Modal(modalElement);
                    modal.show();
                }
            }, false);
        }
    })();

    pageLink.forEach(elem => {
        elem.addEventListener('click', e => {
            e.preventDefault();
            document.querySelector(elem.getAttribute('href')).scrollIntoView({
                behavior: 'smooth',
                offsetTop: 1 - 60,
            });
        });
    });

    "use strict";

}) ();
