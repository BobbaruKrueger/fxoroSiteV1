<?php
/**
 * @package fxoroVone
 * includes/front/template-parts/content-page.php
 *
 * Page Tempalte
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( array( 'csseco-single-post' ) ); ?>>
	<header class="entry-header">
		<?php the_title('<h1 class="entry-title"><span>','</span></h1>' ); ?>
	</header><!--/.entry-header-->
	<div class="entry-content clearfix">
		<?php the_content(); ?>
	</div><!-- /.entry-content -->
</article>
