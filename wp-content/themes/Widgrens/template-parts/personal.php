<?php
/**
 * Template Name: personal
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
<div class="container">
	<?php $query = new WP_Query('page_id=11'); ?>
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
        <section class="personal-content">
            <div class="row">
              <?php 
              $seminar = array( 'post_type' => 'personal_info', 'order' => 'ASC','posts_per_page' => -1);?>
				<?php $recnt_seminar = new WP_Query( $seminar );  ?>
            <?php while ( $recnt_seminar->have_posts() ) : $recnt_seminar->the_post();?>
                <div class="col-sm-4">
                  <div class="personal-col">
                      <div class="personalImg">
                          <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>">
                      </div>
                      <div class="personalDetails">
                          <h4><?php the_title(); ?></h4>
                          <h5><?php the_field('designation'); ?></h5>
                          <div class="personalPara">
                              <?php the_content(); ?>
                          </div>
                          <div class="personalBtn">
                       <?php  if(get_field('mail_link')) : ?>
                              <a href="<?php the_field('mail_link'); ?>" class="btn btn-info"><?php the_field('mail_text'); ?></a>
                           <?php endif; ?>   
                        <?php  if(get_field('vcard_link')) : ?>      
                              <a href="<?php the_field('vcard_link'); ?>" class="btn btn-deafult"><?php the_field('vcard_text'); ?></a>
                            <?php endif; ?>     
                          </div>
                      </div>
                  </div>
              </div>
              <?php endwhile; ?>
             </div>
	    </section> <!-- /.content -->
    </div><!-- /.container -->
<?php
get_footer();
