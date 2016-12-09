<?php
/**
 * Template Name: tjanster
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
<?php //$id= get_the_ID(); ?>
<?php // $query = new WP_Query('page_id='.$id); ?>
        <?php if(have_posts()): ?>
        <?php while ( have_posts() ) : the_post(); ?>
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
        <section class="tjanster-content tjanster-contentPart">
            <div class="aboutSec">
                <div class="row">
                    <div class="col-md-9">
                        <div class="inner-aboutSec">
                        <div class="aboutDeatails">
                            <?php the_field('content'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                       <div class="listCol">
                    <div class="listHeading">
                        <h4>Ekonomisk rådgivning</h4>
                    </div>
                    <div class="listBody">
                        <ul>
                            <li><a href="javascript:void(0)">Anställningsavtal</a></li>
                            <li><a href="javascript:void(0)">MBL Förhandlingar</a></li>
                            <li><a href="javascript:void(0)">Hyresavtal</a></li>
                            <li><a href="javascript:void(0)">Kund och leverantörsavtal</a></li>
                            <li><a href="javascript:void(0)">Transportkalkyler</a></li>
                            <li><a href="javascript:void(0)">Investeringskalkyler</a></li>
                        </ul>
                    </div>
                </div>
                    </div>
                </div>
            </div>
	    </section> <!-- /.content -->
    </div><!-- /.container -->
    <?php endwhile; endif; ?>
<?php
get_footer();
