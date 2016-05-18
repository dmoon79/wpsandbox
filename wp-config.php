<?php


// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wpsandbox');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('AUTH_KEY',         'mE|^lNCUSpx(f|Tg^[i^=BqYEP+>j4|I3zz$E|NrhHyYJ#-E$+FV S~3%p{t;`|=');
define('SECURE_AUTH_KEY',  'uZdk|neR#dIOMNJ(Y58($Am.pWfTa|aq@-YB#wr)X)]S2f|1EMjAK0^vX-5bM4}}');
define('LOGGED_IN_KEY',    'N)96m}nY$r&8PZd${3mj^%6`yCV*RCUg2k`&hzp&Y/uE;bKL1V3|3p>ktelYtPtg');
define('NONCE_KEY',        '+at5w;KLR@xb41|J;2r| *zxs37j$+R+fY|5dwms3#(.o)xLD`j! fqpYSe{N2TI');
define('AUTH_SALT',        ',kt5Q<.j|]64%=d<eS+v2++Z+-N?Fu0)_~D$2 Q/ywr`+b.rFIOX($o=Ob:jTO+R');
define('SECURE_AUTH_SALT', 'ih@;-#:&`llbZlHV5;N~Wh|8H[&-mvom>Wa/N~:_|t`#  K9ut2TGXw`G(C|C,BV');
define('LOGGED_IN_SALT',   '}|(Pf~6P.p,/,P~$|Vg7k|mX2SQl4gb[`[&9M&!<3mJdi`wXyas,nC4>&@Xn+XB~');
define('NONCE_SALT',       'nF^x&*)0vcr][P|Jvd/,?8]@[;ez{(:DTJ7UfKrQHC@K&Kbg*%9d4*R!V.0|.MhU');


$table_prefix = 'wp_';

define('WPLANG', '');




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
