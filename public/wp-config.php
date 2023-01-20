if($_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https'){ $_SERVER['HTTPS'] = 'on'; $_SERVER['SERVER_PORT'] = 443; }
else { header("Location: https://VASADOMENA.cz".$_SERVER['REQUEST_URI']); }
define( 'WP_HOME', 'https://VASEDOMENA.cz' );
define( 'WP_SITEURL', 'https://VASEDOMENA.cz' );