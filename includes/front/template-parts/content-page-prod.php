<?php
/**
 * @package fxoroVone
 * includes/front/template-parts/content-page-prod.php
 *
 * Page Tempalte
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( array( 'csseco-single-post' ) ); ?>>
	<div class="entry-content clearfix">
		<?php the_content(); ?>
	</div><!-- /.entry-content -->
</article>
