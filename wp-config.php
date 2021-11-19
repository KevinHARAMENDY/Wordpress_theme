<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'manguo' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'z,6V#?[_D%E(Z^+AFuxwx3vV#GntP[Rc~f06nip~K2XHZ[gS(G0*$ TVujKJzef7' );
define( 'SECURE_AUTH_KEY',  'slIXlKm`?HoV5!bu;9(h2$803],P/p$h:uVP!+jMsr;6ATYbG&E+G&eR:9^gWChf' );
define( 'LOGGED_IN_KEY',    'BZLTNXthNECGn6e&r*2=;}II[b]HzMc75jJ6[|2QVVbP&T}*-gjBPV:Y|$O!?0EG' );
define( 'NONCE_KEY',        '&q2q~HC%,9&>Qt7#eXz3WmV&+H4>UH_kgv^i2MDU?Hkp_QGNayv]_6nDe+-#yN$}' );
define('WP_PROXY_HOST', '10.136.0.248');
define('WP_PROXY_PORT', '8080');
define('WP_PROXY_USERNAME', '');
define('WP_PROXY_PASSWORD', '');
define('WP_PROXY_BYPASS_HOSTS', 'localhost');
define( 'AUTH_SALT',        ':3jJBr9oww46 6<]={HEy a>4e^{wf]}]iq0)Fn=HfeWspYoAD]]:bCom%g/J43[' );
define( 'SECURE_AUTH_SALT', 'a,ElfTeed_==lstJE$E|2tsYUFckV3ITglQ> A]>uH(AFEc?Am[T@~!)+SAbOK6/' );
define( 'LOGGED_IN_SALT',   'M2`aVy<0eoYvD4D5Gb:>iPUV[*:~9&Ak?%lrpY5El&#=?o=qj,0H-P^:EP@^QL_F' );
define( 'NONCE_SALT',       'Q&n]4t`3025C?5HJ^s_6IFGj6[5iOb9Es2lL]eBXe[*O]e9V0MA4x+/!#FL*}w31' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'man_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
