<?php
session_start();
ob_start();
session_destroy();
echo "Çıkış Yaptınız. &nbsp; Ana Sayfaya  &nbsp; Yönlendiriliyorsunuz";
header("Refresh: 2; url=index.php");
ob_end_flush();
?>