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
    <div class="title_area">
      <p class="en_title">Archive</p>
      <p class="ja_title">/アーカイブ</p>
    </div>
    <div class="col-xs-12">
  		<?php if ( have_posts() ) : ?>
  			<header class="page-header">
  				<?php
  					the_archive_title( '<h1 class="page-title">', '</h1>' );
  					the_archive_description( '<div class="taxonomy-description">', '</div>' );
  				?>
  			</header><!-- .page-header -->
      <?php else: ?>
      <?php endif; ?>
        <div class="col-sm-9 col-xs-12">
          <div class="border">
          </div>
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
          <div class="border">
          </div>
        </div>
    </div>
  </div>

  <?php get_footer(); ?>
