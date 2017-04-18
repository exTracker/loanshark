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
<?php include_once('menu.php'); ?>
<div id="wrapper">
    <h1>Dashboard</h1>
    <hr/>
    <?php
    print "This is a : " . $userType;
    ?>
</div>
</body>

</html>
