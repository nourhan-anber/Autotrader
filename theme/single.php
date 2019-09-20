<?php
/**
 * The single template file
 *
 * @package Autotrader
 */

get_header();
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

 <h1><?php the_title(); ?></h1>
 <p><?php the_content(); ?></p>
 <?php echo get_the_date(); ?>

<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>