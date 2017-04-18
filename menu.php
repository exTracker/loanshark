<?php
include_once('lock.php');

$configs = include('config.inc.php');
$userType = $_SESSION['userType'];
?>

<html>
<head>
    <title><?php print $configs->application_title . " " . $configs->application_version; ?> | Dashboard</title>
    <link rel="stylesheet" href="resources/css/main.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
<div id="wrapper">
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php"><?php print $configs->application_title . " " . $configs->application_version; ?></a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Dashboard</a></li>
                <li><a href="create.php">Create</a></li>
                <li><a href="#">Loans</a></li>
                <li><a href="#">Reports</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
    </nav>
</div>
</body>

</html>
