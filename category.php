
<?php get_header(); ?>

<div class="page__mv works__mv">
    <img src="<?php echo get_template_directory_uri(); ?>/images/page_bg.png" alt="">
    <div class="mv"></div>
</div>

<div class="works">
    <div class="page__container">
        <h1 class="page__ttl">
            <p>blog</p>
            <span>ブログ</span>
        </h1>


            <?php
            // 除外するカテゴリーのスラッグを指定
            $exclude_categories = array('event', 'event2', 'uncategorized');

            // スラッグからカテゴリーIDを取得
            $exclude_ids = array();
            foreach ($exclude_categories as $slug) {
                $category = get_category_by_slug($slug);
                if ($category) {
                    $exclude_ids[] = $category->term_id;
                }
            }

            // カテゴリーを取得（除外するカテゴリーIDを指定）
            $categories = get_categories(array(
                'exclude' => $exclude_ids,
            ));

            // 現在のカテゴリーのスラッグを取得
            $current_category_slug = get_queried_object()->slug;

            if ($categories) {
                echo '<ul class="works__cat flex">'; // ulタグの開始
                foreach ($categories as $category) {
                    // 現在のカテゴリーと一致するか確認
                    $class = ($current_category_slug === $category->slug) ? 'active' : '';
                    
                    // 各カテゴリーのリンク付きリストアイテムを出力
                    echo '<li class="category-item">';
                    echo '<a href="' . esc_url(get_category_link($category->term_id)) . '" title="' . esc_attr($category->name) . '" class="' . esc_attr($class) . '">';
                    echo esc_html($category->name);
                    echo '</a>';
                    echo '</li>';
                }
                echo '</ul>'; // ulタグの閉じ
            }
            ?>


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
            $wp_query = new WP_Query($args); // クエリの指定

            if ($wp_query->have_posts()) :
                while ($wp_query->have_posts()) : $wp_query->the_post();
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