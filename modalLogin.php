<!DOCTYPE html>
<html>
<head>
    <title>Using Jquery, Ajax and Php to submit form</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- LOAD BOOTSTRAP CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/font-awesome.min.css" rel="stylesheet">

    <!-- LOAD JQUERY -->
    <script src="jquery/jquery-1.11.1.min.js" type="text/javascript"></script>
    <script src="jquery/bootbox.min.js" type="text/javascript"></script>
    <!--<script type="text/javascript">
        $(document).ready(function() {
            $('#loginButton').on('click', function () {
                bootbox
                    .dialog({
                        title: 'Login',
                        message: $('#loginForm'),
                        show: false /* We will show it manually later */
                    })
                    .on('shown.bs.modal', function () {
                        $('#loginForm')
                            .show()                             /* Show the login form */
                            .formValidation('resetForm', true);
                        /* Reset form */
                    })
                    .on('hide.bs.modal', function (e) {
                        /**
                         * Bootbox will remove the modal (including the body which contains the login form)
                         * after hiding the modal
                         * Therefor, we need to backup the form
                         */
                        $('#loginForm').hide().appendTo('body');
                    })
                    .modal('show');
            });
        });
    </script>-->


    <!-- PROCESS FORM WITH JQUERY and AJAX -->
    <script type="text/javascript" src="processForm.js"></script>

</head>
<body>
<div class="container">
    <div class="col-md-6 col-md-offset-3">

        <!-- PAGE TITLE -->
        <div class="page-header">
            <h1><span class="glyphicon glyphicon-fire"></span> Submitting Modal Forms with JQUERY, AJAX and PHP</h1>
        </div>
        <p align="center">Click the button to display modal</p><br/>
        <div class="col-xs-10 col-xs-offset-5">
            <button class="btn btn-danger btn-lg" id="loginButton" data-toggle="modal" data-target="#myModal">Login</button>
        </div>
        <!-- FORM -->
        <div class="modal fade" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span class="glyphicon glyphicon-remove-sign"></span></button>
                        <h4 class="modal-title">Login</h4>
                    </div>
                    <div class="modal-body">
                        <form id="loginForm" method="post">
                            <!-- Display Success Message -->
                            <div id="messages"></div>

                            <div id="name-group" class="form-group">
                                <label>Username</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
                                    <input type="text" class="form-control" name="name" id="name" />
                                </div>
                                <span class="help-block"></span>
                            </div>

                            <div id="password-group" class="form-group">
                                <label>Password</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
                                    <input type="password" class="form-control" name="password" id="password"/>
                                </div>
                                <span class="help-block"></span>
                            </div>

                            <div class="form-group modal-footer">
                                <div>
                                    <button type="submit" id="submit" name="submit" class="btn btn-success pull-right">
                                        <span class="glyphicon glyphicon-flash"></span>Login</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
              <!-- This script triggers the live validation immediately the user -->
              <!-- types. It validate by following the regex given for validation-->
        <script type="text/javascript" src="liveValidation.js"></script>
    </div>
</div>
<script src="jquery/jquery-1.11.1.min.js" type="text/javascript"></script>
<script src="js/bootstrap.js"></script>
<!--<script src="js/bootstrap.min.js" type="text/javascript"></script>-->
</body>
</html>