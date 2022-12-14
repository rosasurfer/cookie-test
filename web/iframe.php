<?php
use function rosasurfer\strCompareI;
use function rosasurfer\strLeftTo;

ob_start();

/** @var rosasurfer\Application $app */
$app = require(__DIR__.'/../app/init.php');

$referrer = strLeftTo($_SERVER['HTTP_REFERER'] ?? '', '/', 3);
if ($referrer) {
    header('Access-Control-Allow-Origin: '.$referrer);
    header('Vary: Origin');
}
header('Access-Control-Allow-Credentials: true');
?>
<!DOCTYPE html>
<html>
<head>
   <title>iframe (api)</title>
</head>


<body>

api (iframe.php)

</body>
</html>

<?php
ob_get_level() && ob_flush();
