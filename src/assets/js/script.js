"use strict";

jQuery(function ($) {
  // この中であればWordpressでも「$」が使用可能になる

  //ハンバーガー
  $(function () {
    $('.js-hamburger').on('click', function () {
      $('.js-hamburger').toggleClass('is-active');
      $('.js-header').toggleClass('is-active');
      $('.js-header.headerColorScroll').toggleClass('is-active');
      $('.js-drawer').fadeToggle();
      $('body').toggleClass('no-scroll');
    });
  });
  // ウィンドウサイズが変更されたときの処理
  $(window).on('resize', function () {
    if ($(window).width() >= 768) {
      $('.js-hamburger').removeClass('is-active');
      $('.js-header').removeClass('is-active');
      $('.js-drawer').fadeOut();
      $('body').removeClass('no-scroll');
    }
  });
  // スワイパー
  var campaignSwiper = new Swiper('.campaign-swiper', {
    slidesPerView: "auto",
    loop: true,
    speed: 3000,
    slideToClickedSlide: true,
    spaceBetween: 24,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false
    },
    breakpoints: {
      768: {
        spaceBetween: 40
      }
    },
    loopAdditionalSlides: 1,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev"
    }
  });

  // 背景色の後に画像
  // インフォメーション
  jQuery(document).ready(function ($) {
    $('.js-information__img').each(function () {
        $(this).append('<div class="color"></div>');
        var color = $(this).find('.color');
        var img = $(this).find('img');
        var counter = 0;
        img.css('opacity', '0');
        color.css('width', '0%');
        // Waypoint プラグインを使用して画面内に表示されたら処理を実行
        color.waypoint(function () {
            if (counter === 0) {
                $(this.element).delay(200).animate({
                    'width': '100%'
                }, 700, function () {
                    img.css('opacity', '1');
                    $(this).css({
                        'left': '0',
                        'right': 'auto'
                    });
                    $(this).animate({
                        'width': '0%'
                    }, 700);
                });
                counter = 1;
            }
        }, {
            offset: '100%' // 要素が画面下端からどれだけ離れた位置で実行するかを指定
        });
    });
});
// ボイス
  jQuery(document).ready(function ($) {
    $('.js-voice-card__img').each(function () {
        $(this).append('<div class="color"></div>');
        var color = $(this).find('.color');
        var img = $(this).find('img');
        var counter = 0;
        img.css('opacity', '0');
        color.css('width', '0%');
        // Waypoint プラグインを使用して画面内に表示されたら処理を実行
        color.waypoint(function () {
            if (counter === 0) {
                $(this.element).delay(200).animate({
                    'width': '100%'
                }, 700, function () {
                    img.css('opacity', '1');
                    $(this).css({
                        'left': '0',
                        'right': 'auto'
                    });
                    $(this).animate({
                        'width': '0%'
                    }, 700);
                });
                counter = 1;
            }
        }, {
            offset: '100%' // 要素が画面下端からどれだけ離れた位置で実行するかを指定
        });
    });
});

  // プライス
  jQuery(document).ready(function ($) {
    $('.js-price__img-pc').each(function () {
        $(this).append('<div class="color"></div>');
        var color = $(this).find('.color');
        var img = $(this).find('img');
        var counter = 0;
        img.css('opacity', '0');
        color.css('width', '0%');
        // Waypoint プラグインを使用して画面内に表示されたら処理を実行
        color.waypoint(function () {
            if (counter === 0) {
                $(this.element).delay(200).animate({
                    'width': '100%'
                }, 700, function () {
                    img.css('opacity', '1');
                    $(this).css({
                        'left': '0',
                        'right': 'auto'
                    });
                    $(this).animate({
                        'width': '0%'
                    }, 700);
                });
                counter = 1;
            }
        }, {
            offset: '100%' // 要素が画面下端からどれだけ離れた位置で実行するかを指定
        });
    });
});

  // fv超えたら色が変わる
  $(function () {
    $(window).on("scroll", function () {
      var sliderHeight = $(".fv, .mv").height();
      if (sliderHeight - 30 < $(this).scrollTop()) {
        $(".js-header").addClass("headerColorScroll");
      } else {
        $(".js-header").removeClass("headerColorScroll");
      }
    });
  });
  // ページトップへ
  $(function () {
    var pageTop = $(".js-page-top");
    pageTop.hide();
    $(window).scroll(function () {
      if ($(this).scrollTop() > 20) {
        pageTop.fadeIn();
      } else {
        pageTop.fadeOut();
      }
    });
    pageTop.click(function () {
      $("body, html").animate({
        scrollTop: 0
      }, 300);
      return false;
    });
  });
  //フッター手前で止まるボタン
  $(document).ready(function () {
    $(window).scroll(function () {
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
    $('#back-to-top').on('click', function (e) {
      e.preventDefault();
      $('html, body').animate({
        scrollTop: 0
      }, '300');
    });
  });
  // トップ画像のアニメーション
  $(function () {
    $(".fv-slide__cover-left").animate({
      top: "-=100vh"
    }, 2000);
    $(".fv-slide__cover-right").delay(80).animate({
      top: "-=100vh"
    }, 2000);
    $(".fv-slide__heading").fadeOut(2000);
    $(".fv__title").on("animationend", function () {
      // アニメーションの完了時にSwiperを開始する処理を実行
      var fvSwiper = new Swiper('.fv-swiper', {
        loop: true,
        speed: 3000,
        autoplay: {
          delay: 3000
        }
      });
    });
  });
  // モーダル
  $(document).ready(function () {
    $('.js-gallery__item').click(function () {
      var imgSrc = $(this).find('img').attr('src');
      $('.overlay').fadeIn();
      $('.overlay').append('<img src="' + imgSrc + '" class="modal-image" alt="">');
      $('body').addClass('no-scroll');
    });
    $('.overlay').click(function () {
      $(this).fadeOut();
      $('.modal-image').remove();
      $('body').removeClass('no-scroll');
    });
  });
  // タブ
  $(function () {
    $(".js-tab__category").click(function (e) {
      e.preventDefault();
      $(".js-tab__category").removeClass("is-active");
      $(this).addClass("is-active");
    });
  });
  // インフォメーションタブ
  $(function () {
    $(".js-information-tab").on("click", function () {
      $(".current").removeClass("current");
      $(this).addClass("current");
      var index = $(this).index();
      $(".js-information-tab__content").hide().eq(index).fadeIn(300);
    });
    var urlParams = new URLSearchParams(window.location.search);
    var tabId = urlParams.get("tabId");
    if (tabId) {
      $(".current").removeClass("current");
      // タブがクエリパラメータで指定された場合、該当のタブにcurrentクラスを付与
      $(".js-information-tab[data-tab-id=\"".concat(tabId, "\"]")).addClass("current");
      var index = $(".js-information-tab[data-tab-id=\"".concat(tabId, "\"]")).index();
      $(".js-information-tab__content").hide().eq(index).fadeIn(100);
    }
  });
  // ブログ
  $(function () {
    $('.tab__category').hover(function () {
      $(this).children('ul').stop().slideToggle(200);
    });
  });
  // アコーディオン
  $(function () {
    // タイトルをクリックすると
    $(".js-accordion-title").on("click", function () {
      $(this).toggleClass("open");
      $(this).next().slideToggle(300);
    });
  });
  // ブログアーカイブ
  $(function () {
    $('.js-archive-list__year').on('click', function () {
      $('.archive-list__past').stop().slideToggle(200);
      // 矢印の回転を制御する部分
      $('.js-archive-list__img--1').toggleClass('rotated');
  
  });
});



});