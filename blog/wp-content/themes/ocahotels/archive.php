<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ocahotels
 */

get_header(); ?>

<div class="container content-interior">
      <div class="row">

        <div class="col-lg-8 col-xs-12">
          <div id="content" role="main">

		<?php
		if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h2 class="page-title">', '</h2>' );
					the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;
                        
			the_posts_navigation();
                        //the_page_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

          </div><!-- /#content -->
        </div>

        <?php get_sidebar(); ?>

      </div><!-- /.row -->
    </div><!-- /.container -->

<?php
get_footer();
