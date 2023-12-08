<aside>
  <div class="article__side side">
    <div class="side__inner">
      <!-- 人気記事 -->
      <div class="side__article">
        <h2 class="side__title">
          <img src="<?php echo get_theme_file_uri('/assets/images/common/side-img.png'); ?>" alt="鯨のイラスト">
          人気記事
        </h2>
        <?php
        $args = array(
            "post_type" => "post",
            "posts_per_page" => 3,
            "orderby" => "date",
            "order" => "DESC",
        );
        $the_query = new WP_Query($args);
        ?>
        <?php if ($the_query->have_posts()) : ?>
          <ul class="side__cards side-card__items side-card">
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <li class="side-card__item">
                        <a href="<?php the_permalink(); ?>" class="side-card__block">
                        <figure class="side-card__img">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('full'); ?>
                            <?php else : ?>
                                <img class="detail__img" src="<?php echo esc_url(get_theme_file_uri("/images/noimage.jpg")); ?>" alt="NoImage画像" />
                            <?php endif; ?>
                        </figure>
                            <div class="side-card__text-block">
                              <time class="side-card__date" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y年n月j日'); ?></time>
                                <h3 class="side-card__title"><?php the_title(); ?></h3>
                            </div>
                        </a>
                    </li>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            </ul>
        <?php else : ?>
            <p>記事が投稿されていません</p>
        <?php endif; ?>
    </div>
      <!-- 口コミ -->
      <div class="side__evaluation">
        <h2 class="side__title">
          <img src="<?php echo get_theme_file_uri('/assets/images/common/side-img.png'); ?>" alt="鯨のイラスト">
          口コミ
        </h2>
        <div class="side__evaluation-block evaluation">
          <figure class="evaluation__img">
            <img src="<?php echo get_theme_file_uri('/assets/images/common/evaluation.jpg'); ?>" alt="男女が笑顔で寄り添う画像">
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
    <img src="<?php echo get_theme_file_uri('/assets/images/common/side-img.png'); ?>" alt="鯨のイラスト">
    キャンペーン
  </h2>

  <?php
  $args = array(
    'post_type'      => 'campaign',   // キャンペーン投稿タイプ
    'posts_per_page' => 2,            // 表示する投稿数
    'orderby'        => 'date',
    'order'          => 'DESC',
  );

  $the_query = new WP_Query($args);

  if ($the_query->have_posts()) :
    while ($the_query->have_posts()) : $the_query->the_post();
  ?>

      <div class="campaign__card campaign__card--side card">
        <a href="<?php the_permalink(); ?>">
          <figure class="card__img card__img--side">
            <?php
            if (has_post_thumbnail()) :
              the_post_thumbnail('full', array('class' => 'card__img card__img--side'));
            else :
            ?>
              <img class="detail__img" src="<?php echo esc_url(get_theme_file_uri("/images/noimage.jpg")); ?>" alt="NoImage画像" />
            <?php endif; ?>
          </figure>

          <div class="card__info card__info--side">
            <div class="card__title-body card__title-body--side">
              <h3 class="card__title catd__title--side"><?php the_title(); ?></h3>
            </div>

            <div class="card__price-body card__price-body--side">
              <p class="card__text card__text--center card__text--side">全部コミコミ(お一人様)</p>

              <div class="card__price-block card__price-block--side">
                <s class="card__price-decoration card__price-decoration--side"><?php the_field("first-price"); ?></s>
                <p class="card__price card__price--side"><?php the_field("second-price"); ?></p>
              </div>
            </div>
          </div>
        </a>
      </div>

  <?php
    endwhile;
    wp_reset_postdata();
  else :
  ?>
    <p>記事が投稿されていません</p>
  <?php endif; ?>
</div>
        <div class="evaluation__btn">
          <a href="archive-campaign.html" class="btn">View more<span></span></a>
        </div>
      </div>
      <div class="side__archive">
        <h2 class="side__title">
          <img src="<?php echo get_theme_file_uri('/assets/images/common/side-img.png'); ?>" alt="鯨のイラスト">
          アーカイブ
        </h2>
        <!-- <div class="side__archive-list archive-lists"></div> -->
        <ul class="archive-list js-archive-list">
          <li class="archive-list__items">
            <div class="archive-list__year js-archive-list__year">
              <figure class="archive-list__img archive-list__img--1 js-archive-list__img--1">
                <img src="<?php echo get_theme_file_uri('/assets/images/common/Polygon2.jpg'); ?>" alt="">
              </figure>
              2023
            </div>
            <ul class="archive-list__past">
            <div class="archive-list__month js-archive-list__month">
              <figure class="archive-list__img js-archive-list__img">
                <img src="<?php echo get_theme_file_uri('/assets/images/common/Polygon2.jpg'); ?>" alt="">
              </figure>
              <?php wp_get_archives('type=monthly'); ?>
            </div>
            </ul>
          </li>
        </ul>
        <ul class="archive-list js-archive-list">
          <li class="archive-list__items js-archive-list__items">
            2022
            <ul class="archive-list__past">
              <?php wp_get_archives('type=monthly'); ?>
              <!-- <li class="archive-list__month">
                12月
              </li>
              <li class="archive-list__month">
                11月
              </li>
              <li class="archive-list__month">
                10月
              </li> -->
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
</aside>