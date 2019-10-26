<?php 
/*
* This is sidebar of blog page
*/

?>

	<div class="blogs-sidebar">
		<?php 
			if(is_active_sidebar('sidebar-1')){
				dynamic_sidebar('sidebar-1');	
			}
		?>
	</div><!-- .blogs-sidebar -->