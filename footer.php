<?php
/*
* This template for footer
*/
?>
	<footer>
		<div class="top-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<?php 
							if(is_active_sidebar('footer-1')){
								dynamic_sidebar('footer-1');
							}
						?>
					</div><!-- .col-md-3 -->
					<div class="col-md-3">
						<?php 
							if(is_active_sidebar('footer-2')){
								dynamic_sidebar('footer-2');
							}
						?>
					</div><!-- .col-md-3 -->
					<div class="col-md-3">
						<?php 
							if(is_active_sidebar('footer-3')){
								dynamic_sidebar('footer-3');
							}
						?>
					</div><!-- .col-md-4 -->
					<div class="col-md-3">
						<?php 
							if(is_active_sidebar('footer-4')){
								dynamic_sidebar('footer-4');
							}
						?>
					</div><!-- .col-md-3 -->
				</div><!-- .blod-content-page -->
			</div><!-- .blod-content-page -->
		</div><!-- .top-footer-->

		<div class="bottom-footer text-center">
			<?php 
				if(is_active_sidebar('bottom-footer')){
					dynamic_sidebar('bottom-footer');
				}
			?>
		</div><!-- Bottom Footer -->
	</footer><!-- footer -->
</div><!-- .blod-content-page -->
<?php wp_footer(); ?>
</body>
</html>