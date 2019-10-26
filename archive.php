<?php
/**
 * The template for displaying archive pages
 *
 */

get_header();
?>
	
	<div id="primary" class="blogs-list">
		<div class="container">
			 
				<header class="page-header">
					<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="archive-description">', '</div>' );
					?>
				</header><!-- .page-header -->

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
			 					get_template_part( 'template-parts/content/','none' );
			 				}
			 			?>
			 		</div><!-- .blog-listing -->
			 	</div><!-- .col-md-9 -->
			 	<div class="col-md-3">
			 		<?php 
			 			get_sidebar();
			 		?>
			 	</div><!-- .pagecol-md-3 -->
			 </div><!-- .row -->
			 
		</div><!-- .container -->
	</div><!-- .blog-list -->	

<?php
get_footer();
?>