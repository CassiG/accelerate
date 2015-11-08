<?php
/**
 * The template for displaying the homepage
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

<!-- Main Homepage Hero -->
<section class="home-page">
    <div class="site-content">
		
		<?php while ( have_posts() ) : the_post(); ?>
			<div class='homepage-hero'>
				<?php the_content(); ?>
				<a class="button" href="<?php echo home_url(); ?>/blog">View Our Work</a>
			</div>
		<?php endwhile; // end of the loop. ?>
        
	</div><!-- .container -->
</section><!-- .home-page -->

<!-- Featured Work Section -->
<section class="featured-work">
    <div class="site-content">
        
        	<h4 class="home-title">Featured Work</h4> 
        	
			<ul class="homepage-featured-work">
				<?php query_posts('posts_per_page=3&post_type=case_studies'); ?>
        		<?php while ( have_posts() ) : the_post(); 
					$image_1=get_field("image_1");
					$size="medium";
				?>
           
           		<li><figure><?php echo wp_get_attachment_image( $image_1, $size ); ?></figure>
            	<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3></li>
         	
				<?php endwhile ?> <!-- end blog loop -->
       			<?php wp_reset_query(); ?> <!-- reset query -->
			</ul>
        
	</div>
</section>


<!-- From the Blog Section -->
<section class="recent-posts">
    <div class="site-content">
    	
        <div class="blog-post">
        
        	<h4 class="home-title">From the Blog</h4> <!-- custom blog call -->
        	
			<?php query_posts('posts_per_page=1'); ?>
        	<?php while ( have_posts() ) : the_post(); ?>
        	
            <h2><?php the_title(); ?></h2>
            <?php the_excerpt(); ?>
            <a href="<?php the_permalink(); ?>" class="read-more-link">Read More <span>&rsaquo;</span></a>
       		
			<?php endwhile ?> <!-- end blog loop -->
       		<?php wp_reset_query(); ?> <!-- reset query -->
        
        </div>
        
    </div>
</section>

<?php get_footer(); ?>