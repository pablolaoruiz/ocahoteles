<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ocahotels
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_single() ) :
			the_title( '<h2>', '</h2>' );
		else :
			the_title( '<h3><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
                    <?php if ( has_post_thumbnail() ) { ?>
                        <?php if ( is_single() ) { ?>
                                <img class="img-responsive" src="<?php the_post_thumbnail_url(); ?>" alt="">
                        <?php } else { ?>
                                <a href="<?php echo get_permalink( $post->ID ); ?>" rel="bookmark"><img class="img-responsive" src="<?php the_post_thumbnail_url(); ?>" alt=""></a>
                        <?php } ?>
                    <?php } ?>           
                    <?php ocahotels_posted_on(); 
                              
                    ?>
                    
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
                    if ( is_single() ) {
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continuar leyendo %s <span class="meta-nav">&rarr;</span>', 'ocahotels' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Páginas:', 'ocahotels' ),
				'after'  => '</div>',
			) ); ?>
                        
                        <div class="txt-130 mg-t-30 mg-b-30 font-light " style="width: 100%">
                            <hr>
                            <?php if(has_category()) { ?>
                            <span>Categorías: </span> <?php the_category(", ");?><br>
                            <?php } ?>
                            <?php if(has_tag()) { ?>
                            <span>Tags: </span> <?php the_tags(", ");?>
                            <?php } ?>
                        </div>
                            
                            
                        
                        
                    <?php } else {
                        the_excerpt();
                    }
		?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->
