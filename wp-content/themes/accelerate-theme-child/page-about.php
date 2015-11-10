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
<section class="about">
<div class="site-content">
		
	<?php while ( have_posts() ) : the_post(); ?>

		<div class='about-hero'>
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
		$title_2=get_field("title_2");
		$image_2=get_field('image_2');
		$description_2=get_field('description_2');
		
		$title_3=get_field("title_3");
		$image_3=get_field('image_3');
		$description_3=get_field('description_3');
		
		$title_4=get_field("title_4");
		$image_4=get_field('image_4');
		$description_4=get_field('description_4');
		$size="full";
	?>

	<article class="#">
		<h2>Our Services</h2>
		<h5><?php echo $synopsis; ?></h5>
		
		<div class="about-page">
            <aside class="float-left about-img">
            <?php echo wp_get_attachment_image( $image_1, $size ); ?></aside>
            <div class="about-description">
                <h3><?php echo $title_1; ?></h3>
                <?php echo $description_1; ?>
            </div>
        </div>
        
        <div class="about-page">
            <aside class="float-right about-img">
            <?php echo wp_get_attachment_image( $image_2, $size ); ?></aside>
            <div class="about-description">
                <h3><?php echo $title_2; ?></h3>
                <?php echo $description_2; ?>
            </div>
        </div>
        
        <div class="about-page">
       		<aside class="float-left about-img">
			<?php echo wp_get_attachment_image( $image_3, $size ); ?></aside>
        	<div class="about-description">
        		<h3><?php echo $title_3; ?></h3>
        		<?php echo $description_3; ?>
        	</div>
        </div>
        
        <div class="about-page">
        	<aside class="float-right about-img">
			<?php echo wp_get_attachment_image( $image_4, $size ); ?></aside>
        	<div class="about-description">
        		<h3><?php echo $title_4; ?></h3>
        		<?php echo $description_4; ?>
        	</div>
		</div>
                    
	</article>	
		  
	<?php endwhile ?> <!-- end blog loop -->
       		
</div>		
</section>

<?php get_footer(); ?>