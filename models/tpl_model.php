<?php
/**
 * php-reagent <https://github.com/tunnckoCore/php-reagent>
 *
 * Copyright (c) 2012-2015 Charlike Mike Reagent, contributors.
 * Released under the MIT license.
 */

class TPL_Model extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getData()
    {
        return $this->db->runQuery('SELECT * FROM ' . CONFIG_TABLE);
    }

    public function tplDefault()
    {
        // WHERE sys_default_temp = "default"'
    }

}
