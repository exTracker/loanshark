<?php

$configs = include('config.inc.php');
#if (!isset($_SESSION['userId'])) {
#    header("Location: index.php");
#}

session_start();
?>
<html>
<head>
    <title><?php print $configs->application_title . " " . $configs->application_version ?></title>
    <link rel="stylesheet" type="text/css" href="resources/css/login.css">
</head>
<body>

<div id="wrapper">
    <div id="app_header">
        <h1><?php print $configs->application_name . " " . $configs->application_version ?></h1>
    </div>

    <?php
    if (isset($error_message)) {
        echo "<div class='alert alert-danger' id='error_bar'>";
        echo "<strong > Error! </strong > $error_message";
        echo "</div>";
    }
    ?>

    <form id="login_form" action="handlers/login_handler.php" method="post">
        <div class="form-group">
            <input type="email" name="email" id="email" class="form-control" placeholder="Email">
        </div>
        <div class="form-group">
            <input type="password" name="password" id="password" class="form-control"
                   placeholder="Password">
        </div>
        <input type="submit" id="btn-login" value="Log in">
    </form>
</div>

<script type='text/javascript'>
    /* attach a submit handler to the form */
    $("#login_form").submit(function (event) {

        /* stop form from submitting normally */
        event.preventDefault();

        /* get the action attribute from the <form action=""> element */
        var $form = $(this),
            url = $form.attr('action');

        /* Send the data using post with element id name and name2*/
        var posting = $.post(url, {email: $('#email').val(), password: $('#password').val()});

        /* Alerts the results */
        posting.done(function (data) {
            alert('success');
        });
    });
</script>

</body>
</html>
