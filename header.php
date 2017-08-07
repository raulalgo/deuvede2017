<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
 ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri() . '/base.min.css' ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="" class="">
	<a class="skip-link screen-reader-text hide" href="#content"><?php _e( 'Skip to content', 'twentyfifteen' ); ?></a>
	
		<?php if( is_front_page() && is_home() ):?>
			<div class="flex flex-column p4 bg-deuvegreen white blogTitle">
				<div class="mt2 mb0">
					<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						 			width="100px" height="84px" viewBox="0 0 100 84" enable-background="new 0 0 100 84" xml:space="preserve">
						<path fill="#009099" d="M75,12c6.903,0,12,6.096,12,13s-5.097,13-12,13H62L50,59L38,38H25c-6.905,0-12-6.096-12-13s5.095-13,12-13
							H75z M75,0H25C11.212,0,0,11.212,0,25c0,13.787,11.212,25,25,25h5l20,34l20-34h5c13.787,0,25-11.213,25-25
							c0-13.788-11.217-25-25.004-25H75z"/>
					</svg>
				</div>
				<h1 class="h0 mb0 mt0 caps ls0 white" style=""><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class=""><?php bloginfo( 'name' ); ?></a></h1>
			<?php $description = get_bloginfo( 'description', 'display' );
				if ( $description || is_customize_preview() ) : ?>
					<p class="h3 caps mb0"><?php echo $description; ?></p>
				<?php endif;
			?>
		<?php else: ?>
			<div class="absolute top-0 left-0 right-0 z1 deuve_thumb" style="height:480px;z-index:-1;overflow:hidden;">
				<?php the_post_thumbnail('full'); ?>
			</div>
			<div class="flex p3 z2">
				<div class="mt0 mb0 mr1 inline">
					<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						 			height="24px" viewBox="0 0 100 84" enable-background="new 0 0 100 84" xml:space="preserve">
						<path fill="#FFFFFF" d="M75,12c6.903,0,12,6.096,12,13s-5.097,13-12,13H62L50,59L38,38H25c-6.905,0-12-6.096-12-13s5.095-13,12-13
							H75z M75,0H25C11.212,0,0,11.212,0,25c0,13.787,11.212,25,25,25h5l20,34l20-34h5c13.787,0,25-11.213,25-25
							c0-13.788-11.217-25-25.004-25H75z"/>
					</svg>
				</div>
				<h1 class="h3 bold caps mt0 mb0 white" style="letter-spacing:0"><a class="white" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		<?php endif; ?>
	</div>

	<div id="content" class="flex flex-column px4" style="">
