<!-- footer -->
<div class="footer">
  <div class="footer_items col-xs-12">
    <a href="<?php echo get_permalink( get_page_by_path('会社案内') ->ID ); ?>">会社案内</a>
    <p>/</p>
    <a href="<?php echo get_permalink( get_page_by_path('利用規約') ->ID ); ?>">利用規約</a>
    <p>/</p>
    <a href="<?php echo get_permalink( get_page_by_path('プライバシーポリシー') ->ID ); ?>">プライバシーポリシー</a>
    <p>/</p>
    <a href="<?php echo esc_url( get_home_url() ); ?>">ホーム</a>
    <p>/</p>
    <a href="<?php echo esc_url( get_category_link( get_cat_ID( 'ミニコミ' ))) ?>">ミニコミ</a>
    <p>/</p>
    <a href="<?php echo esc_url( get_category_link( get_cat_ID( 'お買い物' ))) ?>">ショッピング</a>
    <p>/</p>
    <a href="<?php echo esc_url( get_category_link( get_cat_ID( 'イベント' ))) ?>">地域のイベント</a>
    <p>/</p>
    <a href="<?php echo esc_url( get_category_link( get_cat_ID( 'お店' ))) ?>">地域のお店</a>
    <p>/</p>
  </div>
  <div class="footer_text">
    <div class="sm_footer hidden-xs col-sm-12">
      <p>Copyright &copy; 2017 YOSHIMOTO SHINBUNHO All Rights Reserved.</p>
    </div>
    <div class="xs_footer col-xs-12 hidden-sm hidden-md hidden-lg">
      <p>Copyright &copy; 2017<br> YOSHIMOTO SHINBUNHO All Rights Reserved.</p>
    </div>
  </div>
</div><!-- /footer -->
  <?php wp_footer(); ?>
  </body>
</html>
