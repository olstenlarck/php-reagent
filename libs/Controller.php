<?php
/**
 * php-reagent <https://github.com/tunnckoCore/php-reagent>
 *
 * Copyright (c) 2012-2015 Charlike Mike Reagent, contributors.
 * Released under the MIT license.
 */

class Controller
{
    public function __construct()
    {
        $this->view = new View();
    }

    public function loadModel($name)
    {

        $name = strtolower($name);

        $path = 'models/' . $name . '_model.php';
        $path = strtolower($path);

        if (file_exists($path)) {
            require($path);

            $modelName = $name . '_model';

            $this->model = new $modelName;
        }
    }
}
