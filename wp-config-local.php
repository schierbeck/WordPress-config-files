<?php 
// Local server settings
 
// Local Database
define('DB_NAME', 'database');
define('DB_USER', 'username');
define('DB_PASSWORD', 'password');
define('DB_HOST', 'localhost');
 
// Overwrites the database to save keep edeting the DB
define('WP_HOME','http://local.site.se');
define('WP_SITEURL','http://local.site.se');
 
// Turn on debug for local environment
define('WP_DEBUG', true);
