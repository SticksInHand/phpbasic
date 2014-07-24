<?php
/**
 * Created by PhpStorm.
 * User: M.Jin
 * Date: 14-7-24
 * Time: 下午2:16
 */

$to = "someone@example.com";
$subject = "Test mail";
$message = "Hello! This is a simple email message.";
$from = "Someonelse@example.com";
$headers = "From:$from";
mail($to,$subject,$message,$headers);
echo "Mail Sent.";