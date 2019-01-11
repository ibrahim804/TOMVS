<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Make your dream true">
        <meta name="keywords" content="">

        <link rel="shortcut icon" type="image/ico" href="icon5.png"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="media.css">
        <link rel="stylesheet" href="animate.css">
        <link rel="stylesheet" href="global.css">
        <link rel="stylesheet" href="home.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">
        <title> Admin</title>
        <link rel="stylesheet" href="about.css">
       







      


    </head>
    <body>
        <nav class="navbar navbar-inverse">
            <div class="container">
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
                                <li><a href="#"><i class="fa fa-caret-square-o-down" aria-hidden="true"></i> ADMIN PANEL</a></li>
                                <li><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> Contact us</a></li>
    
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

<div class="action" >
    
    <a href="carindex.php">CAR MODULE</a>
    <a href="bikeindex.php">BIKE MODULE</a>
    <a href="equipmentindex.php">EQUIPMENT</a>
	
</div>
<div class="action">
	<a href="advertisment.php"> ADVERTISEMENT</a>
</div>



<br>

<div class="social-container">
    <h3>Would you like to share with ?</h3>
    <ul class="share-social text-center">
        <li>
            <div class="fb-share-button" data-href="homepage.html" data-layout="button" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href=""><i id="social-fb" class="fa fa-facebook fa-2x social"></i></a></div>
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
                <h3 style="margin-top: 0;">GET NOTIFIED OF NEW CAR</h3>

                <p id="newlreponce" style="color: red;font-family: sans-serif;"></p>
                <input type="email" class="form-control col-sm-8" placeholder="Enter your email here" id="news-later-email" name="news-later-email">
                <input type="submit" class="btn" value="subscribe" id="btn-newlatter">
                <p>YOUR EMAIL ADDRESS WILL NEVER BE SHARED</p>
            </div>
            <div class="clearfix"></div>



        </div>
    </div>
</div>




             
            <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            <script src="media.js"></script>
            <script src="jquery_cookie.js"></script>
            <script src="home.js"></script>
    </body>
</html>
