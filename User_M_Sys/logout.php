<?php
session_start();
unset($_SESSION['userid']);
unset($_SESSION['name']);
header("Location:../index.html");
?>
