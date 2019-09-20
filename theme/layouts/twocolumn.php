<?php
/*
Template Name: 2 column layout
*/
get_header();

?>
<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <div class="row">
            <div class="col-sm-6">
                    <?php
                    if ( have_posts() ) :

                        if ( is_home() && ! is_front_page() ) :
                            ?>
                            <header>
                                <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                            </header>
                            <?php
                        endif;

                        /* Start the Loop */
                        while ( have_posts() ) :
                            the_post();?>
                            <h1><?php the_title(); ?></h1>
                            <h4>Posted on <?php the_time('F jS, Y') ?></h4>
                            <p><?php the_content(__('(more...)')); ?></p>
                        <?php endwhile;

                        the_posts_navigation();

                    else :?>
                        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                    <?php endif;
                    ?>
            </div>
                <div class="col-sm-6">
                    <h2>Second column Test</h2>
                </div>
        </div>
    </main><!-- #main -->
</div><!-- #primary -->
<?php get_footer();


