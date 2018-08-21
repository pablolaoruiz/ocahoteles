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
define('DB_NAME', 'galeriaoouwp');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'galeriaoouwp');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '0caWP0788DD');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'galeriaoouwp.mysql.db');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY', 'sW4Q(d!k((|-l8pr<_(fV9g]#1XOke/v<HsI.^~H)Hx#3=bqR%SLc~qc,Q2]q~$m');
define('SECURE_AUTH_KEY', 'K/XCfAQ0=ho<nB=+5)_v?MC,>7qqdeT?6wj+0%fW)]9u/x K^<[~:}o)|PlaIc@}');
define('LOGGED_IN_KEY', 'e?ZL]%E`jeof.67/<-0VqL$y,v RLk5xPJ;YjQe4_e|}mW[UPPomBDYXQsJ$&T[x');
define('NONCE_KEY', '-h!};@GhN{%Fa6J6){r!h&8 X+n59];={r{Qan1+c]X7E1.d:ehB5v9G3)^fm42A');
define('AUTH_SALT', '&D?Gd%v]9hH1Wl/&$ :R=}-s|_iy.$:h D1HrmKLPOm/0uAf|@eNT=dwQys=mT:_');
define('SECURE_AUTH_SALT', 'AlPA<er(.q#JG>W}0`m9+!-U~pI09PXg ,W?Q,[&V3+xRvn~^n5ojbrY>4&zMXQ:');
define('LOGGED_IN_SALT', '3?obo[&K1w_W:6ThN9fv[{9eB%>2(B|<6g*>IE|,<uVGvWfk%]^YS>ii/iMEY+4!');
define('NONCE_SALT', 'bj1KpA~[T2<<A:IG%_ri05+,I3L!xg941iKExgz*?[Pl_R;%/N[|%9}Tf+%PJMDP');

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

