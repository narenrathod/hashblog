<?php
/**
 * Template part for displaying Blogs
 *
 */

?>

<article Id='post-<?php the_ID(); ?>' class="<?php post_class(); ?>">
	<div class="row">
		<div class="col-md-4">
			<div class="blog-thumb">
			
			<?php 
				if(has_post_thumbnail()){
					the_post_thumbnail();
				}else{
			?>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/default.jpeg">	
			<?php		
				}
			?>
			</div>
		</div>
		<div class="col-md-8">
			<?php 	
				the_title( '<h1 class="entry-title">', '</h1>' ); 				
			?>

			<div class="blog-content">
				<?php the_excerpt(); ?>
			</div>

			<?php 
				if(the_tags()){ 
			?>
		
			<p><?php the_tags(); ?></p>
			
			<?php } ?>		
		</div>
	</div>
	
</article><!-- .post-<?php the_ID(); ?> -->


