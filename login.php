<!DOCTYPE html>
<?php 
session_start();
?>
<html class="app-ui">

    <head>
        <!-- Meta -->
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />

        <!-- Document title -->
        <title>Frontend - Login | AppUI</title>

        <meta name="description" content="AppUI - Frontend Template & UI Framework" />
        <meta name="robots" content="noindex, nofollow" />

        <!-- Favicons -->
        <link rel="apple-touch-icon" href="assets/img/favicons/apple-touch-icon.png" />
        <link rel="icon" href="assets/img/favicons/favicon.ico" />

        <!-- Google fonts -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,900%7CRoboto+Slab:300,400%7CRoboto+Mono:400" />

        <!-- AppUI CSS stylesheets -->
        <link rel="stylesheet" id="css-font-awesome" href="assets/css/font-awesome.css" />
        <link rel="stylesheet" id="css-ionicons" href="assets/css/ionicons.css" />
        <link rel="stylesheet" id="css-bootstrap" href="assets/css/bootstrap.css" />
        <link rel="stylesheet" id="css-app" href="assets/css/app.css" />
        <link rel="stylesheet" id="css-app-custom" href="assets/css/app-custom.css" />
        <!-- End Stylesheets -->
    </head>

    <body class="app-ui">
        <div class="app-layout-canvas">
            <div class="app-layout-container">

                <!-- Header -->
                <header class="app-layout-header">
                    
                </header>
                <!-- End header -->

                <main class="app-layout-content">

                    <!-- Page header -->
                    <div class="page-header bg-blue bg-inverse" style="height: 300px;">
                        
                        <div class="container">
                            <!-- Section Content -->
                            <div class="p-y-lg text-center" style="margin-top: -80px;">
                                <h1 class="display-2"><img src="img/BasicLogo.png" style="height: 300px;"></img>BASIC REPORTS SYSTEM LOGIN</h1>
                                <!-- <p class="text-muted">Unlimited ideas. Unlimited power. Unlimited joy. Unlimited opportunities.</p> -->
                            </div>
                            <!-- End Section Content -->
                        </div>
                    </div>
                    <!-- End Page header -->

                    <!-- Page content -->
                    <div class="page-content">
                        <div class="container">
                            <div class="row">
                                <!-- Login card -->
                                <div class="col-md-6">
                                    <div class="card">
                                        <h3 class="card-header h4">Login</h3>
                                        <div class="card-block">
                                            <form action="" id="login_form" name="login_form" method="POST">
                                                <div class="form-group">
                                                    <label class="sr-only" for="username">Username</label>
                                                    <input type="text" class="form-control" id="username" name="username" placeholder="Username" />
                                                </div>
                                                <div class="form-group">
                                                    <label class="sr-only" for="login_password">Password</label>
                                                    <input type="password" class="form-control" id="login_password" name="login_password" placeholder="Password" />
                                                </div>
                                                <div class="form-group">
                                                    <!-- <label for="frontend_login_remember" class="css-input switch switch-sm switch-app">
														<input type="checkbox" id="frontend_login_remember" /><span></span> Remember me</a>
													</label> -->
                                                </div>
                                                <button type="submit" name="login_btn" id="login_btn" class="btn btn-app btn-block">Login</button>
                                            </form>
                                        </div>
                                        <!-- .card-block -->
                                    </div>
                                    <!-- .card -->
                                </div>
                                <!-- .col-md-6 -->
                                <!-- End login -->

                                <!-- Sign up -->
                                <div class="col-md-6">
                                    <div class="card">
                                        <h3 class="card-header h4">Sign up</h3>
                                        <div class="card-block">
                                            <form class="form-horizontal" id="registration_form" name="registration_form" action="" method="POST">
                                                <div class="form-group">
                                                    <div class="col-sm-6">
                                                        <label class="sr-only" for="frontend_signup_username">Username</label>
                                                        <input class="form-control" type="text" id="frontend_signup_username" name="frontend_signup_username" placeholder="Username" />
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label class="sr-only" for="frontend_signup_user_type">User type</label>
                                                        <select class="form-control" id="frontend_signup_user_type" name="frontend_signup_user_type">
                                                            <option></option>
                                                            <option value="User">User</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-6">
                                                        <label class="sr-only" for="frontend_signup_password">Password</label>
                                                        <input class="form-control" type="password" id="frontend_signup_password" name="frontend_signup_password" placeholder="Password" />
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <label class="sr-only" for="frontend_signup_confirm_password">Confirm Password</label>
                                                        <input class="form-control" type="password" id="frontend_signup_confirm_password" name="frontend_signup_confirm_password" placeholder="Confirm password" />
                                                    </div>
                                                </div>
                                                
                                                <button class="btn btn-app btn-block" type="submit" id="submit_registration_btn" name="submit_registration_btn" disabled="true">Sign Up</button>
                                            </form>
                                        </div>
                                        <!-- .card-block -->
                                    </div>
                                    <!-- .card -->
                                </div>
                                <!-- .col-md-6 -->
                                <!-- End sign up -->

                            </div>
                            <!-- .row -->
                        </div>
                        <!-- .container -->
                    </div>
                    <!-- End page content -->

                    <!-- Modal -->
                    <div class="modal" id="modal-signup-terms" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="card-header bg-blue bg-inverse">
                                    <h4>Terms &amp; Conditions</h4>
                                    <ul class="card-actions">
                                        <li>
                                            <button data-dismiss="modal" type="button"><i class="ion-close"></i></button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-block">
                                    <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant
                                        quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                                    <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant
                                        quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Close</button>
                                    <button class="btn btn-sm btn-app" type="button" data-dismiss="modal"><i class="ion-checkmark"></i> Ok</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End modal -->

                </main>

                <footer class="app-layout-footer" style="position: relative;margin-top: 90px">
                    <div class="container p-y-md">
                        <div class="pull-left text-center text-md-left">
                            BASIC FRAMES AND PHOTOGRAPHY <!-- <span class="js-year-copy"></span> -->
                        </div>
                    </div>
                </footer>

            </div>
            <!-- .app-layout-container -->
        </div>
        <!-- .app-layout-canvas -->

        <!-- Apps Modal -->
        <!-- Opens from the button in the header -->
        <div id="apps-modal" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-sm modal-dialog modal-dialog-top">
                <div class="modal-content">
                    <!-- Apps card -->
                    <div class="card m-b-0">
                        <div class="card-header bg-app bg-inverse">
                            <h4>Apps</h4>
                            <ul class="card-actions">
                                <li>
                                    <button data-dismiss="modal" type="button"><i class="ion-close"></i></button>
                                </li>
                            </ul>
                        </div>
                        <div class="card-block">
                            <div class="row text-center">
                                <div class="col-xs-6">
                                    <a class="card card-block m-b-0 bg-app-secondary bg-inverse" href="index.html">
                                        <i class="ion-speedometer fa-4x"></i>
                                        <p>Admin</p>
                                    </a>
                                </div>
                                <div class="col-xs-6">
                                    <a class="card card-block m-b-0 bg-app-tertiary bg-inverse" href="frontend_home.html">
                                        <i class="ion-laptop fa-4x"></i>
                                        <p>Frontend</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- .card-block -->
                    </div>
                    <!-- End Apps card -->
                </div>
            </div>
        </div>
        <!-- End Apps Modal -->

        <!-- AppUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock and App.js -->
        <script src="assets/js/core/jquery.min.js"></script>
        <script src="assets/js/core/bootstrap.min.js"></script>
        <script src="assets/js/core/jquery.slimscroll.min.js"></script>
        <script src="assets/js/core/jquery.scrollLock.min.js"></script>
        <script src="assets/js/core/jquery.placeholder.min.js"></script>
        <script src="assets/js/app.js"></script>
        <script src="assets/js/app-custom.js"></script>

        <script>
        $(document).ready(function() {

            $('#login_btn').on('click', function() {
                var username = $('#username').val();
                var password = $('#login_password').val();
                    $.ajax({
                        url: "functions/verify_login.php",
                        type: "POST",
                        data: {
                            username: username,
                            password: password         
                        },
                        success: function(dataResult){
                                $('#login_form').find('input:text').val('');
                                if(dataResult == "1"){
                                    alert("Login Successful");
                                    window.location.href = "index.php";
                                }else{
                                alert(dataResult);
                                }
                        }
                    });
                
            });



            $('#frontend_signup_confirm_password').on('keyup', function() {

                var password = $('#frontend_signup_password').val();
                var c_password = $('#frontend_signup_confirm_password').val();

                if(password == c_password && password != "" && c_password != ""){
                    $("#submit_registration_btn").prop("disabled", false);
                }
                else{
                    $("#submit_registration_btn").attr("disabled", true);
                }
            });

            $('#frontend_signup_password').on('keyup', function() {

                var password = $('#frontend_signup_password').val();
                var c_password = $('#frontend_signup_confirm_password').val();

                if(password == c_password && password != "" && c_password != ""){
                    $("#submit_registration_btn").prop("disabled", false);
                }
                else{
                    $("#submit_registration_btn").attr("disabled", true);
                }
            });


            $('#submit_registration_btn').on('click', function() {
                var username = $('#frontend_signup_username').val();
                var password = $('#frontend_signup_password').val();
                var usertype = $('#frontend_signup_user_type').val();
                var c_password = $('#frontend_signup_confirm_password').val();
                    $.ajax({
                        url: "functions/register_user.php",
                        type: "POST",
                        data: {
                            username: username,
                            password: password,
                            usertype: usertype         
                        },
                        success: function(dataResult){
                                $('#registration_form').find('input:text').val('');
                                alert(dataResult);
                        }
                    });
                
            });
        });
        </script>

    </body>

</html>