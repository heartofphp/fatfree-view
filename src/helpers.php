<?php

use F3\F3;

if (!function_exists('f3')) {

    function f3() 
    {
        return F3::instance();
    }

}