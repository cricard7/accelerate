<?php
/**
 * The template for displaying archive case studies
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

	<div id="primary" class="site-content">
		<div id="content" role="main">
        
            <?php while ( have_posts() ) : the_post(); 
            
                $title = get_field('title');  
                $link = get_field('link'); 
                $img1 = get_field('image1'); 
                $size = "full";
                $service = get_field('service');
            ?>

                <aside class="caseStudyDescription">
                    <h3><?php echo $title ?></h3>
                    <h4 class="caseStudyService"><?php echo $service ?></h4>
                    <p>
                        <?php the_excerpt(); ?>
                    </p>

                    <a href="<?php the_permalink() ?>">View Project <span>&rsaquo;</span></a>
                </aside>

                <div class="caseStudyImages">
                    <?php if($img1) { ?>
                        <?php echo wp_get_attachment_image($img1, $size); ?>
                      <?php  } ?>
                </div>
                <?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>