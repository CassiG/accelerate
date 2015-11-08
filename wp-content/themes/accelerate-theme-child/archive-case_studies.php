<?php
/**
 * The template for displaying the archive of case studies
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

<div id="primary" class="site-content">		
	<div id="content" role="main">
	
		<?php while ( have_posts() ) : the_post();
		
		 $services=get_field('services');
		 $client=get_field("client");
		 $site_link=get_field('link');
		 $image_1=get_field('image_1');
		 $size="full";
		
		?>
        
		<article class="case-study-main">
                <aside class="case-study-main-sidebar">
                    <h2><?php the_title(); ?></h2>
                    <h5><?php echo $services; ?></h5>
                    <h6><?php echo $client; ?></h6>
                    
                    <?php the_excerpt(); ?>
                    
                    <p><a href="<?php the_permalink; ?>">View Project</a></p>
                </aside>
            
            <div class="case-study-main-img">
            	<?php echo wp_get_attachment_image( $image_1, $size ); ?>     
			</div>
            
            </article>
            <div class="clearfix"></div>
		<?php endwhile; // end of the loop. ?>

	</div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>