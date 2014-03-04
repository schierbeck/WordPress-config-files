<?php
/**
 * Baskonfiguration f?r WordPress.
 *
 * Denna fil inneh?ler f?ljande konfigurationer: Inst?lningar f?r MySQL,
 * Tabellprefix, S?erhetsnycklar, WordPress-spr?, och ABSPATH.
 * Mer information p?{@link http://codex.wordpress.org/Editing_wp-config.php 
 * Editing wp-config.php}. MySQL-uppgifter f? du fr? ditt webbhotell.
 *
 * Denna fil anv?ds av wp-config.php-genereringsskript under installationen.
 * Du beh?ver inte anv?da webbplatsen, du kan kopiera denna fil direkt till
 * "wp-config.php" och fylla i v?dena.
 *
 * @package WordPress
 */

// Use these settings on the local server
if ( file_exists( dirname( __FILE__ ) . '/wp-config-local.php' ) ) {
  include( dirname( __FILE__ ) . '/wp-config-local.php' );
  
// Otherwise use the below settings (on live server)
} else {
 
  // Live Server Database Settings
  define( 'DB_NAME',     'client');
  define( 'DB_USER',     'client');
  define( 'DB_PASSWORD', 'password' );
  define( 'DB_HOST',     'localhost'  );
  
  // Overwrites the database to save keep edeting the DB
  define('WP_HOME','http://yourwebsite.com');
  define('WP_SITEURL','http://yourwebsite.com');
  
  // Turn Debug off on live server
  define('WP_DEBUG', false);
}

/** Teckenkodning f?r tabellerna i databasen. */
define('DB_CHARSET', 'utf8');

/** Kollationeringstyp f?r databasen. ?dra inte om du ? os?er. */
define('DB_COLLATE', '');

/**#@+
 * Unika autentiseringsnycklar och salter.
 *
 * ?dra dessa till unika fraser!
 * Du kan generera nycklar med {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Du kan n? som helst ?dra dessa nycklar f?r att g?ra aktiva cookies obrukbara, vilket tvingar alla anv?dare att logga in p?nytt.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '-v[[+Kto iciyabo+SMevB(Tu7~>s*gyyoPJL-@UzoluVw!+}pX// Y.OJaWFZ2M');
define('SECURE_AUTH_KEY',  'G:FWz69@eFX/u* B-9AV;-x$(mPi0t%,~|=?3Vd04s7}O0<S/ovjz|`JpbuRNvJ{');
define('LOGGED_IN_KEY',    'ai(N!@v k /.(Q7Ky:c-%dI:I(W Gd(z&T{o#JuBrrx@b:]C9ttr,fW5E%@r.$5H');
define('NONCE_KEY',        'MIS)n9.JBt|#+)/{^hIFo}A{OLey;`X9+DM2dB|NY}/DILk@q*[zM[~q+NdlU`3l');
define('AUTH_SALT',        'M=;kB{p+)kll]kui1,:^gfS`l!9DQb5VE=XNq.W>w(b/f#di>.{pLKlP/>I50{@4');
define('SECURE_AUTH_SALT', '<#k8K&CI5Pi[L08zy}>|N2b-,6(VzzZvlc@|TfsugqO_xfn|-+]l(!qpNhWmHKA|');
define('LOGGED_IN_SALT',   'R$m~g@<q%<JgZ_]6sWbN(>BXMfs)rs)4h(OCtb~:,Y})M:-Mg:_nJt+K5oaUO<z{');
define('NONCE_SALT',       '@K%fHS{c8H^qlnJ/vP/<GO>+Mt|`P fweG>6PfHNq^|/Ka,rk1mAtZ{#1LMqgZJo');

/**#@-*/

/**
 * Tabellprefix f?r WordPress Databasen.
 *
 * Du kan ha flera installationer i samma databas om du ger varje installation ett unikt
 * prefix. Endast siffror, bokst?er och understreck!
 */
$table_prefix  = 'rAw1337_';

/**
 * WordPress-spr?, f?rinst?lt f?r svenska.
 *
 * Du kan ?dra detta f?r att ?dra spr? f?r WordPress.  En motsvarande .mo-fil
 * f?r det valda spr?et m?te finnas i wp-content/languages. Exempel, l?g till
 * sv_SE.mo i wp-content/languages och ange WPLANG till 'sv_SE' f?r att f?sidan
 * p?svenska.
 */
define('WPLANG', 'sv_SE');

/** 
 * F?r utvecklare: WordPress fels?kningsl?e. 
 * 
 * ?dra detta till true f?r att aktivera meddelanden under utveckling. 
 * Det ? rekommderat att man som till?gsskapare och temaskapare anv?der WP_DEBUG 
 * i sin utvecklingsmilj?. 
 */ 
define('WP_DEBUG', false);

/* Det var allt, sluta redigera h?! Blogga p? */

/** Absoluta s?kv? till WordPress-katalogen. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Anger WordPress-v?den och inkluderade filer. */
require_once(ABSPATH . 'wp-settings.php');
