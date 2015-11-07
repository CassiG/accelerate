<?php
/**
 * The template for displaying case studies pages
 *
 * @package WordPress
 * @subpackage Accelerate_Theme
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php while ( have_posts() ) : the_post(); 
			
           $services=get_field('services');
		   $client=get_field("client");
		   $site_link=get_field('link');
		   $image_1=get_field('image_1');
		   $image_2=get_field('image_2');
		   $image_3=get_field('image_3');
		   $size="full";
		   
		   ?>
			
			<article class="case-study">
                <aside class="case-study-sidebar">
                    <h2><?php the_title(); ?></h2>
                    <h5><?php echo $services; ?></h5>
                    <h6><?php echo $client; ?></h6>
                    
                    <?php the_content(); ?>
                    
                    <p><a href="<?php echo $site_link; ?>">Vist Site</a></p>
                </aside>
            
            <div class="case-study-img">
            	<?php echo wp_get_attachment_image( $image_1, $size ); ?>
                <?php echo wp_get_attachment_image( $image_2, $size ); ?>
                <?php echo wp_get_attachment_image( $image_3, $size ); ?>     
			</div>
            
            </article>
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->
    
<?php get_footer(); ?>