<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package ocahotels
 */

get_header(); ?>

<div class="container content-interior">
      <div class="row">

        <div class="col-lg-8 col-xs-12 pd-t-40 pd-b-20">
          <div id="content" role="main">
              <?php
		if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( esc_html__( 'Resultados de búsqueda: %s', 'ocahotels' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			the_posts_navigation();

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

