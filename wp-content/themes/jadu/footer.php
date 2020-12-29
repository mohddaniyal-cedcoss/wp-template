<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package jadu
 */

?>
 <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <ul class="social-icons">
           <?php wp_nav_menu( array( 'Secondary Navigation' => 'new-menu' ) ); ?>
            </ul>
          </div>
          <div class="col-lg-12">
            <div class="copyright-text">
              <p><a href="<?php echo esc_url( __( 'https://wordpress.org/', 'jadu' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Copyright 2020 %s', 'jadu' ), 'jadu' );
				?>
			</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>

<?php wp_footer(); ?>

</body>
</html>
