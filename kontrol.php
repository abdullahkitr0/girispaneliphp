<?php
include("hahaha.php");
session_start();
if(!isset($_SESSION["login"])){
echo "Bu sayfayı görüntüleme yetkiniz yoktur.";
}else{
echo "Admin sayfası<br>";
echo "<a href=\"cikis.php\">Çıkış Yap</a>";
}
?>