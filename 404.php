<?php get_header(); ?>
<main class="content-wrap" role="main">
<section class="page-content" role="main">
<article class="not-found">
<header class="entry-header">
<h1><?php _e( 'Not Found', 'blankslate' ); ?></h1>
</header>
<section class="entry-content">
<p><?php _e( 'Nothing found for the requested page. Try a search instead?', 'blankslate' ); ?></p>
<?php get_search_form(); ?>
</section>
</article>
</section>
<?php get_sidebar(); ?>
</main>
<?php get_footer(); ?>