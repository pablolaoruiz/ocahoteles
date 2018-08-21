<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ocahotels
 */
?>
<?php if ( is_active_sidebar( 'sidebar-1' )  ) : ?>
	<aside id="secondary" class="sidebar widget-area" role="complementary">
            <div class="col-lg-4 hidden-md blog-sidebar pd-l-60 pd-t-115 pd-b-20">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
            </div>
	</aside><!-- .sidebar .widget-area -->
<?php endif; ?>
