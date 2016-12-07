<?php
/**
 * Template Name: om-widgrens
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
<div class="container">
	<?php $query = new WP_Query('page_id=10'); ?>
        <?php if($query->have_posts()): ?>
        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
        <section class="inner-banner">
            <div class="item">
                <img src="<?php the_field('banner_image'); ?>" alt="" />
                <div class="innerbannerCaption">
                    <h1><?php the_title(); ?></h1>
                   <?php the_content(); ?>
                </div>
            </div>
	    </section> <!-- / .banner -->
	    <?php endwhile; endif; ?>
        <section class="om-content">
            <div class="aboutSec">
                <div class="aboutDeatails">
                    <div class="omAbout-first">
                        <?php the_field('content'); ?>
                    </div>
                    <div class="omAbout-first">
                       <?php the_field('content_second'); ?>
                    </div>
                </div>
            </div>
	    </section> <!-- /.content -->
    </div><!-- /.container -->
<?php
get_footer();
