<?php
/*
 * Copyright (c) 2012, gibbonweb.net
 * All rights reserved.
 *
 */
require_once(__DIR__ . '/lib/pocketscrooge/pocketscrooge.inc.php');
use hydrogen\controller\Router;
use hydrogen\errorhandler\ErrorHandler;

// UTF-8
header("Content-Type: text/html; charset=utf-8");

// The following line enables our error handler.  During development, it's more
// convenient to have those ugly PHP errors appear in the browser (which the
// error handler prevents), so we'll leave this line commented until we go
// to production.
ErrorHandler::attachErrorPage();

// The following rules determine which controller is executed depending on
// the URL that was requested.  See the Router documentation for details.
// There's a great tutorial right at the top of the file!
$router = new Router();
$router->setGlobalOverrides(array(
	'controller' => '\pocketscrooge\controllers\%{controller|capfirst}Controller',
	'args' => Router::EXPAND_PARAMS
));
$router->request('/(:controller(/:function(/:*args)))', array(
	'controller' => 'index',
	'function' => 'index'
));
$router->catchAll(array(
	'controller' => 'error',
	'function' => 'error404'
));
// Now that the rules are set up, this line will tell the Router to load
// up the correct controller!  That's it-- index.php is done, and the
// controller will take it from here.
$router->start();
?>
