<?php
/**
 * The main template file
 *
 * @package Autotrader
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php

		if ( is_front_page() ){ ?>

			<header>
				<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
			</header>			
			<div class="row">
            <div class="col-sm-6">
                <h2>First column Test</h2>
                <p>Nulla elit magna, euismod vitae lectus a, maximus pharetra neque. Phasellus dignissim neque nec dolor lobortis molestie. Curabitur turpis ligula, congue vitae sapien sit amet, sollicitudin egestas nisi. Proin tellus dui, semper eget velit nec, aliquet interdum turpis. Quisque diam libero, dignissim vitae volutpat vel, gravida molestie ipsum. Cras ut mauris finibus, tempus nibh malesuada, vehicula dolor. Praesent ipsum est, tincidunt at interdum sed, sollicitudin fringilla sapien. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Morbi posuere risus eu dolor bibendum, nec rutrum ipsum feugiat. Morbi gravida, elit quis vulputate vehicula, purus neque tristique metus, vel pulvinar dolor nisl sed odio. Integer viverra scelerisque felis. Nam turpis sapien, congue in aliquam eget, rhoncus et odio. Donec at nibh sed libero convallis tristique eget et quam. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Curabitur porttitor mattis eros quis ornare. Aliquam erat volutpat.
                   Nulla sollicitudin, turpis et consectetur lacinia, est ipsum tincidunt velit, vel finibus nisl velit in nibh. Pellentesque dignissim mauris condimentum egestas commodo. Donec consequat faucibus vestibulum. Cras ultrices vitae erat et ultricies. Nunc aliquam elit sed ipsum maximus, ut maximus quam tincidunt. Cras ac ullamcorper purus, sed sagittis tellus. Sed id pretium dolor. Sed urna augue, tincidunt in aliquam vitae, volutpat at sapien. Donec condimentum nisl vel consequat condimentum. Sed augue nibh, laoreet ut tristique quis, ullamcorper eget tortor. Fusce sed condimentum enim, viverra placerat dolor. Pellentesque volutpat, velit quis interdum tristique, mi ante imperdiet mi, a vulputate justo magna vitae risus. Suspendisse sed fringilla nulla, vitae bibendum lorem.
                   Mauris eget dolor felis. Aliquam eget convallis dolor. Integer eu nibh leo. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer eleifend dui massa, vel vehicula orci feugiat interdum. Integer gravida elementum dui, sed ultrices dui sodales et. Pellentesque id lobortis purus. Integer maximus enim sapien, sit amet dignissim est convallis at. Vivamus ac quam tristique urna vulputate vulputate quis id dui. Pellentesque nisl leo, pellentesque non ex ac, accumsan accumsan odio. Nulla quis ipsum augue. Aliquam lacus nisi, facilisis et diam sed, tincidunt efficitur risus. In vestibulum, nisl volutpat iaculis fringilla, arcu ipsum vulputate felis, sit amet tincidunt magna sapien ac ex. Suspendisse vel dui quis turpis sollicitudin pharetra.
                </p>
            </div>
            <div class="col-sm-6">
                <h2>Second column Test</h2>
                <p>Nulla elit magna, euismod vitae lectus a, maximus pharetra neque. Phasellus dignissim neque nec dolor lobortis molestie. Curabitur turpis ligula, congue vitae sapien sit amet, sollicitudin egestas nisi. Proin tellus dui, semper eget velit nec, aliquet interdum turpis. Quisque diam libero, dignissim vitae volutpat vel, gravida molestie ipsum. Cras ut mauris finibus, tempus nibh malesuada, vehicula dolor. Praesent ipsum est, tincidunt at interdum sed, sollicitudin fringilla sapien. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Morbi posuere risus eu dolor bibendum, nec rutrum ipsum feugiat. Morbi gravida, elit quis vulputate vehicula, purus neque tristique metus, vel pulvinar dolor nisl sed odio. Integer viverra scelerisque felis. Nam turpis sapien, congue in aliquam eget, rhoncus et odio. Donec at nibh sed libero convallis tristique eget et quam. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Curabitur porttitor mattis eros quis ornare. Aliquam erat volutpat.
                   Nulla sollicitudin, turpis et consectetur lacinia, est ipsum tincidunt velit, vel finibus nisl velit in nibh. Pellentesque dignissim mauris condimentum egestas commodo. Donec consequat faucibus vestibulum. Cras ultrices vitae erat et ultricies. Nunc aliquam elit sed ipsum maximus, ut maximus quam tincidunt. Cras ac ullamcorper purus, sed sagittis tellus. Sed id pretium dolor. Sed urna augue, tincidunt in aliquam vitae, volutpat at sapien. Donec condimentum nisl vel consequat condimentum. Sed augue nibh, laoreet ut tristique quis, ullamcorper eget tortor. Fusce sed condimentum enim, viverra placerat dolor. Pellentesque volutpat, velit quis interdum tristique, mi ante imperdiet mi, a vulputate justo magna vitae risus. Suspendisse sed fringilla nulla, vitae bibendum lorem.
                   Mauris eget dolor felis. Aliquam eget convallis dolor. Integer eu nibh leo. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer eleifend dui massa, vel vehicula orci feugiat interdum. Integer gravida elementum dui, sed ultrices dui sodales et. Pellentesque id lobortis purus. Integer maximus enim sapien, sit amet dignissim est convallis at. Vivamus ac quam tristique urna vulputate vulputate quis id dui. Pellentesque nisl leo, pellentesque non ex ac, accumsan accumsan odio. Nulla quis ipsum augue. Aliquam lacus nisi, facilisis et diam sed, tincidunt efficitur risus. In vestibulum, nisl volutpat iaculis fringilla, arcu ipsum vulputate felis, sit amet tincidunt magna sapien ac ex. Suspendisse vel dui quis turpis sollicitudin pharetra.
                </p>
            </div>
        	</div>	

		<?php }else{

		if ( have_posts() ) :

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();?>
				<h1><a href=<?php get_permalink(the_permalink($post->ID)) ?>><?php the_title(); ?></a></h1>
				<h4>Posted on <?php the_time('F jS, Y') ?></h4>
				<p><?php the_content(__('(more...)')); ?></p>
			<?php endwhile;

			the_posts_navigation();

		else :?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif;
		}
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
