<?php
/*
 * Copyright (c) 2012, gibbonweb
 * All rights reserved.
 */
namespace pocketscrooge\models;
use hydrogen\model\Model;
use hydrogen\database\query;
use pocketscrooge\sqlbeans\TransactionBean;
use pocketscrooge\helpers\DatetimeRange;

class TransactionModel extends Model {
	protected static $modelID = 'tm';
	
	public function getTransactions() {
		$q = new Query("SELECT");
		$q->orderby("timestamp", "DESC");
		return TransactionBean::select($q);
	}
	
	public function getTransactionByID($id) {
		$q = new Query("SELECT");
		$q->where("id = ?", $id);
		$q->limit(1);
		$t = TransactionBean::select($q);
		return (isset($t[0])) ? $t[0] : new TransactionBean();
	}
	
	public function getTransactionsByYearMonth($year,$month) {
		$dtr = new DatetimeRange();
		$dtr->addRange('year',$year);
		$dtr->addRange('month',$month);
		$q = new Query("SELECT");
		$dtr->applyToQuery($q);
		return TransactionBean::select($q);
	}
	
	public function getTransactionsByRange(DatetimeRange &$dtr) {
		$q = new Query("SELECT");
		$dtr->applyToQuery($q);
		return TransactionBean::select($q);
	}
	
}