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
define( 'DB_NAME', 'wordpress2' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '#W?7$pe@V$EPS$/ :K2T40*C#&N5A){wj;ED.tdw:R4}S}U^.^>hasO,+U <W;-h' );
define( 'SECURE_AUTH_KEY',  '}4cHf[h&*;8@if-tIl0%,TN@ ,%8)QnrYP]<BULf+rBmDJ[ce8al(TnoX(2NZgw%' );
define( 'LOGGED_IN_KEY',    'P*lGQ5C.@0:x@;,ukQ=OtO2Xt6ae{<;J)*6MeWT=0ogCab3EJXb;Cig-{n:x]HT3' );
define( 'NONCE_KEY',        'P=1OeD#G$VWcRKiR2)=7 0kqa2FBFqy*8nk@iy^~E}McfFhA?.M.-}8ea&>~T=xU' );
define( 'AUTH_SALT',        'Rd+NPD4q=YBH?v%?gYTMHf#g(Ml~Xbe.%!<EE}:e#8DHdMajyz2PoPP5$BE.W.~a' );
define( 'SECURE_AUTH_SALT', '>hrbzvvC?-:1(ds8ULEpgfb,D^lC`I~zKxY;4wOZ&aAfQ0Tmqj(}W$(j{{luA_|)' );
define( 'LOGGED_IN_SALT',   'sE|za~Y+0#yzNKx(F:>]*?[/zQ&>bx5KMPxz;f(j(VnC+|~F{kM;OA) F6V{({5|' );
define( 'NONCE_SALT',       'VfsxJ+phOVr7Dr1p!E7pehX!pSAu(8Z^g.[?.iRQutXD5#A>Z+4VsLV&)Y{^h7.}' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_2';

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
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
