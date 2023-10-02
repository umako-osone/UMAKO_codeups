<?php get_header(); ?>

      <section class="page-about-us">

      <?php get_template_part('parts/breadcrumb'); ?>

        <div class="page-about-us__inner inner">
          <div class="page-about-us__breadcrumb breadcrumb inner">
            <p>top&ensp;&gt;&ensp;私たちについて</p>
          </div>
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
      <section class="contact top-contact">
        <div class="contact__inner inner">
          <div class="contact__body">
            <div class="contact__items">
              <figure class="contact__logo">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/logo-green.svg" alt="コードアップス">
              </figure>
              <div class="contact__info">
                <ul class="contact__item">
                  <li class="contact__address">沖縄県那覇市1-1</li>
                  <li class="contact__tel">
                    <a href="tel:01200000000">tel:0120-000-0000</a>
                  </li>
                  <li>営業時間:8:30-19:00</li>
                  <li>定休日:毎週火曜日
                  </li>
                </ul>
                <div class="contact__map">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d19016.32624698157!2d127.67060615241546!3d26.222643361682515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sja!2sjp!4v1688689534890!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
              </div>
            </div>
            <div class="contact__access">
              <div class="contact__title title">
                <div class="title__inner">
                  <p class="title-en">contact</p>
                  <h2 class="title-ja">お問い合わせ</h2>
                  <p class="title-sub">ご予約・お問い合わせはコチラ</p>
                  <div class="contact__btn">
                    <a href="page-contact.html" class="btn">contact&ensp;us<span></span></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

<?php get_footer(); ?>