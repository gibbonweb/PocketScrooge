<?php
/*
 * Copyright (c) 2012, gibbonweb
 * All rights reserved.
 */
namespace pocketscrooge\sqlbeans;
use hydrogen\sqlbeans\SQLBean;
use pocketscrooge\models\AccountModel;
use pocketscrooge\models\CategoryModel;
/**
 * Description of TransactionBean
 *
 * @author johannes
 */

class TransactionBean extends SQLBean {
    protected static $tableNoPrefix = 'transactions';
    protected static $tableAlias = 'transactions';
    protected static $primaryKey = 'id';
    protected static $primaryKeyIsAutoIncrement = true;
    protected static $fields = array('id', 'amount', 'category_id', 'account_id', 'description');
    
    public function get_category() {
        $cat = CategoryModel::getInstance();
        return $cat->getCategory($this->category_id);
    }
    
    public function get_account() {
        $acc = AccountModel::getInstance();
        return $acc->getAccount($this->account_id);
    }
}

?>

