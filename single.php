<?php get_header(); ?>
<section class="page-content" role="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry' ); ?>
<?php endwhile; endif; ?>
<footer class="pagination">
<?php get_template_part( 'nav', 'below-single' ); ?>
</footer>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>