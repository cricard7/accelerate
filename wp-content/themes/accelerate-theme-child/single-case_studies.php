<?php
/**The template for displaying case studies custom content type.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>



    <div id="primary" class="site-content">
        <div id="content" role="main">





            <?php while ( have_posts() ) : the_post(); 
            
            $title = get_field('title'); 
            $client = get_field('client_name'); 
            $link = get_field('link'); 
            // $img1 and 2 are using image url in custom fields pluging
            $img1 = get_field('image1'); 
            $img2 = get_field('image2'); 
            // $img3 is using the image id in custom fields plugin
            $img3 = get_field('image3');
            $size = "full";
            ?>




                <aside class="caseStudyDescription">
                    <h3><?php echo $title ?></h3>
                    <h4>Client: <?php echo $client; ?></h4>
                    <p>
                        <?php the_content(); ?>
                    </p>

                    <a href="<?php echo $link ?>">Visit Live Site</a>
                </aside>

                <div class="caseStudyImages">
                    <?php if($img1) { ?>
                        <?php echo wp_get_attachment_image($img1, $size); ?>
                      <?php  } ?>
                    
                     <?php if($img2) { ?>
                        <?php echo wp_get_attachment_image($img2, $size); ?>
                      <?php  } ?>
                    
                    <!-- wp_get_attachment_image()  this is the preferred method of getting images as it takes advantange of wordress captions and sizes -->    
                     <?php if($img3) { ?>
                        
                    <?php echo wp_get_attachment_image($img3, $size); ?>

                      <?php  } ?>
                       
                
                    
                    
                </div>





                <?php endwhile; // end of the loop. ?>








        </div>
        <!-- #content -->
    </div>
    <!-- #primary -->

    <?php get_footer(); ?>
