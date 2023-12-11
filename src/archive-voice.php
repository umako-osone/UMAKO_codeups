<?php get_header(); ?>

      <!--　ボイス -->
      <section class="archive-voice">
        <div class="archive-voice__mv mv">
          <h1 class="mv__heading heading">voice</h1>
        </div>
        <div class="archive-voice__inner inner">
          <div class="archive-voice__breadcrumb breadcrumb inner">

            <!-- パンくず -->
            <?php get_template_part('parts/breadcrumb'); ?>

          </div>
          <div class="archive-voice__content">
            <ul class="archive-voice__tab tab">
<?php
$current_term_id = get_queried_object()->term_id;
$terms = get_terms(array(
		// 表示するタクソノミースラッグを記述
    'taxonomy' => 'genre',
    'orderby' => 'name',
    'order'   => 'ASC',
    // 表示するタームの数を指定
    'number'  => 5
));

// カスタム投稿一覧ページへのURL
$home_class = (is_post_type_archive()) ? 'is-active' : '';
$home_link = sprintf(
    //カスタム投稿一覧ページへのaタグに付与するクラスを指定できる
    '<a class="tab__category js-tab__category %s" href="%s" alt="%s">ALL</a>',
    $home_class,
    // カスタム投稿一覧ページのスラッグを指定
    esc_url(home_url('/works')),
    esc_attr(__('View all posts', 'textdomain'))
);
echo sprintf(esc_html__('%s', 'textdomain'), $home_link);

// タームのリンク
if ($terms) {
    foreach ($terms as $term) {
        // カレントクラスに付与するクラスを指定できる
        $term_class = ($current_term_id === $term->term_id) ? 'is-active' : '';
        $term_link = sprintf(
            // 各タームに付与するクラスを指定できる
            '<a class="tab__category js-tab__category %s" href="%s" alt="%s">%s</a>',
            $term_class,
            esc_url(get_term_link($term->term_id)),
            esc_attr(sprintf(__('View all posts in %s', 'textdomain'), $term->name)),
            esc_html($term->name)
        );
        echo sprintf(esc_html__('%s', 'textdomain'), $term_link);
    }
}
?>
              <!-- <a href="" class="tab__category js-tab__category is-active">all</a> -->
              <!-- <a href="" class="tab__category js-tab__category">ライセンス講習</a> -->
              <!-- <a href="" class="tab__category js-tab__category">ファンダイビング</a> -->
              <!-- <a href="" class="tab__category js-tab__category">体験ダイビング</a> -->
            </ul>
            <div class="archive-voice__items voice-card">

            <?php
              $args = array(
                "post_type" => "voice",
                "posts_per_page" => 6
              );
              $the_query = new WP_Query($args);
            ?>
            <?php if ($the_query->have_posts()); ?>

              <ul class="voice-card__list">

              <?php if(have_posts()): ?>
                <?php while(have_posts()): the_post(); ?>

                <li class="voice-card__items">
                  <a href="archive-voice.html">
                    <div class="voice-card__item">
                      <div class="voice-card__title-block">
                        <div class="voice-card__categories">
                          <p class="voice-card__gender"><?php the_field("kinds"); ?></p>
                          <!-- <span class="voice-card__category"> -->
                          <?php
$taxonomy_terms = get_the_terms($post->ID, 'genre');
if (!empty($taxonomy_terms)) {
    $limit = 3;
    $count = 0;
    foreach ($taxonomy_terms as $taxonomy_term) {
        if ($count < $limit) {
            echo '<span class="voice-card__category">' . esc_html($taxonomy_term->name) . '</span>';
            $count++;
        } else {
            break;
        }
    }
}
?>
                          <!-- </span> -->
                        </div>
                        <div class="voice-card__title">
                          <h3><?php the_title(); ?></h3>
                        </div>
                      </div>
                      <figure class="voice-card__img">
                        <?php if (has_post_thumbnail()) : ?>
                          <?php the_post_thumbnail('full'); ?>
                        <?php else : ?>
                          <img class="works-detail__thumbnail" src="<?php echo esc_url(get_theme_file_uri("/images/noimage.jpg")); ?>" alt="NoImage画像" />
                        <?php endif; ?>
                      </figure>
                    </div>
                    <p class="voice-card__text"><?php the_field("voice-text"); ?></p>
                  </a>
                </li>


                <?php endwhile; ?>
              <?php endif; ?>

              </ul>
            </div>
            <!-- ページネーション -->
            <div class="wp-pagenavi archive-voice__pagenavi">
              <?php wp_pagenavi(); ?>
            </div>
          </div>
        </div>
      </section>
    <!-- コンタクト -->
    <?php get_template_part('parts/contact'); ?>

  <?php get_footer(); ?>
