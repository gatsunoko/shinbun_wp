<?php
if ( in_category(array('event')) ) {  // スラッグ（work）またはカテゴリーID（10）を指定します。
	get_template_part( 'single-event' , false ); // スラッグが「work」の時に、work.php を読み込みます。
} elseif ( in_category( array('magazine') )  )  { // スラッグ（info）またはカテゴリーID（9）を指定します。
	get_template_part( 'single-magazine' , false ); // スラッグが「info」の時に、info.php を読み込みます。
} elseif ( in_category( array('shop') )  )  { // スラッグ（info）またはカテゴリーID（9）を指定します。
	get_template_part( 'single-shop' , false ); // スラッグが「info」の時に、info.php を読み込みます。
} elseif ( in_category( array('shopping') )  )  { // スラッグ（info）またはカテゴリーID（9）を指定します。
	get_template_part( 'single-shopping' , false ); // スラッグが「info」の時に、info.php を読み込みます。
} else { // スラッグが「work」「info」以外の時に、single-normal.php を読み込みます。
	get_template_part( 'single' , 'normal');
}
?>
