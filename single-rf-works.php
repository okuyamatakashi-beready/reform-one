<?php get_header(); ?>
    <div class="single__container">
        <div class="single__ttl">
            <div class="single__time flex">
                <span class="new">new</span>
                <span class="time"><?php echo get_the_date(); ?></span>
            </div>

            <h1><?php the_title(); ?></h1>
        </div>

        <div class="single__content">
            <?php the_content();?>
        </div>

        <?php 
            $wide = get_field('wide');
            $vertical = get_field('vertical');
            $wide02 = get_field('wide02');
            $movie = get_field('movie');
            $works_cat = get_field('works_cat');
            $works_period = get_field('works_period');
            $works_price = get_field('works_price');
            $works_voice = get_field('works_voice');
            $works_planner = get_field('works_planner');
        ?>

        <?php if( have_rows('wide') ): ?>
            <?php while( have_rows('wide') ): the_row();
                $wide_img = get_sub_field('wide_img');
            ?>
            <?php if($wide): ?>
                <div class="wide__img single__img" style="background-image:url(<?php echo $wide_img;?>);"></div>
            <?php endif; ?>
        <?php endwhile;?>
        <?php endif; ?>
        
        <div class="vertical__wrap flex">
            <?php if( have_rows('vertical') ): ?>
                <?php while( have_rows('vertical') ): the_row();
                    $vertical_img = get_sub_field('vertical_img');
                ?>
                <?php if($vertical): ?>
                    <div class="vertical__img single__img" style="background-image:url(<?php echo $vertical_img;?>);"></div>
                <?php endif; ?>
            <?php endwhile;?>
            <?php endif; ?>
        </div>

        <?php if( have_rows('wide02') ): ?>
            <?php while( have_rows('wide02') ): the_row();
                $wide02_img = get_sub_field('wide02_img');
            ?>
            <?php if($wide02): ?>
                <div class="wide__img single__img" style="background-image:url(<?php echo $wide02_img;?>);"></div>
            <?php endif; ?>
        <?php endwhile;?>
        <?php endif; ?>


        <div class="works__spec">
            <div class="spec__container">
                <ul class="flex">
                    <li>
                        <span class="spec__ttl">カテゴリー</span>
                        <?php if($works_cat): ?><p><?php echo $works_cat;?></p><?php endif; ?>
                    </li>
                    <li>
                        <span class="spec__ttl">工期</span>
                        <?php if($works_period): ?><p><?php echo $works_period;?></p><?php endif; ?>
                    </li>
                    <li>
                        <span class="spec__ttl">費用</span>
                        <?php if($works_price): ?><p><?php echo $works_price;?>万円</p><?php endif; ?>
                    </li>
                </ul>
            </div>
        </div>

        <div class="works__voice">
            <ul>
                <li>
                    <span class="spec__ttl">お客様の声</span>
                    <?php if($works_voice): ?><p><?php echo $works_voice;?></p><?php endif; ?>
                </li>
                <li>
                    <span class="spec__ttl">プランナーからのコメント</span>
                    <?php if($works_planner): ?><p><?php echo $works_planner;?></p><?php endif; ?>
                </li>
            </ul>
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