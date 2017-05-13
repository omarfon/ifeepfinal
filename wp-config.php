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
define('DB_NAME', 'sensei');

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
define('AUTH_KEY', 'QJe0PMa_.B$n[2T~0KkF*ytvXi[AxbU)3A/E}>H]Vj%5@<~DpL%6n:K~84Oid}uB');
define('SECURE_AUTH_KEY', 'lv&yfVj1y_M65.qk639D`,/>,]<BrCxHG,$ItCi]2[|ic+8/[n5!RvvH~bYW7mI{');
define('LOGGED_IN_KEY', 'Wm^8>?yMrUK.co695~y&PL e *5[IAcPdKPhZ/#)D0DeB<)1=7|-O6e1FuZ.w)SE');
define('NONCE_KEY', ':i{NwG^Y[Wvhl0%4fJ+ziB**MxMu8M % W;VK~8nINxY:P5h8sdH8<LY%J5TxtFO');
define('AUTH_SALT', 'qJn85gK%uH[&X_G*BC`JQa:$J=}CSaRkH5HMD=sOmpbDyXK-&H,)|A6YMotGO ]E');
define('SECURE_AUTH_SALT', 'z{n$-sFYX`!^JTD)Pglb9m1X()|{|EdefOh[D `=b2y/Vop~e# ,@~s?F9cgf.,2');
define('LOGGED_IN_SALT', 'PF2&gWy.C(fo1HW(Y0[rPk]ky4C(Mb+2dxHjrkpB93Jy)c9r+9omq}pbUu^Wd<4*');
define('NONCE_SALT', 'ow*0^~hHPKR/Z-}zU?q!$-~*zttrl#R,q|ew#aPLR^Hmc-(}e~+>y~rX?Ncw^Jty');

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

