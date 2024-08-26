
<?php get_header(); ?>

<div class="page__mv reform__mv">
    <img src="<?php echo get_template_directory_uri(); ?>/images/page_bg.png" alt="">
    <div class="mv"></div>
</div>

<div class="works">
    <div class="page__container">
        <h1 class="page__ttl">
            <p>reform</p>
            <span>リフォーム</span>
        </h1>

        <div class="intro__wrap">
            <p>
            私たちリフォームワンは、上田市・長野市・千曲市・小諸市・東御市・佐久市で新築リフォームをメインに展開しています。お庭や外装、屋根、カーポートなどの外まわり、トイレ、バス、洗面所、キッチンなどの水まわり、天井、照明、建具、フローリング、間取り変更、増減築などの室内リフォーム、修理・改善・改良など住まいのお悩みごとなら、なんでもお任せください。
            </p>
        </div>

    </div>

    <div class="content__wrap flex">
        <div class="content__img content__img--reform"></div>

        <div class="content__text__wrap">
            <p>
                これまでの使い心地以上の使い勝手の良さを実現させます。<br>
                おしゃれなだけ、格好いいだけのリフォームではなく、<br>
                「住まう方にとっての最適をご提案したい」と考えています。
            </p>

            <p>
                「古くなって使いにくくなってしまった」<br>
                「うっかり穴があいてしまった壁や傷がついた床」<br>
                「ライフスタイルが変わって使いにくくなった間取り」<br>
                「趣味を楽しむスペースをつくりたい」
            </p>

            <p>
                どんなことでもご相談ください！ 
            </p>
        </div>
    </div>
    <div class="page__container">
        <h3 class="reform__ttl">
            <p>other works</p>
            <span>リフォーム施工事例</span>
        </h3>
        <div class="works__content reform__content">
            <ul class="flex">
            <?php
                    $paged = get_query_var('paged') ? get_query_var('paged') : 1 ;
                    $args = array(
                        'posts_per_page' => '12',
                        'post_status' => 'publish',
                        'paged' => $paged,
                        'post_type' => 'rf-works',
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

            <a href="/concept" class="common__btn">
                <div class="flex">
                    <p>view more</p>
                    <div class="common__btn--line">
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>

<section id="contact">
    <div class="contact__container">
        <div class="flex">
            <div class="contact__thumb"></div>
            <div class="contact__content">
                <div class="contact__content__wrap">
                    <h2 class="sec__ttl flex">
                        contact<span>お問い合わせ</span>
                    </h2>
                    <p>
                    oneでリノベーションや家づくりをお考えの方は、<br>
                    お気軽にご相談ください。
                    </p>
                    <div class="nav__wrap--btn">
                        <a href="/contact" class="nav__btn--contact">
                            <span>お問い合わせ</span>
                        </a>

                        <div class="flex">
                            <a href="/visit" class="nav__btn--contact nav__btn--small">
                                <span>来場予約</span>
                            </a>
                            <a href="/book" class="nav__btn--contact nav__btn--small">
                                <span>資料請求</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer();?>