<?php get_header(); ?>
    <div class="single__container">

        <div class="single__thumb" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>)"></div>
        <div class="single__ttl">
            <div class="single__time flex">
                <span class="new">new</span>
                <span class="time"><?php echo get_the_date(); ?></span>
            </div>

            <h1><?php the_title(); ?></h1>
            <ul class="tag flex">
                <?php
                $categories = get_the_category();
                if ( ! empty( $categories ) ) {
                    foreach ( $categories as $category ) {
                        echo '<li>#' . esc_html( $category->name ) . '</li>';
                    }
                }
                ?>
            </ul>
        </div>

        <div class="single__content">
            <?php the_content();?>
        </div>


        <div class="contact__wrapper">
            <div class="contact__container">
                <h3>
                    <span>contact</span>
                    <p>こちらのリフォームに関するお問い合わせはこちら</p>
                </h3>


                
                <div class="contact__content">
                    <?php echo do_shortcode('[contact-form-7 id="3ec641b" title="コンタクトフォーム 1"]'); ?>

                </div>
            </div>
        </div>
        <a href="/works" class="common__btn">
            <div class="flex">
                
                <div class="common__btn--line">
                    <span></span>
                    <span></span>
                </div>
                <p>page back</p>
            </div>
        </a>
    </div>

<?php get_footer();?>