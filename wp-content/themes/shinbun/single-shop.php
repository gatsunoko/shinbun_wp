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
  <div class="main_container event_container_show">
    <div class="breadcrumb_list">
      <?php breadcrumb(); ?>
    </div>
    <div class="title_area">
      <p class="en_title">shop</p>
      <p class="ja_title">/地域のお店</p>
    </div>
    <div class="col-xs-12">
      <div class="border">
      </div>
      <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        <div class="event_text col-xs-7">
          <p><?php echo mb_substr($post->post_title, 0, 100, 'UTF-8'); ?></p>
          <div class="border">
          </div>
          <div class="tags_area">
            <p><?php the_tags('タグ: #',' #'); ?></p>
            <p><?php the_time('y/m/d'); ?></p>
          </div>
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

        <div class="event_text_img_shop col-xs-5">
          <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail(array(100,100)); ?>
          <?php else: ?>
            <?php _e('画像がありません。'); ?>
          <?php endif; ?>
        </div>
      <?php endwhile; else: ?>
        <?php _e('記事がありません。'); ?>
      <?php endif; ?>
    </div>
    <div class="link_event">
      <a href="<?php echo esc_url( get_category_link( get_cat_ID( 'お店' ))) ?>" style="padding-left:3%;">>>>> shop</a>
    </div>
    <div class="event_sidebar col-xs-12">
      <div class="border">
      </div>
      <p>カテゴリー</p>
    </div>

  </div>

  <?php get_footer(); ?>
