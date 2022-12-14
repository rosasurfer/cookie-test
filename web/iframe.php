<?php
// iframe.php (api)

ob_start();

/** @var rosasurfer\Application $app */
$app = require(__DIR__.'/../app/init.php');
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
   <title>iframe (api)</title>
</head>


<body>

api (iframe.php)

</body>
</html>

<?php
function _isSecure() {
    return !empty($_SERVER['HTTPS']) && !strCompareI($_SERVER['HTTPS'], 'off');
}

function _getHostname() {
    if (!empty($_SERVER['HTTP_HOST'])) {
        $httpHost = strtolower(trim($_SERVER['HTTP_HOST']));    // nginx doesn't set $_SERVER[SERVER_NAME]
        if (strlen($httpHost))                                  // automatically to $_SERVER[HTTP_HOST]
            return $httpHost;
    }
    return $_SERVER['SERVER_NAME'];
}

$protocol = _isSecure() ? 'https' : 'http';
$host     = _getHostname();
$port     = ':'.$_SERVER['SERVER_PORT'];
if ($protocol.$port=='http:80' || $protocol.$port=='https:443')
    $port = '';
$hostUrl = $protocol.'://'.$host.$port;

header('Access-Control-Allow-Credentials: true');
header('Access-Control-Allow-Origin: '.$hostUrl);

ob_get_level() && ob_flush();
