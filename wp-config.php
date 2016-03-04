<?php


// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'demo_wp3');

/** MySQL database username */
define('DB_USER', 'wp');

/** MySQL database password */
define('DB_PASSWORD', 'wp');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('AUTH_KEY',         'Wc>UP*qAkS&UI=m9XoZFY>]+@ -$FG ah;-Ztd ,|)~|C:K-J!_8p1H|FF335]2h');
define('SECURE_AUTH_KEY',  ':xndD_3%+g)17=K=kBg.reh%72PqWTj+r^sJJWXJ1#C?8qR O5XfD|Qe:t|=Q<?;');
define('LOGGED_IN_KEY',    '->8y|49;LAMT!6/+*eg%+$0EQ7PlxL|=81Xv-| Mb)TIRp:rh#E%gj[w-CI;~#>n');
define('NONCE_KEY',        '+*GCp[){-7_|XE})?sM]y2>>@5*]r9YOY,g_.|o0$l<j!1[|;.R]gv=ns+<.rm<j');
define('AUTH_SALT',        '=mv|Nc(93Jbgb*,7]l7T*>Rqt%y> 1L7QYI3wDVWsg~rV4j+JR++mD|._|Z)6f^y');
define('SECURE_AUTH_SALT', 'tV14o3>q3i/S`y1Lh_}meaXe&Wf>4!c<6W;KO$12uvgW$e|CarC|SK<Jag`ejp-9');
define('LOGGED_IN_SALT',   'Ei6nB hr(^O++9a@CXr~R!R+Hpr}Lj/_Z{LXAun<>/dM(k_+i 0}u?U&!<l2{yK/');
define('NONCE_SALT',       '/FfOu[2=[~hr:dzo`I]yOOKhp0r<pcgB|`1{c.n~Hi).gv06R]Zl5f-JyKAhlL#>');


$table_prefix = 'wp_';


define('WP_DEBUG', true);
define('WP_DEBUG_DISPLAY', false);
define('WP_DEBUG_LOG', true);
define('SCRIPT_DEBUG', true);
define('JETPACK_DEV_DEBUG', true);



/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
