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
      <?php breadcrumbs(); ?>
    </div>
    <div class="title_area">
      <p class="en_title">event</p>
      <p class="ja_title">/地域のイベント</p>
    </div>

    <div class="col-xs-12">
      <div class="col-sm-9 col-xs-12">
        <div class="border">
        </div>
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
          <div class="event_text col-xs-7">
            <p><?php echo mb_substr($post->post_title, 0, 100, 'UTF-8'); ?></p>
            <div class="border">
            </div>
            <p><?php the_time('y/m/d'); ?></p>
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

          <div class="event_text_img col-xs-5">
            <?php if (has_post_thumbnail()) : ?>
              <?php the_post_thumbnail(array(100,100)); ?>
            <?php else: ?>
              <img src="<?php echo get_template_directory_uri(); ?>/img/no_image.png" alt="no image" width="100" height="100">
            <?php endif; ?>
          </div>
        <?php endwhile; else: ?>
          <?php _e('記事がありません。'); ?>
        <?php endif; ?>
      </div>
      <div class="event_sidebar col-sm-3 col-xs-12">
        <div class="border">
        </div>
        <h3>Archive</h3>
          <h4>投稿月</h4>
          <?php $cat_id = get_cat_id('地域のイベント'); ?>
          <ul><?php wp_get_archives( 'type=monthly&limit=12&cat=' . $cat_id ); ?></ul>

        <h4>カテゴリー</h4>
        <ul>
          <?php wp_list_categories('title_li='); ?>
        </ul>
      </div>
    </div>
    <div class="link_event">
      <a href="<?php echo esc_url( get_category_link( get_cat_ID( '地域のイベント' ))) ?>" style="padding-left:3%;">>>>> event</a>
    </div>
    <div class="border">
    </div>
  </div>

    <?php get_footer(); ?>
