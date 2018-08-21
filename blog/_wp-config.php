<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'wp_ocahotels');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'root');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '&Y085Hs<exb8V/bn;]`(+!GdcDBQInc{U-5E%#aV302:Cobs)llIXBQb$v77jA*%');
define('SECURE_AUTH_KEY', 'nFr%sAT_czalEo[W99g_$=rAt]1rd v|i/]Pjgn*2.uEAe7t7g]1HlJFGN`#-=ui');
define('LOGGED_IN_KEY', 'g9>:{tM_iYC{lo:`smR/IL|:-=!(e(88F5f!sd4fF8IedNHq; N)N^05F.z}|vs-');
define('NONCE_KEY', 'N47i!X}j(~emi;y;QipH4l>84zni3k4C4POC|PQGEC#!nF5tQ5B.?d34N! 6iR[,');
define('AUTH_SALT', '#S1V}..DBN!}-@GL665}D9je#,~-=Aw{fM.7).:B!uCkAuD?S.wmQR7eFPe{G1@M');
define('SECURE_AUTH_SALT', 'Rg!7(12b2N*=i7>ueL/bZ{03$c:5.wQ%r?;B_bxw8bH[8)/M?Y9DQsL =MNGY@&7');
define('LOGGED_IN_SALT', '3[gH{NbU7]G}gen(`DV4{b%;0{(o}wh<tdW ;PfeFjrFLCn6?jmmNzkBH8K$<!8N');
define('NONCE_SALT', 'EV.AD4UQy%Q:<GNABUq.7z-5-$VPR94bKk96,@P.;_yhW21wfc84S(P`##7dS.(x');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

