<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Wandervale
 */

wp_footer();
?>

	<div class="footer-container container">

		<footer id="footer-main" class="footer-main">

			<div class="col-md-6 col-lg-6 left-box">

				<article class="left-content">

					<aside id="text-2" class="widget-footer-container widget_text">

						<?php 
							if ( ! is_active_sidebar( 'footer-sidebar-1' ) ) {
								return;
							}

							dynamic_sidebar( 'footer-sidebar-1' ); 

						?>

				   	</aside>						

				</article>
				
			</div>
			<div class="col-md-6 col-lg-6 right-box">

				<article class="right-content">
						
					<aside id="text-2" class="widget-footer-container widget_text">

						<?php 
							if ( ! is_active_sidebar( 'footer-sidebar-2' ) ) {
								return;
							}

							dynamic_sidebar( 'footer-sidebar-2' ); 

						?>

				   	</aside>		
					
					<div class="gravity-form">
						<?php //echo do_shortcode('[gravityform id="2" title="false" description="false"]'); ?>
						<aside id="text-2" class="widget-footer-container widget_text">

							<?php 
								if ( ! is_active_sidebar( 'footer-sidebar-3' ) ) {
									return;
								}

								dynamic_sidebar( 'footer-sidebar-3' ); 

							?>

					   	</aside>						
					</div>
									
				</article>			
				
			</div>


				<!--==============================================================================
				=            THIS IS FOR DEBUGGING. PLZ DISABLE WHEN READY TO PUBLISH            =
				===============================================================================-->
				
				<!-- <div style="color: white"><strong>Current template:</strong> <?php echo get_current_template( true ); ?></div> -->
				
				<!--====  End of THIS IS FOR DEBUGGING. PLZ DISABLE WHEN READY TO PUBLISH  ====-->
				

		</footer>

	</div> <!-- FOOTER CONTAINER ENDED -->

	</div> <!-- End of id="content" class="site-content" -->
</div> <!-- End of id="page" class="site" -->
<!-- JS FOR FANCY MENU -->
<script src="<?php echo get_template_directory_uri(); ?>/js/fancy-nav/classie.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/fancy-nav/borderMenu.js"></script>

</body>
</html>