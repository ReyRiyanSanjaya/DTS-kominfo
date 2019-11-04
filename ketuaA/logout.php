<?php 
session_start();
session_unset();
session_destroy();
Header("Refresh: 1;url = ../login.php?pesan=keluar");
?>