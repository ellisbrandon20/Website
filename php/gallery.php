<?php
    include('../includes/assets.php');
?>
<!DOCTYPE html>
<html>
	<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<!--        <link rel="icon" type="image/png" href="/pics/title_icon.png">-->
<!--		<link rel="stylesheet" type="text/css" href="/css/style2.css">-->
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="/css/navbar.css">
        <link rel="stylesheet" type="text/css" href="/css/style.css">
        
        
        <title> Brandon Ellis E-Portfolio Gallery</title>
        
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
                        <li class="active"><a href="/php/gallery.php">Gallery</a></li>
                        <li><a href="/php/projects.php">Projects</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="bgcolor">
        <!-- Header image -->
        <div class="header-img">
            <center><img class="img-responsive" src="/pics/header_2_gallery.png" alt="Header image" width="800" height="200"></center>
        </div>

        <!-- conatiner content -->
            <div class="container body-content">
                <div class="row">
                    <div class="col-md-6">
                        <center><h3 style="color:#8c0e0e;">Favorite Artists</h3></center>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Artist</th>
                                        <th>Field</th>
                                        <th>Favorite Work</th>
                                    </tr>
                                </thead>
                                <tr>
                                    <td>Twenty One Pilots</td>
                                    <td>Music</td>
                                    <td>Album: Vessel</td>
                                </tr>
                                <tr>
                                    <td>Fall Out Boy</td>
                                    <td>Music</td>
                                    <td>Album: Save Rock and Roll</td>
                                </tr>
                                <tr>
                                    <td>Walk Off The Earth</td>
                                    <td>Music</td>
                                    <td>Album: Sing It All Away</td>
                                </tr>
                                <tr>
                                    <td>Our Last Night</td>
                                    <td>Music</td>
                                    <td>All Cover Songs</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-6">
                       <center><h3 style="color:#8c0e0e;">Favorite Video Games</h3></center> 
                        
                            <div class="row">
                                <div class="col-xs-4 col-xs-offset-2">
                                    <img class="img-responsive" src="../data/Gallery/Games/bf-1.jpg" alt="BF1" width="100" heigth="100">
                                </div>
                                <div class="col-xs-4">
                                    <img class="img-responsive" src="../data/Gallery/Games/RL.jpg" alt="RL" width="100" heigth="100">
                                </div>
                            </div>
                        
                        <div class="row">
                            <div class="col-xs-4 col-xs-offset-2">
                                <img class="img-responsive" src="../data/Gallery/Games/h1z1.jpeg" alt="H1Z1" width="100" heigth="100">
                            </div>
                            <div class="col-xs-4">
                                <img class="img-responsive" src="../data/Gallery/Games/minesweeper.jpg" alt="minesweeper" width="100" heigth="100">
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- line separator between gallery images and above -->
                <br/>
                <hr class="single-line"/>
                
                <!-- image gallery -->
                <div class="row">
                    <div class="col-sm-4">
                        <div class="thumbnail">
                            <a href="../data/Gallery/kylefield.JPG" target="_blank">
                                <img class="img-responsive" src="../data/Gallery/kylefield.JPG" alt="Kyle Field" style="width:100%">
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="thumbnail">
                            <a href="../data/Gallery/pjandi.jpg" target="_blank">
                                <img class="img-responsive" src="../data/Gallery/pjandi.jpg" alt="Pj and I" style="width:100%">
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="thumbnail">
                            <a href="../data/Gallery/dog.jpg" target="_blank">
                                <img class="img-responsive" src="../data/Gallery/dog.jpg" alt="pet store" style="width:100%">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="thumbnail">
                            <a href="../data/Gallery/Java_coding.png" target="_blank">
                                <img class="img-responsive" src="../data/Gallery/Java_coding.png" alt="java code" style="width:100%">
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="thumbnail">
                            <a href="../data/Gallery/winning.png" target="_blank">
                                <img class="img-responsive" src="../data/Gallery/winning.png" alt="Almost won" style="width:100%">
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="thumbnail">
                            <a href="../data/Gallery/friends.jpg" target="_blank">
                                <img class="img-responsive" src="../data/Gallery/friends.jpg" alt="friends" style="width:100%">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="thumbnail">
                            <a href="../data/Gallery/rotaract.jpg" target="_blank">
                                <img class="img-responsive" src="../data/Gallery/rotaract.jpg" alt="rotaract" style="width:100%">
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="thumbnail">
                            <a href="../data/Gallery/codingpractice.png" target="_blank">
                                <img class="img-responsive" src="../data/Gallery/codingpractice.png" alt="coding practice" style="width:100%">
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="thumbnail">
                            <a href="../data/Gallery/cruise01.jpg" target="_blank">
                                <img class="img-responsive" src="../data/Gallery/cruise01.jpg" alt="cruise ship" style="width:100%">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="thumbnail">
                            <a href="../data/Gallery/cruise02.jpg" target="_blank">
                                <img class="img-responsive" src="../data/Gallery/cruise02.jpg" alt="cruise ship 2" style="width:100%">
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="thumbnail">
                            <a href="../data/Gallery/aggiefootball.jpg" target="_blank">
                                <img class="img-responsive" src="../data/Gallery/aggiefootball.jpg" alt="aggie football" style="width:100%">
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="thumbnail">
                            <a href="../data/Gallery/grilling01.jpg" target="_blank">
                                <img class="img-responsive" src="../data/Gallery/grilling01.jpg" alt="bacon wrapped chicken" style="width:100%">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="thumbnail">
                            <a href="../data/Gallery/finals01.jpg" target="_blank">
                                <img class="img-responsive" src="../data/Gallery/finals01.jpg" alt="finals" style="width:100%">
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="thumbnail">
                            <a href="../data/Gallery/firstapps.png" target="_blank">
                                <img class="img-responsive" src="../data/Gallery/firstapps.png" alt="first ios apps" style="width:100%">
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="thumbnail">
                            <a href="../data/Gallery/aggierings01.jpg" target="_blank">
                                <img class="img-responsive" src="../data/Gallery/aggierings01.jpg" alt="aggie ring order" style="width:100%">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="thumbnail">
                            <a href="../data/Gallery/aggiering02.jpg" target="_blank">
                                <img class="img-responsive" src="../data/Gallery/aggiering02.jpg" alt="ordered aggie ring" style="width:100%">
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="thumbnail">
                            <a href="../data/Gallery/codingESPN.jpg" target="_blank">
                                <img class="img-responsive" src="../data/Gallery/codingESPN.jpg" alt="espn and coding" style="width:100%">
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="thumbnail">
                            <a href="../data/Gallery/UPEvolunteer.jpg" target="_blank">
                                <img class="img-responsive" src="../data/Gallery/UPEvolunteer.jpg" alt="UPE Big event" style="width:100%">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="thumbnail">
                            <a href="../data/Gallery/aggiering03.jpg" target="_blank">
                                <img class="img-responsive" src="../data/Gallery/aggiering03.jpg" alt="getting aggie ring" style="width:100%">
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="thumbnail">
                            <a href="../data/Gallery/315code.jpg" target="_blank">
                                <img class="img-responsive" src="../data/Gallery/315code.jpg" alt="multiplayer game project" style="width:100%">
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="thumbnail">
                            <a href="../data/Gallery/UPEvolunteer.jpg" target="_blank">
                                <img class="img-responsive" src="../data/Gallery/UPEvolunteer.jpg" alt="UPE Big event" style="width:100%">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="thumbnail">
                            <a href="../data/Gallery/me_goldengate.jpg" target="_blank">
                                <img class="img-responsive" src="../data/Gallery/me_goldengate.jpg" alt="me at golden gate bridge" style="width:100%">
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="thumbnail">
                            <a href="../data/Gallery/touringSF.jpg" target="_blank">
                                <img class="img-responsive" src="../data/Gallery/touringSF.jpg" alt="Rachel and I in SF" style="width:100%">
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="thumbnail">
                            <a href="../data/Gallery/Yosemite.jpg" target="_blank">
                                <img class="img-responsive" src="../data/Gallery/Yosemite.jpg" alt="Yosemite" style="width:100%">
                            </a>
                        </div>
                    </div>
                </div>
                
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
</hmtl>
      
<script>
function openResumePDF() {
    location.href = "http://brandon-ellis.net/data/Resume_Ellis_Brandon_Summer_2016.pdf";
}
</script>