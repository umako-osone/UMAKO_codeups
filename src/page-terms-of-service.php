<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="robots" content="noindex" />
    <!-- meta情報 -->
    <title>CodeUps|利用規約</title>
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
      <div class="page-terms-of-service__mv mv">
        <h1 class="mv__heading heading">terms&ensp;of&ensp;service</h1>
      </div>

      <?php get_template_part('parts/breadcrumb'); ?>

      <section class="page-terms-of-service top-page-terms-of-service">
        <div class="page-terms-of-service__inner inner">
          <div class="page-terms-of-service__list list">
            <h2 class="list__title">利用規約</h2>
            <div class="list__text-block">
              <p class="list__text-top">
                以下は、Webサイトで使用する一般的な利用規約の例です。
              </p>
              <ol class="list__items">
                <li class="list__item">
                  概要 この利用規約は、当社が提供するサービスの利用に関する条件を定めたものです。本規約に同意いただくことで、当社のサービスを利用いただけます。なお、本規約に違反した場合、当社はサービスの提供を中止することがあります。
                </li>
                <li class="list__item">
                  サービスの利用 当社のサービスは、お客様が自己責任において利用するものとし、当社はその利用に対して責任を負いません。また、当社はいつでも、サービスの提供を中止することができるものとします。
                </li>
                <li class="list__item">
                  禁止事項 お客様は、以下の行為を禁止します。
                </li>
              </ol>
              <p class="list__text list__text--none">
                &#8226;&ensp;当社のサービスに対して不正なアクセスをすること&ensp;&#8226;&ensp;当社のサービスにおいて、他のユーザーに対して迷惑をかける行為をすること&ensp;&#8226;&ensp;当社のサービスを商業目的で利用すること ・当社のサービスに関する知的財産権を侵害する行為をすること&ensp;&#8226;&ensp;その他、法律や公序良俗に反する行為をすること
              </p>
              <ol class="list__items">
                <li class="list__item">
                  知的財産権 当社のサービスに関する知的財産権は、当社または当社にライセンスを許諾している者に帰属します。お客様は、当社の事前の承諾なしに、当社のサービスに関する知的財産権を使用することはできません。
                </li>
                <li class="list__item">
                  免責事項 当社は、当社のサービスに関連して発生した損害について、一切の責任を負わないものとします。また、当社は、当社のサービスにより提供される情報の正確性、信頼性、完全性、適時性についても一切保証しません。
                </li>
                <li class="list__item">
                  プライバシー 当社は、お客様の個人情報を適切に保護するために、個人情報保護方針に従って適切な取扱いを行います。
                </li>
                <li class="list__item">
                  その他の規定 本規約は、日本法に準拠して解釈されるものとし、当社とお客様は、本規約に関する紛争が生じた場合、東京地方裁判所を第一審の専属的合意管轄裁判所とすることに同意します。
                </li>
                <li class="list__item">
                  利用規約の変更 当社は、必要に応じて本利用規約を変更することがあります。変更後の利用規約は、当社のサイトに掲載された時点から効力を有するものとします。変更があった場合、当社は適切な手段でお知らせします。
                </li>
              </ol>
              <p class="list__text">
                以上が、当社の利用規約の概要です。お客様のサービス利用にあたっては、本規約をお読みいただき、同意いただける場合のみサービスをご利用ください。
              </p>
            </div>
          </div>
        </div>
      </section>
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