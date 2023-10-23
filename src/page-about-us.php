<?php get_header(); ?>

      <section class="page-about-us">

        <div class="page-about-us__inner inner">
      <!-- パンくず -->
      <?php get_template_part('parts/breadcrumb'); ?>

          <div class="page-about-us__content">
            <div class="page-about-us__img about-us__img u-desktop">
              <figure class="about-us__img-left">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/aboutUs-left.jpg" alt="屋根のシーサーの画像">
              </figure>
              <figure class="about-us__img-right">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/aboutUs-right.jpg" alt="熱帯魚の画像">
              </figure>
            </div>
            <div class="about-us__img page-about-us__img-sp u-mobile">
              <figure class="about-us__img-sp">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/aboutUs-right.jpg" alt="熱帯魚の画像">
              </figure>
            </div>
            <div class="page-about-us__text-body about-us__text-body">
              <div class="about-us__text-main">Dive into <br class="u-mobile">the Ocean</div>
              <div class="about-us__text-info">
                <p class="about-us__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。</p>
              </div>
            </div>
            <div class="page-about-us__gallery gallery">
              <div class="gallery__tilte title">
                <div class="title__inner">
                  <p class="title-en">Gallery</p>
                  <h2 class="title-ja">フォト</h2>
                </div>
              </div>
            </div>
            <div class="gallery__overlay overlay" id="js-overlay"></div>
            <div class="gallery__items">
              <figure class="gallery__item js-gallery__item">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery1.jpg" alt="珊瑚礁と魚たちの画像">
              </figure>
              <figure class="gallery__item js-gallery__item">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery2.jpg" alt="浅瀬に浮かぶ2艘の船の画像">
              </figure>
              <figure class="gallery__item js-gallery__item">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery3.jpg" alt="2匹の熱帯魚の画像">
              </figure>
              <figure class="gallery__item js-gallery__item">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery4.jpg" alt="1匹の熱帯魚の画像">
              </figure>
              <figure class="gallery__item js-gallery__item">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery5.jpg" alt="海の中の沢山の小さい魚の画像">
              </figure>
              <figure class="gallery__item js-gallery__item">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery6.jpg" alt="珊瑚礁と2匹の熱帯魚の画像">
              </figure>
            </div>
          </div>
        </div>
      </section>
      <!-- コンタクト -->
      <?php get_template_part('parts/contact'); ?>

<?php get_footer(); ?>