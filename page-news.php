
<?php get_header(); ?>

<div class="page__mv works__mv">
    <img src="<?php echo get_template_directory_uri(); ?>/images/page_bg.png" alt="">
    <div class="mv"></div>
</div>

<div class="works">
    <div class="page__container">
        <h1 class="page__ttl">
            <p>news</p>
            <span>お知らせ</span>
        </h1>

        <ul class="works__cat flex">
            <li>
                <a href="<?php echo get_permalink(get_option('page_for_posts')); ?>" class="active">all</a>
            </li>
            <li>
                <a href="/category/event" class="">イベント</a>
            </li>
        </ul>


        <div class="works__content">
            <ul class="flex">
            <?php
					$paged = get_query_var('paged') ? get_query_var('paged') : 1 ;
					$args = array(
						'posts_per_page' => '12',
						'post_status' => 'publish',
						'paged' => $paged,
						'category_name' => 'news',
					);
					?>
                    <?php $wp_query = new WP_Query( $args ); ?><!-- クエリの指定 -->

                <?php if ( $wp_query->have_posts() ) :

                    while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>

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
                    </a>
                </li>

                <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>	
            </ul>

            <div class="pagination_wrap">
				<?php
					if ( function_exists( 'pagination' ) ) :
						pagination( $wp_query->max_num_pages, get_query_var( 'paged' ) );
					endif;
				?>
			</div>
        </div>
    </div>
</div>

<?php get_footer();?>