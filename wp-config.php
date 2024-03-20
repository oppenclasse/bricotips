<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'bricotips' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '~:Lo(E8D?v=_p:rr|K!y+`0]3Z,U6P+cX+R;wE@QV({+x@]0X*dOw%Yp3yvUH!i+' );
define( 'SECURE_AUTH_KEY',  'Gn)zR79doS84+)}.kW?d67u+:h=thn_(0<X;4.R4IK^q+T%{)81[0uLQYUw6x|Gg' );
define( 'LOGGED_IN_KEY',    '#LE3~Z!|;+HCrmaPL(x4f9#}px tdH:W:.kJx4kgGA?f={0~@T)|H`)y:(*HdGyv' );
define( 'NONCE_KEY',        '92TG.!Z:_Mn7MVwn?B*WNJ-fs;4zwmD2N)lzzw4j@,C`n0)}!B9%8G`(FFr.Mh~X' );
define( 'AUTH_SALT',        '@L){t8m)Dtq^plXnD}8=ZP*jhFE:A{;;~1_-Z;N+e!^p|n#QrU6>-leM>JLTIp+8' );
define( 'SECURE_AUTH_SALT', 'K)(`_i,aiok^6%@tl4Rr,b$W=38qv[X19HRK7X&1zYYpx|92/VK==HrTWyc:?y>5' );
define( 'LOGGED_IN_SALT',   '0Q|5z;Tuq.AL9onq12RogH8r),d@ma{3j$p)9g*fY%GbB=3`QP7$`f^Kyft66%o0' );
define( 'NONCE_SALT',       '1RvZ{IpWDKmBTXqcD]}=8FGjX3v8khsvy|%z*|B}lviuA}=D%d%|3pXEu^GEr-oY' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
