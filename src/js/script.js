
jQuery(function ($) { // この中であればWordpressでも「$」が使用可能になる

    //ハンバーガー
    $(function () {
        $('.js-hamburger').on('click', function() {
            $('.js-hamburger').toggleClass('is-active');
            $('.js-header__inner').toggleClass('is-active');
            $('.js-drawer').fadeToggle();
            $('body').toggleClass('no-scroll');
        });
        $('.js-drawer').on('click', function() {
            $('.js-hamburger').removeClass('is-active');
            $('.js-header__inner').removeClass('is-active');
            $('.js-drawer').fadeOut();
            $('body').removeClass('no-scroll');
        });
    });
    // ウィンドウサイズが変更されたときの処理
    $(window).on('resize', function() {
        if ($(window).width() >= 768) {
            $('.js-hamburger').removeClass('is-active');
            $('.js-drawer').fadeOut();
            $('body').removeClass('no-scroll');
        }
    });

    // スワイパー
    const fvSwiper = new Swiper('.fv-swiper', {
        loop: true,
        speed: 3000,
        autoplay: {
            delay: 3000,
        },
    });

    // スワイパー
    const campaignSwiper = new Swiper('.campaign-swiper', {
        slidesPerView: 'auto',
        loop: true,
        speed: 3000,
        slideToClickedSlide: true,
        spaceBetween: 24,
        autoplay: {
            delay: 3000,
        },
        breakpoints: {
            768: {
                spaceBetween: 40,
            }
        },
    });

    });
