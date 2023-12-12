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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'koukaki' );

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
define( 'AUTH_KEY',         '(0Kx);O<1IV!w8[LC$0jJPU|f&D;udR*19eovP>K[:.bzO@0=c~Lo,<{{k|~pE=R' );
define( 'SECURE_AUTH_KEY',  'BaJiFA059$z4e7bS,}(Vn|faCG[L0E],xHWtlA`rDD~;^@uA%>zy>@,}J^ps,e=)' );
define( 'LOGGED_IN_KEY',    '_:U^6{N]~I%QX9UEkkHH4vdgs|~zQ5b:%vQ21-U&!(N-{a:mlCcosIIE?Al[]z1E' );
define( 'NONCE_KEY',        'Wi+9,xp&RBc.uikrbr0jX0v}*8bO#UHI$3#U53NDl|*;(E!p]wmb2&&mv(M?_rHj' );
define( 'AUTH_SALT',        '=J8dTmce(S[xFK;bb)G0]]!_%+0Py$r|6YB3#Cku -HR-(ENa#+(v/5AS6):|ck:' );
define( 'SECURE_AUTH_SALT', '!_y!lbCD) !oq](ng8:1}xKG=RfD!/.voLB%#rQgX8DA#^-V.c6MKrnO1Y,rKXe?' );
define( 'LOGGED_IN_SALT',   '].@T3hc,x6`O:+C6^tw3[MDZ|ghv 9dHB:J7Inud4 OOm7~9! GGy[  ?zTWDqj=' );
define( 'NONCE_SALT',       'CJyS&8,Qq_FKj G-l1gx~ZH>}>t(e6|$nprJBq*]c[7Rd~M@yrKp7%B|gE^K`[`S' );
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
 * Il est fortemment recommandé que les développeurs d’extensions et
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
