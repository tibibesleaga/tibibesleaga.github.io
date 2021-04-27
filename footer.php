<?php
/**
 * @package WordPress
 * @subpackage Fast_Blog_Theme
 * @since Fast Blog 1.0
 */
?>

          <div class="clear"></div>

        </div>
        <!-- END MAIN -->

        <div class="line full"></div>

        <!-- BEGIN FOOTER -->
        <div id="footer" class="container">
          <p id="copyright">
            <?php
              if ( $footer = fastblog_get_option( 'footer' ) ):
                echo $footer;
              else:
            ?>
            &copy; <?php echo date( 'Y' ); ?> <a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
            <?php endif; ?>
          </p>
          <?php wp_nav_menu( array
          (
            'theme_location' => 'nav-menu-footer',
            'container' => '',
            'menu_class' => '',
            'depth' => 1,
            'fallback_cb' => create_function( '', 'fastblog_nav_menu("'.fastblog_get_option( 'menu/content/footer' ).'", 1);' )
          ) ); ?>
        </div>
        <!-- END FOOTER -->

      </div>
      <!-- END INNER WRAPPER -->

    </div>
    <!-- END WRAPPER -->

    <?php wp_footer(); ?>

  </body>
  <!-- END BODY -->

</html>