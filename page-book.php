
<?php get_header(); ?>

<div class="page__mv reform__mv">
    <img src="<?php echo get_template_directory_uri(); ?>/images/page_bg.png" alt="">
    <div class="mv"></div>
</div>

<div class="works">
    <div class="page__container">
        <h1 class="page__ttl">
            <p>contact</p>
            <span>資料請求</span>
        </h1>

    </div>

    <div class="single__container">

        <div class="contact__wrapper">
            <div class="contact__container">
                <h3>
                    <span>資料請求</span>
                    <p>ご希望の資料をお送りいたします。</p>
                </h3>

                
                <div class="contact__content">
                    <?php echo do_shortcode('[contact-form-7 id="05cc35f" title="資料請求フォーム"]'); ?>

                </div>
            </div>
        </div>
    </div>


<?php get_footer();?>