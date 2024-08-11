<?php

// アイキャッチ画像の設定
add_theme_support('post-thumbnails');
the_post_thumbnail('thumbnail');
the_post_thumbnail('medium');
the_post_thumbnail('large');

function my_styles()  {
    // page-sample用のCSS
    if ( is_page('') ) {
      wp_enqueue_style( 'page_css', get_template_directory_uri() . '/scss/page/index.css');
      }
    if ( is_page('works') ) {
      wp_enqueue_style( 'works_css', get_template_directory_uri() . '/scss/works/index.css');
      }
    if ( is_page('news') ) {
      wp_enqueue_style( 'works_css', get_template_directory_uri() . '/scss/works/index.css');
      wp_enqueue_style( 'news_css', get_template_directory_uri() . '/scss/news/index.css');
      }
    if ( is_page('blog') ) {
      wp_enqueue_style( 'works_css', get_template_directory_uri() . '/scss/works/index.css');
      wp_enqueue_style( 'news_css', get_template_directory_uri() . '/scss/news/index.css');
      }
    if ( is_page('concept') ) {
      wp_enqueue_style( 'page_css', get_template_directory_uri() . '/scss/page/index.css');
      wp_enqueue_style( 'works_css', get_template_directory_uri() . '/scss/works/index.css');
      wp_enqueue_style( 'concept_css', get_template_directory_uri() . '/scss/concept/index.css');
      }
    if ( is_page('reform') ) {
      wp_enqueue_style( 'page_css', get_template_directory_uri() . '/scss/page/index.css');
      wp_enqueue_style( 'works_css', get_template_directory_uri() . '/scss/works/index.css');
      wp_enqueue_style( 'reform_css', get_template_directory_uri() . '/scss/reform/index.css');
      }
    if ( is_page('renovation') ) {
      wp_enqueue_style( 'page_css', get_template_directory_uri() . '/scss/page/index.css');
      wp_enqueue_style( 'works_css', get_template_directory_uri() . '/scss/works/index.css');
      wp_enqueue_style( 'renovation_css', get_template_directory_uri() . '/scss/renovation/index.css');
      }
    if ( is_page('estate') ) {
      wp_enqueue_style( 'page_css', get_template_directory_uri() . '/scss/page/index.css');
      wp_enqueue_style( 'works_css', get_template_directory_uri() . '/scss/works/index.css');
      wp_enqueue_style( 'estate_css', get_template_directory_uri() . '/scss/estate/index.css');
      }
    if ( is_page('staff') ) {
      wp_enqueue_style( 'page_css', get_template_directory_uri() . '/scss/page/index.css');
      wp_enqueue_style( 'works_css', get_template_directory_uri() . '/scss/works/index.css');
      wp_enqueue_style( 'staff_css', get_template_directory_uri() . '/scss/staff/index.css');
      }
    if ( is_page('company') ) {
      wp_enqueue_style( 'page_css', get_template_directory_uri() . '/scss/page/index.css');
      wp_enqueue_style( 'works_css', get_template_directory_uri() . '/scss/works/index.css');
      wp_enqueue_style( 'company_css', get_template_directory_uri() . '/scss/company/index.css');
      }
    if ( is_singular('') ) {
      wp_enqueue_style( 'single_css', get_template_directory_uri() . '/scss/single/index.css');
      }


    }
  add_action( 'wp_enqueue_scripts', 'my_styles' );
  

  /*------------------------------------*\
    pagenation
\*------------------------------------*/
/**
* ページネーション出力関数
* $paged : 現在のページ
* $pages : 全ページ数
* $range : 左右に何ページ表示するか
* $show_only : 1ページしかない時に表示するかどうか
*/
function pagination( $pages, $paged, $range = 1, $show_only = false ) {

  $pages = ( int ) $pages;

  //表示テキスト
  $text_before  = "←";
  $text_next    = "→";

  if ( $show_only && $pages === 1 ) {
      echo '<div class="pagination flex flex_start"><span class="current pager">1</span></div>';
      return;
  }

  if ( $pages === 1 ) return;

  if ( 1 !== $pages ) {
      echo '<div class="pagination flex">';
      if ( $paged > 1 ) {
          echo '<a href="', get_pagenum_link( $paged - 1 ) ,'" class="prev">', $text_before ,'</a>';
      }
      for ( $i = 1; $i <= $pages; $i++ ) {

          if ($paged <= $range) { //最初のページの場合
            if ( $i <= ($range * 2 + 1)) {
              if ( $paged === $i || $paged === 0 && $i === 1) { //ここが修正されました
                  echo '<a class="current pager">', $i ,'</a>';
              } else {
                  echo '<a href="', get_pagenum_link( $i ) ,'" class="pager">', $i ,'</a>';
              }
            }
          } elseif ($paged > ($pages - $range)) { //最後のページの場合
            if ( $i > ($pages - $range * 2)) {
              if ( $paged === $i ) {
                  echo '<a class="current pager">', $i ,'</a>';
              } else {
                  echo '<a href="', get_pagenum_link( $i ) ,'" class="pager">', $i ,'</a>';
              }
            }
          } else { //中間のページの場合
            if ( $i <= $paged + $range && $i >= $paged - $range ) {
              if ( $paged === $i ) {
                  echo '<a class="current pager">', $i ,'</a>';
              } else {
                  echo '<a href="', get_pagenum_link( $i ) ,'" class="pager">', $i ,'</a>';
              }
            }
          }

      }
      if ( $paged < $pages ) {
          echo '<a href="', get_pagenum_link( $paged + 1 ) ,'" class="next">', $text_next ,'</a>';
      }
      echo '</div>';
  }
}





function custom_excerpt_length( $length ) {
  return 60;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


