<?php
/*
Template Name: Custom Page
*/
?>

<?php get_header(); ?>
<main class="content-wrap" role="main">
<div class="page-content">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article class="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<header class="entry-header">
    <h1>
        <?php the_title(); ?>
    </h1>
</header>
<?php the_content(); ?>
<?php endwhile; endif; ?>
</div>
<?php get_sidebar(); ?>
</main>
<?php get_footer(); ?>