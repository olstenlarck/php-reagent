<?php
/**
 * php-reagent <https://github.com/tunnckoCore/php-reagent>
 *
 * Copyright (c) 2012-2015 Charlike Mike Reagent, contributors.
 * Released under the MIT license.
 */

define('_ROOT_', $root);

# MYSQL CONNECTION INFO
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'z68nikoletka');
define('DB_NAME', 'okey');
# -----------------------------------------------------------------------------+
# CONSTANTS
define('BLOG_ENCODING', 'UTF-8');
define('WEBSITE_KEYWORDS', 'blog, site, about, news');
define('FOOTER_COPYRIGHT', 'Copyright © 2012-2015. Powered by <a href="index.html">Reagent v2.3.1</a> with CleanTheme 1.0.0 | <a href="#">Sitemap</a>');
define('NOREPLAY_EMAIL', 'noreplay@smvcd.bg');
define('NEWS_PER_PAGE', 1);
# -----------------------------------------------------------------------------+
# DATABASE TABLES
define('TABLE_PREFIX', 'reagent_');
define('NEWS_TABLE', TABLE_PREFIX . 'news');
define('USERS_TABLE', TABLE_PREFIX . 'users');
define('ABOUT_TABLE', TABLE_PREFIX . 'about');
define('CONFIG_TABLE', TABLE_PREFIX . 'config');
# -----------------------------------------------------------------------------+
# MENU
$menu = array(
    'index.php' => 'Начало',
    'index.php?url=about&method=getAbout' => 'Информация',
    'index.php?url=user&method=membersList' => 'Потребители',
);
# -----------------------------------------------------------------------------+

header('Content-Type: text/html; charset=UTF-8');

# INCLUDES
require(_ROOT_ . 'libs/Bootstrap.php');
require(_ROOT_ . 'libs/Libs.php');
require(_ROOT_ . 'libs/Model.php');
require(_ROOT_ . 'libs/Session.php');
require(_ROOT_ . 'libs/Database.php');
require(_ROOT_ . 'libs/Controller.php');
require(_ROOT_ . 'libs/View.php');
require(_ROOT_ . 'libs/Pagination.php');
# -----------------------------------------------------------------------------+
# START SESSION
Session::startSession();
