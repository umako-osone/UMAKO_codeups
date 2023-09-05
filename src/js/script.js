
jQuery(function ($) { // この中であればWordpressでも「$」が使用可能になる

    //ハンバーガー
    $(function () {
        $('.js-hamburger').on('click', function() {
            $('.js-hamburger').toggleClass('is-active');
            $('.js-header').toggleClass('is-active');
            $('.js-header.headerColorScroll').toggleClass('is-active');
            $('.js-drawer').fadeToggle();
            $('body').toggleClass('no-scroll');
        });
    });
    // ウィンドウサイズが変更されたときの処理
    $(window).on('resize', function() {
        if ($(window).width() >= 768) {
            $('.js-hamburger').removeClass('is-active');
            $('.js-header').removeClass('is-active');
            $('.js-drawer').fadeOut();
            $('body').removeClass('no-scroll');
        }
    });
    // スワイパー
    const campaignSwiper = new Swiper('.campaign-swiper', {
        slidesPerView: "auto",
        loop: true,
        speed: 3000,
        slideToClickedSlide: true,
        spaceBetween: 24,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        breakpoints: {
            768: {
                spaceBetween: 40,
            },
        },
        loopAdditionalSlides: 1,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
        },
    });

    // 背景色の後に画像
    // インフォメーション
    $('.js-information__img').each(function(){
        $(this).append('<div class="color"></div>');
        var color = $(this).find($('.color'));
        var img = $(this).find('img');
        var counter = 0;

        img.css('opacity','0');
        color.css('width','0%');
        //inviewを使って背景色が画面に現れたら処理をする
        color.on('inview', function(){
            if(counter == 0){
            $(this).delay(200).animate({'width':'100%'},700,function(){
                img.css('opacity','1');
                $(this).css({'left':'0' , 'right':'auto'});
                $(this).animate({'width':'0%'},700);
            });
                counter = 1;
            };
        });
    });
    // ボイス
    $('.js-voice-card__img').each(function(){
        $(this).append('<div class="color"></div>');
        var color = $(this).find($('.color'));
        var img = $(this).find('img');
        var counter = 0;

        img.css('opacity','0');
        color.css('width','0%');
        //inviewを使って背景色が画面に現れたら処理をする
        color.on('inview', function(){
            if(counter == 0){
            $(this).delay(200).animate({'width':'100%'},700,function(){
                img.css('opacity','1');
                $(this).css({'left':'0' , 'right':'auto'});
                $(this).animate({'width':'0%'},700);
                    });
                counter = 1;
            };
        });
    });
    // プライス
    $('.js-price__img-pc').each(function(){
        $(this).append('<div class="color"></div>');
        var color = $(this).find($('.color'));
        var img = $(this).find('img');
        var counter = 0;

        img.css('opacity','0');
        color.css('width','0%');
        //inviewを使って背景色が画面に現れたら処理をする
        color.on('inview', function(){
            if(counter == 0){
            $(this).delay(200).animate({'width':'100%'},700,function(){
                img.css('opacity','1');
                $(this).css({'left':'0' , 'right':'auto'});
                $(this).animate({'width':'0%'},700);
                    });
                counter = 1;
            };
        });
    });

    // fv超えたら色が変わる
    $(function () {
    $(window).on("scroll", function () {
        const sliderHeight = $(".fv, .mv").height();
        if (sliderHeight - 30 < $(this).scrollTop()) {
        $(".js-header").addClass("headerColorScroll");
        } else {
        $(".js-header").removeClass("headerColorScroll");
        }
    });
    });
    // ページトップへ
    $(function () {
        const pageTop = $(".js-page-top");
        pageTop.hide();
        $(window).scroll(function () {
            if ($(this).scrollTop() > 20) {
            pageTop.fadeIn();
            } else {
            pageTop.fadeOut();
            }
        });
        pageTop.click(function () {
            $("body, html").animate(
            {
                scrollTop: 0,
            },
            300
            );
            return false;
        });
    });
    //フッター手前で止まるボタン
    $(document).ready(function() {
        $(window).scroll(function() {
            var footerOffset = $('footer').offset().top;
            var backToTopButton = $('.js-page-top');
            if ($(this).scrollTop() > 100) {
                backToTopButton.addClass('show');
            } else {
                backToTopButton.removeClass('show');
            }

            if ($(this).scrollTop() + $(window).height() > footerOffset) {
                backToTopButton.css('bottom', $(this).scrollTop() + $(window).height() - footerOffset + 50);
            } else {
                backToTopButton.css('bottom', '20px');
            }
        });

            $('#back-to-top').on('click', function(e) {
            e.preventDefault();
            $('html, body').animate({ scrollTop: 0 }, '300');
        });
    });



// トップ画像のアニメーション
    $(function(){
        $(".fv-slide__cover-left").animate({top: "-=100vh"}, 2000);

        $(".fv-slide__cover-right").delay(80).animate({top: "-=100vh"}, 2000);

        $(".fv-slide__heading").fadeOut(2000);
        $(".fv__title").on("animationend", function() {
            // アニメーションの完了時にSwiperを開始する処理を実行
            const fvSwiper = new Swiper('.fv-swiper', {
                loop: true,
                speed: 3000,
                autoplay: {
                    delay: 3000,
                },
            });
        });
    });
    // モーダル
    $(document).ready(function() {
        $('.js-gallery__item').click(function() {
            var imgSrc = $(this).find('img').attr('src');
            $('.overlay').fadeIn();
            $('.overlay').append('<img src="' + imgSrc + '" class="modal-image" alt="">');
            $('body').toggleClass('no-scroll');
        });
        $('.overlay').click(function() {
            $(this).fadeOut();
            $('.modal-image').remove();
        });
    });
    // タブ
    $(function () {
        $(".js-tab").on("click", function () {
            $(".current").removeClass("current");
            $(this).addClass("current");
            const index = $(this).index();
            $(".js-tab-content").hide().eq(index).fadeIn(300);
        });
    });
    // ブログ
    $(function() {
        $('.archive-list__items').hover(function() {
            $(this).children('ul').stop().slideToggle(200);
        })
    })
    // アコーディオン
    $(function () {
    // タイトルをクリックすると
        $("#js-accordion-title").on("click", function () {
        $(this).toggleClass("open");
        $(this).next().slideToggle(300);
        });
    });
    // フォームエラー表示
    $(function() {
        $('.js-contact-form__inner').validate( {
            rules: {
                name: {
                    required: true,
                },
                email: {
                    required: true,
                },
                tel: {
                    required: true,
                },
                option: {
                    required: true,
                },
                contents: {
                    required: true,
                },
            },
            messages: {
                name: {
                    required: "※必須項目が入力されていません。入力してください。",
                },
                email: {
                    required: "※必須項目が入力されていません。入力してください。",
                },
                tel: {
                    required: "※必須項目が入力されていません。入力してください。",
                },
                option: {
                    required: "※必須項目が入力されていません。入力してください。",
                },
                contents: {
                    required: "※必須項目が入力されていません。入力してください。",
                },
            },
            errorPlacement: function(error, element) {
                error.insertBefore('.js-contact-form__alert')
            },
            highlight: function(element) {
                // エラーが発生したときの処理
                $(element).addClass('error__field'); // エラークラスを追加して背景色を適用
            },
            unhighlight: function(element) {
                // エラーが解消されたときの処理
                $(element).removeClass('error__field'); // エラークラスを削除して背景色を解除
            },
        })
    })







});
