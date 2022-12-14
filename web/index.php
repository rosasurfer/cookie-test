<?php
ob_start();

/** @var rosasurfer\Application $app */
$app = require(__DIR__.'/../app/init.php');
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
<iframe style="clear:both" src="https://local.api.rosasurfer.com/iframe.php"></iframe>

</body>
</html>

<?php
ob_get_level() && ob_flush();
