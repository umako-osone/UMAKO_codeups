<?php get_header(); ?>

      <div class="page-sitemap__mv mv">
        <h1 class="mv__heading heading">site&ensp;map</h1>
      </div>

      <!-- パンくず -->
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
      <?php get_template_part('parts/contact'); ?>

      <?php get_footer(); ?>
