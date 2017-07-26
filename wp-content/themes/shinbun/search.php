<?php get_header(); ?>

<p>search.phpのページが表示されています。</p>

<?php
$s = $_GET['s'];
$catnum = $_GET['catnum'];

//tax_query用
if($catnum){
    $taxquerysp[] = array(
            'taxonomy'=>'category',
            'terms'=> $catnum,
            'include_children'=>false,
            'field'=>'term_id',
            'operator'=>'AND'
            );
}
?>

<div>検索条件</div>
<?php if($s){ ?>検索キーワード：<?php echo $s; ?><br><?php } ?>
<?php
if (is_array($catnum)) { ?>カテゴリ：<?php
foreach($catnum as $val){
if ($val === end($catnum)) {
echo get_cat_name($val);
    }else{
echo get_cat_name($val).", ";
}
}
}
 ?>
<div>検索結果</div>

<?php
query_posts( array(
    'tax_query' => $taxquerysp,
    's' => $s,
    )
);
?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div><?php the_title(); ?></div>
<div><?php the_content(); ?></div>

<?php endwhile; else : ?>

<div>該当なし</div>

<?php endif;
wp_reset_query(); ?>


<?php get_footer(); ?>
