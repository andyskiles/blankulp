<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>
		<?php wp_title( ' | ', true, 'right' ); ?>
	</title>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="site-wrap">
<header class="site-header" role="banner">
<h2>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Home" rel="home">
		<?php echo esc_html( get_bloginfo( 'name' ) ); ?>
	</a>
</h2>
<nav role="navigation">
	<?php 
	$menu = array(
	  'container'       => false,
	  'echo'            => false,
	  'items_wrap'      => '%3$s',
	  'depth'           => 0,
	);
	echo strip_tags(wp_nav_menu( $menu ), '<a>' );
	?>
</nav>
</header>