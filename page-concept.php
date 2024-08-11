
<?php get_header(); ?>

<div class="page__mv concept__mv">
    <img src="<?php echo get_template_directory_uri(); ?>/images/page_bg.png" alt="">
    <div class="mv"></div>
</div>

<div class="works">
    <div class="page__container">
        <h1 class="page__ttl">
            <p>concept</p>
            <span>コンセプト・想い</span>
        </h1>

        <div class="concept__intro__wrap">
            <strong>
                豊かなしあわせを運ぶために<br>
                つくる・つくりかえる・生まれ変わる
            </strong>

            <p>
                はじめまして、リフォームワン株式会社です。<br>
                上田市にて塗装業60余年、建設業も25年以上営んできた<br>
                総合建築・不動産会社です。<br>
                「住まいを通じて好循環型社会を創る」の経営理念のもと<br>
                ヒト・モノ・おカネをスパイラルアップしながら循環させ、<br>
                豊かな暮らしを共につくることをビジョンに掲げています。
            </p>

            <p>
                ただキレイにするだけなら誰でもできる…<br>
                それに加えて「意味のあるリノベーション」を大切にしており、<br>
                お客様の日常に寄り添いながらもユニークさやこだわりを内包させる<br>
                そんなリノベーションを手掛けていきます。
            </p>
        </div>

    </div>

    <div id="megureno" class="megureno__wrap">
        <div class="flex">
            <div class="megureno__left">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/concept/megureno_bg.png" alt="">
                    <h3 class="concept__ttl">
                        <p>new brand</p>
                        <span>Megu/Reno〈メグリノ〉</span>
                    </h3>

                    <p>
                        リノベーションブランド〈メグリノ〉<br>
                        建物もリユースで生まれ変わる。<br>
                        空き家の有効活用や築古物件の再生、<br>
                        価値を終えたモノたちにも再び意味を持たせ<br>
                        価値のあるものへ生まれ変わらせる<br>
                        そんなことが大好きな集団。
                    </p>
                    <p>
                        不要を必要に変え、無価値を高価値へ導く。<br>
                        巡りのリノベは、豊かなしあわせを運ぶ。<br>
                        巡り巡って、あなたの理想を叶えるために。
                    </p>
                </div>
            </div>

            <div class="megureno__img"></div>
        </div>
    </div>

    <div class="modelroom__container">
        <div class="sec01">
            <h3 class="concept__ttl">
                <p>model room</p>
                <span>モデルルーム</span>
            </h3>

            <figure>
                <img src="<?php echo get_template_directory_uri(); ?>/images/concept/morelroom01_pc.png" alt="" class="pc">
                <img src="<?php echo get_template_directory_uri(); ?>/images/concept/morelroom01_sp.png" alt="" class="sp">
            </figure>
        </div>

        <div class="sec02">
            <figure>
                <img src="<?php echo get_template_directory_uri(); ?>/images/concept/morelroom02_pc.png" alt="" class="pc">
                <img src="<?php echo get_template_directory_uri(); ?>/images/concept/morelroom02_sp.png" alt="" class="sp">
            </figure>
        </div>
        <div class="sec03">
            <figure>
                <img src="<?php echo get_template_directory_uri(); ?>/images/concept/morelroom03_pc.png" alt="" class="pc">
                <img src="<?php echo get_template_directory_uri(); ?>/images/concept/morelroom03_sp.png" alt="" class="sp">
            </figure>
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

<?php get_footer();?>