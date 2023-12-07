
    <?php get_header(); ?>

      <section class="fv top-fv">
        <div class="fv__slide fv-slide">
          <div class="fv-slide__inner u-desktop">
            <div class="fv-slide__heading">
              <h2 class="fv__title-main fv__title-main--green">diving</h2>
              <p class="fv__title-sub fv__title-sub--green">into&ensp;the&ensp;ocean</p>
            </div>
            <div class="fv-slide__cover">
              <span class="fv-slide__cover-left"></span>
              <span class="fv-slide__cover-right"></span>
            </div>
          </div>
        </div>
        <div class="fv__inner">
          <!-- Slider main container -->
          <div class="swiper fv__swiper js-fvSwiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
              <!-- Slides -->
              <div class="swiper-slide">
                <picture class="fv__img">
                  <source srcset="./assets/images/common/fv-sp.jpg" media="(max-width: 768px)">
                  <img src="<?php echo get_theme_file_uri('/assets/images/common/fv1.jpg'); ?>" alt="海亀の画像">
                </picture>
              </div>
              <div class="swiper-slide">
                <picture class="fv__img">
                  <source srcset="<?php echo get_theme_file_uri('/assets/images/common/fv2-sp.jpg'); ?>" media="(max-width: 768px)">
                  <img src="<?php echo get_theme_file_uri('/assets/images/common/fv2.jpg'); ?>" alt="海亀とダイバーの画像">
                </picture>
              </div>
              <div class="swiper-slide">
                <picture class="fv__img">
                  <source srcset="<?php echo get_theme_file_uri('/assets/images/common/fv3-sp.jpg'); ?>" media="(max-width: 768px)">
                  <img src="<?php echo get_theme_file_uri('/assets/images/common/fv3.jpg'); ?>" alt="海に浮かぶヨットの画像">
                </picture>
              </div>
              <div class="swiper-slide">
                <picture class="fv__img">
                  <source srcset="<?php echo get_theme_file_uri('/assets/images/common/fv4-sp.jpg'); ?>" media="(max-width: 768px)">
                  <img src="<?php echo get_theme_file_uri('/assets/images/common/fv4.jpg'); ?>" alt="砂浜の画像">
                </picture>
              </div>
            </div>
          </div>
          <div class="fv__title">
            <h2 class="fv__title-main">diving</h2>
            <p class="fv__title-sub">into the ocean</p>
          </div>
        </div>
      </section>
      <!-- キャンペーン -->
      <section class="campaign top-campaign">
        <div class="campaign__inner inner">
        <?php
        // get_template_part('/parts/title');
        ?>
          <div class="campaign__title title">
            <div class="title__inner">
              <p class="title-en">campaign</p>
              <h2 class="title-ja">キャンペーン</h2>
            </div>
          </div>
          <div class="campaign__pagination u-desktop">
            <div class="campaign__prev swiper-button-prev"><span></span></div>
            <div class="campaign__next swiper-button-next"><span></span></div>
          </div>
            <div class="campaign__slide">
              <!-- Slider main container -->
              <div class="campaign-swiper swiper js-campainSwiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper card">
                  <!-- Slides -->
                  <div class="swiper-slide card__block">
                    <a href="#">
                      <figure class="card__img">
                        <img src="<?php echo get_theme_file_uri('/assets/images/common/campaign1.jpg'); ?>" alt="海中を泳ぐ魚の画像">
                      </figure>
                      <div class="card__info">
                        <div class="card__title-body">
                          <span class="card__category">ライセンス講習</span>
                          <h3 class="card__title">ライセンス取得</h3>
                        </div>
                        <div class="card__price-body">
                          <p class="card__text card__text--center">全部コミコミ(お一人様)</p>
                          <div class="card__price-block">
                            <s class="card__price-decoration">&yen;56,000</s>
                            <p class="card__price">&yen;46,000</p>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="swiper-slide card__block">
                    <a href="#">
                      <figure class="card__img">
                        <img src="<?php echo get_theme_file_uri('/assets/images/common/campaign2.jpg'); ?>" alt="海中を泳ぐ魚の画像">
                      </figure>
                      <div class="card__info">
                        <div class="card__title-body">
                          <span class="card__category">体験ダイビング</span>
                          <h3 class="card__title">貸切体験ダイビング</h3>
                        </div>
                        <div class="card__price-body">
                          <p class="card__text card__text--center">全部コミコミ(お一人様)</p>
                          <div class="card__price-block">
                            <s class="card__price-decoration">&yen;24,000</s>
                            <p class="card__price">&yen;18,000</p>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="swiper-slide card__block">
                    <a href="#">
                      <figure class="card__img">
                        <img src="<?php echo get_theme_file_uri('/assets/images/common/campaign3.jpg'); ?>" alt="海中を泳ぐ魚の画像">
                      </figure>
                      <div class="card__info">
                        <div class="card__title-body">
                          <span class="card__category">体験ダイビング</span>
                          <h3 class="card__title">ナイトダイビング</h3>
                        </div>
                        <div class="card__price-body">
                          <p class="card__text card__text--center">全部コミコミ(お一人様)</p>
                          <div class="card__price-block">
                            <s class="card__price-decoration">&yen;10,000</s>
                            <p class="card__price"> &yen;8,000</p>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="swiper-slide card__block">
                    <a href="archive-campaign.html">
                      <figure class="card__img">
                        <img src="<?php echo get_theme_file_uri('/assets/images/common/campaign4.jpg'); ?>" alt="海中を泳ぐ魚の画像">
                      </figure>
                      <div class="card__info">
                        <div class="card__title-body">
                          <span class="card__category">ファンダイビング</span>
                          <h3 class="card__title">貸切ファンダイビング</h3>
                        </div>
                        <div class="card__price-body">
                          <p class="card__text card__text--center">全部コミコミ(お一人様)</p>
                          <div class="card__price-block">
                            <s class="card__price-decoration">&yen;20,000</s>
                            <p class="card__price">&yen;16,000</p>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          <div class="campaign__btn">
            <a href="archive-campaign.html" class="btn">View more<span></span></a>
          </div>
        </div>
      </section>
      <!-- 私たちについて -->
      <section class="about-us top-about-us">
        <div class="about-us__inner inner">
        <?php
        // get_template_part('/parts/title');
        ?>
          <div class="about-us__title title">
            <div class="title__inner">
              <p class="title-en">About us</p>
              <h2 class="title-ja">私たちについて</h2>
            </div>
          </div>
          <div class="about-us__img">
            <figure class="about-us__img-left">
              <img src="<?php echo get_theme_file_uri('/assets/images/common/aboutUs-left.jpg'); ?>" alt="屋根のシーサーの画像">
            </figure>
            <figure class="about-us__img-right">
              <img src="<?php echo get_theme_file_uri('/assets/images/common/aboutUs-right.jpg'); ?>" alt="熱帯魚の画像">
            </figure>
          </div>
          <div class="about-us__text-body">
            <div class="about-us__text-main">Dive into <br class="u-mobile">the Ocean</div>
            <div class="about-us__text-info">
              <p class="about-us__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。</p>
                <div class="about-us__btn">
                  <a href="page-about-us.html" class="btn">View more<span></span></a>
                </div>
            </div>
          </div>
        </div>
      </section>
      <!-- インフォメーション -->
      <section class="information top-information">
        <div class="information__inner inner">
        <?php
        //  get_template_part('/parts/title');
        ?>
          <div class="information__title title">
            <div class="title__inner">
              <p class="title-en">information</p>
              <h2 class="title-ja">ダイビング情報</h2>
            </div>
          </div>
          <div class="information__img-block">
            <div>
              <figure class="information__img js-information__img">
                <img src="<?php echo get_theme_file_uri("/assets/images/common/infomation.jpg"); ?>" alt="熱帯魚と珊瑚の画像">
              </figure>
            </div>
            <div class="information__text-body">
              <h3 class="information__title">ライセンス講習</h3>
              <p class="information__text">当店はダイビングライセンス（cカード）世界最大の教育機関padiの「正規店」として店舗登録されています。<br>
                正規登録店として、安心安全に初めての方でも安心安全にライセンス取得をサポート致します。</p>
                <div class="information__btn">
                  <a href="page-information.html" class="btn">View more<span></span></a>
                </div>
            </div>
          </div>
        </div>
      </section>
      <!-- ブログ -->
      <section class="blog top-blog">
        <div class="blog__inner inner">
        <?php
        // get_template_part('/parts/title');
        ?>
          <div class="blog__title title">
            <div class="title__inner">
              <p class="title-en title-en--white">blog</p>
              <h2 class="title-ja title-ja--white">ブログ</h2>
            </div>
          </div>
          <ul class="blog__cards blog-cards">
            <li class="blog-cards__item blog-card">
              <a href="home.html" class="blog-card__item">
                <div>
                  <figure class="blog-card__img">
                    <img src="<?php echo get_theme_file_uri('/assets/images/common/blog1.jpg'); ?>" alt="珊瑚の画像">
                  </figure>
                  <div class="blog-card__text-block">
                    <time class="blog-card__date" datetime="2023-11-17">2023.11/17</time>
                    <h3 class="blog-card__title">ライセンス取得</h3>
                    <p class="blog-card__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                      ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
                  </div>
                </div>
              </a>
            </li>
            <li class="blog-cards__item blog-card">
              <a href="home.html" class="blog-card__item">
                <div>
                  <figure class="blog-card__img">
                    <img src="<?php echo get_theme_file_uri('/assets/images/common/blog2.jpg'); ?>" alt="海亀の画像">
                  </figure>
                  <div class="blog-card__text-block">
                    <time class="blog-card__date" datetime="2023-11-17">2023.11/17</time>
                    <h3 class="blog-card__title">ウミガメと泳ぐ</h3>
                    <p class="blog-card__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                      ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
                  </div>
                </div>
              </a>
            </li>
            <li class="blog-cards__item blog-card">
              <a href="home.html" class="blog-card__item">
                <div>
                  <figure class="blog-card__img">
                    <img src="<?php echo get_theme_file_uri('/assets/images/common/blog3.jpg'); ?>" alt="カクレクマノミの画像">
                  </figure>
                  <div class="blog-card__text-block">
                    <time class="blog-card__date" datetime="2023-11-17">2023.11/17</time>
                    <h3 class="blog-card__title">カクレクマノミ</h3>
                    <p class="blog-card__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                      ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
                  </div>
                </div>
              </a>
            </li>
          </ul>
          <div class="blog__btn">
            <a href="home.html" class="btn">View more<span></span></a>
          </div>
        </div>
      </section>
      <!-- ボイス -->
      <section class="voice top-voice">
        <div class="voice__inner inner">
        <?php
        // get_template_part('/parts/title');
        ?>
          <div class="voice__title title">
            <div class="title__inner">
              <p class="title-en">voice</p>
              <h2 class="title-ja">お客様の声</h2>
            </div>
          </div>
          <div class="voice__items voice-cards">
            <div class="voice-cards__items voice-card">
              <ul class="voice-card__list">
                <li class="voice-card__items">
                  <a href="archive-voice.html">
                    <div class="voice-card__item">
                      <div class="voice-card__title-block">
                        <div class="voice-card__categories">
                          <p class="voice-card__gender">20代(女性)</p>
                          <span class="voice-card__category">ライセンス講習</span>
                        </div>
                        <div class="voice-card__title">
                          <h3>ここにタイトルが入ります。ここにタイトル</h3>
                        </div>
                      </div>
                      <figure class="voice-card__img js-voice-card__img">
                        <img src="<?php echo get_theme_file_uri('/assets/images/common/voice1.jpg'); ?>" alt="珊瑚の画像">
                      </figure>
                    </div>
                    <p class="voice-card__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。</p>
                  </a>
                </li>
                <li class="voice-card__items">
                  <a href="archive-voice.html">
                    <div class="voice-card__item">
                      <div class="voice-card__title-block">
                        <div class="voice-card__categories">
                          <p class="voice-card__gender">30代(男性)</p>
                          <span class="voice-card__category">ファンダイビング</span>
                        </div>
                        <div class="voice-card__title">
                          <h3>ここにタイトルが入ります。ここにタイトル</h3>
                        </div>
                      </div>
                      <figure class="voice-card__img js-voice-card__img">
                        <img src="<?php echo get_theme_file_uri('/assets/images/common/voice2.jpg'); ?>" alt="珊瑚の画像">
                      </figure>
                    </div>
                    <p class="voice-card__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。</p>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="voice__btn">
            <a href="archive-voice.html" class="btn">View more<span></span></a>
          </div>
        </div>
      </section>
      <!-- プライス -->
      <section class="price top-price">
        <div class="price__inner inner">
          <div class="price__block">
          <?php
          // get_template_part('/parts/title');
          ?>
            <div class="price__title title">
              <div class="title__inner">
                <p class="title-en">price</p>
                <h2 class="title-ja">料金一覧</h2>
              </div>
            </div>
            <figure class="price__img-sp u-mobile">
              <img src="<?php echo get_theme_file_uri('/assets/images/common/price-sp.jpg'); ?>" alt ="海亀の画像">
            </figure>
            <div class="price__list-block">
              <div class="price__lists">
                <h3 class="price__heading">ライセンス講習</h3>
                <dl class="price__items">
                  <div class="price__list">
                    <dt class="price__item">オープンウォーターダイバーコース</dt>
                    <dd class="price__text">&yen;50,000</dd>
                  </div>
                  <div class="price__list">
                    <dt class="price__item">アドバンスドオープンウォーターコース</dt>
                    <dd class="price__text">&yen;60,000</dd>
                  </div>
                  <div class="price__list">
                    <dt class="price__item">レスキュー＋EFRコース</dt>
                    <dd class="price__text">&yen;70,000</dd>
                  </div>
                </dl>
                <h3 class="price__heading">体験ダイビング</h3>
                <dl class="price__items">
                  <div class="price__list">
                    <dt class="price__item">ビーチ体験ダイビング(半日)</dt>
                    <dd class="price__text">&yen;7,000</dd>
                  </div>
                  <div class="price__list">
                    <dt class="price__item">ビーチ体験ダイビング(1日)</dt>
                    <dd class="price__text">&yen;14,000</dd>
                  </div>
                  <div class="price__list">
                    <dt class="price__item">ボート体験ダイビング(半日)</dt>
                    <dd class="price__text">&yen;10,000</dd>
                  </div>
                  <div class="price__list">
                    <dt class="price__item">ボート体験ダイビング(1日)</dt>
                    <dd class="price__text">&yen;18,000</dd>
                  </div>
                </dl>
                <h3 class="price__heading">ファンダイビング</h3>
                <dl class="price__items">
                  <div class="price__list">
                    <dt class="price__item">ビーチダイビング(2ダイブ)</dt>
                    <dd class="price__text">&yen;14,000</dd>
                  </div>
                  <div class="price__list">
                    <dt class="price__item">ボートダイビング(2ダイブ)</dt>
                    <dd class="price__text">&yen;18,000</dd>
                  </div>
                  <div class="price__list">
                    <dt class="price__item">スペシャルダイビング(2ダイブ)</dt>
                    <dd class="price__text">&yen;24,000</dd>
                  </div>
                  <div class="price__list">
                    <dt class="price__item">ナイトダイビング(1ダイブ)</dt>
                    <dd class="price__text">&yen;10,000</dd>
                  </div>
                </dl>
                <h3 class="price__heading">スペシャルダイビング</h3>
                <dl class="price__items">
                  <div class="price__list">
                    <dt class="price__item">貸切ダイビング(2ダイブ)</dt>
                    <dd class="price__text">&yen;24,000</dd>
                  </div>
                  <div class="price__list">
                    <dt class="price__item">1日ダイビング(3ダイブ)</dt>
                    <dd class="price__text">&yen;32,000</dd>
                  </div>
                </dl>
              </div>
              <figure class="price__img-pc js-price__img-pc u-desktop">
                <img src="<?php echo get_theme_file_uri('/assets/images/common/priceimg.jpg'); ?>" alt="珊瑚礁と魚たちの画像">
              </figure>
            </div>
          </div>
          <div class="price__btn">
            <a href="page-price.html" class="btn">View more<span></span></a>
          </div>
        </div>
      </section>
      <!-- コンタクト -->
      <?php get_template_part('parts/contact'); ?>

      <?php get_footer(); ?>