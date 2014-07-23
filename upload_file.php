<?php
/**
 * Created by PhpStorm.
 * User: M.Jin
 * Date: 14-7-23
 * Time: 下午6:28
 */

if($_FILES["file"]["error"] > 0){
    echo "Error: ".$_FILES["file"]
}