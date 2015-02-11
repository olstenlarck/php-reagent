<?php
/**
 * php-reagent <https://github.com/tunnckoCore/php-reagent>
 *
 * Copyright (c) 2012-2015 Charlike Mike Reagent, contributors.
 * Released under the MIT license.
 */

function filterVar($var)
{
    if (!is_numeric($var)) {
        return addslashes(htmlspecialchars(trim($var)));
    }

    if (!$var > 0) {
        return 1;
    }

    return (int) $var;
}

function validateEmail($var)
{
    return filter_var($var, FILTER_VALIDATE_EMAIL);
}

function sqlFetchRow($query_id = false) {
    return ($query_id !== false) ? @mysql_fetch_assoc($query_id) : false;
}
