<?php
/*
* This is the Default Page template
*/
get_header();
?>

<div id="primary" class="content-page">
	

	<div class="container">
		<header class="page-header">
			<h1>
			<?php
				the_title();
			?>
			</h1>
		</header><!-- .page-header -->

		 <div class="row">
		 	<div class="col-md-12">
		 		<div class="content-description">
		 			<?php 
		 				if(have_posts()){
		 					// Load posts loop.
		 					while(have_posts()){
								the_post();
								get_template_part( 'template-parts/content','page');		 						
		 					}
						the_posts_navigation();

		 				}else{
		 					get_template_part( 'template-parts/content','none' );
		 				}
		 			?>
		 		</div><!-- .blog-listing -->
		 	</div><!-- .col-md-12 -->
		 </div><!-- .row -->
	</div><!-- .container -->
</div><!-- #primary -->


<?php

get_footer();

?>