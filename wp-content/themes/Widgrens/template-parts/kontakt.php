<?php
/**
 * Template Name: kontakt
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
<?php $query = new WP_Query('page_id=12'); ?>
        <?php if($query->have_posts()): ?>
        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
<div class="container">
        <section class="inner-banner">
            <div class="item">
                <img src="<?php the_field('banner_image'); ?>" alt="" />
                <div class="innerbannerCaption">
                    <h1><?php the_title(); ?></h1>
                    <?php the_content(); ?>
                </div>
            </div>
	    </section> <!-- / .banner -->
        <section class="kontakt-content">
            <div class="clearfix">
                <div class="kontakt-col1">
                    <div class="kontaktDetails">
                        <?php the_field('widgrens_bokforingsbyra_ab'); ?>
                         </div>
                    <div class="kontaktDetails">
                       <?php the_field('contact_details'); ?>
                    </div>
                    <div class="kontaktDetails">
                        <div class="kontaktList">
                            <ul>
                            	<?php 	if( have_rows('contact') ):
                              while ( have_rows('contact') ) : the_row(); ?>
                                <li><a href="<?php the_sub_field('contact_medium'); ?>"><img src="<?php the_sub_field('contact_icon'); ?>" alt=""/><span><?php the_sub_field('contact_number'); ?></span></a></li>
                                <!-- <li><a href="mailto:noreply@domain.com"><img src="<?php bloginfo('template_url'); ?>/images/mail-icon.png" alt=""/><span>no-reply@domain.com</span></a></li>
                                <li><a href="javascript:void(0)"><img src="<?php bloginfo('template_url'); ?>/images/web.png" alt=""/><span>www.domain.com</span></a></li> -->
                             <?php  endwhile; endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="kontakt-col2">
                    <!-- <form>
                        <div class="inputWrap">
                            <input type="text" class="form-control" placeholder="Your Name"/>
                        </div>
                        <div class="inputWrap">
                            <input type="text" class="form-control" placeholder="Your Email"/>
                        </div>
                        <div class="inputWrap">
                            <input type="text" class="form-control" placeholder="Your Website"/>
                        </div>
                        <div class="inputWrap">
                            <textarea class="form-control" placeholder="Your Comments"></textarea>
                        </div>
                        <a href="javascript:void(0)" class="btn btn-outline">Submit</a>
                    </form> -->
                    <?php echo do_shortcode( '[contact-form-7 id="102" title="Contact Form"]' ) ?>
                </div>
            </div>
	    </section> <!-- /.content -->
    </div><!-- /.container -->
<?php endwhile; endif; ?>
<?php
get_footer();
