<?php get_header(); ?>

      <section class="page-information">
        <div class="page-information__mv mv">
          <h1 class="mv__heading heading">information</h1>
        </div>

        <!-- パンくず -->
        <?php get_template_part('parts/breadcrumb'); ?>

        <div class="top-page-information">
          <div class="page-information__inner inner">
            <div class="page-information__tab informaiton-tab">
              <ul class="information-tab__list">
                <li class="information-tab__menu js-information-tab current" data-tab-id="tab1">
                  <figure class="information-tab__img1">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/fish-point1-blue.png" alt="鯨のイラスト" class="u-desktop">
                  </figure>
                  <figure class="information-tab__img2">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/fish-point1-white.png" alt="鯨のイラスト" class="u-desktop">
                  </figure>
                  ライセンス<br class="u-mobile">講習
                </li>
                <li class="information-tab__menu js-information-tab" data-tab-id="tab2">
                  <figure class="information-tab__img1">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/fish-point3-blue.png" alt="鯨のイラスト" class="u-desktop">
                  </figure>
                  <figure class="information-tab__img2">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/fish-point1-white.png" alt="鯨のイラスト" class="u-desktop">
                  </figure>
                  体験<br class="u-mobile">ダイビング
                </li>
                <li class="information-tab__menu js-information-tab" data-tab-id="tab3">
                  <figure class="information-tab__img1">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/fish-point2-blue.png" alt="鯨のイラスト" class="u-desktop">
                  </figure>
                  <figure class="information-tab__img2">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/fish-point1-white.png" alt="鯨のイラスト" class="u-desktop">
                  </figure>
                  ファン<br class="u-mobile">ダイビング
                </li>
              </ul>
              <div class="information-tab__content js-information-tab__content current">
                <div class="information__img-block">
                  <div class="information__text-body information__text-body--margin">
                    <h2 class="information__title information__title--big">ライセンス講習</h2>
                    <p class="information__text">泳げない人も、ちょっと水が苦手な人も、ダイビングを「安全に」楽しんでいただけるよう、スタッフがサポートいたします！スキューバダイビングを楽しむためには最低限の知識とスキルが要求されます。知識やスキルと言ってもそんなに難しい事ではなく、安全に楽しむ事を目的としたものです。プロダイバーの指導のもと知識とスキルを習得しCカードを取得して、ダイバーになろう！</p>
                  </div>
                  <figure class="information__img information__img--margin">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/license.jpg" alt="熱帯魚と珊瑚の画像">
                  </figure>
                </div>
              </div>
              <div class="information-tab__content js-information-tab__content">
                <div class="information__img-block">
                  <div class="information__text-body">
                    <h2 class="information__title information__title--big">体験ダイビング</h2>
                    <p class="information__text">ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！</p>
                  </div>
                  <figure class="information__img information__img--margin">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/infomation.jpg" alt="熱帯魚と珊瑚の画像">
                  </figure>
                </div>
              </div>
              <div class="information-tab__content js-information-tab__content">
                <div class="information__img-block">
                  <div class="information__text-body">
                    <h2 class="information__title information__title--big">ファンダイビング</h2>
                    <p class="information__text">ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！</p>
                  </div>
                  <figure class="information__img">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery5.jpg" alt="熱帯魚と珊瑚の画像">
                  </figure>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- コンタクト -->
      <?php get_template_part('parts/contact'); ?>

<?php get_footer(); ?>
