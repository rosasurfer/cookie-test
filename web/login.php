<?php
// login.php (talent)

use rosasurfer\util\PHP;
ob_start();

/** @var rosasurfer\Application $app */
$app = require(__DIR__.'/../app/init.php');

PHP::ini_set('session.use_strict_mode', true);  // enforce prevention of user-defined session ids

session_set_cookie_params([
    'lifetime' => 0,                            // The lifetime of the cookie in seconds.
    'path'     => '/',                          // The path where information is stored.
    'domain'   => 'rosasurfer.com',             // The domain of the cookie.
    'secure'   => true,                         // The cookie should only be sent over secure connections.
    'httponly' => true,                         // The cookie can only be accessed through the HTTP protocol.
    'samesite' => 'None',                       // Controls the cross-domain sending of the cookie.
]);
session_start();
?>
<!DOCTYPE html>
<html>
<head>
   <title>login (talent)</title>
</head>


<body>

talent (login.php)

</body>
</html>

<?php
ob_get_level() && ob_flush();
