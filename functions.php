<?php 
function theme_enqueue_styles() {

    $parent_style = 'parent-style';

    //wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/bassplate/css/base.min.css',
        array( $parent_style )
    );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );


function basspress_comment($comment, $args, $depth) {

$tag = ( 'div' === $args['style'] ) ? 'div' : 'li'; ?>
   <<?php echo $tag; ?> id="comment-<?php comment_ID(); ?>" <?php comment_class(); ?>>
<article id="div-comment-<?php comment_ID(); ?>" class="comment-body">
<div class="row flex border-bottom">
  <div class="col-1">
      <div class="gravatar-container">
          <?php if ( 0 != $args['avatar_size'] ) echo get_avatar( $comment, $args['avatar_size'] ); ?>
      </div><!-- .comment-meta -->
  </div>
  <div class="col-11">    
  	<div class="comment-meta mb2">
	                 
		    <div class="comment-author bold">
		        
		        <?php printf( __( '%s' ), sprintf( '<span class="commenter h2 m0 ">%s</span>', get_comment_author_link() ) ); ?>
		    </div><!-- .comment-author -->

		    <div class="comment-metadata h5 italic">
		        <a href="<?php echo esc_url( get_comment_link( $comment->comment_ID, $args ) ); ?>">
		            <time datetime="<?php comment_time( 'c' ); ?>">
		                <?php printf( _x( '%1$s at %2$s', '1: date, 2: time' ), get_comment_date(), get_comment_time() ); ?>
		            </time>
		        </a>
		     </div><!-- .comment-metadata -->

	    <?php if ( '0' == $comment->comment_approved ) : ?>
	    <div class="border rounded p2 mt2 mb2"><p class="comment-awaiting-moderation m0"><?php _e( 'Your comment is awaiting moderation.' ); ?></p></div>
	    <?php endif; ?>
		</footer><!-- .comment-meta -->
		<!-- .comment-content -->
  </div>
  <div class="regular h4 sans-serif">
	    <?php comment_text(); ?>
	</div>
 
</div>

  <div class="small-12 columns">
 
                <?php
                comment_reply_link( array_merge( $args, array(
                    'add_below' => 'div-comment',
                    'depth'     => $depth,
                    'max_depth' => $args['max_depth'],
                    'before'    => '<div class="reply">',
                    'after'     => '</div>'
                ) ) );
                ?>
      
      </div>
            </article><!-- .comment-body -->
<?php
    }
?>