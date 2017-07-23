<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage shinbun
 * @since shinbun 1.0
 */

get_header(); ?>

<!-- <%# main_contents %> -->
  <div class="main_container category_top_container">
    <div class="breadcrumb_list">
      <?php breadcrumb(); ?>
    </div>
    <div class="title_area">
      <p class="en_title">event</p>
      <p class="ja_title">/地域のイベント</p>
    </div>

    <div class="keywords_select">
      <p>□お祭り　□教室　□地域　□その他</p>
    </div>

    <div class="col-xs-12">

      <div class="col-sm-9 col-xs-12">
        <div class="border">
        </div>
          <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
          <a href="<?php the_permalink(); ?>">
            <div class="event_text col-xs-7">
              <p><?php the_time('y/m/d'); ?></p>
  	          <h2>
                <?php
                  if(mb_strlen($post->post_title, 'UTF-8')>10){
                    $content= mb_substr(strip_tags($post->post_title), 0, 10, 'UTF-8');
                    echo $content.'…';
                  }else{
                    echo strip_tags($post->post_title);
                  }
                ?>
              </h2>
              <p><?php the_excerpt(); ?></p>
            </div>
            <div class="event_text_img col-xs-5">
              <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail(array(100,100)); ?>
              <?php else: ?>
                <?php _e('画像がありません。'); ?>
              <?php endif; ?>
            </div>
          </a>
          <?php endwhile; else: ?>
            <?php _e('記事がありません。'); ?>
          <?php endif; ?>
      </div>


      <div class="event_sidebar col-sm-3 col-xs-12">
        <div class="border">
        </div>
        <h3>Archive</h3>
        <?php $cat_id = get_cat_id('地域のイベント'); ?>
        <ul><?php wp_get_archives( 'type=monthly&limit=12&cat=' . $cat_id ); ?></ul>
      </div>
    </div>
    <?php wp_pagenavi(); ?>
  </div>

      <?php get_footer(); ?>
