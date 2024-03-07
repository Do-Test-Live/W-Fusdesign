<?php
session_start();
$lan = $_GET['language'];
unset($_SESSION['language']);

$_SESSION['language'] = $_GET['language'];
echo "<script>window.location.href='index.php';</script>";
