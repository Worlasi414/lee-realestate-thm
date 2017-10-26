<?php
/**
 * The template for displaying all pages with Sidebar
 *
 * Template Name: Property Page Template
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

get_header('property'); ?>


<section id="imb-property-video-description" class="container-fluid">

	<main class="container">

        <h1 class="page-title text-center"><?php echo wp_title(); ?></h1>

    <?php if ( get_field('you_tube_video_id') ) : ?>

        <figure id="youtube" class="row">

            <!-- <div class="col-md-1 col-lg-1"></div> -->

            <div class="col-md-12 col-lg-12">

                <div class="embed-responsive embed-responsive-16by9">

                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php the_field('you_tube_video_id'); ?>?wmode=opaque&loop=1&controls=1&showinfo=0&rel=0"></iframe>

                </div>

            </div>

            <!-- <div class="col-md-1 col-lg-1"></div> -->

        </figure>

        <!-- 16:9 aspect ratio -->	
    <?php endif; ?>

        <div class="description row">
            <article class="text-content">
                <h2 class="headline"><?php the_field('description_title'); ?></h2>
                <?php the_field('description_text'); ?>
            </article>
        </div>	

	</main>
	
</section> <!-- End Property Description -->	

<section id="" class="container-fluid imb-property-CTA">

    <main class="container">
        
        <div class="CTA-content">
            <h2 class="headline text-center"><?php the_field('home_optin_headline'); ?></h2>
            <div class="btn-holder text-center">
                <!-- <a class="btn btn-primary btn-lg" href="#" data-toggle="modal" data-target="#myModal-hero"><?php the_field('home_optin_left_button_text'); ?></a> -->
                <!-- <a class="btn btn-primary btn-lg" href="#" data-toggle="modal" data-target="#myModal-hero"><?php the_field('home_optin_right_button_text'); ?></a> -->
                <?php the_field('site_optin_left_btn_code', 5); ?>
                <?php the_field('site_optin_right_btn_code', 5); ?>
            </div>            
        </div>

    </main> 
	
</section> <!-- End Property CTA -->

<section id="imb-property-facts" class="container-fluid">

	<main class="container">

        <article class="detail-table-box">

    <?php if (get_field('interior_features_title')) : ?>

            <table class="table table-bordered">
              <thead>
                <tr>
                  <th colspan="2">
                    <h3 class="headline">
                        <?php the_field('interior_features_title'); ?>
                    </h3>
                  </th>
                </tr>
              </thead>
              <tbody>

            <?php if ( get_field( 'interior_features_data' ) ) : ?>
                <?php while ( has_sub_field( 'interior_features_data' ) ) : ?>


                <tr>
                  <td class="topic-cell"><span class="topic"><?php the_sub_field('topic'); ?></span> </td>
                  <td class="data-cell"><span class="data"><?php the_sub_field('data'); ?></span></td>
                </tr>

                
                <?php endwhile; ?>
            <?php endif; ?>    
                
              </tbody>
            </table>      

    <?php endif; ?>     

    <?php if (get_field('exterior_features_title')) : ?>

            <table class="table table-bordered">
              <thead>
                <tr>
                  <th colspan="2">
                    <h3 class="headline">
                        <?php the_field('exterior_features_title'); ?>
                    </h3>
                  </th>
                </tr>
              </thead>
              <tbody>

            <?php if ( get_field( 'exterior_features_data' ) ) : ?>
                <?php while ( has_sub_field( 'exterior_features_data' ) ) : ?>


                <tr>
                  <td class="topic-cell"><span class="topic"><?php the_sub_field('topic'); ?></span> </td>
                  <td class="data-cell"><span class="data"><?php the_sub_field('data'); ?></span></td>
                </tr>

                
                <?php endwhile; ?>
            <?php endif; ?>    
                
              </tbody>
            </table>      

    <?php endif; ?>                  

    <?php if (get_field('spaces_and_amenities_title')) : ?>

            <table class="table table-bordered">
              <thead>
                <tr>
                  <th colspan="2">
                    <h3 class="headline">
                        <?php the_field('spaces_and_amenities_title'); ?>
                    </h3>
                  </th>
                </tr>
              </thead>
              <tbody>

            <?php if ( get_field( 'spaces_and_amenities_data' ) ) : ?>
                <?php while ( has_sub_field( 'spaces_and_amenities_data' ) ) : ?>


                <tr>
                  <td class="topic-cell"><span class="topic"><?php the_sub_field('topic'); ?></span> </td>
                  <td class="data-cell"><span class="data"><?php the_sub_field('data'); ?></span></td>
                </tr>

                
                <?php endwhile; ?>
            <?php endif; ?>    
                
              </tbody>
            </table>      

    <?php endif; ?>  

    <?php if (get_field('construction_title')) : ?>

            <table class="table table-bordered">
              <thead>
                <tr>
                  <th colspan="2">
                    <h3 class="headline">
                        <?php the_field('construction_title'); ?>
                    </h3>
                  </th>
                </tr>
              </thead>
              <tbody>

            <?php if ( get_field( 'construction_data' ) ) : ?>
                <?php while ( has_sub_field( 'construction_data' ) ) : ?>


                <tr>
                  <td class="topic-cell"><span class="topic"><?php the_sub_field('topic'); ?></span> </td>
                  <td class="data-cell"><span class="data"><?php the_sub_field('data'); ?></span></td>
                </tr>

                
                <?php endwhile; ?>
            <?php endif; ?>    
                
              </tbody>
            </table>      

    <?php endif; ?>      

    <?php if (get_field('community_and_neighborhood_title')) : ?>

            <table class="table table-bordered">
              <thead>
                <tr>
                  <th colspan="2">
                    <h3 class="headline">
                        <?php the_field('community_and_neighborhood_title'); ?>
                    </h3>
                  </th>
                </tr>
              </thead>
              <tbody>

            <?php if ( get_field( 'community_and_neighborhood_data' ) ) : ?>
                <?php while ( has_sub_field( 'community_and_neighborhood_data' ) ) : ?>


                <tr>
                  <td class="topic-cell"><span class="topic"><?php the_sub_field('topic'); ?></span> </td>
                  <td class="data-cell"><span class="data"><?php the_sub_field('data'); ?></span></td>
                </tr>

                
                <?php endwhile; ?>
            <?php endif; ?>    
                
              </tbody>
            </table>      

    <?php endif; ?>    

        </article>    

	</main>	
	
</section> <!-- End Property Facts -->

<section id="" class="container-fluid imb-property-CTA">

    <main class="container">
        
        <div class="CTA-content">
            <h2 class="headline text-center"><?php the_field('home_optin_headline'); ?></h2>
            <div class="btn-holder text-center">
                <!-- <a class="btn btn-primary btn-lg" href="#" data-toggle="modal" data-target="#myModal-hero"><?php the_field('home_optin_left_button_text'); ?></a> -->
                <!-- <a class="btn btn-primary btn-lg" href="#" data-toggle="modal" data-target="#myModal-hero"><?php the_field('home_optin_right_button_text'); ?></a> -->
                <?php the_field('site_optin_left_btn_code', 5); ?>
                <?php the_field('site_optin_right_btn_code', 5); ?>
            
            </div>            
        </div>

    </main> 
    
</section> <!-- End Property CTA -->

<section id="imb-property-details" class="container-fluid">

    <main class="container">

        <article class="detail-table-box">

            <table class="table table-bordered">
              <thead>
                <tr>
                  <th colspan="2">
                    <h3 class="headline text-center">
                        <?php the_field('other_details_title'); ?>
                    </h3>
                  </th>
                </tr>
              </thead>
              <tbody>

            <?php if ( get_field( 'other_details_data' ) ) : ?>
                <?php while ( has_sub_field( 'other_details_data' ) ) : ?>


                <tr>
                  <td class="topic-cell"><span class="topic"><?php the_sub_field('topic'); ?></span> </td>
                  <td class="data-cell"><span class="data"><?php the_sub_field('data'); ?></span></td>
                </tr>

                
                <?php endwhile; ?>
            <?php endif; ?>    
                
              </tbody>
            </table>      
            
        </article>

    </main> 
    
</section> <!-- End Property Details -->
<section id="" class="container-fluid imb-property-CTA">

    <main class="container">
        
        <div class="CTA-content">
            <h2 class="headline text-center">Request A Private Viewing or A VIP Invitation</h2>
            <div class="btn-holder text-center">
                <!-- <a class="btn btn-primary btn-lg" href="#">PRIVATE VIEWING</a> -->
                <!-- <a class="btn btn-primary btn-lg" href="#">REQUEST AN INVITE</a> -->
                <?php the_field('site_optin_left_btn_code', 5); ?>
                <?php the_field('site_optin_right_btn_code', 5); ?>
            
            </div>            
        </div>

    </main> 
    
</section> <!-- End Property CTA -->   
<?php
get_footer();
