<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="robots" content="noindex" />
    <!-- meta情報 -->
    <title>CodeUps|sitemap</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <!-- ogp -->
    <meta property="og:title" content="" />
    <meta property="og:type" content="" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <!-- ファビコン -->
    <link rel="icon" href="./assets/images/common/icon.png" />
    <!-- フォント -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gotu&family=Lato:wght@400;700&family=Noto+Sans+JP:wght@400;500;700&family=Noto+Serif+JP:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- css -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="./assets/css/style.css" />
    <!-- JavaScript -->
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script  src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="./assets/js/jquery.inview.min.js"></script>
    <script defer src="./assets/js/script.js"></script>
  </head>
  <body>
    <header class="header js-header">
      <div class="header__inner">
        <div class="header__logo">
          <a href="index.html">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/logo-header.svg" alt="コードアップス">
          </a>
        </div>
        <div class="header__hamburger hamburger js-hamburger u-mobile">
          <span></span>
          <span></span>
          <span></span>
        </div>
        <nav class="header__nav u-desktop">
          <ul class="header__items">
            <li class="header__item">
              <a href="archive-campaign.html">
                <p class="header__item-en">Campaign</p>
                <p class="header__item-ja">キャンペーン</p>
              </a>
            </li>
            <li class="header__item">
              <a href="page-about-us.html">
                <p class="header__item-en">About&ensp;us</p>
                <p class="header__item-ja">私たちについて</p>
              </a>
            </li>
            <li class="header__item">
              <a href="page-information.html">
                <p class="header__item-en">Information</p>
                <p class="header__item-ja">ダイビング情報</p>
              </a>
            </li>
            <li class="header__item">
              <a href="home.html">
                <p class="header__item-en">Blog</p>
                <p class="header__item-ja">ブログ</p>
              </a>
            </li>
            <li class="header__item">
              <a href="archive-voice.html">
                <p class="header__item-en">Voice</p>
                <p class="header__item-ja">お客様の声</p>
              </a>
            </li>
            <li class="header__item">
              <a href="page-price.html">
                <p class="header__item-en">Price</p>
                <p class="header__item-ja">料金一覧</p>
              </a>
            </li>
            <li class="header__item">
              <a href="page-faq.html">
                <p class="header__item-en">FAQ</p>
                <p class="header__item-ja">よくある質問</p>
              </a>
            </li>
            <li class="header__item">
              <a href="page-contact.html">
                <p class="header__item-en">Contact</p>
                <p class="header__item-ja">お問い合わせ</p>
              </a>
            </li>
          </ul>
        </nav>
        <div class="header__drawer drawer js-drawer">
          <div class="drawer__inner u-mobile">
            <nav class="drawer__nav navigation">
              <ul class="navigation__items">
                <li class="navigation__item navigation__item--top">
                  <a href="archive-campaign.html">
                    <figure class="navigation__img">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/starfish.png" alt="ヒトデイラスト">
                  </figure>
                    <p class="navigation__text navigation__text--bold">キャンペーン</p>
                  </a>
                  <ul class="navigation__item-block">
                    <li class="navigation__item">
                      <a href="archive-campaign.html">
                        <p class="navigation__text-blank">ライセンス取得</p>
                      </a>
                    </li>
                    <li class="navigation__item">
                      <a href="archive-campaign.html">
                        <p class="navigation__text-blank">貸切体験ダイビング</p>
                      </a>
                    </li>
                    <li class="navigation__item">
                      <a href="archive-campaign.html">
                        <p class="navigation__text-blank">ナイトダイビング</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="navigation__item navigation__item--top">
                  <a href="page-about-us.html">
                    <figure class="navigation__img">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/starfish.png" alt="ヒトデイラスト">
                  </figure>
                    <p class="navigation__text navigation__text--bold">私たちについて</p>
                  </a>
                  <ul class="navigation__item-block">
                    <li class="navigation__item navigation__item--top">
                      <a href="page-information.html">
                        <figure class="navigation__img">
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/starfish.png" alt="ヒトデイラスト">
                      </figure>
                        <p class="navigation__text navigation__text--bold">ダイビング情報</p>
                      </a>
                    </li>
                    <li class="navigation__item">
                      <a href="page-information.html?tabId=tab1">
                        <p class="navigation__text-blank">ライセンス講習</p>
                      </a>
                    </li>
                    <li class="navigation__item">
                      <a href="page-information.html?tabId=tab2">
                        <p class="navigation__text-blank">体験ダイビング</p>
                      </a>
                    </li>
                    <li class="navigation__item">
                      <a href="page-information.html?tabId=tab3">
                        <p class="navigation__text-blank">ファンダイビング</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="navigation__item  navigation__item--top">
                  <a href="home.html">
                    <figure class="navigation__img">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/starfish.png" alt="ヒトデイラスト">
                  </figure>
                    <p class="navigation__text">ブログ</p>
                  </a>
                </li>
              </ul>
              <ul class="navigation__items-block">
                <li class="navigation__item navigation__item--top">
                  <a href="archive-voice.html">
                    <figure class="navigation__img">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/starfish.png" alt="ヒトデイラスト">
                  </figure>
                    <p class="navigation__text navigation__text--bold">お客様の声</p>
                  </a>
                </li>
                <li class="navigation__item  navigation__item--top">
                  <a href="page-price.html">
                    <figure class="navigation__img">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/starfish.png" alt="ヒトデイラスト">
                  </figure>
                    <p class="navigation__text navigation__text--bold">料金一覧</p>
                  </a>
                  <ul class="navigation__item-block">
                    <li class="navigation__item navigation__item--top">
                      <a href="page-price.html">
                        <p class="navigation__text-blank">ライセンス講習</p>
                      </a>
                    </li>
                    <li class="navigation__item">
                      <a href="page-price.html">
                        <p class="navigation__text-blank">体験ダイビング</p>
                      </a>
                    </li>
                    <li class="navigation__item">
                      <a href="page-price.html">
                        <p class="navigation__text-blank">ファンダイビング</p>
                      </a>
                    </li>
                  </ul>
                </li>
                  <li class="navigation__item  navigation__item--top">
                    <a href="page-faq.html">
                      <figure class="navigation__img">
                      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/starfish.png" alt="ヒトデイラスト">
                    </figure>
                      <p class="navigation__text navigation__text--bold">よくある質問</p>
                    </a>
                  </li>
                  <li class="navigation__item  navigation__item--top">
                    <a href="page-privacypolicy.html">
                      <figure class="navigation__img">
                      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/starfish.png" alt="ヒトデイラスト">
                    </figure>
                      <p class="navigation__text navigation__text--bold">プライバシー<br>ポリシー</p>
                    </a>
                  </li>
                <li class="navigation__item  navigation__item--top">
                  <a href="page-terms-of-service.html">
                    <figure class="navigation__img">
                      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/starfish.png" alt="ヒトデイラスト">
                    </figure>
                    <p class="navigation__text navigation__text--bold">利用規約</p>
                  </a>
                </li>
                <li class="navigation__item navigation__item--top">
                  <a href="page-contact.html">
                    <figure class="navigation__img">
                      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/starfish.png" alt="ヒトデイラスト">
                    </figure>
                    <p class="navigation__text  navigation__text--bold">お問い合わせ</p>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </header>
    <main>
      <div class="page-sitemap__mv mv">
        <h1 class="mv__heading heading">site&ensp;map</h1>
      </div>

      <?php get_template_part('parts/breadcrumb'); ?>

      <div class="page-sitemap">
        <div class="page-sitemap__inner inner top-page-sitemap">
          <nav class="page-sitemap__nav navigation">
            <div class="navigation__block">
              <ul>
                <li class="navigation__item">
                  <a href="archive-campaign.html">
                    <figure class="navigation__img">
                      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/starfish-black.png" alt="ヒトデイラスト">
                    </figure>
                    <p class="navigation__text navigation__text--bold">キャンペーン</p>
                  </a>
                </li>
                <li class="navigation__item">
                  <a href="archive-campaign.html">
                    <p class="navigation__text-blank">ライセンス取得</p>
                  </a>
                </li>
                <li class="navigation__item">
                  <a href="archive-campaign.html">
                    <p class="navigation__text-blank">貸切体験ダイビング</p>
                  </a>
                </li>
                <li class="navigation__item">
                  <a href="archive-campaign.html">
                    <p class="navigation__text-blank">ナイトダイビング</p>
                  </a>
                </li>
                <li class="navigation__item">
                  <a href="page-about-us.html">
                    <figure class="navigation__img">
                      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/starfish-black.png" alt="ヒトデイラスト">
                    </figure>
                    <p class="navigation__text navigation__text--bold">私たちについて</p>
                  </a>
                </li>
              </ul>
              <ul>
                <li class="navigation__item">
                  <a href="page-information.html">
                    <figure class="navigation__img">
                      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/starfish-black.png" alt="ヒトデイラスト">
                    </figure>
                    <p class="navigation__text navigation__text--bold">ダイビング情報</p>
                  </a>
                </li>
                <li class="navigation__item">
                  <a href="page-information.html">
                    <p class="navigation__text-blank">ライセンス講習</p>
                  </a>
                </li>
                <li class="navigation__item">
                  <a href="page-information.html">
                    <p class="navigation__text-blank">体験ダイビング</p>
                  </a>
                </li>
                <li class="navigation__item">
                  <a href="page-information.html">
                    <p class="navigation__text-blank">ファンダイビング</p>
                  </a>
                </li>
                <li class="navigation__item">
                  <a href="home.html">
                    <figure class="navigation__img">
                      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/starfish-black.png" alt="ヒトデイラスト">
                    </figure>
                    <p class="navigation__text navigation__text--bold">ブログ</p>
                  </a>
                </li>
              </ul>
            </div>
            <div class="navigation__block">
              <ul>
                <li class="navigation__item">
                  <a href="archive-voice.html">
                    <figure class="navigation__img">
                      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/starfish-black.png" alt="ヒトデイラスト">
                    </figure>
                    <p class="navigation__text navigation__text--bold">お客様の声</p>
                  </a>
                </li>
                <li class="navigation__item">
                  <a href="page-price.html">
                    <figure class="navigation__img">
                      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/starfish-black.png" alt="ヒトデイラスト">
                    </figure>
                    <p class="navigation__text navigation__text--bold">料金一覧</p>
                  </a>
                </li>
                <li class="navigation__item">
                  <a href="archive-campaign.html">
                    <p class="navigation__text-blank">ライセンス講習</p>
                  </a>
                </li>
                <li class="navigation__item">
                  <a href="archive-campaign.html">
                    <p class="navigation__text-blank">体験ダイビング</p>
                  </a>
                </li>
                <li class="navigation__item">
                  <a href="archive-campaign.html">
                    <p class="navigation__text-blank">ファンダイビング</p>
                  </a>
                </li>
              </ul>
              <ul>
                <li class="navigation__item">
                  <a href="page-faq.html">
                    <figure class="navigation__img">
                      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/starfish-black.png" alt="ヒトデイラスト">
                    </figure>
                    <p class="navigation__text navigation__text--bold">よくある質問</p>
                  </a>
                </li>
                <li class="navigation__item">
                  <a href="page-privacypolicy.html">
                    <figure class="navigation__img">
                      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/starfish-black.png" alt="ヒトデイラスト">
                    </figure>
                    <p class="navigation__text navigation__text--bold">プライバシー<br class="u-mobile">ポリシー</p>
                  </a>
                </li>
                <li class="navigation__item">
                  <a href="page-terms-of-service.html">
                    <figure class="navigation__img">
                      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/starfish-black.png" alt="ヒトデイラスト">
                    </figure>
                    <p class="navigation__text navigation__text--bold">利用規約</p>
                  </a>
                </li>
                <li class="navigation__item">
                  <a href="page-contact.html">
                    <figure class="navigation__img">
                      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/starfish-black.png" alt="ヒトデイラスト">
                    </figure>
                    <p class="navigation__text navigation__text--bold">お問い合わせ</p>
                  </a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
      <!-- コンタクト -->
      <section class="contact top-contact">
        <div class="contact__inner inner">
          <div class="contact__body">
            <div class="contact__items">
              <figure class="contact__logo">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/logo-green.svg" alt="コードアップス">
              </figure>
              <div class="contact__info">
                <ul class="contact__item">
                  <li class="contact__address">沖縄県那覇市1-1</li>
                  <li class="contact__tel">
                    <a href="tel:01200000000">tel:0120-000-0000</a>
                  </li>
                  <li>営業時間:8:30-19:00</li>
                  <li>定休日:毎週火曜日
                  </li>
                </ul>
                <div class="contact__map">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d19016.32624698157!2d127.67060615241546!3d26.222643361682515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sja!2sjp!4v1688689534890!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
              </div>
            </div>
            <div class="contact__access">
              <div class="contact__title title">
                <div class="title__inner">
                  <p class="title-en">contact</p>
                  <h2 class="title-ja">お問い合わせ</h2>
                  <p class="title-sub">ご予約・お問い合わせはコチラ</p>
                  <div class="contact__btn">
                    <a href="page-contact.html" class="btn">contact&ensp;us<span></span></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <a href="page-contact.html" class="page-top-button js-page-top"><span></span></a>
    </main>
    <footer class="footer top-footer js-footer">
      <div class="footer__inner inner">
        <div class="footer__img-block">
          <figure class="footer__img"><a href="index.html">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/logo-footer.svg" alt="コードアップスロゴ">
          </a></figure>
          <figure class="footer__img--sns">
            <a href="#"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/facebook.svg" alt="facebook"></a>
            <a href="#"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/Instagram.svg" alt="instagram"></a>
          </figure>
        </div>
        <nav class="footer__nav navigation">
          <div class="navigation__block">
            <ul class="navigation__items">
              <li class="navigation__item">
                <a href="archive-campaign.html">
                  <figure class="navigation__img">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/starfish.png" alt="ヒトデイラスト">
                  </figure>
                  <p class="navigation__text navigation__text--bold">キャンペーン</p>
                </a>
              </li>
              <li class="navigation__item">
                <a href="archive-campaign.html">
                  <p class="navigation__text-blank">ライセンス取得</p>
                </a>
              </li>
              <li class="navigation__item">
                <a href="archive-campaign.html">
                  <p class="navigation__text-blank">貸切体験ダイビング</p>
                </a>
              </li>
              <li class="navigation__item">
                <a href="archive-campaign.html">
                  <p class="navigation__text-blank">ナイトダイビング</p>
                </a>
              </li>
              <li class="navigation__item">
                <a href="page-about-us.html">
                  <figure class="navigation__img">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/starfish.png" alt="ヒトデイラスト">
                  </figure>
                  <p class="navigation__text navigation__text--bold">私たちについて</p>
                </a>
              </li>
            </ul>
            <ul>
              <li class="navigation__item">
                <a href="page-information.html">
                  <figure class="navigation__img">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/starfish.png" alt="ヒトデイラスト">
                  </figure>
                  <p class="navigation__text navigation__text--bold">ダイビング情報</p>
                </a>
              </li>
              <li class="navigation__item">
                <a href="page-information.html?tabId=tab1">
                  <p class="navigation__text-blank">ライセンス講習</p>
                </a>
              </li>
              <li class="navigation__item">
                <a href="page-information.html?tabId=tab2">
                  <p class="navigation__text-blank">体験ダイビング</p>
                </a>
              </li>
              <li class="navigation__item">
                <a href="page-information.html?tabId=tab3">
                  <p class="navigation__text-blank">ファンダイビング</p>
                </a>
              </li>
              <li class="navigation__item">
                <a href="home.html">
                  <figure class="navigation__img">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/starfish.png" alt="ヒトデイラスト">
                  </figure>
                  <p class="navigation__text navigation__text--bold">ブログ</p>
                </a>
              </li>
            </ul>
          </div>
          <div class="navigation__block">
            <ul class="navigation__items">
              <li class="navigation__item">
                <a href="archive-voice.html">
                  <figure class="navigation__img">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/starfish.png" alt="ヒトデイラスト">
                  </figure>
                  <p class="navigation__text navigation__text--bold">お客様の声</p>
                </a>
              </li>
              <li class="navigation__item">
                <a href="page-price.html">
                  <figure class="navigation__img">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/starfish.png" alt="ヒトデイラスト">
                  </figure>
                  <p class="navigation__text navigation__text--bold">料金一覧</p>
                </a>
              </li>
              <li class="navigation__item">
                <a href="archive-campaign.html">
                  <p class="navigation__text-blank">ライセンス講習</p>
                </a>
              </li>
              <li class="navigation__item">
                <a href="archive-campaign.html">
                  <p class="navigation__text-blank">体験ダイビング</p>
                </a>
              </li>
              <li class="navigation__item">
                <a href="archive-campaign.html">
                  <p class="navigation__text-blank">ファンダイビング</p>
                </a>
              </li>
            </ul>
            <ul class="navigation__items">
              <li class="navigation__item">
                <a href="page-faq.html">
                  <figure class="navigation__img">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/starfish.png" alt="ヒトデイラスト">
                  </figure>
                  <p class="navigation__text navigation__text--bold">よくある質問</p>
                </a>
              </li>
              <li class="navigation__item">
                <a href="page-privacypolicy.html">
                  <figure class="navigation__img">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/starfish.png" alt="ヒトデイラスト">
                  </figure>
                  <p class="navigation__text navigation__text--bold">プライバシー<br class="u-mobile">ポリシー</p>
                </a>
              </li>
              <li class="navigation__item">
                <a href="page-terms-of-service.html">
                  <figure class="navigation__img">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/starfish.png" alt="ヒトデイラスト">
                  </figure>
                  <p class="navigation__text navigation__text--bold">利用規約</p>
                </a>
              </li>
              <li class="navigation__item">
                <a href="page-contact.html">
                  <figure class="navigation__img">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/starfish.png" alt="ヒトデイラスト">
                  </figure>
                  <p class="navigation__text navigation__text--bold">お問い合わせ</p>
                </a>
              </li>
            </ul>
          </div>
        </nav>
        <div class="footer__copy">
          <small class="footer__copyright">Copyright &copy; 2021 - 2023 CodeUps LLC. All Rights Reserved.</small>
        </div>
      </div>
    </footer>
  </body>
</html>