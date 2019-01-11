<?php include('server.php') ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Create your free account and get login, access everything which you want.">
        <meta name="keywords" content="">

        <link rel="shortcut icon" type="image/ico" href="icon5.png"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="animate.css">
        <link rel="stylesheet" href="global.css">
        <link rel="stylesheet" href="login.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">
        <title> Log in</title>
        <script>var base_url = "";</script>
        <link href="about.css" rel="stylesheet" type="text/css"/>







      


    </head>
    <body>
        <nav class="navbar navbar-inverse">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">
                        <img src="icon5.png" alt="" style="width: 70px;position: relative;top: -25px;float: left;" />
                        <h1 style="font-size: 30px;float: left;margin-top: 0px;margin-left: 5px;font-weight: bold;">TOMVS</h1>
                    </a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="signup.html" style="border-left: none;">Sign up</a></li>
                        <li><a href="login.html" >Login</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                                <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                                <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="admin.php"><i class="fa fa-caret-square-o-down" aria-hidden="true"></i> ADMIN PANEL</a></li>
                                <li><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> Contact us</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>




<div class="container">
    
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <form  action="login.php" method="post" class="my_form"   autocomplete="off">
            <div id="login-response" class="animated bounceInDown"></div>
            <h1 class="text-center">Log In </h1>
            <div class="login-form">
                <div class="control-group">
                    <input type="email" class="login-field form-control" value="" placeholder="Email" id="login-username" name="email">
                    <label class="login-field-icon fui-user" for="login-email"></label>
                </div>

                <div class="control-group">
                    <input type="password" class="login-field form-control" value="" placeholder="Password" id="login-password" name="password">
                    <label class="login-field-icon fui-lock" for="login-password"></label>
                </div>
                <br>
                <button type="submit" value="log in" class="btn btn-primary col-xs-12 btn-submit" name="signin">Login</button>
                <br> <a class="login-link" href="forgot-password.html">Forget your password?</a>
            </div><br>

        </form>
    </div>
    <div class="col-md-2"></div>
    
   
  
</div>

<div class="action">
    
        <a href="#">View</a>
        <a href="#">Sell</a>
</div>



<div class="social-container">
    <h3>Would you like to share with ?</h3>
    <ul class="share-social text-center">
        <li>
            <div class="fb-share-button" data-href="login.html" data-layout="button" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href=""><i id="social-fb" class="fa fa-facebook fa-2x social"></i></a></div>
        </li>
        <li><a href=""><i id="social-tw" class="fa fa-twitter fa-2x social"></i></a></li>
        <li><a href=""><i id="social-gp" class="fa fa-google fa-2x social"></i></a></li>
    </ul>
</div>







<div class="modal fade" id="sign-up-newlater" style="margin-top: 200px;">
    <div class="modal-dialog sign-up-newlater">

        <div>
            <!--newsletter form-->
            <div class="row">
                <a href="" class="close_it-model" data-dismiss="modal" aria-hidden="true"><i class="fa fa-close"></i></a>
                <h3 style="margin-top: 0;">GET NOTIFIED OF NEW CARS,BIKES</h3>

                <p id="newlreponce" style="color: red;font-family: sans-serif;"></p>
                <input type="email" class="form-control col-sm-8" placeholder="Enter your email here" id="news-later-email" name="news-later-email">
                <input type="submit" class="btn" value="subscribe" id="btn-newlatter">
                <p>YOUR EMAIL ADDRESS WILL NEVER BE SHARED</p>
            </div>
            <div class="clearfix"></div>



        </div>
    </div>
</div>




<!--js scripts -->
            <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
            <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
            <script src='login.js'></script>
    </body>
</html>
