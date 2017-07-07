<?php
$configs = include('config.inc.php');
session_start();
?>
<html>
<head>
    <title><?php print $configs->application_name . " " . $configs->application_version ?></title>
    <link rel="stylesheet" type="text/css" href="http://localhost/extracker/resources/css/main.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css">
</head>
<body>

<section id="login">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="form-wrap">
                    <?php
                    if (isset($error_message)) {
                        echo "<div class='alert alert-danger' id='error_bar'>";
                        echo "<strong > Error! </strong > $error_message";
                        echo "</div>";
                    }
                    ?>
                    <h1><?php print $configs->application_name . " " . $configs->application_version ?></h1>
                    <form id="login_form" action="handlers/login_handler.php" method="post">
                        <div class="form-group">
                            <label for="key" class="sr-only">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="key" class="sr-only">Password</label>
                            <input type="password" name="password" id="password" class="form-control"
                                   placeholder="Password">
                        </div>
                        <input type="submit" id="btn-login" class="btn btn-lg btn-block" value="Log in">
                    </form>
                </div>
            </div>
            <!-- /.col-xs-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>

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