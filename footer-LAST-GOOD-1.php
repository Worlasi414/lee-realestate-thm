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
					<h2 class="headline">
						ABOUT LEE
					</h2>
					<img class="img-responsive" src="/wp-content/uploads/2017/10/lee-footer-img-537x406.jpg">
					<a href="http://leebrewer.com">leebrewer.com </a>
					<p>
						As a real estate professional in Sarasota, FL, I have in depth local knowledge and can provide you with the information you need on home buying, home selling, financing and owning real estate in Sarasota, FL. RE/MAX ALLIANCE GROUP provides a wide range of real estate services and utilizes the most current technology, processes and systems to assist you with all of your home buying and home selling needs.Whether you are new to the market or an experienced investor, I have the expertise, proven track record, and resources to help you achieve your real estate goals.
					</p>						
					<h2 class="headline">
						BACKGROUND
					</h2>
					<p>
						I am a native of sunny Sarasota, Florida! I have seen the changes over the years and have a vast array of knowledge and contacts in the area – all to help you have the best real estate experience possible.Specialty: I specialize in creating “win-win” situations. Whether you are looking to find a great bargain in this buyer’s market, or you have a situation that forces you to sell, I can help. Call my direct line at (941) 229-0213 to find out how I can create your “everyone wins” transaction.
					</p>
					<h2 class="headline">
						FOLLOW ME
					</h2>					
				</article>
				
			</div>
			<div class="col-md-6 col-lg-6 right-box">

				<article class="left-content">
					<h2 class="headline">
						INQUIRE ABOUT THE PROPERTY
					</h2>
					<!-- <a href="https://www.google.com/maps/place/1608+Hudson+Pointe+Dr,+Sarasota,+FL+34236/@27.32794,-82.536797,16z/data=!4m5!3m4!1s0x88c3406a68bae5fb:0x4e1797e978c7600!8m2!3d27.32794!4d-82.536797?hl=en-US"> -->
					<a href="#">	
						<img class="img-responsive" src="/wp-content/uploads/2017/10/1608-map.jpg" style="width: 100%;">
					</a>
					
					<?php echo do_shortcode('[gravityform id="2" title="false" description="false"]'); ?>
									
				</article>			
				
			</div>


				<!--==============================================================================
				=            THIS IS FOR DEBUGGING. PLZ DISABLE WHEN READY TO PUBLISH            =
				===============================================================================-->
				
				<div style="color: white"><strong>Current template:</strong> <?php echo get_current_template( true ); ?></div>
				
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