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
  <div class="main_container event_container">
    <div class="title_area">
      <p class="en_title">event</p>
      <p class="ja_title">/地域のイベント</p>
    </div>
<p>【イベントカテゴリーテンプレート】</p>

    <div class="col-xs-12">

      <div class="col-sm-9 col-xs-12">
        <hr>
          <?php query_posts("cat=2&showposts=3"); ?>
          <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
          <a href="<?php the_permalink(); ?>">
            <div class="event_text col-xs-7">
              <p><?php the_time('y/m/d'); ?></p>
              <p><?php echo mb_substr($post->post_title, 0, 8).'...'; ?></p>
              <br>
              <p>
              <?php
                if(mb_strlen($post->post_content, 'UTF-8')>20){
                  $content= mb_substr(strip_tags($post->post_content), 0, 20, 'UTF-8');
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
        <a>・2017年7月</a>
        <a>・2017年6月</a>
        <a>・2017年5月</a>
        <a>・2017年4月</a>
        <a>・2017年3月</a>
        <a>・2017年2月</a>
      </div>
    </div>
  </div>
