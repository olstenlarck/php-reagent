<?php
/**
 * php-reagent <https://github.com/tunnckoCore/php-reagent>
 *
 * Copyright (c) 2012-2015 Charlike Mike Reagent, contributors.
 * Released under the MIT license.
 */

class View
{
    public function render($name, $data, $include = false)
    {
        $this->constSet($data);

        if ($include == true) {
            require 'views/' . $name . '.php';
        } else {
            require 'views/head.php';
            require 'views/header.php';
            require 'views/side.php';
            require 'views/' . $name . '.php';
            require 'views/footer.php';
        }
    }

    public function constSet($data)
    {
        if (is_array($data)):
            foreach ($data AS $constName => $constValue):
                define("$constName", "$constValue");
            endforeach;
        else:
            return false;
        endif;
    }

}
