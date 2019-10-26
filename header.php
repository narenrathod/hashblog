<?php
/*
* This is the theme header
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
<?php wp_head(); ?>
</head>
<body class="<?php body_class(); ?>">

	<header class="main_header">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="logo">
						<?php 

						   if ( has_custom_logo() ) {
								the_custom_logo();
						   
							}else{
								echo '<h1><a href="'.get_site_url().'">';
								echo get_bloginfo('name');
								echo '</a></h1>';
							}

						?>
					</div>
				</div><!-- .col-md-3 -->
				<div class="col-md-9">
					<div class="main-menu">
						<?php 
							wp_nav_menu(
								array(
									'theme_location' => 'primary',
									'menu_class'     => 'main-menu-list',
									'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
								)
							);
						?>
					</div>
				</div><!-- .col-md-9 -->
			</div><!-- .row -->
		</div><!-- .container -->
	</header><!-- header -->

	<nav class="navbar navbar-default navbar-fixed-top">
	  <div class="container">
	    <div class="navbar-header">
	    	<div class="logo-mo">
				<?php 

				   if ( has_custom_logo() ) {
						the_custom_logo();
				   
					}else{
						echo '<h1><a href="'.get_site_url().'">';
						echo get_bloginfo('name');
						echo '</a></h1>';
					}

				?>
	    	</div><!-- .logo-mo -->
	    	<div class="mobile-menu-icon">
	    		<a  class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			        <i class="fa fa-bars" aria-hidden="true"></i>
		                       
			      </a>		
	    	</div><!-- .mobile-menu-icon -->
		
	    </div><!-- .navbar-header -->
	    <div class="collapse navbar-collapse" id="myNavbar">
	    	
		    <?php 
				wp_nav_menu(
					array(
						'theme_location' => 'primary',
						'menu_class'     => 'main-menu-list',
						'items_wrap'     => '<ul id="%1$s" class="nav navbar-nav navbar-right">%3$s</ul>',
					)
				);
			?>	  	

	    </div><!-- .collapse -->
	  </div><!-- .container -->
	</nav><!-- header -->
		
	<div class="blog-content-page">