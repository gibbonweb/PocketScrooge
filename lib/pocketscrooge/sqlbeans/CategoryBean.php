<?php
/*
 * Copyright (c) 2012, gibbonweb
 * All rights reserved.
 */
namespace pocketscrooge\sqlbeans;
use hydrogen\sqlbeans\SQLBean;
/**
 * Description of CategoryBean
 *
 * @author johannes
 */

class CategoryBean extends SQLBean {
    protected static $tableNoPrefix = 'categories';
    protected static $tableAlias = 'categories';
    protected static $primaryKey = 'id';
    protected static $primaryKeyIsAutoIncrement = true;
    protected static $fields = array('id', 'name');
}

?>

