<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage shinbun
 * @since shinbun 1.0
 */

get_header(); ?>

  <div class="main_container event_container_show">
    <div class="title_area">
      <p class="en_title">magagine</p>
      <p class="ja_title">/ミニコミ</p>
    </div>

    <div class="col-xs-12">
      <p class="single_title"><?php echo mb_substr($post->post_title, 0, 1000); ?></p>
      <p><?php the_time('y/m/d'); ?></p>
      <hr>
      <br>
      <p class="single_content">
        <?php
          if(mb_strlen($post->post_content, 'UTF-8')>10000){
            $content= mb_substr(strip_tags($post->post_content), 0, 1000, 'UTF-8');
            echo $content.'…';
          }else{
            echo strip_tags($post->post_content);
          }
        ?>
      </p>

      <div class="link_event">
        <a href="<?php echo esc_url( get_category_link( get_cat_ID( 'ミニコミ' ))) ?>" style="padding-left:3%;">>>>> magazine</a>
      </div>

      <div class="related_article">
        <p>関連記事</p>
      </div>


    </div>
  </div>

  <?php get_footer(); ?>
