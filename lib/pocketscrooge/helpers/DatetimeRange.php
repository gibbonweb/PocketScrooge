<?php
/*
 * Copyright (c) 2012, gibbonweb
 * All rights reserved.
 */
namespace pocketscrooge\helpers;
use hydrogen\database\Query;

class DatetimeRange {
	protected $range = array(
		"YEAR" => array(),
		"MONTH" => array(),
		"DAY" => array(),
		"HOUR" => array(),
		"MINUTE" => array(),
		"SECOND" => array());
		
	protected static $ranges = array("YEAR", "MONTH", "DAY", "HOUR", "MINUTE", "SECOND");
		
	public function addRange($type,$value) {
		switch(strtoupper($type)) {
			case "YEAR":
				$this->range["YEAR"][] = intval($value);
				break;
			case "MONTH":
				$this->range["MONTH"][] = intval($value);
				break;
			case "DAY":
				$this->range["DAY"][] = intval($value);
				break;
			case "HOUR":
				$this->range["HOUR"][] = intval($value);
				break;
			case "MINUTE":
				$this->range["MINUTE"][] = intval($value);
				break;
			case "SECOND":
				$this->range["SECOND"][] = intval($value);
				break;
			default:
				break;
				
		}
	}
	
	public function applyToQuery(Query &$q) {
		//$q->whereOpenGroup();
		foreach(self::$ranges as $range) {
			if(!empty($this->range[$range])) {
				$q->whereOpenGroup();
				foreach($this->range[$range] as $r) {
					$q->where($range . '(`timestamp`) = ?',$r,"OR");
				}
				$q->whereCloseGroup();
			}
		}
		//$q->whereCloseGroup();
	}
}