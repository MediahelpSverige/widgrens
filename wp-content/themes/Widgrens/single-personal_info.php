<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
<?php $post_id-get_the_ID(); ?>
<div class="container">
	<section class="inner-banner">
            <div class="item_post">
                <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>"> 
                <div class="innerbannerCaption">
                   
                  
                </div>
            </div>
	    </section>
	    <section class="om-content inner_post">
            <div class="aboutSec">
                <div class="aboutDeatails">
                    <div class="omAbout-first">
                         <h2><?php the_title(); ?></h2>
                         <?php echo get_post_field('post_content', $post_id); ?>
                    </div>
                   
                </div>
            </div>
	    </section> 
	</div>

<?php get_footer(); ?>
