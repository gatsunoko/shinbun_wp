<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<div class="main_container category_top_container">
	<?php if(is_page('会社案内')): ?>
	  <div class="title_area">
			<p class="en_title">Company</p>
			<p class="ja_title">/会社案内</p>
		</div>
		<hr>
		<br>
		<div class="page_content_area">
			<p>
				<?php
					$page_info = get_page_by_path('会社案内');
					$page = get_post($page_info);
					echo $page->post_content;
				?>
			</p>
		</div>
		<?php elseif(is_page('利用規約')): ?>
		  <div class="title_area">
				<p class="en_title">Terms</p>
				<p class="ja_title">/利用規約</p>
			</div>
			<hr>
			<br>
			<div class="page_content_area">
				<p>
					<?php
						$page_info = get_page_by_path('利用規約');
						$page = get_post($page_info);
						echo $page->post_content;
					?>
				</p>
			</div>
		<?php endif; ?>
  </div>
</div>




<?php get_footer(); ?>
