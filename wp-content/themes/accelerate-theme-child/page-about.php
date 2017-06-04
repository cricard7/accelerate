<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

	<section class="home-page about-header">
        <div class="site-content">
            <?php while ( have_posts() ) : the_post(); ?>
                <div class='homepage-hero'>
                    <div class="about-content">
                    <?php the_content(); ?>
                    </div>
                       
                </div>
                <?php endwhile; // end of the loop. ?>
        
         
        </div>
        <!-- .container -->
    </section>
    <!-- .home-page -->

<section>
    <div class="site-content">
        <h3 class="serviceTitle">Our Services</h3>
        <p class="serviceDescription">We take pride in in our clients and the content we create for them. Here's a brief overview of our offered services.</p>
        
           
      
        
        
            <?php query_posts('post_type=services&orderby=meta_value_num&meta_key=serviceorder&order=ASC'); ?>
            
            <?php 
            $counter = 0;
          while ( have_posts() ) : the_post(); 
            setup_postdata($post);
            $img = get_field("icon");
            $serviceTitle = get_field("service_title");
            $serviceDescription = get_field("service_description");
            $size = "full";
            $counter++;
                ?>
        
          <?php if( ($counter % 2 != 0) ) { ?>
                     
                      
        <div class="serviceGrp">
               <span class="service-icon">
            <?php echo wp_get_attachment_image($img, $size); ?>
                </span>
            <div class="serviceText">
                <h4><?php echo $serviceTitle ?></h4>
                <p><?php echo $serviceDescription ?></p>
                
            </div>
        </div>   
        
        <?php  } ?>
        
        <?php if($counter % 2 == 0) { ?>
                     
                      
        <div class="serviceGrp">
               
            <div class="serviceTextLeft">
                <h4><?php echo $serviceTitle ?></h4>
                <p><?php echo $serviceDescription ?></p>
                
            </div>
            
            <span class="service-icon">
            <?php echo wp_get_attachment_image($img, $size); ?>
                </span>
        </div>   
        
        <?php  } ?>
        
        
            <?php endwhile; ?>
            
            <?php wp_reset_postdata(); ?>
        
        
        
        
        
        
    </div>
    
    
    
<!-- Call to action  -->
</section>



<section id="aboutActionSec">
     <div class="site-content">
         <hr>
          <h3>Interested in working with us? <a href="http://localhost:8888/accelerate/contact-us/"><input class="ContactButton" type="button" value="Contact Us"></a></h3> 
         
    </div>


</section>


<?php get_footer(); ?>