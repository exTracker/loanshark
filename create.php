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
    <h1>Create new loan</h1>
    <hr/>
    <div style="width: 60%; padding-left: 50px">
        <form id="loan_creation_form" action="handlers/login_handler.php" method="post">
            <div class="form-group">
                <label for="key" class="sr-only">Amount</label>
                <input type="text" name="amount" id="amount" class="form-control" placeholder="Amount">
            </div>
            <div class="form-group">
                <label for="key" class="sr-only">Description</label>
                <textarea name="description" id="description" class="form-control"
                          placeholder="Short Description"></textarea>
            </div>
            <div class="form-group">
                <label for="key" class="sr-only">Interest Rate (%)</label>
                <input type="number" name="rate" id="rate" class="form-control" placeholder="Interest Rate %">
            </div>
            <div class="form-group">
                <label for="key" class="sr-only">Start Date</label>
                <input type="datetime" name="startDate" id="startDate" class="form-control" placeholder="Start Date">
            </div>
            <input type="submit" id="createLoan" value="Create Loan">
        </form>
    </div>
</div>
</body>

</html>
