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
define( 'DB_NAME', 'u461162523_bej_portfolio' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'u461162523_badrbej' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'K8z^8FF~9Wc=' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', '62.72.37.103' );

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
define( 'AUTH_KEY',         'F.Vg-M}ezuPzGjxfoi:`>/w8o-X@b*]c7]&bEyk|#3e/uW`+2EHmQuM!umZtv$t~' );
define( 'SECURE_AUTH_KEY',  'vOtFe+7QgNdk<|#`3hQ|q:_%|.7GbS3oNh:5!%X%?ft:qQ }mcgPAmHw|]2hNvt|' );
define( 'LOGGED_IN_KEY',    'Y6<b&cL)Bw>3:jSn-[vy5!XcZ`<w$Ldy>z=;s2)}zx43oNq2Ku0Hpm(q[o,z?`Wj' );
define( 'NONCE_KEY',        '/T?VSk1Jil8*S,w`+EtoS3s)pCA|KKYElu4F W^PN~|dbN5}~BW*5<QrU0]7IvQ[' );
define( 'AUTH_SALT',        '~J;eD,*,w4/xMd=nU#O]8cpu<db__Lx &/d.UBpkx@`<3Xcm,vdW@=[GC/EccMBM' );
define( 'SECURE_AUTH_SALT', 'Rt@PfdazW]%Z#oJv#zg;9-9s,S<p+S:D+7Rs/Jmj*`9_ EIEAek,-9Bp#MFBJ Yh' );
define( 'LOGGED_IN_SALT',   '#/DZ}U3;U/82M68B teaZbAKyE~UC^IQ_;k2}QaauFqLw&]f}KBS;,<c?=>U_2^]' );
define( 'NONCE_SALT',       '|=u:Voi+vo8-y_~-Bn)jY<Ng[Ntm+?DUk{`cbB!4#+)E7t5+m-nh1& K/#K9$@sv' );
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
