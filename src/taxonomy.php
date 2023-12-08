<?php get_header(); ?>

      <section class="archive-campaign">
        <div class="archive-campaign__mv mv">
          <h1 class="mv__heading heading">タクソノミー別一覧</h1>
        </div>
        <div class="archive-campaign__inner inner">
          <div class="archive-voice__breadcrumb breadcrumb inner">
          <!-- パンくず -->
          <?php get_template_part('parts/breadcrumb'); ?>

          <div class="archive-campaign__content">

          <ul class="archive-campaign__tab tab">
          <?php
            // タクソノミーのスラッグを指定
            $genre_slug = get_query_var('genre');
            $args = array(
                // カスタム投稿のスラッグを指定
                "post_type" => "campaign",
                'tax_query' => array(
                    array(
                        // タクソノミーのスラッグを指定
                        'taxonomy' => 'genre',
                        'field'    => 'slug',
                        'terms'    => $genre_slug,
                    ),
                ),
            );
            $the_query = new WP_Query($args);

            $home_class = (is_post_type_archive()) ? 'is-active' : '';
            $home_link = sprintf(
            //カスタム投稿一覧ページへのaタグに付与するクラスを指定できる
              '<a class="tab__category %s" href="%s" alt="%s">ALL</a>',
            $home_class,
            // カスタム投稿一覧ページのスラッグを指定
            esc_url(home_url('/campaign')),
            esc_attr(__('View all posts', 'textdomain'))
            );
            echo sprintf(esc_html__('%s', 'textdomain'), $home_link);
          ?>


        </ul>

            <?php if ($the_query->have_posts()) : ?>
            <div class="archive-campaign__card card">
              <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
              <div class="card__block card__block--full">
                <figure class="card__img">
                <?php if (has_post_thumbnail()) : ?>
                  <?php the_post_thumbnail('full'); ?>
                <?php else : ?>
                  <img class="works-detail__thumbnail" src="<?php echo esc_url(get_theme_file_uri("/images/noimage.jpg")); ?>" alt="NoImage画像" />
                <?php endif; ?>
                </figure>
                <div class="card__info">
                  <div class="card__title-body">
                    <?php
                      $categories = get_the_category();
                      if (!empty($categories)) {
                        $limit = 5;
                        $count = 0;
                        foreach ($categories as $category) {
                        if ($count < $limit) {
                        echo '<span class="card__category">' . esc_html($category->name) . '</span>';
                        $count++;
                        } else {
                            break;
                          }
                        }
                      }
                    ?>
                    <h3 class="card__title card__title--bg"><?php the_field("card-title"); ?></h3>
                  </div>
                  <div class="card__price-body">
                    <p class="card__text card__text--center"><?php the_field("card-info"); ?></p>
                    <div class="card__price-block">
                      <s class="card__price-decoration"><?php the_field("first-price"); ?></s>
                      <p class="card__price"><?php the_field("second-price"); ?></p>
                    </div>
                  </div>
                </div>
                <div class="card__text card-text u-desktop">
                  <p class="card-text__explanation"><?php the_content(); ?></p>
                  <div class="card-text__block">
                    <p class="card-text__period"><?php the_field("period"); ?></p>
                    <p class="card-text__info"><?php the_field("go-contact"); ?></p>
                    <div class="card-text__btn">
                      <a href="page-contact.html" class="btn">Contact us<span></span></a>
                    </div>
                  </div>
                </div>
              </div>
              <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            </div>
            <?php else : ?>
              <p>記事が投稿されていません</p>
            <?php endif; ?>
            <!-- ページネーション -->
            <div class="wp-pagenavi archive-campaign__pagenavi">
            <?php wp_pagenavi(); ?>
            </div>
          </div>
        </div>
      </section>

      <!-- コンタクト -->
      <?php get_template_part('parts/contact'); ?>

<?php get_footer(); ?>
