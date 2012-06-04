<?php
/*
 * Copyright (c) 2012, gibbonweb
 * All rights reserved.
 */
namespace pocketscrooge\controllers;

use hydrogen\config\Config;
use hydrogen\controller\Controller;
use hydrogen\view\View;
use hydrogen\database\Query;

class IndexController extends Controller {
	//protected $logged_in = false;
	
	public function index() {
		View::load('default', array(
			'title' => Config::getRequiredVal('general', 'site_title'),
			'app_url' => Config::getRequiredVal('general', 'app_url'),
			'reload' => rand()/*,
			'user'	=> $user*/
		));
	}
}

?>
