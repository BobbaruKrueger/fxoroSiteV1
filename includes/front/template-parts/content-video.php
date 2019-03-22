<?php
/**
 * @package cssecoST
 * includes/front/template-parts/content-video.php
 *
 * Video Post Format
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( array( 'csseco-format-video' ) ); ?>>

	<header class="entry-header">
        <div class="embed-responsive embed-responsive-16by9">
	        <?php echo csseco_get_embedded_media( array( 'video', 'iframe' ) ); ?>
        </div><!-- /.embed-responsive -->
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
		<div class="entry-excerpt">
			<?php the_excerpt(); ?>
		</div><!-- /.entry-excerpt -->
		<div class="button-container">
			<a href="<?php the_permalink(); ?>" class="btn btn-default">
				<?php _e( 'Read More', 'cssecoST' ); ?>
			</a>
		</div><!-- /.button-container -->
	</div><!-- /.entry-content -->
	<footer class="entry-footer">
		<?php echo csseco_posted_footer(); ?>
	</footer><!-- /.entry-footer -->
</article>