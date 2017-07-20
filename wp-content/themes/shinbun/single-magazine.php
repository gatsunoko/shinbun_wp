<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage shinbun
 * @since shinbun 1.0
 */

get_header(); ?>

  <div class="col-xs-12">
    <p><?php the_time('y/m/d'); ?></p>
    <p><?php echo mb_substr($post->post_title, 0, 1000); ?></p>
    <br>
    <p>
      <?php
        if(mb_strlen($post->post_content, 'UTF-8')>10000){
          $content= mb_substr(strip_tags($post->post_content), 0, 1000, 'UTF-8');
          echo $content.'…';
        }else{
          echo strip_tags($post->post_content);
        }
      ?>
    </p>
  </div>
