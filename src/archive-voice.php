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
            <div class="archive-voice__tab tab">
              <a href="" class="tab__category js-tab__category is-active">all</a>
              <a href="" class="tab__category js-tab__category">ライセンス講習</a>
              <a href="" class="tab__category js-tab__category">ファンダイビング</a>
              <a href="" class="tab__category js-tab__category">体験ダイビング</a>
            </div>
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
                          <p class="voice-card__gender">20代(女性)</p>
                          <span class="voice-card__category">ライセンス講習</span>
                        </div>
                        <div class="voice-card__title">
                          <h3><?php the_title(); ?></h3>
                        </div>
                      </div>
                      <figure class="voice-card__img">
                        <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像" >
                      </figure>
                    </div>
                    <p class="voice-card__text"><?php echo wp_trim_words(get_the_content()); ?></p>
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
