<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="robots" content="noindex" />
    <?php wp_head(); ?>
  </head>
  <body>
    <header class="header js-header">
      <div class="header__inner">
        <h1 class="header__logo">
          <a href="index.html">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/logo-header.svg" alt="コードアップス">
          </a>
        </h1>
        <div class="header__hamburger hamburger js-hamburger u-mobile">
          <span></span>
          <span></span>
          <span></span>
        </div>
        <nav class="header__nav u-desktop">
          <ul class="header__items">
            <li class="header__item">
              <a href="archive-campaign.html">
                <p class="header__item-en">campaign</p>
                <p class="header__item-ja">キャンペーン</p>
              </a>
            </li>
            <li class="header__item">
              <a href="page-about-us.html">
                <p class="header__item-en">about&ensp;us</p>
                <p class="header__item-ja">私たちについて</p>
              </a>
            </li>
            <li class="header__item">
              <a href="page-information.html">
                <p class="header__item-en">information</p>
                <p class="header__item-ja">ダイビング情報</p>
              </a>
            </li>
            <li class="header__item">
              <a href="home.html">
                <p class="header__item-en">blog</p>
                <p class="header__item-ja">ブログ</p>
              </a>
            </li>
            <li class="header__item">
              <a href="archive-voice.html">
                <p class="header__item-en">voice</p>
                <p class="header__item-ja">お客様の声</p>
              </a>
            </li>
            <li class="header__item">
              <a href="page-price.html">
                <p class="header__item-en">price</p>
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
                <p class="header__item-en">contact</p>
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