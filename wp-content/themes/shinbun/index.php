<?php get_header(); ?>

<!-- main -->
  <!-- <%# top_slideshow %> -->
    <!-- <div class="top_slide">
      <div class="top_slide1 top_slide_child"> -->
      <div class="top_slider">
        <?php echo do_shortcode('[metaslider id=15]'); ?>
      </div>


      <!-- </div> -->
    <!-- </div> -->
    <!-- <%# top_slideshow_end %> -->

    <!-- <%# main_contents %> -->
    <div class="main_container">
      <div class="new_informations">
        <p class="en_title">news</p>
        <p class="ja_title">/新着情報</p>
      </div>
      <div class="new_items_container">
        <div class="col-xs-12 row-eq-height">
          <div class="new_items col-xs-12 col-sm-6">
            <a href="<?php the_permalink(); ?>">
              <div class="col-xs-4 col-sm-4">
                <?php query_posts("cat=2&showposts=1"); ?>
                <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                  <?php if (has_post_thumbnail()) : ?>
                  <?php the_post_thumbnail(array(100,100)); ?>
                  <?php else: ?>
                  <?php endif; ?>
                <?php endwhile; else: ?>
                  <?php _e('画像がありません。'); ?>
                <?php endif; ?>
              </div>
              <div class="col-xs-8 col-sm-8">
                <?php query_posts("cat=2&showposts=1"); ?>
                <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                <p><?php the_time('y/m/d'); ?></p>
                <p><?php echo mb_substr($post->post_title, 0, 8).'...'; ?></p>
                <br>
                <p>
                  <?php
                    if(mb_strlen($post->post_content, 'UTF-8')>20){
                      $content= mb_substr(strip_tags($post->post_content), 0, 20, 'UTF-8');
                      echo $content.'…';
                    }else{
                      echo strip_tags($post->post_content);
                    }
                  ?>
                </p>
                <?php endwhile; else: ?>
                  <?php _e('記事がありません。'); ?>
                <?php endif; ?>
              </div>
            </a>
            <a href="<?php echo get_template_directory_uri(); ?>category-event.php" class="link_category">event</a>
          </div>

          <div class="new_items col-xs-12 col-sm-6">
            <a href="<?php the_permalink(); ?>">
              <div class="col-xs-4 col-sm-4">
                <?php query_posts("cat=3&showposts=1"); ?>
                <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                  <?php if (has_post_thumbnail()) : ?>
                  <?php the_post_thumbnail(array(100,100)); ?>
                  <?php else: ?>
                  <?php endif; ?>
                <?php endwhile; else: ?>
                  <?php _e('画像がありません。'); ?>
                <?php endif; ?>
              </div>
              <div class="col-xs-8 col-sm-8">
                <?php query_posts("cat=3&showposts=1"); ?>
                <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                <p><?php the_time('y/m/d'); ?></p>
                <p><?php echo mb_substr($post->post_title, 0, 8).'...'; ?></p>
                <br>
                <p>
                  <?php
                    if(mb_strlen($post->post_content, 'UTF-8')>20){
                      $content= mb_substr(strip_tags($post->post_content), 0, 20, 'UTF-8');
                      echo $content.'…';
                    }else{
                      echo strip_tags($post->post_content);
                    }
                  ?>
                </p>
                <?php endwhile; else: ?>
                <?php _e('記事がありません。'); ?>
                <?php endif; ?>
              </div>
            </a>
            <a href="<?php echo get_template_directory_uri(); ?>category-magazine.php" class="link_category">magazine</a>
          </div>

          <div class="new_items col-xs-12 col-sm-6">
            <a href="../shopping/show.html">
              <div class="col-xs-4 col-sm-4">
                <?php query_posts("cat=5&showposts=1"); ?>
                <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                  <?php if (has_post_thumbnail()) : ?>
                  <?php the_post_thumbnail(array(100,100)); ?>
                  <?php else: ?>
                  <?php endif; ?>
                <?php endwhile; else: ?>
                  <?php _e('画像がありません。'); ?>
                <?php endif; ?>
              </div>
              <div class="col-xs-8 col-sm-8">
                <?php query_posts("cat=5&showposts=1"); ?>
                <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                <p><?php the_time('y/m/d'); ?></p>
                <p><?php echo mb_substr($post->post_title, 0, 8).'...'; ?></p>
                <br>
                <p>
                  <?php
                    if(mb_strlen($post->post_content, 'UTF-8')>20){
                      $content= mb_substr(strip_tags($post->post_content), 0, 20, 'UTF-8');
                      echo $content.'…';
                    }else{
                      echo strip_tags($post->post_content);
                    }
                  ?>
                </p>
                <?php endwhile; else: ?>
                <?php _e('記事がありません。'); ?>
                <?php endif; ?>
              </div>
            </a>
            <a href="<?php echo get_template_directory_uri(); ?>category-shopping.php" class="link_category">shopping</a>
          </div>
          <div class="new_items col-xs-12 col-sm-6">
            <a href="../shop/show.html">
              <div class="col-xs-4 col-sm-4">
                <?php query_posts("cat=4&showposts=1"); ?>
                <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                  <?php if (has_post_thumbnail()) : ?>
                  <?php the_post_thumbnail(array(100,100)); ?>
                  <?php else: ?>
                  <?php endif; ?>
                <?php endwhile; else: ?>
                  <?php _e('画像がありません。'); ?>
                <?php endif; ?>
              </div>
              <div class="col-xs-8 col-sm-8">
                <?php query_posts("cat=4&showposts=1"); ?>
                <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                <p><?php the_time('y/m/d'); ?></p>
                <p><?php echo mb_substr($post->post_title, 0, 8).'...'; ?></p>
                <br>
                <p>
                  <?php
                    if(mb_strlen($post->post_content, 'UTF-8')>20){
                      $content= mb_substr(strip_tags($post->post_content), 0, 20, 'UTF-8');
                      echo $content.'…';
                    }else{
                      echo strip_tags($post->post_content);
                    }
                  ?>
                </p>
                <?php endwhile; else: ?>
                <?php _e('記事がありません。'); ?>
                <?php endif; ?>
              </div>
            </a>
            <a href="<?php echo get_template_directory_uri(); ?>category-shop.php" class="link_category">shop</a>
          </div>
        </div>
      </div>

      <hr class="col-xs-12">

      <div class="new_informations">
        <p class="en_title">magazine</p>
        <p class="ja_title">/ミニコミ</p>
      </div>

      <div class="new_magazines_container">
        <div class="col-xs-12" style="padding-left:25px !important; padding-right:5px !important;">
          <?php query_posts("cat=3&showposts=8"); ?>
          <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
            <div class="new_magazines col-xs-6 col-sm-4 col-md-3">
              <figure class="snip1212">
                <?php if (has_post_thumbnail()) : ?>
                  <?php the_post_thumbnail(); ?>
                <?php else: ?>
                  <?php _e('画像がありません。'); ?>
                <?php endif; ?>
                <figcaption>
                  <h2><?php echo mb_substr($post->post_title, 0, 8).'...'; ?></h2>
                  <p><?php
                    if(mb_strlen($post->post_content, 'UTF-8')>25){
                      $content= mb_substr(strip_tags($post->post_content), 0, 25, 'UTF-8');
                      echo $content.'…';
                    }else{
                      echo strip_tags($post->post_content);
                    }
                  ?></p>
                </figcaption>
              </figure>
          </div>
          <?php endwhile; else: ?>
            <?php _e('記事がありません。'); ?>
          <?php endif; ?>

        </div>
      </div>
    </div><!-- /main -->

    <?php get_footer(); ?>
  </body>
</html>
