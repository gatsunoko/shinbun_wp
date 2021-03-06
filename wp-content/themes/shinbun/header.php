<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>">
    <!--bootstrap.min.cssの読み込み-->
    <link href="<?php echo get_template_directory_uri(); ?>/lib/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" media="screen">

    <?php
    //WordPress自体の読み込みをキャンセル
    wp_deregister_script( 'jquery' );
    //バージョンの指定
    wp_enqueue_script('jquery','http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js');
    ?>
    <?php wp_head(); ?>
  </head>

  <body>
  <!-- header -->
    <div class="nav">
      <nav class="navbar">
        <div class="nav_area col-sm-12 hidden-xs">
        <!-- <%# 地域のイベントナビバー %> -->
          <div class="top_category top_event col-sm-2">
            <a href="<?php echo esc_url( get_category_link( get_cat_ID( '地域のイベント' ))) ?>">

              <span class="icon mp-nav-icon icon-information">
              </span>
              <img src="<?php echo get_template_directory_uri(); ?>/img/top_event.png">

              <p class="nav_main_category">
                event
              </p>
              <p class="nav_sub_category">
                /地域のイベント
              </p>
            </a>
          </div>
          <!-- <%# 地域のお店ナビバー %> -->
          <div class="top_category top_shop col-sm-2">
            <a href="<?php echo esc_url( get_category_link( get_cat_ID( '地域のお店' ))) ?>">
              <span class="icon mp-nav-icon icon-information">
              </span>
              <img src="<?php echo get_template_directory_uri(); ?>/img/top_shop.png">
              <p class="nav_main_category">
                shop
              </p>
              <p class="nav_sub_category">
                /地域のお店
              </p>
            </a>
          </div>
          <!-- <%# ロゴ %> -->
          <div class="top_category top_logo col-sm-4">
            <a href="<?php echo esc_url( get_home_url() ); ?>">
              <img src="<?php echo get_template_directory_uri(); ?>/img/top_logo.png">
            </a>
          </div>
          <!-- <%# ミニコミナビバー %> -->
          <div class="top_category top_magazine col-sm-2">
            <a href="<?php echo esc_url( get_category_link( get_cat_ID( 'ミニコミ' ))) ?>">
              <span class="icon mp-nav-icon icon-information">
              </span>
              <img src="<?php echo get_template_directory_uri(); ?>/img/top_magazine.png">
              <p class="nav_main_category">
                magazine
              </p>
              <p class="nav_sub_category">
                /ミニコミ
              </p>
            </a>
          </div>
          <!-- <%# お買い物ナビバー %> -->
          <div class="top_category top_shopping col-sm-2">
            <a href="<?php echo esc_url( get_category_link( get_cat_ID( 'お買い物' ))) ?>">
              <span class="icon mp-nav-icon icon-information">
              </span>
              <img src="<?php echo get_template_directory_uri(); ?>/img/top_shopping.png">
              <p class="nav_main_category">
                shopping
              </p>
              <p class="nav_sub_category">
                /お買い物
              </p>
            </a>
          </div>
        </div>
      </nav>
    </div><!-- /header -->
