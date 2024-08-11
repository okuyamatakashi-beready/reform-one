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
    $('.contact__thumb').matchHeight({
        target: $('.contact__content')
    });
});

$(function() {
	$('.note__inner').matchHeight();
});

$(function() {
    $('.one__estate div').matchHeight({
        target: $('.one__house div')
    });
});


/*-------------------------
    メインビジュアルスライダー
-------------------------*/
$(document).ready(function(){
    $('.staff__slide').slick({
        slidesToShow: 6, // 表示されるスライドの数
        slidesToScroll: 1, // スクロールするスライドの数
        autoplay: true, // 自動再生
        autoplaySpeed: 2000, // 自動再生のスピード（ミリ秒）
        arrows: true, // 左右のナビゲーション矢印を表示
        dots: true, // ドットナビゲーションを表示
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
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
