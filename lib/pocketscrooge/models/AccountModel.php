<?php
/*
 * Copyright (c) 2012, gibbonweb
 * All rights reserved.
 */
namespace pocketscrooge\models;
use hydrogen\model\Model;
use hydrogen\database\query;
use pocketscrooge\sqlbeans\AccountBean;

class AccountModel extends Model {
	protected static $modelID = 'am';
	
	public function getAccount($id) {
		$q = new Query("SELECT");
		$q->where("id = ?", $id);
		$q->limit(1);
		$acc = AccountBean::select($q);
		return (isset($acc[0])) ? $acc[0] : new AccountBean;
	}
}