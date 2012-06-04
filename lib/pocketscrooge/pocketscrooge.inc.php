<?php
/*
 * Copyright (c) 2012, gibbonweb.net
 * All rights reserved.
 *
 */
namespace chq;
define('HYDROGEN_AUTOCONFIG_PATH',
	__DIR__ . '/../../config/hydrogen.autoconfig.php');
require_once(__DIR__ . '/../hydrogen/hydrogen.inc.php');

use hydrogen\autoloader\Autoloader;
Autoloader::registerNamespace('pocketscrooge', __DIR__);

?>
