<?php get_header(); ?>

    <!-- ブログ -->
    <section class="single">
      <div class="single__mv mv">
        <h1 class="mv__heading heading">blog</h1>
      </div>
      <div class="single__inner inner">

      <!-- パンくず -->
      <?php get_template_part('parts/breadcrumb'); ?>

        <?php if(have_posts()): ?>
          <?php while(have_posts()): the_post(); ?>

          <div class="single__content">
              <div class="single__article article">
                <div class="article__blog-cards">
                  <div class="single__main">
                    <time datetime="<?php the_time('c') ?>" class="single__date u-mobile"><?php the_time('Y.m/d') ?></time>
                    <div class="single__title-block">
                      <h2 class="single__title"><?php the_title(); ?></h2>
                    </div>
                    <ul class="single__items">
                      <li class="single__item">
                        <figure class="single__img">
                        <?php if(get_the_post_thumbnail()): ?>
                          <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像" >
                        <?php else: ?>
                          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/no-image.jpg" alt="no-image">
                        <?php endif; ?>
                        </figure>
                        <div class="single__text-block">
                          <p class="single__text">
                          <?php the_content(); ?>
                          </p>
                        </div>
                      </li>
                      <li class="single__item">
                        <figure class="single__img">
                        <?php if(get_the_post_thumbnail()): ?>
                          <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像" >
                        <?php else: ?>
                          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/no-image.jpg" alt="no-image">
                        <?php endif; ?>
                        </figure>
                        <div class="single__text-block">
                          <p class="single__text">
                          <?php the_content(); ?>
                          </p>
                        </div>
                      </li>
                    </ul>
                    <ul class="single__lists">
                      <li class="single__list">リスト1</li>
                      <li class="single__list">リスト2</li>
                      <li class="single__list">リスト3</li>
                    </ul>
                    <div class="single__text-block">
                      <p class="single__text">
                      <?php the_content(); ?>
                      </p>
                    </div>

                    <?php endwhile; ?>
                    <?php endif; ?>

                    <div class="wp-pagenavi single__pagenavi">
                    <?php
                      $prev = get_previous_post();
                      if ( ! empty( $prev ) ) {
                        $prev_url = esc_url( get_permalink( $prev->ID ) );
                      }

                      $next = get_next_post();
                      if ( ! empty( $next ) ) {
                        $next_url = esc_url( get_permalink( $next->ID ) );
                      }
                    ?>
                        <?php if ( ! empty( $prev ) ) : ?>
                          <a class="wp-pagenavi__previous" rel="prev" href="<?php echo $prev_url; ?>"></a>
                        <?php endif; ?>
                        <?php if ( ! empty( $next ) ) : ?>
                          <a class="wp-pagenavi__next" rel="next" href="<?php echo $next_url; ?>"></a>
                        <?php endif; ?>
                    </div>
                  </div>
                </div>
                <!-- サイドバー -->
                <aside>
                  <div class="single__side side">
                    <div class="side__inner">
                      <!-- 人気記事 -->
                      <div class="side__article">
                        <h2 class="side__title">
                          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/side-img.png" alt="鯨のイラスト">
                          人気記事
                        </h2>
                        <ul class="side__cards side-card__items side-card">
                          <li class="side-card__item">
                            <a href="home.html" class="side-card__block">
                              <figure class="side-card__img">
                                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog4.jpg" alt="珊瑚の画像">
                              </figure>
                              <div class="side-card__text-block">
                                <time class="side-card__date" datetime="2023-11-17">2023.11/17</time>
                                <h3 class="side-card__title">ライセンス取得</h3>
                              </div>
                            </a>
                          </li>
                          <li class="side-card__item">
                            <a href="home.html" class="side-card__block">
                              <figure class="side-card__img">
                                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog2.jpg" alt="珊瑚の画像">
                              </figure>
                              <div class="side-card__text-block">
                                <time class="side-card__date" datetime="2023-11-17">2023.11/17</time>
                                <h3 class="side-card__title">ウミガメと泳ぐ</h3>
                              </div>
                            </a>
                          </li>
                          <li class="side-card__item">
                            <a href="home.html" class="side-card__block">
                              <figure class="side-card__img">
                                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog3.jpg" alt="珊瑚の画像">
                              </figure>
                              <div class="side-card__text-block">
                                <time class="side-card__date" datetime="2023-11-17">2023.11/17</time>
                                <h3 class="side-card__title">カクレクマノミ</h3>
                              </div>
                            </a>
                          </li>
                        </ul>
                      </div>
                      <!-- 口コミ -->
                      <div class="side__evaluation">
                        <h2 class="side__title">
                          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/side-img.png" alt="鯨のイラスト">
                          口コミ
                        </h2>
                        <div class="side__evaluation-block evaluation">
                          <figure class="evaluation__img">
                            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/evaluation.jpg" alt="男女が笑顔で寄り添う画像">
                          </figure>
                          <div class="evaluation__text">
                            <span>30代(カップル)</span>
                            <h3 class="evaluation__title">ここにタイトルが入ります。ここにタイトル</h3>
                            <div class="evaluation__btn">
                              <a href="single.html" class="btn">View more<span></span></a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- キャンペーン -->
                      <div class="side__campaign campaign">
                        <h2 class="side__title">
                          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/side-img.png" alt="鯨のイラスト">
                          キャンペーン
                        </h2>
                        <div class="campaign__card campaign__card--side card">
                          <a href="#">
                            <figure class="card__img card__img--side">
                              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign1.jpg" alt="海中を泳ぐ魚の画像">
                            </figure>
                            <div class="card__info card__info--side">
                              <div class="card__title-body card__title-body--side">
                                <h3 class="card__title catd__title--side">ライセンス取得</h3>
                              </div>
                              <div class="card__price-body card__price-body--side">
                                <p class="card__text card__text--center card__text--side">全部コミコミ(お一人様)</p>
                                <div class="card__price-block card__price-block--side">
                                  <s class="card__price-decoration card__price-decoration--side">&yen;56,000</s>
                                  <p class="card__price card__price--side">&yen;46,000</p>
                                </div>
                              </div>
                            </div>
                          </a>
                        </div>
                        <div class="campaign__card campaign__card--side card">
                          <a href="#">
                            <figure class="card__img card__img--side">
                              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign2.jpg" alt="海中を泳ぐ魚の画像">
                            </figure>
                            <div class="card__info card__info--side">
                              <div class="card__title-body card__title-body--side">
                                <h3 class="card__title card__title--side">貸切体験ダイビング</h3>
                              </div>
                              <div class="card__price-body card__price-body--side">
                                <p class="card__text card__text--center">全部コミコミ(お一人様)</p>
                                <div class="card__price-block card__price-block--side">
                                  <s class="card__price-decoration card__price-decoration--side">&yen;24,000</s>
                                  <p class="card__price card__price--side">&yen;18,000</p>
                                </div>
                              </div>
                            </div>
                          </a>
                        </div>
                        <div class="evaluation__btn">
                          <a href="archive-campaign.html" class="btn">View more<span></span></a>
                        </div>
                      </div>
                      <div class="side__archive">
                        <h2 class="side__title">
                          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/side-img.png" alt="鯨のイラスト">
                          アーカイブ
                        </h2>
                        <div class="side__archive-list archive-lists"></div>
                        <ul class="archive-list archive-lists">
                          <li class="archive-list__items">
                            2023
                            <ul class="archive-list__past">
                              <li class="archive-list__month">
                                3月
                              </li>
                              <li class="archive-list__month">
                                2月
                              </li>
                              <li class="archive-list__month">
                                1月
                              </li>
                            </ul>
                          </li>
                        </ul>
                        <ul class="archive-list archive-lists">
                          <li class="archive-list__items">
                            2022
                            <ul class="archive-list__past">
                              <li class="archive-list__month">
                                12月
                              </li>
                              <li class="archive-list__month">
                                11月
                              </li>
                              <li class="archive-list__month">
                                10月
                              </li>
                            </ul>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </aside>
              </div>
            </div>
          </div>
      </section>

      <!-- コンタクト -->
      <?php get_template_part('parts/contact'); ?>

<?php get_footer(); ?>

