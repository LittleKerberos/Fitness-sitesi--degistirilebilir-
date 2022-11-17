<?php
session_start();
session_destroy();
setcookie("cerez", md5("aa" . $txtKadii . "bb"), time() - 1);

header("location:login.php");

require_once "class.log.php";
$txt= $kullanicicek['kullanici_adsoyad'];
$log = new Log();
$log->add( $txt." ÇIKIŞ YAPTI");

?>