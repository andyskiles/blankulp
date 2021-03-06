<?php get_header(); ?>
<main class="content-wrap" role="main">
<div class="page-content">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry' ); ?>
<?php endwhile; endif; ?>
<footer class="pagination">
<?php get_template_part( 'nav', 'below-single' ); ?>
</footer>
</div>
<?php get_sidebar(); ?>
</main>
<?php get_footer(); ?>