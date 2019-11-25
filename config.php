<?php
ini_set( "display_errors", true );
date_default_timezone_set( "Africa/Douala" ); //timezone
define( "DB_DSN", "mysql:host=localhost;dbname=cms" ); 
define( "DB_USERNAME", "root" );
define( "DB_PASSWORD", "webmaster@action2019" );
define( "CLASS_PATH", "classes" );
define( "TEMPLATE_PATH", "templates" );
define( "HOMEPAGE_NUM_ARTICLES", 5 ); //# articles dispaly on homepage
define( "ADMIN_USERNAME", "admin" );
define( "ADMIN_PASSWORD", "mypass" );
require( CLASS_PATH . "/Article.php" );

function handleException( $exception ) {
  echo "Sorry, a problem occurred. Please try later.";
  error_log( $exception->getMessage() );
}

set_exception_handler( 'handleException' );
?>
