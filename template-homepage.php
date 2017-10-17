<?php
/**
 * The template for displaying all pages with Sidebar
 *
 * Template Name: Home Page Template
 *
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Moose_Framework
 */

get_header(); ?>

<?php 
$gallery_1 = get_field('gallery_1');

if ($gallery_1) :
?>

<section id="gallery_1" class="imb-home-top-image-grid">

	<main class="">

        <article class="pin-box">

            <?php if ($gallery_1) : ?>

                <?php foreach ( $gallery_1 as $image ) : ?>

                    <!-- <pre> -->
                        <?php //print_r( $image ); ?>
                    <!-- </pre> -->
                    <figure class="pin-item" >
                        <a href="<?php echo $image['url'] ?>"  data-rel="lightbox-0">
                            <img class="img-responsive wow zoomIn center-block" src="<?php echo $image['sizes']['gallery-size'] ?>" alt="" data-wow-duration="1s" data-wow-delay="0.5s"/>
                        </a>
                    </figure>                        

                <?php endforeach; ?>    

            <?php endif; ?>    
            
        </article>            
        
	</main>

</section> <!-- End imb-home-top-roadmap	 -->

<section id="" class="container-fluid imb-home-CTA">

    <main class="container">
        
        <div class="CTA-content">
            <h2 class="headline text-center"><?php the_field('home_optin_headline'); ?></h2>
            <div class="btn-holder text-center">
                <a class="btn btn-primary btn-lg" href="#" data-toggle="modal" data-target="#myModal-hero"><?php the_field('home_optin_left_button_text'); ?></a>
                <a class="btn btn-primary btn-lg" href="#" data-toggle="modal" data-target="#myModal-hero"><?php the_field('home_optin_right_button_text'); ?></a>
            </div>            
        </div>

    </main> 
    
</section> <!-- End Property CTA -->

<?php endif; ?>

<!-- GALLERY 2 -->

<?php 
$gallery_2 = get_field('gallery_2');

if ($gallery_2) :
?>

<section id="gallery_2" class="imb-home-top-image-grid">

    <main class="">

        <article class="pin-box">

            <?php if ($gallery_2) : ?>

                <?php foreach ( $gallery_2 as $image ) : ?>

                    <!-- <pre> -->
                        <?php //print_r( $image ); ?>
                    <!-- </pre> -->
                    <figure class="pin-item" >
                        <a href="<?php echo $image['url'] ?>"  data-rel="lightbox-0">
                            <img class="img-responsive wow zoomIn center-block" src="<?php echo $image['sizes']['gallery-size'] ?>" alt="" data-wow-duration="1s" data-wow-delay="0.5s"/>
                        </a>
                    </figure>                        

                <?php endforeach; ?>    

            <?php endif; ?>    
            
        </article>            
        
    </main>

</section> <!-- End imb-home-top-roadmap     -->

<section id="" class="container-fluid imb-home-CTA">

    <main class="container">
        
        <div class="CTA-content">
            <h2 class="headline text-center"><?php the_field('home_optin_headline'); ?></h2>
            <div class="btn-holder text-center">
                <a class="btn btn-primary btn-lg" href="#" data-toggle="modal" data-target="#myModal-hero"><?php the_field('home_optin_left_button_text'); ?></a>
                <a class="btn btn-primary btn-lg" href="#" data-toggle="modal" data-target="#myModal-hero"><?php the_field('home_optin_right_button_text'); ?></a>
            </div>            
        </div>

    </main> 
    
</section> <!-- End Property CTA -->

<?php endif; ?>


<!-- GALLERY 3 -->

<?php 
$gallery_3 = get_field('gallery_3');

if ($gallery_3) :
?>

<section id="gallery_3" class="imb-home-top-image-grid">

    <main class="">

        <article class="pin-box">

            <?php if ($gallery_3) : ?>

                <?php foreach ( $gallery_3 as $image ) : ?>

                    <!-- <pre> -->
                        <?php //print_r( $image ); ?>
                    <!-- </pre> -->
                    <figure class="pin-item" >
                        <a href="<?php echo $image['url'] ?>"  data-rel="lightbox-0">
                            <img class="img-responsive wow zoomIn center-block" src="<?php echo $image['sizes']['gallery-size'] ?>" alt="" data-wow-duration="1s" data-wow-delay="0.5s"/>
                        </a>
                    </figure>                        

                <?php endforeach; ?>    

            <?php endif; ?>    
            
        </article>            
        
    </main>

</section> <!-- End imb-home-top-roadmap     -->

<section id="" class="container-fluid imb-home-CTA">

    <main class="container">
        
        <div class="CTA-content">
            <h2 class="headline text-center"><?php the_field('home_optin_headline'); ?></h2>
            <div class="btn-holder text-center">
                <a class="btn btn-primary btn-lg" href="#" data-toggle="modal" data-target="#myModal-hero"><?php the_field('home_optin_left_button_text'); ?></a>
                <a class="btn btn-primary btn-lg" href="#" data-toggle="modal" data-target="#myModal-hero"><?php the_field('home_optin_right_button_text'); ?></a>
            </div>            
        </div>

    </main> 
    
