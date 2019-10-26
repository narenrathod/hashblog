<?php
/*
* This is the Blog Index Page
*/
get_header();
?>

<div id="primary" class="blogs-list">
	<div class="container">
		 <div class="row">
		 	<div class="col-md-9">
		 		<div class="blog-listing">
		 			<?php 
		 				if(have_posts()){
		 					// Load posts loop.
		 					while(have_posts()){
								the_post();
								get_template_part( 'template-parts/content');		 						
		 					}
						the_posts_navigation();

		 				}else{
		 					get_template_part( 'template-parts/content','none' );
		 				}
		 			?>
		 		</div><!-- .blog-listing -->
		 	</div><!-- .col-md-9 -->
		 	<div class="col-md-3">
		 		<?php 
		 			get_sidebar();
		 		?>
		 	</div><!-- .col-md-3 -->
		 </div><!-- .row -->
	</div><!-- .container -->
</div><!-- #primary -->


<?php

get_footer();

?>