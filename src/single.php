<?php get_header(); ?>

      <!-- ブログ -->
      <section class="single">
        <div class="single__mv mv">
          <h1 class="mv__heading heading">blog</h1>
        </div>
        <div class="single__inner inner">
        <div class="single__breadcrumb breadcrumb">
          <p>top&ensp;&gt;&ensp;ブログ一覧&ensp;&gt;&ensp;ブログ詳細</p>
        </div>
        <div class="single__content">
            <div class="single__article article">
              <div class="article__blog-catds">
                <div class="single__main">
                  <time datetime="2023-11-17" class="single__date u-mobile">2023.11/17</time>
                  <div class="single__title-block">
                    <h2 class="single__title">ライセンス取得</h2>
                  </div>
                  <ul class="single__items">
                    <li class="single__item">
                      <figure class="single__img">
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog1.jpg" alt="サンゴの画像">
                      </figure>
                      <div class="single__text-block">
                        <p class="single__text">
                          ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                        </p>
                      </div>
                    </li>
                    <li class="single__item">
                      <figure class="single__img">
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog1.jpg" alt="サンゴの画像">
                      </figure>
                      <div class="single__text-block">
                        <p class="single__text">
                          ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
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
                      ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                    </p>
                  </div>
                  <div class="wp-pagenavi single__pagenavi">
                    <a class="wp-pagenavi__previous" rel="prev" href="#"></a>
                    <a class="wp-pagenavi__next" rel="next" href="#"></a>
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
                    <a href="#" class="btn">contact&ensp;us<span></span></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

<?php get_footer(); ?>

