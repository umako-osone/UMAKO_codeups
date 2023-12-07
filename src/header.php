<!DOCTYPE html>
<html <?php language_attributes();?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="robots" content="noindex" />
    <?php wp_head(); ?>
  </head>

  <?php
    $campaign = esc_url( home_url('/campaign/'));
    $aboutUs = esc_url( home_url('/about-us/'));
    $information = esc_url( home_url('/information/'));
    $home = esc_url( home_url('/blog/'));
    $voice = esc_url( home_url('/voice/'));
    $price = esc_url( home_url('/price/'));
    $faq = esc_url( home_url('/faq/'));
    $contact = esc_url( home_url('/contact/'));
    $privacypolicy = esc_url( home_url('/privacypolicy/'));
    $termsOfService = esc_url( home_url('/privacypolicy/'));
  ?>

  <body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

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
              <a href="<?php echo $campaign?>">
              <p class="header__item-en">campaign</p>
                <p class="header__item-ja">キャンペーン</p>
              </a>
            </li>
            <li class="header__item">
              <a href="<?php echo $aboutUs?>">
                <p class="header__item-en">about&ensp;us</p>
                <p class="header__item-ja">私たちについて</p>
              </a>
            </li>
            <li class="header__item">
              <a href="<?php echo $information?>">
                <p class="header__item-en">information</p>
                <p class="header__item-ja">ダイビング情報</p>
              </a>
            </li>
            <li class="header__item">
              <a href="<?php echo $home?>">
                <p class="header__item-en">blog</p>
                <p class="header__item-ja">ブログ</p>
              </a>
            </li>
            <li class="header__item">
              <a href="<?php echo $voice?>">
                <p class="header__item-en">voice</p>
                <p class="header__item-ja">お客様の声</p>
              </a>
            </li>
            <li class="header__item">
              <a href="<?php echo $price?>">
                <p class="header__item-en">price</p>
                <p class="header__item-ja">料金一覧</p>
              </a>
            </li>
            <li class="header__item">
              <a href="<?php echo $faq?>">
                <p class="header__item-en">FAQ</p>
                <p class="header__item-ja">よくある質問</p>
              </a>
            </li>
            <li class="header__item">
              <a href="<?php echo $contact?>">
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
                <a href="<?php echo $campaign?>">
                    <figure class="navigation__img">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/starfish.png" alt="ヒトデイラスト">
                  </figure>
                    <p class="navigation__text navigation__text--bold">キャンペーン</p>
                  </a>
                  <ul class="navigation__item-block">
                    <li class="navigation__item">
                    <a href="<?php echo $campaign?>">
                        <p class="navigation__text-blank">ライセンス取得</p>
                      </a>
                    </li>
                    <li class="navigation__item">
                      <a href="<?php echo $campaign?>">
                        <p class="navigation__text-blank">貸切体験ダイビング</p>
                      </a>
                    </li>
                    <li class="navigation__item">
                      <a href="<?php echo $campaign?>">
                        <p class="navigation__text-blank">ナイトダイビング</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="navigation__item navigation__item--top">
                  <a href="<?php echo $aboutUs?>">
                    <figure class="navigation__img">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/starfish.png" alt="ヒトデイラスト">
                  </figure>
                    <p class="navigation__text navigation__text--bold">私たちについて</p>
                  </a>
                  <ul class="navigation__item-block">
                    <li class="navigation__item navigation__item--top">
                      <a href="<?php echo $information?>">
                        <figure class="navigation__img">
                          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/starfish.png" alt="ヒトデイラスト">
                        </figure>
                        <p class="navigation__text navigation__text--bold">ダイビング情報</p>
                      </a>
                    </li>
                    <li class="navigation__item">
                      <a href="<?php echo $information; ?>?tabId=tab1">
                        <p class="navigation__text-blank">ライセンス講習</p>
                      </a>
                    </li>
                    <li class="navigation__item">
                    <a href="<?php echo $information; ?>?tabId=tab2">
                        <p class="navigation__text-blank">体験ダイビング</p>
                      </a>
                    </li>
                    <li class="navigation__item">
                      <a href="<?php echo $information; ?>?tabId=tab3">
                        <p class="navigation__text-blank">ファンダイビング</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="navigation__item  navigation__item--top">
                  <a href="<?php echo $home?>">
                    <figure class="navigation__img">
                      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/starfish.png" alt="ヒトデイラスト">
                    </figure>
                    <p class="navigation__text">ブログ</p>
                  </a>
                </li>
              </ul>
              <ul class="navigation__items-block">
                <li class="navigation__item navigation__item--top">
                  <a href="<?php echo $voice?>">
                    <figure class="navigation__img">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/starfish.png" alt="ヒトデイラスト">
                  </figure>
                    <p class="navigation__text navigation__text--bold">お客様の声</p>
                  </a>
                </li>
                <li class="navigation__item  navigation__item--top">
                  <a href="<?php echo $price?>">
                    <figure class="navigation__img">
                      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/starfish.png" alt="ヒトデイラスト">
                    </figure>
                    <p class="navigation__text navigation__text--bold">料金一覧</p>
                  </a>
                  <ul class="navigation__item-block">
                    <li class="navigation__item navigation__item--top">
                      <a href="<?php echo $price?>">
                        <p class="navigation__text-blank">ライセンス講習</p>
                      </a>
                    </li>
                    <li class="navigation__item">
                      <a href="<?php echo $price?>">
                        <p class="navigation__text-blank">体験ダイビング</p>
                      </a>
                    </li>
                    <li class="navigation__item">
                      <a href="<?php echo $price?>">
                        <p class="navigation__text-blank">ファンダイビング</p>
                      </a>
                    </li>
                  </ul>
                </li>
                  <li class="navigation__item  navigation__item--top">
                    <a href="<?php echo $faq?>">
                      <figure class="navigation__img">
                      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/starfish.png" alt="ヒトデイラスト">
                    </figure>
                      <p class="navigation__text navigation__text--bold">よくある質問</p>
                    </a>
                  </li>
                  <li class="navigation__item  navigation__item--top">
                  <a href="<?php echo $privacypolicy?>">
                      <figure class="navigation__img">
                      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/starfish.png" alt="ヒトデイラスト">
                    </figure>
                      <p class="navigation__text navigation__text--bold">プライバシー<br>ポリシー</p>
                    </a>
                  </li>
                <li class="navigation__item  navigation__item--top">
                  <a href="<?php echo $termsOfService?>">
                    <figure class="navigation__img">
                      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/starfish.png" alt="ヒトデイラスト">
                    </figure>
                    <p class="navigation__text navigation__text--bold">利用規約</p>
                  </a>
                </li>
                <li class="navigation__item navigation__item--top">
                  <a href="<?php echo $contact?>">
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