</section> <!-- End Property CTA -->

<?php endif; ?>

<!-- GALLERY 4 -->

<?php 
$gallery_4 = get_field('gallery_4');

if ($gallery_4) :
?>

<section id="gallery_4" class="imb-home-top-image-grid">

    <main class="">

        <article class="pin-box">

            <?php if ($gallery_4) : ?>

                <?php foreach ( $gallery_4 as $image ) : ?>

                    <!-- <pre> -->
                        <?php //print_r( $image ); ?>
                    <!-- </pre> -->
                    <figure class="pin-item" >
                        <a href="<?php echo $image['url'] ?>"  data-rel="lightbox-0">
                            <img class="img-responsive wow zoomIn center-block" src="<?php echo $image['sizes']['gallery-size'] ?>" alt="" data-wow-duration="1s" data-wow-delay="0.5s"/>
                        </a>
                    </figure>                        

                <?php endforeach; ?>    

            <?php endif; ?>    
            
        </article>            
        
    </main>

</section> <!-- End imb-home-top-roadmap     -->

<section id="" class="container-fluid imb-home-CTA">

    <main class="container">
        
        <div class="CTA-content">
            <h2 class="headline text-center"><?php the_field('home_optin_headline'); ?></h2>
            <div class="btn-holder text-center">
                <a class="btn btn-primary btn-lg" href="#" data-toggle="modal" data-target="#myModal-hero"><?php the_field('home_optin_left_button_text'); ?></a>
                <a class="btn btn-primary btn-lg" href="#" data-toggle="modal" data-target="#myModal-hero"><?php the_field('home_optin_right_button_text'); ?></a>
            </div>            
        </div>

    </main> 
    
</section> <!-- End Property CTA -->

<?php endif; ?>

<!-- GALLERY 5 -->

<?php 
$gallery_5 = get_field('gallery_5');

if ($gallery_5) :
?>

<section id="gallery_5" class="imb-home-top-image-grid">

    <main class="">

        <article class="pin-box">

            <?php if ($gallery_5) : ?>

                <?php foreach ( $gallery_5 as $image ) : ?>

                    <!-- <pre> -->
                        <?php //print_r( $image ); ?>
                    <!-- </pre> -->
                    <figure class="pin-item" >
                        <a href="<?php echo $image['url'] ?>"  data-rel="lightbox-0">
                            <img class="img-responsive wow zoomIn center-block" src="<?php echo $image['sizes']['gallery-size'] ?>" alt="" data-wow-duration="1s" data-wow-delay="0.5s"/>
                        </a>
                    </figure>                        

                <?php endforeach; ?>    

            <?php endif; ?>    
            
        </article>            
        
    </main>

</section> <!-- End imb-home-top-roadmap     -->

<section id="" class="container-fluid imb-home-CTA">

    <main class="container">
        
        <div class="CTA-content">
            <h2 class="headline text-center"><?php the_field('home_optin_headline'); ?></h2>
            <div class="btn-holder text-center">
                <a class="btn btn-primary btn-lg" href="#" data-toggle="modal" data-target="#myModal-hero"><?php the_field('home_optin_left_button_text'); ?></a>
                <a class="btn btn-primary btn-lg" href="#" data-toggle="modal" data-target="#myModal-hero"><?php the_field('home_optin_right_button_text'); ?></a>
            </div>            
        </div>

    </main> 
    
</section> <!-- End Property CTA -->

<?php endif; ?>

<!-- GALLERY 6 -->

<?php 
$gallery_6 = get_field('gallery_6');

if ($gallery_6) :
?>

<section id="gallery_6" class="imb-home-top-image-grid">

    <main class="">

        <article class="pin-box">

            <?php if ($gallery_6) : ?>

                <?php foreach ( $gallery_6 as $image ) : ?>

                    <!-- <pre> -->
                        <?php //print_r( $image ); ?>
                    <!-- </pre> -->
                    <figure class="pin-item" >
                        <a href="<?php echo $image['url'] ?>"  data-rel="lightbox-0">
                            <img class="img-responsive wow zoomIn center-block" src="<?php echo $image['sizes']['gallery-size'] ?>" alt="" data-wow-duration="1s" data-wow-delay="0.5s"/>
                        </a>
                    </figure>                        

                <?php endforeach; ?>    

            <?php endif; ?>    
            
        </article>            
        
    </main>

</section> <!-- End imb-home-top-roadmap     -->

<section id="" class="container-fluid imb-home-CTA">

    <main class="container">
        
        <div class="CTA-content">
            <h2 class="headline text-center"><?php the_field('home_optin_headline'); ?></h2>
            <div class="btn-holder text-center">
                <a class="btn btn-primary btn-lg" href="#" data-toggle="modal" data-target="#myModal-hero"><?php the_field('home_optin_left_button_text'); ?></a>
                <a class="btn btn-primary btn-lg" href="#" data-toggle="modal" data-target="#myModal-hero"><?php the_field('home_optin_right_button_text'); ?></a>
            </div>            
        </div>

    </main> 
    
</section> <!-- End Property CTA -->

<?php endif; ?>
   
<?php
get_footer();
