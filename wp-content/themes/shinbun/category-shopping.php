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
    <?php breadcrumbs(); ?>
  </div>
  <div class="title_area">
    <p class="en_title">shopping</p>
    <p class="ja_title">/お買い物</p>
    <div class="keywords_select">
      <p>□書籍　□本　□チケット　□その他</p>
    </div>
  </div>

  <div class="col-xs-12 ">
		<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
	    <div class="contents_list col-xs-6 col-sm-4 col-md-3">
	      <figure class="snip1212">
					<?php if (has_post_thumbnail()) : ?>
					  <?php the_post_thumbnail(array(100,100)); ?>
          <?php else: ?>
            <img src="<?php echo get_template_directory_uri(); ?>/img/no_image.png" alt="no image" width="100" height="100">
          <?php endif; ?>
	        <figcaption>
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
	        </figcaption>
	        <a href="<?php the_permalink(); ?>"></a>
	      </figure>
	    </div>
		<?php endwhile; else: ?>
			<?php _e('記事がありません。'); ?>
		<?php endif; ?>
  </div>
  <div class="pagenation col-xs-12">
    <?php wp_pagenavi(); ?>
  </div>
</div>

    <?php get_footer(); ?>
