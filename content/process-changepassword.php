<?php
include './includes/db.php';

date_default_timezone_set('Singapore');
$currDateTime = date("Y-m-d H:i:s");
/* GET SESSION DATA*/
session_start();
$username = $_SESSION['SRIUsername'];
extract($_POST);

$answer = changePassword($username, md5($newPassword));
//add log activity
$addLogQuery = "INSERT INTO activity_logs(date_made, username, action) VALUES('$currDateTime', '$username', 'CHANGE PASSWORD')";
$addLog = mysql_query($addLogQuery) OR die(mysql_error());
?>