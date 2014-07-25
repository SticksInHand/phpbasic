<?php
/**
 * Created by PhpStorm.
 * User: M.Jin
 * Date: 14-7-25
 * Time: 下午4:08
 */

$x = 5;
$y = 6;

function test()
{
    global $x,$y;
    $y = $x + $y;

    echo $y;
}

test();