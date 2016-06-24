
<?php

$loader=require 'vendor/autoload.php';
$loader->register();

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$request=Request::createFromGlobals();
$response=new Response();

switch($request->getPathInfo()){
case '/':
				$response->setContent('This is Homepage');
				break;
case '/about':
				$response->setContent('This is About page');
				break;
default:
				$response->setContent('Not Found');
				$response->setStatusCode(Response:HTTP_NOT_FOUND);
				}
$response->send();

?>
