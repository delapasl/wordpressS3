<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

define('WP_HOME', 'http://localhost/wordpress/wordpress');

define('WP_SITEURL', 'http://localhost/wordpress/wordpress');

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wplaureendelapas' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '@DDJHHK@?^)Kq]un5V{WT9~%xOExa;?y/q*I%^#]mh!BHec4Y+,#>X>=Kt3$3oLJ' );
define( 'SECURE_AUTH_KEY',  '8S0!eG)]GrBR_AVT4^/JnNFwa]!9tJ!@`VwRJ5v]`_||<v7EP`V5TeL}nC(>#grW' );
define( 'LOGGED_IN_KEY',    'L{d,c/:hv{W4LOzIV`J)S %E/kMeW2:,8@6h0tVK~@cjg7.O=q;/KO6L^zp4Xq($' );
define( 'NONCE_KEY',        '&J?1T{aSYQ^9JSe(Fj4V^(K~pLP{j@J]vXKU~YfUY7kii2aY@uNxrLfI:5r FlML' );
define( 'AUTH_SALT',        'h?1B7Pi39X:l5R>i%pIJj^K3BQ(?l=C5vKm_KZ-3O^|blv.41-IOd=trG>oq;Xo6' );
define( 'SECURE_AUTH_SALT', 'o-58h>_qESLQY>SWyiV[/2,p67Wl/(RjRYhqo<+Sy-]!1>a)@am+5[b0vO lIssT' );
define( 'LOGGED_IN_SALT',   'G.&-0~*w[!QQ%YDkzu&LJsc@C2I@/TYFlIZ40M=-,98Pz,8qwOgDZ:Q5+h#9mA^!' );
define( 'NONCE_SALT',       'rbZYbW2R*Hzc)FL-*!UF6|CH`F@/.OA=A3dpGMF[m:e>r+i!mmGrj3/A{Cu:sZ@j' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
