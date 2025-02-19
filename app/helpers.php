<?php

/* Helper Function page (Useful Function Container) */


/* Array Show with Formatted Function */
if(! function_exists('show'))
{
    function show($array)
    {
        echo "<pre>";
        print_r($array);
        echo "</pre>";
        exit;
    }
}