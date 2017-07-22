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
    <div class="title_area">
      <p class="en_title">event</p>
      <p class="ja_title">/地域のイベント</p>
    </div>

    <div class="keywords_select">
      <p>□お祭り　□教室　□地域　□その他</p>
    </div>

    <div class="col-xs-12">

      <div class="col-sm-9 col-xs-12">
        <hr>
          <?php query_posts("cat=2&showposts=3"); ?>
          <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
          <a href="<?php the_permalink(); ?>">
            <div class="event_text col-xs-7">
              <p><?php the_time('y/m/d'); ?></p>
              <h2>
                <?php
                  if(mb_strlen($post->post_title, 'UTF-8')>25){
                    $title= mb_substr(strip_tags($post->post_title), 0, 25, 'UTF-8');
                    echo $title.'…';
                  }else{
                    echo strip_tags($post->post_title);
                  }
                ?>
              </h2>
              <p>
              <?php
                if(mb_strlen($post->post_content, 'UTF-8')>50){
                  $content= mb_substr(strip_tags($post->post_content), 0, 50, 'UTF-8');
                  echo $content.'…';
                }else{
                  echo strip_tags($post->post_content);
                }
              ?>
              </p>
            </div>

            <div class="event_text_img col-xs-5">
              <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail(array(100,100)); ?>
            </div>
          </a>
          <?php else: ?>
          <?php endif; ?>
          <?php endwhile; else: ?>
            <?php _e('記事がありません。'); ?>
          <?php endif; ?>
        <hr>
      </div>


      <div class="event_sidebar col-sm-3 col-xs-12">
        <hr>
        <p>Archive</p>
        <ul><?php wp_get_archives( 'type=monthly&limit=12' ); ?></ul>
      </div>
    </div>
  </div>

      <?php get_footer(); ?>
