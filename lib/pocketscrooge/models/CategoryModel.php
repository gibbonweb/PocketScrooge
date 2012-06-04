<?php
/*
 * Copyright (c) 2012, gibbonweb
 * All rights reserved.
 */
namespace pocketscrooge\models;
use hydrogen\model\Model;
use hydrogen\database\query;
use pocketscrooge\sqlbeans\CategoryBean;

class CategoryModel extends Model {
	protected static $modelID = 'cm';
	
	public function getCategory($id) {
		$q = new Query("SELECT");
		$q->where("id = ?", $id);
		$q->limit(1);
		$cat = CategoryBean::select($q);
		return (isset($cat[0])) ? $cat[0] : new CategoryBean;
	}
}