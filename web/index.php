<?php
ob_start();

/** @var rosasurfer\Application $app */
$app = require(__DIR__.'/../app/init.php');

function _getHostname(): string
{
    if (!empty($_SERVER['HTTP_HOST'])) {
        $httpHost = strtolower(trim($_SERVER['HTTP_HOST']));    // nginx doesn't set $_SERVER[SERVER_NAME]
        if (strlen($httpHost))                                  // automatically to $_SERVER[HTTP_HOST]
            return $httpHost;
    }
    return $_SERVER['SERVER_NAME'];
}

$host = _getHostname();
?>
<!DOCTYPE html>
<html>
<head>
   <title>index (eon)</title>
</head>


<body>

EON (index.php)
<br>
<br>
<br>
<br>

<iframe style="clear:both" src="https://<?=strStartsWith($host, 'local.') ? 'local.':''?>api.rosasurfer.com/iframe.php"></iframe>

</body>
</html>

<?php
ob_get_level() && ob_flush();
