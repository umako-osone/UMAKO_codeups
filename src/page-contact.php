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

              <?php echo do_shortcode ('[contact-form-7 id="2b1d55b" title="お問い合わせ"]'); ?>

            </div>
          </div>
        </div>
      </section>

<?php get_footer(); ?>