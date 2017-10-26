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

<!--===========================================
=            CUSTOM ANALYTICS TAGS - HEAD     =
============================================-->

<?php if (get_field('before_ending_head_tag')) : ?>

	<?php the_field('before_ending_head_tag'); ?>

<?php else : ?>

	<?php the_field('before_ending_head_tag_default', 'option'); ?>

<?php endif; ?>	

<!--====  End of CUSTOM ANALYTICS TAGS  ====-->



<?php wp_head(); ?>
</head>

<?php $page_header_image = get_field( 'page_header_image' ); ?>
<?php $page_header_image_mobile = get_field( 'page_header_mobile_image' ); ?>
<?php
    // $front_header_image = get_field('front_header_image', 3563); // 1476 is post id                               
    // $blog_header_image = get_field('page_header_image', 643); // 1476 is post id                               
    $siteLogo = get_field('site_logo', 5); // 1476 is post id   
    $siteSubtitle = get_field('site_subtitle', 5);                            
    
    $facebook_link = get_field('facebook_link', 5);                            
    $twitter_link = get_field('twitter_link', 5);                            
    $googlepluslink = get_field('googleplus_link', 5);                            
    $linkedin_link = get_field('linkedin_link', 5);                            
    $youtube_link = get_field('youtube_link', 5);                            
    $instagram_link = get_field('instagram_link', 5);                            
?>	

<body <?php body_class(); ?>>

<!--======================================================
=            CUSTOM ANALYTICS TAGS - BODY TOP            =
=======================================================-->

<?php if (get_field('after_top_body_tag')) : ?>

	<?php the_field('after_top_body_tag'); ?>

<?php else : ?>

	<?php the_field('after_top_body_tag_default', 'option'); ?>

<?php endif; ?>	

