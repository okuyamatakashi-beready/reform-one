
<?php get_header(); ?>

    <main>
        <div id="mv">
			<div class="mv__wrapper">
				<video id="videoTop" autoplay muted playsinline loop width="1920px" height="1080px">
					<source src="<?php echo get_template_directory_uri(); ?>/images/top/mv.webm">
				</video>
                <div class="mv__catch">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/top/mv-logo.svg" alt="">
                    <p class="catch">
                        豊かなしあわせを運ぶために<br>
                        つくる・つくりかえる・生まれ変わる
                    </p>
                </div>
				
			</div>
            <div class="scroll">
                <p>scroll</p>
                <div>
                    <span></span>
                    <span></span>
                </div>
            </div>
		</div>
		<!-- //mv -->

        <div class="concept__bg">
            <section id="concept">
                <div class="concept__container">
                    <div class="flex">
                        <h2>
                            はじめまして<br>
                            リフォームワン株式会社です。
                        </h2>
                        <p class="concept__text">
                            上田市にて塗装業<span>60</span>余年、建設業も<span>25</span>年以上営んできた<br>
                            総合建築・不動産会社です。<br>
                            「住まいを通じて好循環型社会を創る」の経営理念のもと<br>
                            ヒト・モノ・おカネをスパイラルアップしながら循環させ、<br>
                            豊かな暮らしを共につくることをビジョンに掲げています。<br><br>

                            ただキレイにするだけなら誰でもできる…<br>
                            それに加えて「意味のあるリノベーション」を大切にしており、<br>
                            お客様の日常に寄り添いながらも<br>
                            ユニークさやこだわりを内包させる<br>
                            そんなリノベーションを手掛けていきます。
                        </p>
                    </div>
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

                <div id="megureno">
                    <div class="megu__container">
                        <div class="flex">
                            <div class="megureno__img"></div>
                            <div class="megureno__content">
                                <strong>Megu/Reno〈メグリノ〉</strong>
                                <p class="megureno__text">
                                    リノベーションブランド〈メグリノ〉<br>
                                    建物もリユースで生まれ変わる。<br>
                                    空き家の有効活用や築古物件の再生、<br>
                                    価値を終えたモノたちにも再び意味を持たせ<br>
                                    価値のあるものへ生まれ変わらせる<br>
                                    そんなことが大好きな集団。<br><br>

                                    不要を必要に変え、無価値を高価値へ導く。<br>
                                    巡りのリノベは、豊かなしあわせを運ぶ。<br>
                                    巡り巡って、あなたの理想を叶えるために。
                                </p>

                                <a href="/concept#megureno" class="common__btn">
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

                    <img src="<?php echo get_template_directory_uri(); ?>/images/top/megureno_bg.png" alt="" class="megureno__bg">
                </div>


            </section>


            
        </div>

        <section id="news">
            <div class="news__container flex">
                <div class="news__content news__wrap">
                    <h2><p>
                        news<span>お知らせ</span>
                        </p>
                    </h2>

                    <ul>
                    <?php
                        $paged = get_query_var('paged') ? get_query_var('paged') : 1 ;
                        $args = array(
                            'posts_per_page' => '3',
                            'post_status' => 'publish',
                            'paged' => $paged,
                            'category_name' => 'news',
                        );
                        ?>
                        <?php $my_query = new WP_Query( $args ); ?><!-- クエリの指定 -->

                            <?php if ( $my_query->have_posts() ) :

                                while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
                        <li>
                            <div class="flex">
                                <span class="new">new</span>
                                <span class="time"><?php the_date(); ?></span>
                            </div>
                            <h3>
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h3>
                        </li>
                        <?php endwhile; ?>
                        <?php endif; ?>
                        <?php wp_reset_postdata(); ?>
                    </ul>
                    <a href="/news" class="common__btn common__btn--white">
                        <div class="flex">
                            <p>view more</p>
                            <div class="common__btn--line">
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="news__content blog__wrap">
                    <h2><p>
                        blog<span>ブログ</span>
                        </p>
                    </h2>

                    <ul>
                    <?php
                        $paged = get_query_var('paged') ? get_query_var('paged') : 1 ;
                        $args = array(
                            'posts_per_page' => '3',
                            'post_status' => 'publish',
                            'paged' => $paged,
                            'category_name' => 'blogs, president',
                        );
                        ?>
                        <?php $my_query = new WP_Query( $args ); ?><!-- クエリの指定 -->

                            <?php if ( $my_query->have_posts() ) :

                                while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
                        <li>
                            <div class="blog__content flex">
                                <div class="blog__thumb" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>)"></div>
                                <div class="blog__info">
                                    <div class="flex">
                                        <span class="new">new</span>
                                        <span class="time"><?php the_date(); ?></span>
                                    </div>
                                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                </div>
                            </div>
                        </li>
                        <?php endwhile; ?>
                        <?php endif; ?>
                        <?php wp_reset_postdata(); ?>
                    </ul>
                    <a href="/blog" class="common__btn common__btn--white">
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
        </section>

        <div id="gallery">
            <div class="pc">
                <div class="colum01 flex">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/top/gallery01.jpg" alt="" class="">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/top/gallery02.jpg" alt="" class="">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/top/gallery03.jpg" alt="" class="">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/top/gallery04.jpg" alt="" class="">
                </div>
                <div class="colum02 flex">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/top/gallery05.jpg" alt="" class="">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/top/gallery06.jpg" alt="" class="">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/top/gallery07.jpg" alt="" class="">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/top/gallery08.jpg" alt="" class="">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/top/gallery09.jpg" alt="" class="">
                </div>
                <div class="colum03 flex">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/top/gallery10.jpg" alt="" class="">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/top/gallery11.jpg" alt="" class="">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/top/gallery12.jpg" alt="" class="">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/top/gallery13.jpg" alt="" class="">
                </div>


            </div>
        </div>

        <section id="staff">
            <div class="staff__container">
                <h2 class="sec__ttl flex">
                    staff<span>oneのスタッフ紹介</span>
                </h2>
                <div class="staff__slide">
                    <div class="slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/staff/staff01.png" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/staff/staff01-02.png" alt="">
                    </div>
                    <div class="slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/staff/staff02.png" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/staff/staff02-02.png" alt="">
                    </div>
                    <div class="slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/staff/staff03.png" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/staff/staff03-02.png" alt="">
                    </div>
                    <div class="slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/staff/staff04.png" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/staff/staff04-02.png" alt="">
                    </div>
                    <div class="slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/staff/staff05.png" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/staff/staff05-02.png" alt="">
                    </div>
                    <div class="slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/staff/staff06.png" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/staff/staff06-02.png" alt="">
                    </div>
                    <div class="slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/staff/staff07.png" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/staff/staff07-02.png" alt="">
                    </div>
                    <div class="slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/staff/staff08.png" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/staff/staff08-02.png" alt="">
                    </div>
                </div>
                <a href="/staff" class="common__btn">
                    <div class="flex">
                        <p>view more</p>
                        <div class="common__btn--line">
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </a>
            </div>
        </section>

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
                                    <a href="/contact" class="nav__btn--contact nav__btn--small">
                                        <span>来場予約</span>
                                    </a>
                                    <a href="/contact" class="nav__btn--contact nav__btn--small">
                                        <span>資料請求</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>


<?php get_footer();?>