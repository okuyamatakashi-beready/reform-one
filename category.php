
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
                <a href="/news">all</a>
            </li>
            <li>
                <a href="/category/event" class="active">イベント</a>
            </li>
        </ul>
        <div class="works__content">
        <ul class="flex">
            <?php
            $paged = get_query_var('paged') ? get_query_var('paged') : 1;

            // 現在のカテゴリーオブジェクトを取得
            $current_category = get_queried_object();

            // 現在のカテゴリーのスラッグを取得
            $args = array(
                'posts_per_page' => 12,
                'post_status' => 'publish',
                'paged' => $paged,
                'category_name' => $current_category->slug, // カテゴリーのスラッグを指定
            );
            $my_query = new WP_Query($args); // クエリの指定

            if ($my_query->have_posts()) :
                while ($my_query->have_posts()) : $my_query->the_post();
            ?>
                    <li>
                        <a href="<?php the_permalink(); ?>">
                            <div class="works__thumb" style="background-image: url(<?php echo get_the_post_thumbnail_url() ?: 'path/to/default-image.jpg'; ?>);"></div> <!-- デフォルト画像を設定 -->
                            <div class="works__time flex">
                                <span class="new">new</span>
                                <span class="time"><?php echo get_the_date('Y-m-d'); ?></span> <!-- 日付のフォーマットを指定 -->
                            </div>
                            <h2><?php the_title(); ?></h2>
                            <ul class="tag flex">
                                <?php
                                $categories = get_the_category();
                                if (!empty($categories)) {
                                    foreach ($categories as $category) {
                                        echo '<li>#' . esc_html($category->name) . '</li>';
                                    }
                                }
                                ?>
                            </ul>
                        </a>
                    </li>
            <?php
                endwhile;
            endif;
            wp_reset_postdata();
            ?>
        </ul>

</div>

    </div>
</div>

<?php get_footer();?>