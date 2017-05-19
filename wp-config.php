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

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'blablaweb');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'fh0jLRq&1fWU-Z2VHMufK9fqEWLn,[$mZ%a83sF.k<d1@AY1HUwQYcJ@FKE16MO6');
define('SECURE_AUTH_KEY',  '|iQgi&rKfttabsnX5wmktRS(5?bop835KH_wTxd[EmBYI6V~o8hM{u)8(s44wied');
define('LOGGED_IN_KEY',    '</$(c/b|dapTm*qc82j@*I!1Yac&KLWo@I.pLEA.A(6~K>D0%+2=5Mq!w>A8}TWe');
define('NONCE_KEY',        '3(qSm6@G6RFK*3|9]RD=+g-U?x,vEi+nN68H5gW ld4HqJ%^62{:;BUI-Yk=u:ZE');
define('AUTH_SALT',        'L`7SjzFhS3Z~Oi@1:79*@0EZE@dzzVn=@3vj*4jx3|%}vHids[o[w|P8@ZG)$G!V');
define('SECURE_AUTH_SALT', 'lBS2;Iy$ZXduQW4RM*UjRX+qtV`F]n|5]!oFs1fVRV+Hugjs[dTBI ZZTqvUp7Rj');
define('LOGGED_IN_SALT',   'VgI^,:r?EtTI<*7T-O]UJ^.r;yv0Ht_Lv#D<SBgigR[4?F5s|tcK5*5wy1#D)?ZF');
define('NONCE_SALT',       'p@r>d _{K&U(c[1%1Wblz|^sTI%[OeXypW5dfXn5^xiV^(.vGsr-wKo_16K$9g*J');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'bw_';

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

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');