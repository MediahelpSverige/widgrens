<?php
/**
 * Template Name: home page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
<div class="container">
	<?php $query = new WP_Query('page_id=4'); ?>
        <?php if($query->have_posts()): ?>
        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
        <section class="banner owl-carousel">
        	<?php 	if( have_rows('banner') ):
                  while ( have_rows('banner') ) : the_row();
                   if( get_row_layout() == 'banner' ):   ?>
            <div class="item">
                <img src="<?php the_sub_field('banner_image'); ?>" alt="" />
                <div class="bannerCaption">
                    <?php the_sub_field('banner_text'); ?>
                    <a href="<?php the_sub_field('link'); ?>" class="btn btn-outline">Läs mer</a>
                </div>
            </div>
            <?php endif; endwhile; endif; ?>
	    </section> <!-- / .banner -->
	    <?php endwhile; endif; ?>

        <section class="content">
        <?php query_posts('post_parent=4&order=ASC&post_type=page'); ?>
		<?php if(have_posts()): ?>
         <?php while ( have_posts() ) : the_post(); ?>
            <div class="aboutSec">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="aboutPic-sec">
                            <div class="aboutPic">
                                <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>">
                            </div>
                            <div class="aboutPicS">
                                <img src="<?php the_field('secondary_image');  ?>" alt=""/>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="aboutDeatails">
                            <h2><?php the_title(); ?></h2>
                            <p><?php the_content(); ?></p>
                            <a href="<?php the_field('button_link'); ?>" class="btn btn-outline">Läs mer</a>
                        </div>
                    </div>
                </div>
            </div>
             <?php  endwhile; endif; ?>
            <div class="secForm">
                  <div class="secForm-para">
                    <h2><?php the_field('mittentext_-_titel',4); ?></h2>
                    <p><?php the_field('mittentext_-_text',4); ?></p>
                    </div>
                    <div class="row">
                        <div class="innerForm-sec">

													<?php $query = new WP_Query('page_id=70'); ?>
										<?php if($query->have_posts()): ?>
										<?php while ( $query->have_posts() ) : $query->the_post(); ?>

											<?php endwhile; endif; ?>
                             <div class="col-sm-4">
                                 <div class="form-secA">
                                     <div class="innerForm-secPic">
                                         <img src="<?php bloginfo('template_url'); ?>/images/formPic1.jpg" alt=""/>
                                     </div>
                                     <div class="innerForm-secAb">
                                         <h4>Tjänster</h4>
                                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce neque erat, tempor quis vulputate non, lacinia et nisi. Nunc nec ante lacus. Duis nec nisl tempor, laoreet mi sodales, aliquet nulla. Phasellus quis auctor purus, id consequat purus. Proin lectus felis, faucibus semper convallis et, faucibus in eros. Donec imperdiet, ex a dapibus</p>
                                     </div>
                                     <div class="nex-btn clearfix">
                                        <a href="javascript:void(0)"><img src="<?php bloginfo('template_url'); ?>/images/next-icon.png" alt=""/></a>
                                    </div>
                                 </div>
                             </div>
                             <div class="col-sm-4">
                                 <div class="form-secA">
                                     <div class="innerForm-secPic">
                                         <img src="<?php bloginfo('template_url'); ?>/images/formPic2.jpg" alt=""/>
                                     </div>
                                     <div class="innerForm-secAb">
                                         <h4>Referenskunder</h4>
                                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce neque erat, tempor quis vulputate non, lacinia et nisi. Nunc nec ante lacus. Duis nec nisl tempor, laoreet mi sodales, aliquet nulla. Phasellus quis auctor purus, id consequat purus. Proin lectus felis, faucibus semper convallis et, faucibus in eros. Donec imperdiet, ex a dapibus</p>
                                     </div>
                                     <div class="nex-btn clearfix">
                                        <a href="javascript:void(0)"><img src="<?php bloginfo('template_url'); ?>/images/next-icon.png" alt=""/></a>
                                    </div>
                                 </div>
                             </div>
                             <div class="col-sm-4">
                                 <div class="form-secA form-secA-cus">
                                     <h4><?php the_field('formular_titel', 4); ?></h4>
                                     <p><?php the_field('formular_text', 4); ?></p>

                                     <?php echo do_shortcode( '[contact-form-7 id="203" title="Home contact"]' ) ?>
                                 </div>
                            </div>
                        </div>
                    </div>
            </div>

            <div class="secBlog">
            	<?php $query = new WP_Query('page_id=70'); ?>
        <?php if($query->have_posts()): ?>
        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                <div class="text-center">
                    <h2><?php  the_title(); ?></h2>
                </div>
                <div class="blogLatest">
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="blog-sec">
                                <div class="blog-bigPic">
                                    <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>">
                                </div>
                            </div>
                        </div>
                           <?php  endwhile; endif; ?>
                        <div class="col-sm-7">
                        	<div class="blog-det blog-detC">
														<div class="author-text">
									
                                   <?php the_content(); ?>
														</div>
                                       <?php if(get_field('author_name', 70)) { ?><span class="author"><?php echo get_field('author_name', 70); ?></span><?php } ?>
                                </div>
                            <!-- <div class="blog-list clearfix">
                                <div class="blog-pic">
                                    <img src="<?php bloginfo('template_url'); ?>/images/blog-pic2.jpg" alt=""/>
                                </div>
                                <div class="blog-det">
                                    <a href="javascript:void(0)">Lorem ipsum dolor sit ame</a>
                                    <p>Lorem ipsum dolor sit amet, consec adipiscing elit. Curabitur quis quam eget.
                                       sapien porta congue quis eu leo. </p>
                                </div>
                            </div> -->
                            <!-- <div class="blog-list clearfix">
                                <div class="blog-pic">
                                    <img src="<?php bloginfo('template_url'); ?>/images/blog-pic3.jpg" alt=""/>
                                </div>
                                <div class="blog-det">
                                    <a href="javascript:void(0)">Lorem ipsum dolor sit amet, consectetur</a>
                                    <p>Lorem ipsum dolor sit amet, consec adipiscing elit. Curabitur quis quam eget.
                                       sapien porta congue quis eu leo. </p>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>

	    </section> <!-- /.content -->
    </div><!-- /.container -->


<?php
get_footer();
