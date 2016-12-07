<?php
/**
 * Template Name: referenser
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<div class="container">
	<?php $query = new WP_Query('page_id=9'); ?>
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
	    
        <section class="ref-content">
        	<?php 
              $reference = array( 'post_type' => 'reference_info', 'order' => 'ASC','posts_per_page' => 2);?>
				<?php $reference_people = new WP_Query( $reference );  ?>
            <?php while ( $reference_people->have_posts() ) : $reference_people->the_post();?>
            <div class="refSec">
                <div class="clearfix">
                    <div class="profileImg">
                       <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>">
                    </div>
                    <div class="proDetails">
                        <a href="javascript:void(0)"><?php the_title(); ?></a>
                        <?php the_content(); ?>
                        <div class="proName"><?php the_field('profile_name'); ?></div>
                        <div class="designation"><?php the_field('designation'); ?></div>
                    </div>
                </div>
            </div>
             <?php endwhile; ?>
	    </section> <!-- /.content -->
    </div><!-- /.container -->
<?php
get_footer();
