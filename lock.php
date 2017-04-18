<?php

$dbconfigs = include('config.db.php');

session_start();

$user_check = $_SESSION['login_email'];


$db = mysqli_connect($dbconfigs->hostname, $dbconfigs->username, $dbconfigs->password, $dbconfigs->database);
$ses_sql = mysqli_query($db, "select id,email,fname,lname,user_type from user_accounts where email='$user_check'");

$row = mysqli_fetch_array($ses_sql);
$fname = $row['fname'];
$lname = $row['lname'];
$userType = $row['user_type'];
$login_session = $row['email'];
$login_id = $row['id'];

$_SESSION['userId'] = $login_id;
$_SESSION['email'] = $myemail;
$_SESSION['firstName'] = $fname;
$_SESSION['lastName'] = $lname;
$_SESSION['userType'] = $userType;

if (!isset($login_session)) {
    header("Location: login.php");
}