jQuery(document).ready(function ($) {
    // header
    $(window).on('scroll', function () {
        $('.header').toggleClass('scrolled', $(this).scrollTop() > 20);
    });
    $('.menu-toggle').on('click', function () {
        $(this).toggleClass('active')
        $('.nav').toggleClass('active')
    })


    // infinite scroll
    function initSlider($slider, reverse = false) {
        const slides = $slider.html()
        $slider.append(slides)

        let speed = 1
        let position = 0

        function animate() {
            position += reverse ? speed : -speed
            if (!reverse && position <= -$slider[0].scrollWidth / 2) position = 0
            if (reverse && position >= 0) position = -$slider[0].scrollWidth / 2
            $slider.css('transform', 'translateX(' + position + 'px)')
            requestAnimationFrame(animate)
        }

        function setSpeed() {
            if ($(window).width() <= 768) speed = 2
            else if ($(window).width() <= 1024) speed = 1.5
            else speed = 1
        }

        $(window).on('resize', setSpeed)
        setSpeed()
        animate()
    }
    $(function () {
        initSlider($('.top-slider'), false)
        initSlider($('.bottom-slider'), true)
    })


    // faq section
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
})