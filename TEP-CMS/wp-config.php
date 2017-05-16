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
define('DB_NAME', 'tep');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

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
define('AUTH_KEY', 'L2W5=@szpFl uULq5-~xI4_>?b35D(p0)BcQS/.HQ2o`mUUqt={5:ZZJ:3SCo5n%');
define('SECURE_AUTH_KEY', 'Q/V[?_kOg]AzDuyRjd^dpC%<waH<|pn|v;8NB_-}7_:mtf<?svC_v^x0g*Hyf@ 3');
define('LOGGED_IN_KEY', 'Np,.Duzi-c7Xe^JpW(g/(`(SL4oD 3<.;@_]J|eKth}F5)|v^hAi9j``%}%a4XEB');
define('NONCE_KEY', 'YBw!&P=in-Oj%e61IFp]93vHN.B-=*)kkOo5N4q~gZ:9WpN80BAYdLJJ|T]51Xnv');
define('AUTH_SALT', '?x6.GzR7j~~]M5GN#Y?]R}$u>=L c7/n6 =NtkA~+N*Z3viSVZ.;vQ]fi_Hu^5x3');
define('SECURE_AUTH_SALT', 'mNO_(&<FS1[~h.GW]8?kb3hnAe!U8d<=VwuVt}!r[s,lG^_t(ZI@At7BiPw_%k__');
define('LOGGED_IN_SALT', '_&dc`.rjfG^3hPtUhVK$d3k31]elFt(qrR,D|mlpyP@EWuE09O9I7:/1!2VecD;?');
define('NONCE_SALT', 'a4mbe~|D{5(u`FjwrKz(QiuqK))gJUcH_b|U;[}|,xqE/66[nYc=39WqVbhZG0kk');

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

