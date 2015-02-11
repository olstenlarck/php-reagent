<?php
/**
 * php-reagent <https://github.com/tunnckoCore/php-reagent>
 *
 * Copyright (c) 2012-2015 Charlike Mike Reagent, contributors.
 * Released under the MIT license.
 */

class Database
{
    public function __construct($dbHost, $dbUser, $dbPass, $dbName)
    {
        $this->db_connect($dbHost, $dbUser, $dbPass, $dbName);
    }

    public function db_connect($dbHost, $dbUser, $dbPass, $dbName)
    {
        $this->link = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);
        if (!$this->link) {
            die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
        }
        mysqli_select_db($this->link, $dbName) or die("Error selecting database: " . mysqli_error($this->link));
        $this->runQuery('SET NAMES UTF8');
    }

    public function runQuery($sql)
    {
        $rs = mysqli_query($sql);
        if (mysqli_error($this->link)) {
            echo mysqli_error($this->link) . '<br/>SQL: ' . $sql;
        }
        return $rs;
    }

    public function delQuery($table, $where)
    {
        $this->runQuery('DELETE FROM ' . $table . ' WHERE ' . $where);
    }
}
