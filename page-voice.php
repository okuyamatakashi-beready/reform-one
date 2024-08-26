
<?php get_header(); ?>

<div class="page__mv voice__mv">
    <img src="<?php echo get_template_directory_uri(); ?>/images/page_bg.png" alt="">
    <div class="mv"></div>
</div>

<div class="works">
    <div class="page__container">
        <h1 class="page__ttl">
            <p>voice</p>
            <span>お客様の声</span>
        </h1>


        <div class="works__content voice__content">
            <ul class="flex">
            <?php
					$paged = get_query_var('paged') ? get_query_var('paged') : 1 ;
					$args = array(
						'posts_per_page' => '16',
						'post_status' => 'publish',
						'paged' => $paged,
						'post_type' => 'voice',
					);
					?>
                    <?php $my_query = new WP_Query( $args ); ?><!-- クエリの指定 -->

                <?php if ( $my_query->have_posts() ) :

                    while ( $my_query->have_posts() ) : $my_query->the_post(); ?>

                <li>
                    <a href="<?php the_permalink(); ?>">
                        <div class="works__thumb" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>)"></div>
                        <div class="works__time flex">
                            <span class="new">new</span>
                            <span class="time"><?php the_date(); ?></span>
                        </div>
                        <h2>
                            <?php the_title(); ?>
                        </h2>

                    </a>
                </li>

                <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>	
            </ul>
        </div>
    </div>
</div>

<?php get_footer();?>