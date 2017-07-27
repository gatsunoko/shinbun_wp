<?php get_header(); ?>

<div class="main_container event_top_container">
  <p>イベント検索結果ページを表示</p>
  <h3><?php the_search_query(); ?>の検索結果 : <?php echo $wp_query->found_posts; ?>件</h3>
  <!-- 投稿情報 loop -->
  <div class="col-xs-12">
    <div class="col-sm-9 col-xs-12">
      <div class="border">
      </div>
      <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        <a href="<?php the_permalink(); ?>">
          <div class="each_container co-xs-12">
            <div class="event_text col-xs-7">
              <p><?php the_time('y/m/d'); ?></p>
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
            </div>
            <div class="event_text_img col-xs-5">
              <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail(array(100,100)); ?>
              <?php else: ?>
                <img src="<?php echo get_template_directory_uri(); ?>/img/no_image.png" alt="no image" width="100" height="100">
              <?php endif; ?>
            </div>
          </div>
        </a>
        <div class="border">
        </div>
      <?php endwhile; else: ?>
        <?php _e('記事がありません。'); ?>
      <?php endif; ?>
    </div>


    <div class="event_sidebar col-sm-3 col-xs-12">
      <div class="border">
      </div>
      <h3>Archive</h3>
      <?php $cat_id = get_cat_id('地域のイベント'); ?>
      <ul><?php wp_get_archives( 'type=monthly&limit=12&cat=' . $cat_id ); ?></ul>
    </div>
  </div>
  <div class="pagenation col-xs-12">
    <?php wp_pagenavi(); ?>
  </div>
</div>

<?php get_footer(); ?>
