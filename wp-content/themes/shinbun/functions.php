<?php

// function my_bootstrap_scripts() {
//
// wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/lib/bootstrap-3.3.7-dist/css/bootstrap.min.css');
//
// wp_enqueue_script( 'bootstrap-script', get_template_directory_uri() . '/lib/bootstrap-3.3.7-dist/js/bootstrap.min.js', array(), '1.0.0', true );
//
// }
//
// add_action( 'wp_enqueue_scripts', 'my_bootstrap_scripts' );


function new_excerpt_mblength($length) {
  return 80;
}
add_filter('excerpt_mblength', 'new_excerpt_mblength');

function new_excerpt_more($more) {
  return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');


/* jQuery の読み込み */
function add_my_scripts() {
    if(is_admin()) return; //管理画面ではスクリプトは読み込まない
    wp_deregister_script( 'jquery'); //デフォルトの jQuery は読み込まない
    //CDN から読み込む
    wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.11.4/jquery.min.js', array(), '1.11.4', false);
   wp_enqueue_script( 'jquery-mig', '//cdnjs.cloudflare.com/ajax/libs/jquery-migrate/1.2.1/jquery-migrate.min.js', array(), '1.2.1', false);
    }
    add_action('wp_print_scripts', 'add_my_scripts');

    add_theme_support('post-thumbnails');




//---------------------------------------------------------------------------
//  ページャーを表示する
//---------------------------------------------------------------------------
function pager_keni() {

    $pager = "";

    global $wp_query;
    $max_page = $wp_query->max_num_pages;
    $now_page = get_query_var('paged');
    if ($now_page == 0) {
        $now_page =1;
    }
//  if ($max_page > $now_page) {
//      $pager .= "<li class=\"nav-prev\">". get_next_posts_link('以前の記事へ') ."</li>\n";
//  }

//  if (is_paged()) {
//      $pager .= "<li class=\"nav-next\">". get_previous_posts_link('新しい記事へ')."</li>\n";
//  }

//  if ($pager != "") {
//      echo "<div class=\"cont-menu-wp\">\n<ul>\n".$pager."</ul>\n</div>\n";
//  }
    echo "<div class=\"cont-menu-wp\">";
    wp_pagenavi();
    echo "</div>";
}

// パンくずリスト
function breadcrumb(){
  global $post;
  $str ='';
  if(!is_home()&&!is_admin()){
    $str.= '<div id="breadcrumb" class="cf"><div itemscope itemtype="http://data-vocabulary.org/Breadcrumb" style="display:table-cell;">';
    $str.= '<a href="'. home_url() .'" itemprop="url"><span itemprop="title">ホーム</span></a> &gt;&#160;</div>';
    if(is_category()) {
      $cat = get_queried_object();
      if($cat -> parent != 0){
        $ancestors = array_reverse(get_ancestors( $cat -> cat_ID, 'category' ));
        foreach($ancestors as $ancestor){
          $str.='<div itemscope itemtype="http://data-vocabulary.org/Breadcrumb" style="display:table-cell;"><a href="'. get_category_link($ancestor) .'" itemprop="url"><span itemprop="title">'. get_cat_name($ancestor) .'</span></a> &gt;&#160;</div>';
        }
      }
      $str.='<div itemscope itemtype="http://data-vocabulary.org/Breadcrumb" style="display:table-cell;"><a href="'. get_category_link($cat -> term_id). '" itemprop="url"><span itemprop="title">'. $cat-> cat_name . '</span></a> &gt;&#160;</div>';
    } elseif(is_page()){
      if($post -> post_parent != 0 ){
        $ancestors = array_reverse(get_post_ancestors( $post->ID ));
        foreach($ancestors as $ancestor){
          $str.='<div itemscope itemtype="http://data-vocabulary.org/Breadcrumb" style="display:table-cell;"><a href="'. get_permalink($ancestor).'" itemprop="url"><span itemprop="title">'. get_the_title($ancestor) .'</span></a> &gt;&#160;</div>';
        }
      }
    } elseif(is_single()){
      $categories = get_the_category($post->ID);
      $cat = $categories[0];
      if($cat -> parent != 0){
        $ancestors = array_reverse(get_ancestors( $cat -> cat_ID, 'category' ));
        foreach($ancestors as $ancestor){
          $str.='<div itemscope itemtype="http://data-vocabulary.org/Breadcrumb" style="display:table-cell;"><a href="'. get_category_link($ancestor).'" itemprop="url"><span itemprop="title">'. get_cat_name($ancestor). '</span></a>→</div>';
        }
      }
        $str.='<div itemscope itemtype="http://data-vocabulary.org/Breadcrumb" style="display:table-cell;"><a href="'. get_category_link($cat -> term_id). '" itemprop="url"><span itemprop="title">'. $cat-> cat_name . '</span></a> &gt;&#160;</div>';
    } else{
      $str.='<div>'. wp_title('', false) .'</div>';
    }
    $str.='</div>';
  }
  echo $str;
}
