<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

	<div class="container ">
		<?php $query = new WP_Query('page_id=10'); ?>
        <?php if($query->have_posts()): ?>
        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
        <section class="inner-banner">
            <div class="item">
                <img src="<?php the_field('banner_image'); ?>" alt="" />
                <div class="innerbannerCaption">
                    <h1 class="not-found-page"><?php _e( 'Oops! That page can&rsquo;t be found.', 'twentysixteen' ); ?></h1>
                </div>
            </div>
	    </section> <!-- / .banner -->
	    <?php endwhile; endif; ?>
		<section class="om-content">
            <div class="aboutSec">
                <div class="aboutDeatails">

			<!-- <section class="error-404 not-found">
				<div class="page-content">
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentysixteen' ); ?></p>

					<?php //get_search_form(); ?>
				</div>
			</section> -->
            </div>
		</div>
     </section>
		<?php //get_sidebar( 'content-bottom' ); ?>

	</div><!-- .content-area -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
