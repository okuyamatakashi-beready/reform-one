
<?php get_header(); ?>

<div class="page__mv estate__mv">
    <img src="<?php echo get_template_directory_uri(); ?>/images/page_bg.png" alt="">
    <div class="mv"></div>
</div>

<div class="works">
    <div class="page__container">
        <h1 class="page__ttl">
            <p>new construction & real estate</p>
            <span>新築&不動産</span>
        </h1>

        <div class="intro__wrap">
            <p>
                リフォームやリノベーション以外にも、新築物件もしっかりとご提案させていただいています。リフォームワンの新築・大型リノベーション部門「ONEの家」では、しっかりとお客様のご希望に寄り添い、住んでみて必ず住みやすく後悔のない家にするため、年間3棟までと限定しています。<br>
                また、「暮らす人が快適でしあわせであたたかいキモチになる毎日を」をテーマに上田市と東御市を中心にさまざまな不動産物件もご紹介しています。
            </p>
        </div>

    </div>

    <div class="content__wrap flex">
        <div class="content__img content__img--estate"></div>

        <div class="content__text__wrap">
            <p>
                年間3棟…はい、本当にじっくりと建てています。不動産業界で年間◯◯棟と謳う際は、その多さや幅広さをアピールするものがほとんだと思います。しかし、私たちは数で勝負はいたしません。ライフプラン、ライフスタイル、趣味嗜好、過去・現在・未来をトータルに見据えて、ヒアリングと打ち合わせをじっくりと重ね、最適なプランを限定的にご提案するスタイルです。経験を重ね、たどり着いた最適解、ご満足いただけるはずと、自信を持っています！
            </p>

        </div>
    </div>
    <div class="content__wrap content__wrap--right flex">
        <div class="content__img content__img--estate content__img--right"></div>

        <div class="content__text__wrap content__text__wrap--left">
            <p>
            不動産部門は、「Oneエステート」。お客様に不動産の仕組みや探し方をまずは知っていただくことを大切にしています。また、お客様のご状況やご希望をしっかりとお聞きして、安心して購入ができるように精一杯サポートをさせていただきます。特に、上田市と東御市の物件であれば、お任せください。ローカルな情報から未公開の情報まで隈なくご準備可能です。
            </p>
            <p>
            不動産探しでお困りの方、上田市と東御市で気になる物件を見つけられた方は是非お気軽にお問い合せください。
            </p>

        </div>
    </div>
    <div class="page__container">
        <h3 class="reform__ttl">
            <p>other works</p>
            <span>新築＆不動産事例</span>
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

<div class="renovation__kinds">
    <div class="kinds__container">
        <div class="flex">
            <div class="kinds__content one__house">
                <figure>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/renovation/one_house.svg" alt="" class="">
                </figure>
                <div>
                    <p>
                    デザイナーとつくるあなたの”好き“をギュッと詰め込んだ新築・大型リノベーション。オリジナルの手法であなたの理想を引き出し、カタチにしていきます。
                    </p>

                    <p>
                    制約のあるリノベーションも、幸せに暮らせるように生まれ変わらせます。
                    </p>
                </div>

                <a href="" target="_blank">oneの家</a>
            </div>
            <div class="kinds__content one__estate">
                <figure>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/estate/one_estate.svg" alt="" class="">
                </figure>
                <div>
                    <p>
                        上田市と東御市の物件であれば、「Oneエステート」にお任せください。不動産探しでお困りの方、上田市と東御市で気になる物件を見つけられた方は是非お気軽にお問い合せください。<br>
                        「暮らす人が快適でしあわせであたたかいキモチになる毎日を」
                    </p>
                </div>


                <a href="" target="_blank">oneエステート</a>
            </div>
        </div>
    </div>
</div>

<?php get_footer();?>