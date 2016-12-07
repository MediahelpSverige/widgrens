<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
<footer class="footer">
		<div class="container">
            <div class="footer-top clearfix">
                <div class="footerA">
                    <div class="footerLogo">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php the_field('footer_logo','26'); ?>" alt=""/></a>
                    </div>
                    <p><?php the_field('logo_text','26'); ?></p>
                </div>
                <div class="footerB">
                    <div class="footerTop-list">
                        <ul>
                        <?php 	if( have_rows('footer_contact','26') ):
                  while ( have_rows('footer_contact','26') ) : the_row();
                   if( get_row_layout() == 'footer_contact' ):   ?>
                            <li><span><?php the_sub_field('contact_medium','26'); ?>:</span><a href="<?php the_sub_field('contact_num','26'); ?>"><?php the_sub_field('contact_num','26'); ?></a></li>
                            <!-- <li><span>Dir:</span><a href="javascript:void(0)">018 - 517 101</a></li>
                            <li><span>Fax:</span><a href="javascript:void(0)">018 - 546 180</a></li> -->
                            <?php endif; endwhile; endif; ?>
                        </ul>
                    </div>
                </div>
                <div class="footerC">
                    <div class="footerTop-list">
                        <ul>
                            <?php the_field('footertop_list','26'); ?>
                        </ul>
                    </div>
                </div>
                <div class="footerD">
                    <a href="javascript:void(0)"><img src="<?php the_field('footer_diagram','26'); ?>" alt=""/></a>
                </div>
                <div class="footerE">
                    <p>Anmälan till Widgrens<br> Nyhetsbrev</p>
                    <div class="inputWrap">
                        <input type="text" class="form-control" placeholder="Enter you email"/>
                        <a href="javascript:void(0)" class="btn btnCustom"></a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="clearfix">
                    <div class="footer-list">
                    	<?php wp_nav_menu( array( 'theme_location' => 'footer', 'menu_class' => 'nav navbar-nav navbar-right') ); ?>
                    </div>
                    <div class="copy"><?php the_field('copyright_text','26'); ?></div>
                </div>

            </div>

</div><!-- /.container -->
	</footer><!-- /.footer -->

<?php wp_footer(); ?>
</body>
</html>
