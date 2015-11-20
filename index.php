<?php
/**
 * Template Name: Index Page
 *
 * @package WordPress
 * @subpackage TheWishingWellWA
 * @since TheWishingWellWA 1.0
 */
?>
<?php get_header(); ?>
        
         
<article class="blog-excerpt">
    <?php if(have_posts()) : while(have_posts()) : the_post(); //start the loop ?>
    <h2><a href="<?php the_permalink();// links to the post ?>"><?php the_title();// gets the post title ?></a></h2>
    <p><?php the_excerpt();// gets the post excerpt ?></p>
    <?php the_post_thumbnail('thumbnail');// gets the post thumbnail ?>
    <small>Posted on <?php the_time('F j, Y');// gets the time ?> by <?php the_author();// gets the author ?> in <?php the_category(', ');// gets the category - comma separates if multiple ?></small>                         
    <p class="read-more"><a href="<?php the_permalink(); ?>">Read More</a></p>
    <?php endwhile; else : ?>
    <p><?= ('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>
</article> 
<?php get_sidebar(); ?>
    	</div><!--Close content-->

               

      <small>index.php</small>  
<?php get_footer(); ?>    