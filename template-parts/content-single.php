<?php
/**
 * Template part for displaying single Blogs
 *
 */

?>

<article class="post-<?php the_ID(); ?>">
	<div class="row">

		<div class="col-md-12">

			<?php 	
				the_title( '<h1 class="entry-title">', '</h1>' ); 
			?>
			
			<div class="blog-thumb">
			
			<?php 
				if(has_post_thumbnail()){
					the_post_thumbnail();
				
			}
			?>
			</div>
			
			
			<div class="blog-single-content">
				<?php the_content(); ?>
			</div>

		</div>
	</div>

	<?php
	wp_link_pages( array(
		'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'hashblog' ),
		'after'  => '</div>',
	) );
	?>

</article><!-- .post-<?php the_ID(); ?> -->


