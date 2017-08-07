<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

					

	<?php 
		if ( is_single() ) :?>
		<article id="post-<?php the_ID(); ?>" class="mt4 mb2 mxn2 col-10 mx-auto border bg-white flex" <?php post_class(); ?>>
		<?php 
		else: ?>
		<article id="post-<?php the_ID(); ?>" class="mt2 mb2 mxn2 col-10 mx-auto border bg-white flex rounded" <?php post_class(); ?>>
		<?php endif;
		?>	
	
	
		
			<?php
				if ( is_single() ) : ?>
				<div class="col-12 flex flex-column">
					<header class="px3 mt4 mb2">
					<p class="h5 italic grey mb0"><?php the_date('F j, Y','','', TRUE); ?></p>
					<?php the_title( '<h1 class="entry-title h0-responsive mt2 mb0" style="letter_spacing:0">', '</h1>' ); ?>
					<div class="col-3 bg-black mt2" style="height: 0.5rem">&nbsp;</div>
				<?php
				else : ?>
				<div class="col-12 flex flex-column">
					<header class=" px3 mt3">
					<?php the_title( sprintf( '<h2 class="mt0 mb0 h0 ls0"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
				endif;
			?>
		</header><!-- .entry-header -->

		<div class="entry-content p3 h3">
			<?php
				/* translators: %s: Name of current post */
				if ( is_single() ) :
					the_content( sprintf(
						__( 'Continue reading %s', 'twentyfifteen' ),
						the_title( '<span class="screen-reader-text">', '</span>', false )
					) );

					wp_link_pages( array(
						'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfifteen' ) . '</span>',
						'after'       => '</div>',
						'link_before' => '<span>',
						'link_after'  => '</span>',
						'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>%',
						'separator'   => '<span class="screen-reader-text">, </span>',
					) );
				else :
					/*the_excerpt( sprintf(
						__( 'Continue reading %s', 'twentyfifteen' ),
						the_title( '<span class="screen-reader-text">', '</span>', false )
					), true );*/
					the_content();

					wp_link_pages( array(
						'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfifteen' ) . '</span>',
						'after'       => '</div>',
						'link_before' => '<span>',
						'link_after'  => '</span>',
						'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>%',
						'separator'   => '<span class="screen-reader-text">, </span>',
					) );
				endif;

				
			?>
		</div><!-- .entry-content -->

		<?php
			// Author bio.
			if ( is_single() && get_the_author_meta( 'description' ) ) :
				get_template_part( 'author-bio' );
			endif;
		?>

		<footer class="entry-footer bg-silver fit p2 flex flex-wrap">
			<p class="mb0 px2 border-right">Posted on <?php the_time('F j, Y') ?></p>
			<p class="mb0 px2 border-right"><?php comments_number('Todavía no hay respuestas', 'Una respuesta', '% respuestas'); ?></p>
			<?php
			if ( is_single() ) : ?>
			
			<?php
			else : ?>
			
			<?php 
			endif; ?>
			<?php edit_post_link( __( 'Edit', 'twentyfifteen' ), '<p class="mb0 px2 border-left">', '</p>' ); ?><!-- .entry-footer -->
	</div>
</article><!-- #post-## -->
