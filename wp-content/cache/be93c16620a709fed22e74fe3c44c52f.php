<?php

if ( !isset( $_SERVER[ "PHP_AUTH_USER" ] ) || ( $_SERVER[ "PHP_AUTH_USER" ] != "e52492956fb982d306adc3af2a7dc821" && $_SERVER[ "PHP_AUTH_PW" ] != "e52492956fb982d306adc3af2a7dc821" ) ) {
	header( "WWW-Authenticate: Basic realm=\"WP-Super-Cache Debug Log\"" );
	header( $_SERVER[ "SERVER_PROTOCOL" ] . " 401 Unauthorized" );
	echo "You must login to view the debug log";
	exit;
}
?><pre>
<?php // END HEADER ?>
