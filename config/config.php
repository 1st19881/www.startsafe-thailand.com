<?php

// PHP 5
$host="localhost";

$user02="root";
$pass02="1234";
$database02="thdirect_safty";

// $user02="thdirec1_safty";
// $pass02="P25EhwHv";
// $database02="thdirec1_safty";





$conn=  mysql_connect($host,$user02,$pass02) or die("no connect database02");
mysql_select_db($database02);
mysql_query("set names utf8");
date_default_timezone_set('Asia/Bangkok');




// $conn = mysqli_connect("localhost","root","1234","thdirect_unm") or die("Error: " . mysqli_error($conn));
// mysqli_query($conn, "SET NAMES 'utf8' ");
// date_default_timezone_set('Asia/Bangkok');


?>