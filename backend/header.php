<?php session_start(); ?>
<?php 
include('../config/config.php');

// echo '<pre>';
// print_r($_SESSION);
// echo '</pre>';
// exit;

$admin_id = $_SESSION['admin_id'];

if (empty($admin_id)) {
  Header("Location: ../login.php");
}
?>
<?php include("head.php"); ?>