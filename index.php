<?php get_header(); ?>
<main class="content-wrap" role="main">
<div class="page-content">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry' ); ?>
<?php comments_template(); ?>
<?php endwhile; endif; ?>
<?php get_template_part( 'nav', 'below' ); ?>
</div>
<?php get_sidebar(); ?>
</main>
<?php get_footer(); ?>