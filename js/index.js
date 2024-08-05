/*-------------------------
    toggle 開閉
-------------------------*/
$('#toggle').on('click',function(){
	$(this).toggleClass('open');
	$("body").toggleClass('open');
});
$('#gnav__toggle').on('click',function(){
	$("#toggle").removeClass('open');
	$("body").removeClass('open');
});




/*-------------------------
    スムーススクロール
-------------------------*/
let lenis = new Lenis();

function raf(time) {
  lenis.raf(time);
  requestAnimationFrame(raf);
}

requestAnimationFrame(raf);


/*-------------------------
matchheight
-------------------------*/


    $(function() {
        $('.more').matchHeight({
            target: $('.bottom__contact')
        });
    });

$(function() {
	$('.note__inner').matchHeight();
});

/*-------------------------
    メインビジュアルスライダー
-------------------------*/
$(document).ready(function(){
    $('.mv__slider').slick({
        dots: false, // ドットナビゲーションを有効にする
        arrows: false,
        infinite: true, // 無限ループ
        speed: 1000, // スライドのスピード
        fade: true, // フェードを有効にする
        cssEase: 'linear', // フェードのCSS
        autoplay: true, // 自動再生を有効にする
        autoplaySpeed: 2000 // 自動再生のスピード
    });
});

/*-------------------------
    無限スライダー
-------------------------*/

$(document).ready(function() {
    $('#infinite__slider').infiniteslide({
        'speed': 100,
        'direction': 'left',
        'pauseonhover': false,
        'responsive': true,
        'clone': 2
    });
});


/*-------------------------
    ローディング
-------------------------*/

$(document).ready(function() {
    // ロゴを1.2秒でフェードアウトする
    $("#splash-logo").delay(1200).fadeOut('slow').promise().done(function() {
        // ロゴのフェードアウトが完了したら、スプラッシュエリアをフェードアウト
        $("#splash").fadeOut('slow', function() {
            $('body').addClass('appear');
        });
    });

    // フェードアウトが完了しない場合のフォールバック処理
    setTimeout(function() {
        if ($("#splash").is(':visible')) {
            $("#splash").fadeOut('slow', function() {
                $('body').addClass('appear');
            });
        }
    }, 5000); // 5秒後にフォールバック処理を実行

    // 背景が伸びた後に動かしたいJSをまとめる
    $('.splashbg1').on('animationend', function() { 
        // この中に動かしたいJSを記載
    });
});
