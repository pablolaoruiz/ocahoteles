<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ocahotels
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head(); ?>
 <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-55370050-1', 'auto');
        ga('send', 'pageview');
      </script>
</head>



<body <?php body_class(); ?>>
    
    <?php
        global $ROOT;
        
        $class_menu = "menu-interior";
        include_once dirname(ABSPATH) . '/templates/ocahoteles/main/tmpl_menu.inc';
        include_once dirname(ABSPATH) . '/templates/ocahoteles/main/tmpl_buscador_horizontal.inc';
    ?>
    
    <?php if ( has_nav_menu( 'menu-1' ) ) { ?> 
    <nav class="navbar-blog navbar navbar-inverse pd-l-20 pd-r-20" role="navigation" style="background-color: #7f7f7f; border-color: #7f7f7f;">
        <!-- El logotipo y el icono que despliega el menú se agrupan
             para mostrarlos mejor en los dispositivos móviles -->
        <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle icon-plus txt-180" data-toggle="collapse" data-target=".navbar-menu1-collapse" style="color: white;">
              </button>
              
            </div>

            <!-- Agrupar los enlaces de navegación, los formularios y cualquier
                 otro elemento que se pueda ocultar al minimizar la barra -->
            <div class="collapse navbar-collapse navbar-menu1-collapse">
              <?php
                  wp_nav_menu( array(
                    'theme_location'      => 'menu-1',
                    'menu_id'             => 'primary-menu',
                    'items_wrap'          => '<ul id="%1$s" class="nav navbar-nav txt-130 %2$s">%3$s</ul>'
                  ) );
              ?>
            </div>
        </div>
    </nav>
    <?php } ?> 
    
<div id="page" class="site">
  
    <div class="container" id="content">
        
        <?php if ( has_nav_menu( 'menu-2' ) ) { ?>
        
        <section class=" color-primario pd-t-20 pd-b-20" style="background-color: #f3f3f3">
            <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menu2-collapse">
            <span class="sr-only">Desplegar navegación</span>
            <span class="icon-plus btn-success pd-b-10 pd-t-10 pd-l-13 pd-r-13"></span>
          </button>

        </div>
            <div class="container pestana-hotel pd-l-0 pd-r-0">
                <div class="row">
                    <div class="col-xs-12 ps-rel pd-l-0 pd-r-0" >
                        <div class="collapse navbar-collapse navbar-menu2-collapse">
                        <?php
                            wp_nav_menu( array(
                              'theme_location'      => 'menu-2',
                              'menu_id'             => 'secondary-menu',
                              'items_wrap'          => '<ul id="%1$s" class="nav navbar-nav %2$s">%3$s</ul>'
                            ) );
                        ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php } ?> 
