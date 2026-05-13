<?php
session_start();
session_destroy(); 
header("Location: index.php"); // Anasayfaya geri gönder
exit();
?>