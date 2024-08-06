
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
        </section>
    </main>
<?php get_footer();?>