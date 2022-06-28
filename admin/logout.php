<?php
session_start();
session_destroy();
header("location:login.php?act=logout&msg=success") ; 
?>