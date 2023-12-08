<?php get_header(); ?>

      <!-- ブログ -->
      <section class="home">
        <div class="home__mv mv">
          <h1 class="mv__heading heading">blog月別一覧</h1>
        </div>
        <div class="home__inner inner">

        <!-- パンくず -->
          <?php get_template_part('parts/breadcrumb'); ?>

          <div class="home__content">
            <div class="home__article article">
              <div class="article__blog-cards">
                <ul class="article__blog-card blog-cards blog-cards--home">
                  <!-- ループ処理 -->
                  <?php if(have_posts()): ?>
                  <?php while(have_posts()): the_post(); ?>

                  <li class="blog-card">
                    <a href="<?php echo esc_url(get_permalink()); ?>" class="blog-card__item blog-card__item--home">
                      <div>
                        <figure class="blog-card__img blog-card__img--home">
                          <?php if(get_the_post_thumbnail()): ?>
                            <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像" >
                          <?php else: ?>
                            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/no-image.jpg" alt="no-image">
                          <?php endif; ?>
                        </figure>
                        <div class="blog-card__text-block">
                          <time class="blog-card__date" datetime="<?php the_time('c') ?>"><?php the_time('Y.m/d') ?></time>
                          <h2 class="blog-card__title"><?php the_title(); ?></h2>
                          <p class="blog-card__text"><?php echo wp_trim_words(get_the_content(), 101, '…'); ?></p>
                        </div>
                      </div>
                    </a>
                  </li>

                  <?php endwhile; ?>
                  <?php endif; ?>

                </ul>
                <!-- ページネーション -->
                <div class="wp-pagenavi home__pagenavi">
                  <?php wp_pagenavi(); ?>
                </div>
              </div>
              <?php get_template_part('parts/sidebar'); ?>
            </div>
          </div>
        </div>
      </section>
      <!-- コンタクト -->
      <?php get_template_part('parts/contact'); ?>

<?php get_footer(); ?>
