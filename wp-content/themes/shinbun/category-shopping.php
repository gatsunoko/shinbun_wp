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
    <p class="en_title">shopping</p>
    <p class="ja_title">/お買い物</p>
    <div class="keywords_select">
      <p>□書籍　□本　□チケット　□その他</p>
    </div>
  </div>

  <div class="col-xs-12 ">
		<?php query_posts("cat=5&showposts=24"); ?>
		<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
	    <div class="contents_list col-xs-6 col-sm-4 col-md-3">
	      <figure class="snip1212">
					<?php if (has_post_thumbnail()) : ?>
					<?php the_post_thumbnail(array(100,100)); ?>
	        <figcaption>
	          <h2><?php echo mb_substr($post->post_title, 0, 12).'...'; ?></h2>
	          <p>
							<?php
								if(mb_strlen($post->post_content, 'UTF-8')>30){
									$content= mb_substr(strip_tags($post->post_content), 0, 25, 'UTF-8');
									echo $content.'…';
								}else{
									echo strip_tags($post->post_content);
								}
							?>
						</p>
	        </figcaption>
	        <a href="<?php the_permalink(); ?>"></a>
	      </figure>
	    </div>
		<?php else: ?>
		<?php endif; ?>
		<?php endwhile; else: ?>
			<?php _e('記事がありません。'); ?>
		<?php endif; ?>
  </div>
</div>
