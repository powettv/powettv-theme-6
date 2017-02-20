<?php
/**
 * Contains the WordPress Loop's singular content.
 *
 * @package powettv
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="article__entry-header">
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="article__entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="article__entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;
		if ( 'post' === get_post_type() ) : ?>
		<div class="article__entry-meta">
			<?php powettv_posted_on(); ?>
		</div><!-- .article__entry-meta -->
		<?php
		endif; ?>
	</header><!-- .article__entry-header -->

	<div class="article__entry-content">
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="article__meta-nav">&rarr;</span>', 'powettv' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );
			wp_link_pages( array(
				'before' => '<div class="article_page-links">' . esc_html__( 'Pages:', 'powettv' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .article__entry-content -->

	<footer class="article_entry-footer">
		<?php powettv_entry_footer(); ?>
	</footer><!-- .article_entry-footer -->
</article><!-- #post-## -->
