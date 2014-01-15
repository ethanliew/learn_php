<?php
/**
 * Created by Ethan Liew
 * Project  :
 * Date     : 1/15/14
 * Time     : 2:12 PM
 * Version  :
 * Desc     :
 *
 *
 */

class CTestA
{

    protected static $prop = 2;

    function __construct()
    {
        self::$prop += 2;
    }

    function get_prop()
    {
        return (self::$prop);
    }

}


// Test
$x = new CTestA();
printf("Static value of \ta class is:\t%d", $x->get_prop());