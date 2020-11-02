<?php
include("hahaha.php");
session_start();
ob_start();
if(($_POST["user"]==$user) and ($_POST["pass"]==$pass)){
$_SESSION["login"] = "true";
$_SESSION["user"] = $user;
$_SESSION["pass"] = $pass;
header("Location:kontrol.php");
}else{
echo "Kullanıcı Adı veya Şifre Yanlış.";
header("Refresh: 2; url=index.php");
}
ob_end_flush();
?>