<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Moose_Framework
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="p:domain_verify" content="3833b9f5fb66f58faddede705b2ccac0"/>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/_css/icons.css" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/_css/style5.css" />
<!-- <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/_css/default.css" /> -->
<!-- <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/_css/component.css" /> -->



<?php wp_head(); ?>
</head>

<?php $page_header_image = get_field( 'page_header_image' ); ?>
<?php
    // $front_header_image = get_field('front_header_image', 3563); // 1476 is post id                               
    $blog_header_image = get_field('page_header_image', 643); // 1476 is post id                               
    $siteLogo = get_field('site_logo', 5); // 1476 is post id   
    $siteSubtitle = get_field('site_subtitle', 5);                            
    $size = 'full'; // (thumbnail, medium, large, full or custom size)
?>	

<body <?php body_class(); ?>>


<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'moose-frame' ); ?></a>

	<style type="text/css" media="screen">

		#masthead {
	 		height: 1000px;	
			<?php if( get_field( 'page_header_image' ) ) : ?>
				
				 background-image: url("<?php the_field( 'page_header_image' ); ?>");  

			<?php else : ?>	
	
				background-image: url("https://drive.google.com/uc?id=0B0uxrfVW1N50WV9IUHg3SXBmR2M"); 

			<?php endif; ?>
			/* background-image: url("/wp-content/uploads/2017/07/JEN2-Hero-Img-1920x800.jpg");  */
			background-size: cover;
			background-position: top center;

		}

		@media ( max-width: 800px ) {
			#masthead {
				height: 600px;
				/* background-image: url("https://drive.google.com/uc?id=0B0uxrfVW1N50WV9IUHg3SXBmR2M"); */
				background: url("/wp-content/uploads/2017/10/lee-home-page-hero-img-MOBILE-800x500.jpg") no-repeat;
				background-size: cover;
				background-position: top center;
			}
		}		

	</style>			

	<header id="masthead" class="site-header" role="banner">
		<div class="nav-bar">

			<div class="site-title">
				<a class="" href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<h1 class="title text-center"><?php echo $siteLogo; ?></h1>
				</a>	
				<h5 class="subtitle text-center"><?php echo $siteSubtitle; ?></h5>
			</div>
			<nav id="bt-menu" class="bt-menu">
				<a href="#" class="bt-menu-trigger"><span>Menu</span></a>
				<ul class="hide">
					<li><a href="#">HOME</a></li>
					<li><a href="#/">PROPERTY DETAILS</a></li>
					<!-- <li><a href="#">CONTACT</a></li> -->
				</ul>
				<?php

					wp_nav_menu( array( 'theme_location' => 'primary', 'container_class' => '' ) );
				
				?>
				<ul>
					<li><a href="http://www.facebook.com/pages/" class="bt-icon icon-facebook">Facebook</a></li>
					<li><a href="http://www.twitter.com/" class="bt-icon icon-twitter">Twitter</a></li>
					<li><a href="https://plus.google.com/" class="bt-icon icon-gplus">Google+</a></li>
					<li><a href="http://www.linkedin.com/" class="bt-icon icon-linkedin">Linkedin</a></li>
					<!-- <li><a href="http://www.youtube.com/" class="bt-icon icon-youtube">YouTube</a></li> -->
					<!-- <li><a href="http://www.instagram.com/" class="bt-icon icon-instagram">Instagram</a></li> -->
					<!-- <li><a href="https://github.com/codrops" class="bt-icon icon-pinterest">Pinterest</a></li> -->
					<!-- <li><a href="https://github.com/codrops" class="bt-icon icon-email">Email</a></li> -->
				</ul>
			</nav>
		</div> <!-- END NAV BAR -->


		<div class="btn-box">

			<article class="btn-container text-center">

				<!-- <div class="col-sm-6 col-md-6 col-lg-6"> -->
				<div class="flex-item">
					<a class="btn btn-primary btn-md" href="/property-details/">VIEW PROPERTY DETAILS</a>
				</div>
				<div class="flex-item">
					<a class="btn btn-primary btn-md" href="tel:9412290213">CALL: (941) 229-0213</a>
				</div>
				<div class="flex-item">
					<a class="btn btn-primary btn-md" href="#" data-toggle="modal" data-target="#myModal-hero">PRIVATE VIEWING</a>
				</div>
				<div class="flex-item">
					<a class="btn btn-primary btn-md" href="#" data-toggle="modal" data-target="#myModal-hero">REQUEST INVITATION</a>
				</div>
				<!-- </div> -->
				
			</article>
			
		</div>


	</header><!-- #masthead -->

	<!--=====================================
=            TOP IMAGE MODAL            =
======================================-->

<!-- THE TOP HERO BUTTON MODAL CODE -->

<!-- Modal Top one-->

<div class="modal fade" id="myModal-hero" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

    <div class="modal-dialog" role="document">

        <div class="modal-content">

            <div class="modal-header" style="background: #cd5937; color: white;">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: white;"><span aria-hidden="true">&times;</span></button>

                <h4 class="modal-title text-center" id="myModalLabel" style="color: white;"><?php the_field('optin_dropdown_title'); ?></h4>

            </div>

            <div class="modal-body">

                <section id="popup-form-click" class="clearfix">

                    <article class="popup-text">

                        <figure>

                        	<?php the_field( 'optin_in_form_code', 5 ); ?>
                        	
                        	<!-- FOLLOWING IS FOR BLOG INDEX PAGE ACF -->
                        	<?php //the_field('blog_page_optin_image_mailchimp_form_code', get_option('page_for_posts')); ?> 

                        </figure>

                    </article>

                </section>

            </div>

        </div>

        <div class="modal-footer hide">

            <button type="button" class="btn btn-primary center-block" data-dismiss="modal" style="background: black; color: white; border: 1px solid black;">Close</button>

        </div>

    </div>

</div>

<!--====  End of TOP HERO BUTTONMODAL  ====-->



	<div id="content" class="site-content">

	



















