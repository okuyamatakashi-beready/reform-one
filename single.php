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

            <?php 
                $time = get_field('time');
                $time_day2 = get_field('time_day2');
                $time_day3 = get_field('time_day3');
                $belongings = get_field('belongings');
                $address = get_field('address');
                $address_url = get_field('address_url');
            ?>
            
            <?php if($time): ?>
                <div class="works__spec event__spec">
                    <div class="spec__container">
                        <ul class="flex">
                            <li>
                                <span class="spec__ttl">開催日時</span>
                                <p><?php echo $time;?><?php echo $time_day2;?><?php echo $time_day3;?></p>
                            </li>
                            <li>
                                <span class="spec__ttl">持ち物</span>
                                <p><?php echo $belongings;?></p>
                            </li>
                            <li>
                                <span class="spec__ttl">開催場所</span>
                                <p><?php echo $address;?></p>
                            </li>
                        </ul>

                        <a href="<?php echo $address_url;?>" class="common__btn" target="_blank">
                            <div class="flex">
                                <p>google map</p>
                                <div class="common__btn--line">
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            <?php endif; ?>
        </div>

        <?php if($time): ?>
            <div class="contact__wrapper event__container">
                <div class="contact__container">
                    <h3>
                        <span>contact</span>
                        <p>こちらのイベントに関する<br class="sp">お問い合わせはこちら</p>
                    </h3>


                    
                    <div class="contact__content">
                        <?php echo do_shortcode('[contact-form-7 id="f13a6cf" title="イベント用お問合せフォーム"]'); ?>

                    </div>
                </div>
            </div>
        <?php endif; ?>
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