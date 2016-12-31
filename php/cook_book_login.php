<?php
    include('../includes/assets.php');
?>
<!DOCTYPE html>
<html>
	<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="/pics/title_icon.png">
		<!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="/css/navbar.css">
        <link rel="stylesheet" type="text/css" href="/css/style.css">
		
        <title> Brandon Ellis E-Portfolio CookBook</title>
    </head>
            
            
    <body>
        <!-- Nav bar -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid navbar-container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="/php/index.php">Brandon-Ellis.Net</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">            
                    <ul class="nav navbar-nav">
                        <?php //include('../includes/nav.php');?>
                        <li><a href="/php/index.php">Home</a></li>
                        <li><a href="/php/resume.php">Resume</a></li>
                        <li><a href="/php/gallery.php">Gallery</a></li>
                        <li><a href="/php/projects.php">Projects</a></li>
                        <li class="active"><a href="/php/cook_book_login.php">Cookbook</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="bgcolor">
            <!-- Header image -->
            <div class="header-img">
                <center><img class="img-responsive" src="/pics/header_2_cook_book.png" alt="Header image" width="800" height="200"></center>
            </div>

            <div class="container body-content">
                    <?php
                        $nameErr = $passwordErr = "";
                
                        $servername = "localhost";
                        //$username = "cookbook_db";
                        //$password = "Cookbookpassword";
                        $dbname = "cookbook_db";
                        $username = "";
                        $password = "";
//                
//                
//                
//                        // Create connection
//                        $conn = new mysqli($servername, $username, $password, $dbname);
//
//                        // Check connection
//                        if ($conn->connect_error) {
//                            die("Connection failed: " . $conn->connect_error);
//                        } 
//                        echo "Connected successfully";
//                        
//                
//                        // done automatically
//                        $conn->close();
                
                    ?>
                    
            <!--                        create a form-->
                <?php 
                    if (isset($_GET['login_error'])) { 
                        if($_GET['login_error'] == 1){
                            echo "<div class=\"row\"><div class=\"col-sm-7\"><p class=\"error\" style=\"font-size:1.15em;\">Invalid Username and/or Password<span class=\"glyphicon glyphicon-exclamation-sign\"/></p></div></div>";
                        }
                    }
                ?>
                
                
                <form method="post" action="cook_book.php"> 
                    <div class="form-group row">
                        <label for="text-input" class="col-xs-2 col-form-label">Username</label>
                        <div class="col-sm-6">
                            <input class="form-control" type="text" name="username" id="text-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password-input" class="col-xs-2 col-form-label">Password</label>
                        <div class="col-sm-6">
                            <input class="form-control" type="password" name="password" id="password-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-8">
                            <input type="submit" name="submit" value="Login" class="btn btn-primary pull-right"/>
                        </div>
                    </div>
                </form>
                
                
                
                
                <!-- footer -->
                <br/>
                <hr class="double-line"/>

                <!-- social media external links -->
                <center>
                    <table>
                        <tr>
                            <?php include('../includes/footer.php'); ?>
                        </tr>
                    </table>
                </center>
            </div>
        </div>        
    </body>

</html>