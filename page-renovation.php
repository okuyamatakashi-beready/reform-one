
<?php get_header(); ?>

<div class="page__mv renovation__mv">
    <img src="<?php echo get_template_directory_uri(); ?>/images/page_bg.png" alt="">
    <div class="mv"></div>
</div>

<div class="works">
    <div class="page__container">
        <h1 class="page__ttl">
            <p>renovation</p>
            <span>リノベーション</span>
        </h1>

        <div class="intro__wrap">
            <p>
                ただキレイにするだけなら誰でもできる、と私たちは考えます。それに加えて、「意味のあるリノベーション」を大切にしており、お客様の日常に寄り添いながらもユニークさやこだわりを内包させるそんなリノベーションを手掛けていきます。すべては、「豊かなしあわせを運ぶために」。<br>
                私たちリフォームワンならびにリノベーションブランド「Megu/Reno〈メグリノ〉」では、想いや熱意、スキルや経験の詰まった販売形のモデルハウスをご用意しております。契約済みでなければ、是非とも直接お目に触れていただきたいです。
            </p>
        </div>

    </div>

    <div class="content__wrap flex">
        <div class="content__img content__img--renovation"></div>

        <div class="content__text__wrap">
            <p>
                リサイクルやアップサイクル、リユースなどモノの活用は、昨今では欠かせないものとなっています。当然、建物もそうです。リユースで生まれ変わります。「空き家の有効活用や築古物件の再生、価値を終えたモノたちにも再び意味を持たせ、価値のあるものへ生まれ変わらせる」。私たちは、そんなことが大好きな集団です。<br>
                不要を必要に変えていきます。無価値を高価値へ導いていきます。<br>
                巡りのリノベは、豊かなしあわせを運んでいきます。<br>
                なぜ、そんなことをするのか？<br>
                それは、巡り巡って、あなたの理想を叶えるためなのです。
            </p>
        </div>
    </div>

    <div class="before__after">
        <h3 class="reform__ttl">
            <p>before after</p>
            <span>ビフォーアフター</span>
        </h3>

        <div class="before__after__wrap">
            <div class="ba__content ba--01">
                <div class="ba__text">
                    <strong>
                        <span class="before">before</span>
                        <span class="after">after</span>
                    </strong>
                    <!-- <p>2024.00.00</p>
                    <h3>○○に生まれ変わったキッチン</h3> -->
                </div>
            </div>
            <div class="ba__content ba--02">
                <div class="ba__text">
                    <strong>
                        <span class="before">before</span>
                        <span class="after">after</span>
                    </strong>
                    <!-- <p>2024.00.00</p>
                    <h3>○○に生まれ変わったキッチン</h3> -->
                </div>
            </div>
            <div class="ba__content ba--03">
                <div class="ba__text">
                    <strong>
                        <span class="before">before</span>
                        <span class="after">after</span>
                    </strong>
                    <!-- <p>2024.00.00</p>
                    <h3>○○に生まれ変わったキッチン</h3> -->
                </div>
            </div>
            <div class="ba__content ba--04">
                <div class="ba__text">
                    <strong>
                        <span class="before">before</span>
                        <span class="after">after</span>
                    </strong>
                    <!-- <p>2024.00.00</p>
                    <h3>○○に生まれ変わったキッチン</h3> -->
                </div>
            </div>
            <div class="ba__content ba--05">
                <div class="ba__text">
                    <strong>
                        <span class="before">before</span>
                        <span class="after">after</span>
                    </strong>
                    <!-- <p>2024.00.00</p>
                    <h3>○○に生まれ変わったキッチン</h3> -->
                </div>
            </div>
        </div>
    </div>
    <div class="page__container">
        <h3 class="reform__ttl">
            <p>other works</p>
            <span>リノベーション施工事例</span>
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
                <p>
                デザイナーとつくるあなたの”好き“をギュッと詰め込んだ新築・大型リノベーション。オリジナルの手法であなたの理想を引き出し、カタチにしていきます。
                </p>

                <p>
                制約のあるリノベーションも、幸せに暮らせるように生まれ変わらせます。
                </p>

                <a href="" target="_blank">oneの家</a>
            </div>
            <div class="kinds__content seventys__one__house">
                <figure>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/renovation/70s.svg" alt="" class="">
                </figure>
                <p>
                    70年代の中古物件を自分好みにリノベーション！！<br>
                    お家の間取りや外観はもちろん、耐震性や断熱性能もアップさせて新築と変わらない快適さです。
                </p>

                <p>
                    新築にはないノスタルジックな空間は70年代不動産ならでは！<br>
                    物件探しもお手伝いいたします。
                </p>

            </div>
        </div>
    </div>
</div>

<?php get_footer();?>