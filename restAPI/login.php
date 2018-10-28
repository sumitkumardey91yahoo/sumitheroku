<?php

header('Content-Type:application/json');
if (($_SERVER['PHP_AUTH_USER'] !== 'sumit') && ($_SERVER['PHP_AUTH_PW'] !== 'sumitpw')) {
    header('WWW-Authenticate: Basic realm="My Realm"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Text to send if user hits Cancel button';
    exit;
}

function rest_get($request)
{
 echo " i am get";
}


//First check what is the method
if(!isset($_SERVER['REQUEST_METHOD']) || !isset($_SERVER['REQUEST_URI']))
{

	HTTPFailWithCode(400,'HTTP Method or request URI is not set');
}

$method = $_SERVER['REQUEST_METHOD'];
$request = $_SERVER['REQUEST_URI'];

switch($method)
{
	case 'GET':
		rest_get($request);
		break;
	default:
		rest_error($request);
		break;
}

exit(0);
?>
