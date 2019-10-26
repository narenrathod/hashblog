<?php
/**
 * The template for displaying search results pages
 *
 */

get_header();
?>
	<div id="primary" class="blogs-list">
		<div class="container">
			 
			<header class="page-header">
				<h1 class="page-title">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'hashblog' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h1>
			</header><!-- .page-header -->

			 <div class="row">
			 	
			 	<div class="col-md-9">
			 		<div class="blog-listing">
			 			<?php 
			 				if(have_posts()){
			 					// Load posts loop.
			 					while(have_posts()){
									the_post();
									get_template_part( 'template-parts/content','search');		 						
			 					}

								the_posts_navigation();


			 				}else{
			 					get_template_part( 'template-parts/content','none');
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
	</div><!-- .blog-list -->

<?php
get_footer();
