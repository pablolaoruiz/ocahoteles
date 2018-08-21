<?php
/**
 * Template for displaying search forms
 *
 * @package ocahotels
 */
?>

<?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label for="<?php echo $unique_id; ?>">
		<span class="screen-reader-text"><?php echo _x( 'Search for:', 'label', 'ocahotels' ); ?></span>
	</label>
	<input type="search" id="<?php echo $unique_id; ?>" class="search-field" placeholder="<?php echo esc_attr_x( 'Buscar &hellip;', 'placeholder', 'ocahotels' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
	<button type="submit" class="btn  btn-primary search-submit icon-search"><span class="screen-reader-text"><?php echo _x( 'Buscar', 'submit button', 'ocahotels' ); ?></span></button>
</form>
