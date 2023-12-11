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

<?php
// 前の記事へのリンク
$prev_link = get_previous_post_link('%link', '&#60;');
echo str_replace('<a href=', '<a class="detail__prev" href=', $prev_link);

// 次の記事へのリンク
$next_link = get_next_post_link('%link', '&#62;');
echo str_replace('<a href=', '<a class="detail__next" href=', $next_link);
?>

                        
                    </div>
                  </div>
                </div>
                <!-- サイドバー -->
                <?php get_template_part('parts/sidebar'); ?>
              </div>
            </div>
          </div>
      </section>

      <!-- コンタクト -->
      <?php get_template_part('parts/contact'); ?>

<?php get_footer(); ?>

