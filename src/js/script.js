
jQuery(function ($) { // この中であればWordpressでも「$」が使用可能になる

    //ハンバーガー
    $(function () {
        $('.js-hamburger').on('click', function() {
            $('.js-hamburger').toggleClass('is-active');
            $('.js-drawer').fadeToggle();
            $('body').toggleClass('no-scroll');
        });
        $('.js-drawer').on('click', function() {
            $('.js-hamburger').removeClass('is-active');
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
    const swiper = new Swiper('.swiper', {
        direction: 'vertical',
        loop: true,
    });

    });
