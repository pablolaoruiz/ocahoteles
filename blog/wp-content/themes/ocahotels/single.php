<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ocahotels
 */

get_header(); ?>

<div class="container content-interior">
      <div class="row">

        <div class="col-lg-8 col-xs-12 pd-t-40 pd-b-20">
          <div id="content" role="main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_format() );

			the_post_navigation();
                        

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
          </div><!-- /#content -->
        </div>

        <?php get_sidebar(); ?>

      </div><!-- /.row -->
    </div><!-- /.container -->

<?php
get_footer();
