<?php get_header(); ?>

      <!-- contact -->
      <section class="page-contact">
        <div class="page-contact__mv mv">
          <h1 class="mv__heading heading">contact</h1>
        </div>
        <div class="page-contact__inner inner">

          <?php get_template_part('parts/breadcrumb'); ?>

          <div class="page-contact__content">
            <div class="page-contact__form contact-form">
              <span class="contact-form__alert js-contact-form__alert"></span>
              <form action="https://example.com/users" method="post" class="contact-form__inner">
                <dl class="contact-form__items">
                  <dt class="contact-form__title">
                    お名前<span>必須</span>
                  </dt>
                  <dd class="contact-form__item">
                    <input type="text" name="name" placeholder="沖縄&emsp;太郎" value="" required>
                  </dd>
                </dl>
                <dl class="contact-form__items">
                  <dt class="contact-form__title">
                    メールアドレス<span>必須</span>
                  </dt>
                  <dd class="contact-form__item">
                    <input type="email" name="email" placeholder="aaa000@ggmail.com" value="" required>
                  </dd>
                </dl>
                <dl class="contact-form__items">
                  <dt class="contact-form__title">
                    電話番号<span>必須</span>
                  </dt>
                  <dd class="contact-form__item">
                    <input type="tel" name="tel" placeholder="000-0000-0000" value="" required>
                  </dd>
                </dl>
                <dl class="contact-form__items">
                  <dt class="contact-form__title">
                    お問い合わせ項目<span>必須</span>
                  </dt>
                  <dd class="contact-form__item contact-form__item--border-none">
                    <label class="contact-form__radio"><input type="radio" name="option" value="ダイビング講習について" required><span>ダイビング講習について</span></label>
                    <label class="contact-form__radio"><input type="radio" name="option" value="ファンダイビングについて" required><span>ファンダイビングについて</span></label>
                    <label class="contact-form__radio"><input type="radio" name="option" value="体験ダイビングについて" required><span>体験ダイビングについて</span></label>
                    <label class="contact-form__radio"><input type="radio" name="option" value="スペシャルダイビングについて" required><span>スペシャルダイビングについて</span></label>
                  </dd>
                </dl>
                <dl class="contact-form__items">
                  <dt class="contact-form__title">
                    キャンペーン
                  </dt>
                  <dd class="contact-form__item contact-form__select contact-form__item--border-none">
                    <select name="select-item" class="contact-form__select-item">
                      <option value="">キャンペーン内容を選択</option>
                      <option value="ライセンス取得">ライセンス取得</option>
                      <option value="貸切体験ダイビング">貸切体験ダイビング</option>
                      <option value="ナイトダイビング">ナイトダイビング</option>
                    </select>
                  </dd>
                </dl>
                <dl class="contact-form__items">
                  <dt class="contact-form__title">
                    お問い合わせ内容<span>必須</span>
                  </dt>
                  <dd class="contact-form__item">
                    <textarea name="contents" required></textarea>
                  </dd>
                </dl>
                <!-- 個人情報同意 -->
                <div class="contact-form__consent">
                  <label class="contact-form__consent-text">
                    <input type="checkbox" required>
                    <span>個人情報の取り扱いについて同意のうえ送信します。</span>
                  </label>
                  <div class="contact-form__btn">
                    <button type="submit" class="btn js-btn">send<span></span></button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>

<?php get_footer(); ?>