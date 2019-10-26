<?php
/**
 * The template for displaying 404 pages (not found)
 *
 */

get_header();
?>

	<div class="error-404 not-found">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<header class="page-header">
						<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'hashblog' ); ?></h1>
					</header><!-- .page-header -->

					<div class="page-content">
						<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'hashblog' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .page-content -->	
				</div><!-- .col-md-12 -->
			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- .error-404 -->
	

<?php
get_footer();
