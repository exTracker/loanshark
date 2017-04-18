<?php

//include_once("../plugins/KLogger.php");
//
//$log = new KLogger ("/var/www/extracker/logs/", KLogger::DEBUG);

$dbconfigs = include('../config.db.php');
$db = mysqli_connect($dbconfigs->hostname, $dbconfigs->username, $dbconfigs->password, $dbconfigs->database);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // username and password sent from form
    $myemail = addslashes($_POST['email']);
    $mypassword = addslashes($_POST['password']);

    $encrypt_password = md5($mypassword);
    $encrypted_password = stripslashes($encrypt_password);

    $sql = "SELECT id,status FROM user_accounts WHERE email='$myemail' and password='$encrypted_password'";
    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_array($result);
    $status = $row['status'];

    $count = mysqli_num_rows($result);

    // If result matched $myemail and $mypassword, table row must be 1 row
    if ($count == 1) {
        if ($status == 'ACTIVE') {
            session_start("extracker");
            $_SESSION['login_email'] = $myemail;
            //$log->logAlert("user [" . $myemail . "] login successful");

            header("location: ../index.php");
        } else if ($status == 'SUSPENDED') {
            $error_message = "The user is Suspended, Please contact the administrator";
            //$log->logAlert("user [" . $myemail . "] login failed with reason [" . $error_message . "]");
            header("location: ../login.php?error_message=" . $error_message);
        }
    } else {
        $error_message = "Invalid Username or Password";
        //$log->logAlert("user [" . $myemail . "] login failed with reason [" . $error_message . "]");
        header("location: ../login.php?error_message=" . $error_message);
    }
}
