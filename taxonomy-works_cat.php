
<?php get_header(); ?>

<div class="page__mv works__mv">
    <img src="<?php echo get_template_directory_uri(); ?>/images/page_bg.png" alt="">
    <div class="mv"></div>
</div>

<div class="works">
    <div class="page__container">
        <h1 class="page__ttl">
            <p>works</p>
            <span>施工事例</span>
        </h1>

            <?php
                $terms = get_terms(array(
                    'taxonomy' => 'works_cat',
                    'hide_empty' => false, // 投稿がないタームも表示する場合はfalseにする
                    'orderby' => 'term_id', // term_idで並び替え
                    'order' => 'DESC', // 新しいものを先に表示するために降順
                ));

                $current_slug = get_query_var('term'); // 現在のタクソノミースラッグを取得

                if (!empty($terms) && !is_wp_error($terms)) : ?>
                    <ul class="works__cat flex">
                        <?php foreach ($terms as $term) : ?>
                            <li>
                                <a href="<?php echo esc_url(get_term_link($term)); ?>">
                                    <label for="review_cat_<?php echo esc_attr($term->term_id); ?>">
                                        <?php echo esc_html($term->name); ?>
                                    </label>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>

        <div class="works__content">
            <ul class="flex">
            <?php
					$paged = get_query_var('paged') ? get_query_var('paged') : 1 ;
                    $current_term = get_queried_object();
					$args = array(
						'posts_per_page' => '-1',
						'post_status' => 'publish',
						'paged' => $paged,
						'post_type' => 'rf-works',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'works_cat', // カスタムタクソノミー review_cat
                                'field' => 'slug', // または 'term_id' など
                                'terms' => $current_term->slug, 
                            ),
                        ),
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
                        <ul class="tag"></ul>
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