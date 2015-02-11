<?php
/**
 * php-reagent <https://github.com/tunnckoCore/php-reagent>
 *
 * Copyright (c) 2012-2015 Charlike Mike Reagent, contributors.
 * Released under the MIT license.
 */

class Error
{
    public function errors($name, $include = false)
    {
        if ($include === true) {
            require(_ROOT_ . 'views/errors/' . $name);
        } else {
            require(_ROOT_ . 'views/header.php');
            require(_ROOT_ . 'views/errors/' . $name);
            require(_ROOT_ . 'views/footer.php');
        }
    }
}
