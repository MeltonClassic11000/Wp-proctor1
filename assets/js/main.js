jQuery(document).ready(function ($) {
    // header
    $(window).on('scroll', function () {
        $('.header').toggleClass('scrolled', $(this).scrollTop() > 20);
    });
    $('.menu-toggle').on('click', function () {
        $(this).toggleClass('active')
        $('.nav').toggleClass('active')
    })


    function initSlider($slider, reverse = false) {
        const $track = $slider;
        const originalContent = $track.html();

        $track.html(originalContent + originalContent + originalContent + originalContent);

        let speed = 1.8;
        let pos = 0;
        let width = 0;
        let isAnimating = true;

        function calculateWidth() {
            width = $track[0].scrollWidth / 4;
        }

        function animate() {
            if (!isAnimating) return;

            pos += reverse ? speed : -speed;

            if (!reverse && Math.abs(pos) >= width * 3) {
                pos = -width;
            }

            if (reverse && pos >= width * 2) {
                pos = -width * 2;
            }

            $track.css('transform', `translateX(${pos}px)`);
            requestAnimationFrame(animate);
        }

        function setSpeed() {
            if (window.innerWidth <= 768) speed = 2.2;
            else if (window.innerWidth <= 1024) speed = 1.8;
            else speed = 1.2;
        }


        function handleResize() {
            calculateWidth();
            setSpeed();
        }

        $(window).on('resize', handleResize);

        window.addEventListener('error', (e) => {
            if (!isAnimating) {
                isAnimating = true;
                animate();
            }
        });

        calculateWidth();
        setSpeed();
        animate();

        return {
            pause: () => { isAnimating = false; },
            resume: () => {
                isAnimating = true;
                animate();
            },
            getSpeed: () => speed,
            setSpeed: (newSpeed) => { speed = newSpeed; }
        };
    }

    $(function () {
        const topSlider = initSlider($('.top-slider'), false);
        const bottomSlider = initSlider($('.bottom-slider'), true);
    });



    $('.faq-item').first().addClass('active').find('.faq-icon').text('-');
    $('.faq-question').on('click', function () {
        let parent = $(this).parent();

        if (parent.hasClass('active')) {
            // Already open → close it
            parent.removeClass('active').find('.faq-icon').text('+');
        } else {
            // Close others
            $('.faq-item.active').removeClass('active').find('.faq-icon').text('+');
            // Open clicked
            parent.addClass('active').find('.faq-icon').text('-');
        }
    });

    // Featured Tab
    $('.tab-btn').on('click', function () {
        var tabId = $(this).data('tab');

        $('.tab-btn').removeClass('active');
        $(this).addClass('active');

        $('.tab-content').removeClass('active');
        $('#' + tabId).addClass('active');
    });

    // See More Button
    $('.see-more-btn').on('click', function (e) {
        e.preventDefault();

        var $btn = $(this);
        var $content = $btn.next('.see-more-content');

        if (!$content.length) return;

        $content.slideToggle(300);

        $btn.text(
            $btn.text().trim() === 'See More' ? 'See Less' : 'See More'
        );
    });


    jQuery(document).ready(function ($) {

        const $steps = $('.step-form .form-step');
        let currentStep = 0;

        function showStep(index) {
            $steps.hide().removeClass('active');
            $steps.eq(index).show().addClass('active');
        }

        showStep(currentStep);

        $('.step-form').on('click', '.next-step', function () {

            const $current = $steps.eq(currentStep);
            const $input = $current.find('input');
            const value = $input.val().trim();

            if (!value) {
                $input.addClass('error').focus();
                return;
            }

            if ($input.attr('type') === 'email') {
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailRegex.test(value)) {
                    $input.addClass('error').focus();
                    return;
                }
            }

            if ($input.attr('type') === 'tel') {
                const phoneRegex = /^[0-9+\-\s]{8,}$/;
                if (!phoneRegex.test(value)) {
                    $input.addClass('error').focus();
                    return;
                }
            }

            $input.removeClass('error');
            currentStep++;

            if (currentStep < $steps.length) {
                showStep(currentStep);
            }
        });

        $('.step-form').on('input', 'input', function () {
            $(this).removeClass('error');
        });

        document.addEventListener('wpcf7mailsent', function () {
            currentStep = 0;
            $('.step-form input').val('').removeClass('error');
            showStep(currentStep);
        });

    });





    // document.addEventListener('DOMContentLoaded', function () {

    //     // TOP SLIDER → LEFT direction
    //     new Swiper('.top-swiper', {
    //         loop: true,
    //         slidesPerView: 'auto',
    //         spaceBetween: 32,
    //         speed: 4000,
    //         allowTouchMove: false,
    //         autoplay: {
    //             delay: 0,
    //             disableOnInteraction: false
    //         }
    //     });

    //     // BOTTOM SLIDER → RIGHT direction
    //     new Swiper('.bottom-swiper', {
    //         loop: true,
    //         slidesPerView: 'auto',
    //         spaceBetween: 32,
    //         speed: 4000,
    //         allowTouchMove: false,
    //         autoplay: {
    //             delay: 0,
    //             reverseDirection: true,
    //             disableOnInteraction: false
    //         }
    //     });

    // });

})