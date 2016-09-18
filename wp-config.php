<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'wp_woocommerce');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N'y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ' f1l*:$yA*^P@3h,Z@=sWS$`@4bH0n,NnwO!Wub@{![zqf=x[&?et<)IWm5BQR_7');
define('SECURE_AUTH_KEY',  '5oS:_sGJlHYXdz5@g-J/bMdF2mI..A0dl[6q%^[p{5,d*|M:41T!zydo@938z3gr');
define('LOGGED_IN_KEY',    'T.(Rb;.+l96=Uus<!G{PTAEeW6}c2%<$0B%9C83#<|#D+!jUPCZIr2p!NxU8oUuy');
define('NONCE_KEY',        ',@[[GM?PVow8&`]qXH7+[2yXW^ZlJDT^yD^HV3S*?OwG@6r46l2:$@l[z|tq*u~S');
define('AUTH_SALT',        '*%q$Qav 3y%pre&*BZW8PHK#_}iRDVR1Wqfp>T<pEv;{Yf^ldE@r:(~Cv?O:cF4!');
define('SECURE_AUTH_SALT', 'J:GWdcOmazDoJ*!Em*;1;lELaS`6z&QLV=ITfm}N>^7{NyM}}r<KZOJ5o;pWNeWZ');
define('LOGGED_IN_SALT',   'bmkD_Tf9x%>%im/rXli`eKCSX-&;t(8(X4MKcIe@x^t3Fx%^z2Jg7-:ifc+HW5H$');
define('NONCE_SALT',       '-gSj_2(nj[4Ilw3>CiZPC<.mj95I7^egAGL*k]~qEji9M}V]~Z>&FP0EV9TNUhro');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d'information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 * 
 * @link https://codex.wordpress.org/Debugging_in_WordPress 
 */
define('WP_DEBUG', false);

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');