<?php
/**
 * The template for displaying the about page	
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

<!-- Main Homepage Hero -->
<section class="home-page">
    <div class="site-content">
		
		<?php while ( have_posts() ) : the_post(); ?>
			
            <div class='homepage-hero'>
				<?php the_content(); ?>
			</div>
		<?php endwhile; // end of the loop. ?>
        
	</div><!-- .container -->
</section><!-- .home-page -->

<!-- Featured Work Section -->
<section class="featured-work">
    <div class="site-content">
        
        	<?php while ( have_posts() ) : the_post(); 
			
           $synopsis=get_field('synopsis');
		   $title_1=get_field("title_1");
		   $image_1=get_field('image_1');
		   $description_1=get_field('description_1');
		   $size="full";
		   
		   ?>
         <article class="#">
         <h2>Our Services</h2>
         <h5><?php echo $synopsis; ?></h5>
         
         <div>
         <h3><?php echo $title_1; ?></h3>
         <?php echo wp_get_attachment_image( $image_1, $size ); ?>
         <p><?php echo $description_1; ?></p>
         </div>
                    
            
            </article>	
		  
		  <?php endwhile ?> <!-- end blog loop -->
       		
	</div>		
</section>


<?php get_footer(); ?>