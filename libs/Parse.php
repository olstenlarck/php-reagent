<?php
/**
 * php-reagent <https://github.com/tunnckoCore/php-reagent>
 *
 * Copyright (c) 2012-2015 Charlike Mike Reagent, contributors.
 * Released under the MIT license.
 */

class Parse
{
    public function ParseTags($Temp, $ParseTags)
    {
        $TPL_File = "views/$Temp.php";
        if (file_exists($TPL_File)) {
            $TPL = file_get_contents($TPL_File);
            foreach ($ParseTags as $TPL_TAG => $TPL_VIEW) {
                $TPL = str_replace("#" . $TPL_TAG . "#", $TPL_VIEW, $TPL);
            }
        } else {
            return false;
        }
        return $TPL;
    }
}
