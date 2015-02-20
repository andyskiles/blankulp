<?php get_header(); ?>
<main class="content-wrap" role="main">
<div class="page-content">
<header class="entry-header">
	<h1 class="entry-title">
		Blog Posts
	</h1>
</header>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry' ); ?>
<?php endwhile; endif; ?>
<?php get_template_part( 'nav', 'below' ); ?>
</div>
<?php get_sidebar(); ?>
</main>
<?php get_footer(); ?>