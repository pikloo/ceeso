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
define( 'DB_NAME', 'ceeso' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'ceeso' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'c€€so_2024!' );

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
define( 'AUTH_KEY',         'n-xyLAb*gkP3Q&2Wse^LEPn7kpK:1v]{i@3 I{<vh3?lv0dra%>O{z}5 gxXSc3}' );
define( 'SECURE_AUTH_KEY',  'Vo;f@/X6YrIY+uN P2M@ Ds0b_j[9N@#+VB)|zIQ[3=hDy)I*Wc].Mc)-t_J+-zK' );
define( 'LOGGED_IN_KEY',    '(PS7+G4Pi#2V4KJyVtDz192qM:R]P*M2&2w%|k$nYh,-#/@mZ5M`;(N+c9DA^g<q' );
define( 'NONCE_KEY',        'JJH}RPa[XZM4|J5W?a]4{]*mwk4oB$HK`+r5k1QzS=KL1gi[kb9Rn=C$/U+6d9B>' );
define( 'AUTH_SALT',        'uLfn=dc}2,vQ?M8CnMS{cnNh@X2Z,sOH5iPfqyqpRi8A|vj<0hq<_c$;yC#8LC=A' );
define( 'SECURE_AUTH_SALT', 'S.x9nD8fHO5C-E#d4j@l:g,@U)2a4$3o{7uLk^IZT[6:so/jJs.IGdCGFgU $r2a' );
define( 'LOGGED_IN_SALT',   'NN;C?/gxp(czWM!c.d2o[/];yOkV|1!/X&AbA2BrqqPrlb^[ah`FYt 1$um]?e-;' );
define( 'NONCE_SALT',       '(Q0+t`ohX3b^*Ey^j.BbQ-hr!0z{~mU%d:P&)d)erL[Q<q:f;Z{FB|X)zy|^,zT$' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'ceeso_';

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