<!--====  End of CUSTOM ANALYTICS TAGS - BODY TOP  ====-->

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'moose-frame' ); ?></a>

	<style type="text/css" media="screen">

		#masthead {
	 		height: 1000px;	
			<?php if( get_field( 'page_header_image' ) ) : ?>
				
				 background: url("<?php the_field( 'page_header_image' ); ?>");  

			<?php else : ?>	
	
				background-image: url("https://drive.google.com/uc?id=0B0uxrfVW1N50WV9IUHg3SXBmR2M"); 

			<?php endif; ?>
			/* background-image: url("/wp-content/uploads/2017/07/JEN2-Hero-Img-1920x800.jpg");  */
			background-size: cover;
			background-position: top center;

		}

		@media ( max-width: 800px ) {
			#masthead {
				height: 500px;
				/* background-image: url("https://drive.google.com/uc?id=0B0uxrfVW1N50WV9IUHg3SXBmR2M"); */
				/* background: url("<?php the_field('$page_header_mobile_image'); ?>") no-repeat; */
				background: url("<?php echo $page_header_image_mobile; ?>") no-repeat;
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
					<li><a href="#">CONTACT</a></li>
					<!-- THESE ARE KEPT TO MAINTAIN THE NAV STRUCTURE -->
				</ul>
				<?php

					wp_nav_menu( array( 'theme_location' => 'primary', 'container_class' => '' ) );
				
				?>
				<ul>
					<?php if ($facebook_link) : ?>
						<li><a href="<?php echo $facebook_link; ?>" target="_blank" class="bt-icon icon-facebook">Facebook</a></li>
					<?php endif; ?>
					<?php if ($twitter_link) : ?>
						<li><a href="<?php echo $twitter_link ; ?>" target="_blank" class="bt-icon icon-twitter">Twitter</a></li>
					<?php endif; ?>
					<?php if ($googleplus_link) : ?>
						<li><a href="<?php echo $googleplus_link; ?>" target="_blank" class="bt-icon icon-gplus">Google+</a></li>
					<?php endif; ?>
					<?php if ($linkedin_link) : ?>
						<li><a href="<?php echo $linkedin_link; ?>" target="_blank" class="bt-icon icon-linkedin">Linkedin</a></li>
					<?php endif; ?>
					<?php if ($youtube_link) : ?>
						<li><a href="<?php echo $youtube_link; ?>" target="_blank" class="bt-icon icon-youtube">YouTube</a></li>
					<?php endif; ?>
					<?php if ($instagram_link) : ?>
						<li><a href="<?php echo $instagram_link; ?>" target="_blank" class="bt-icon icon-instagram">Instagram</a></li>
					<?php endif; ?>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<!-- <li><a href="https://github.com/codrops" class="bt-icon icon-pinterest">Pinterest</a></li> -->
					<!-- <li><a href="https://github.com/codrops" class="bt-icon icon-email">Email</a></li> -->
				</ul>
			</nav>
		</div> <!-- END NAV BAR -->


		<div class="btn-box">

			<article class="btn-container text-center">

				<!-- <div class="col-sm-6 col-md-6 col-lg-6"> -->
				<div class="flex-item">
					<a class="btn btn-primary btn-md" href="<?php the_field('top_left_btn_link', 5); ?>"><?php the_field('top_left_btn_text', 5); ?></a>
				</div>
				<div class="flex-item">
					<a class="btn btn-primary btn-md" href="tel:<?php the_field('top_left_btn_phone_number', 5); ?>"><?php the_field('top_right_btn_text', 5); ?></a>
				</div>
				<div class="flex-item">
					<!-- <a class="btn btn-primary btn-md" href="#" data-toggle="modal" data-target="#myModal-hero"><?php the_field('bottom_left_btn_text', 5); ?></a> -->
					<!-- // <script src="//static.leadpages.net/leadboxes/current/embed.js" async defer></script> <button data-leadbox-popup="14783d573f72a2:12bb70922946dc" data-leadbox-domain="oiteam.lpusercontent.com" style="background: #cd5937;border-color: #cd5937;border-radius: 20px;color: #FFFFFF;display: inline-block;vertical-align: middle;padding: 16px 32px;min-width: 192px;border: 1px solid #cd5937;font-size: 1.3rem;font-family: Helvetica, Arial, sans-serif;text-align: center;outline: 0;line-height: 1;cursor: pointer;-webkit-transition: background 0.3s, color 0.3s, border 0.3s;transition: background 0.3s, color 0.3s, border 0.3s;  box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.6);">PRIVATE VIEWING</button>  -->
					<?php the_field('bottom_left_btn_lead_page_code', 5); ?>
				</div>
				<div class="flex-item">
					<!-- <a class="btn btn-primary btn-md" href="#" data-toggle="modal" data-target="#myModal-hero"><?php the_field('bottom_right_btn_text', 5); ?></a> -->
					<!-- // <script src="//static.leadpages.net/leadboxes/current/embed.js" async defer></script> <button data-leadbox-popup="146b529f3f72a2:12bb70922946dc" data-leadbox-domain="oiteam.lpusercontent.com" style="background: #cd5937;border-color: #cd5937;border-radius: 20px;color: #FFFFFF;display: inline-block;vertical-align: middle;padding: 16px 32px;min-width: 192px;border: 1px solid #cd5937;font-size: 1.3rem;font-family: Helvetica, Arial, sans-serif;text-align: center;outline: 0;line-height: 1;cursor: pointer;-webkit-transition: background 0.3s, color 0.3s, border 0.3s;transition: background 0.3s, color 0.3s, border 0.3s;  box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.6);">REQUEST INVITATION</button>  -->
					<?php the_field('bottom_right_btn_lead_page_code', 5); ?>
				</div>
				<!-- </div> -->
				
			</article>
			
		</div>


	</header><!-- #masthead -->

	<!--=====================================
=            TOP IMAGE MODAL            =
======================================-->

<!-- THE TOP HERO BUTTON MODAL CODE -->

<!-- THIS IS NOT BEING USED AT THE MOMENT CUZ LEAD PAGES BTN IS CURRENTLY ON-->

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

	



















