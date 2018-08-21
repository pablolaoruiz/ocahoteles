<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ocahotels
 */

?>

	</div><!-- #content -->
        

	<?php
            global $ROOT;
            include_once dirname(ABSPATH) . '/templates/ocahoteles/main/tmpl_newsletter.inc';
            include_once dirname(ABSPATH) . '/templates/ocahoteles/main/tmpl_footer.inc';
            include_once dirname(ABSPATH) . '/templates/ocahoteles/main/tmpl_pop_up_buscador.inc';
        ?>

<?php wp_footer(); ?>

</body>
</html>
