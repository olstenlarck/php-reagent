<?php
/**
 * php-reagent <https://github.com/tunnckoCore/php-reagent>
 *
 * Copyright (c) 2012-2015 Charlike Mike Reagent, contributors.
 * Released under the MIT license.
 */

ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(-1);

# ROOT PATH VAR
$root = './';

# INCLUDE CONFIG.PHP
require($root . 'config.php');

$app = new Bootstrap();


