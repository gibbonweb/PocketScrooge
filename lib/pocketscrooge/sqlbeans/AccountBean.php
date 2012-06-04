<?php
/*
 * Copyright (c) 2012, gibbonweb
 * All rights reserved.
 */
namespace pocketscrooge\sqlbeans;
use hydrogen\sqlbeans\SQLBean;
/**
 * Description of AccountBean
 *
 * @author johannes
 */

class AccountBean extends SQLBean {
    protected static $tableNoPrefix = 'accounts';
    protected static $tableAlias = 'accounts';
    protected static $primaryKey = 'id';
    protected static $primaryKeyIsAutoIncrement = true;
    protected static $fields = array('id', 'name', 'budget_amount', 'budget_period', 'budget_type');
}

?>

