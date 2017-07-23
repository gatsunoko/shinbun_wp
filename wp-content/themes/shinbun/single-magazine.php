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
    <div class="breadcrumb_list">
      <?php breadcrumb(); ?>
    </div>
    <div class="title_area">
      <p class="en_title">magagine</p>
      <p class="ja_title">/ミニコミ</p>
    </div>

    <div class="col-xs-12">
      <p class="single_title"><?php echo mb_substr($post->post_title, 0, 1000); ?></p>
      <p><?php the_time('y/m/d'); ?></p>
      <div class="border">
      </div>
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
        <h4><?php the_category('//')?>の最新記事</h4>
        <?php
        foreach((get_the_category()) as $cat) {
        $catid = $cat->cat_ID ;
        break ;
        }
        $get_posts_parm = "'numberposts=10&category=" . $catid . "'";
        ?>
        <ul>
        <?php $posts = get_posts($get_posts_parm); ?>
        <?php foreach($posts as $post): ?>
        <li><?php the_time('y/m/d'); ?>　<a href="<?php the_permalink(); ?>"
        title="<?php the_title(); ?>"> <?php the_title(); ?></a></li>
        <?php endforeach; ?>
      </div>
    </div>
  </div>

  <?php get_footer(); ?>
