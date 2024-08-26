
<?php get_header(); ?>

<div class="page__mv reform__mv">
    <img src="<?php echo get_template_directory_uri(); ?>/images/page_bg.png" alt="">
    <div class="mv"></div>
</div>

<div class="works">
    <div class="page__container">
        <h1 class="page__ttl">
            <p>contact</p>
            <span>来店予約</span>
        </h1>

    </div>

    <div class="single__container">

        <div class="contact__wrapper">
            <div class="contact__container visit__container">
                <h3>
                    <span>来店予約</span>
                    <p>
                    ショールームにてリフォームの<br class="sp">ご相談を承っております。<br>
                    お気軽にご予約ください。
                    </p>
                </h3>

                <a href="tel:0120820440" class="tel">
                        <p>当日のご予約はお電話ください</p>
                        <div class="flex">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/thanks/phone.svg" alt="" class="">
                            <span>0120-82-0440</span>
                        </div>
                        <p>受付時間  09:00-18:00</p>
                    </a>

                
                <div class="contact__content">
                    <?php echo do_shortcode('[contact-form-7 id="18365ac" title="来店予約フォーム"]'); ?>

                </div>
            </div>
        </div>
    </div>


<?php get_footer();?>