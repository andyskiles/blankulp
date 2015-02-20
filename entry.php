<article class="post-<?php the_ID(); ?>">
<header class="entry-header">
<?php if ( is_singular() ) { 
	echo '<h1>'; the_title(); echo '</h1>'; } 
else { ?>
	<h2 class="entry-title">
		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
			<?php the_title(); ?>
		</a>
	</h2>
<?php } ?>
</header>
<?php get_template_part( 'entry-meta', ( is_archive() || is_search() ? 'summary' : 'content' ) ); ?>
<?php get_template_part( 'entry', ( is_archive() || is_search() ? 'summary' : 'content' ) ); ?>
<?php if ( !is_search() ) get_template_part( 'entry-footer' ); ?>
</article>