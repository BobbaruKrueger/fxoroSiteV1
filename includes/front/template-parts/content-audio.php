<?php
/**
 * @package fxoroVone
 * includes/front/template-parts/content-audio.php
 *
 * Audio Post Format
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( array( 'csseco-format-audio' ) ); ?>>
	<header class="entry-header">
		<?php
            the_title(
            '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">',
            '</a></h1>'
            );
        ?>
		<div class="entry-meta">
			<?php echo csseco_posted_meta(); ?>
		</div><!-- /.entry-meta -->
	</header><!--/.entry-header-->
	<div class="entry-content">
		<?php echo csseco_get_embedded_media( array( 'audio', 'iframe' ) ); // add style to this ?>
	</div><!-- /.entry-content -->
	<footer class="entry-footer">
		<?php echo csseco_posted_footer(); ?>
	</footer><!-- /.entry-footer -->
</article>