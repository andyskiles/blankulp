<?php get_header(); ?>
<main class="content-wrap">
<div class="page-content">
<header class="entry-header">
<h1><?php _e( 'Tag Archives: ', 'blankslate' ); ?><?php single_tag_title(); ?></h1>
</header>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry' ); ?>
<?php endwhile; endif; ?>
<?php get_template_part( 'nav', 'below' ); ?>
</div>
<?php get_sidebar(); ?>
</main>
<?php get_footer(); ?>