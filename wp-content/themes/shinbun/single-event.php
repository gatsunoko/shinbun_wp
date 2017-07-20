<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage shinbun
 * @since shinbun 1.0
 */

get_header(); ?>

<p>
  イベントの詳細ページだよ！
</p>

<!-- <%# main_contents %> -->
  <div class="main_container event_container_show">
    <div class="title_area">
      <p class="en_title">event</p>
      <p class="ja_title">/地域のイベント</p>
    </div>

    <div class="col-xs-12">
      <div class="col-sm-9 col-xs-12">
        <hr>
          <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
            <div class="event_text col-xs-7">
              <p><?php echo mb_substr($post->post_title, 0, 100, 'UTF-8'); ?></p>
              <hr>
              <p><?php the_time('y/m/d'); ?></p>
            </div>

            <div class="event_text_img col-xs-5">
              <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail(array(100,100)); ?>
            </div>
            <hr>
            <div class="event_overview col-xs-12">
              <p>
              <?php
                if(mb_strlen($post->post_content, 'UTF-8')>500){
                  $content= mb_substr(strip_tags($post->post_content), 0, 500, 'UTF-8');
                  echo $content.'…';
                }else{
                  echo strip_tags($post->post_content);
                }
              ?>
              </p>
            </div>
            <hr>
          <?php else: ?>
          <?php endif; ?>
          <?php endwhile; else: ?>
            <?php _e('記事がありません。'); ?>
          <?php endif; ?>
      </div>
      <div class="event_sidebar col-sm-3 col-xs-12">
        <hr>
        <p>Archive</p>
        <a>・2017年7月</a>
        <a>・2017年6月</a>
        <a>・2017年5月</a>
        <a>・2017年4月</a>
        <a>・2017年3月</a>
        <a>・2017年2月</a>
      </div>
    </div>
    <div class="link_event">
      <a href="index.html" style="padding-left:5%;">>>>> event</a>
    </div>
  </div>
