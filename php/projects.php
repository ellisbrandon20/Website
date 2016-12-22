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
        
        
        <title> Brandon Ellis E-Portfolio Home</title>
        
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
                    <li class="active"><a href="/php/projects.php">Projects</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    <div class="bgcolor">
    <!-- Header image -->
    <div class="header-img">
        <center><img class="img-responsive" src="/pics/header_2.png" alt="Header image" width="800" height="200"></center>
    </div>
    
    <!-- conatiner content -->
        <!-- profile picture and about me -->
        <div class="container body-content">
            <center><img class="img-responsive" src="/pics/index_me.png" alt="Profile Picture" width="641" height="629"></center>
            
            <center><h3 style="color:#8c0e0e;"> Howdy! </h3></center>
            
            <p style=font-size:1.25em>
                Howdy! My name is Brandon Ellis and I am a Computer Science at Texas A&M University, the greatest University on this planet! I chose Texas A&M because of the school’s core values that they engrave in every student, Excellence, Integrity, Leadership, Loyalty, Respect, and Selfless Service. I have always thought these core values have represented me since before I started to attend A&M. I chose this school to be surrounded by other people that believe in these core values because of the types of people these values build.
            </p>
            <p style=font-size:1.25em>
              My interests in Computer Science are in Web Development, Human Computer Interaction, Mobile applications, and Core Software Development. I believe the reason I have these interests are because of my ability to be creative and artistic. The visual aspect of things draw to me and I love to see how certain aspects can draw some people’s attention but not others. My interests in these fields have strengthened since my internship with Cisco Systems in San Jose, California where I worked on the front end team of UCS-Central. This product is a manager tool for servers and we build web applications to easily manage these with visual effects. During the summer of 2016 I worked on a Tab Recovery System similar to the way Google Chrome or Mozilla Firefox works. With that I was able to build a dialog to show the user what tabs they had left open. The last project I worked on there was a “Favorites” widget for the dashboard, where users could favorite there most used components of the application for a faster way to reach those components. At this internship I was able to work hands on with team members and was exposed to many technologies that I did not know existed. It was a great learning experience of the profession and a great way to reassure that I have found my passion.
            </p>
            <p style=font-size:1.25em>
                I have some hobbies that just about every other computer nerd has: Playing video games, board games, and sports. I also enjoy grilling outside with friends enjoying time while we are all in the same central area, and watching my favorite school compete in just about any sport.
            </p>
            <p style=font-size:1.25em>
                If you want to learn more about me you can easily find me on social media by clicking the links below, or you can contact me via email (see on resume). 
            </p>
            
            <center><h3 style = "color:#8c0e0e;"> Thanks and Gig 'Em! </h3></center>
            
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
    
    
    
    
    
    
    
    
    
    
    
    
    
<!--

	<body bgcolor="#f2f2f2">
            <div class="header">
                <div class = "headerBreak"></div>
                <div class="headerContent">
                    <center><img src="/pics/header_2.png" alt="Header image" title="header image"></center>
                    <div class = "nav">
                        <?php //include('../includes/nav.php');?>
                    </div>
                </div>
                <div class = "headerBreak2"></div>
            </div>


            <div class = "body">
                <div class = "outercontainer">

                <br><br>

                <center><img src="/pics/index_me.png" alt="Picture of Me" style="max-width:100%"></center>

                <center><h2 style = "color:#8c0e0e;"> Howdy! </h2></center>
                    <div class = "innercontainer">
                        <p style = font-size:125%>
                          Howdy! My name is Brandon Ellis and I am a Computer Science at Texas A&M University, the greatest University on this planet! I chose Texas A&M because of the school’s core values that they engrave in every student, Excellence, Integrity, Leadership, Loyalty, Respect, and Selfless Service. I have always thought these core values have represented me since before I started to attend A&M. I chose this school to be surrounded by other people that believe in these core values because of the types of people these values build.
                        </p>
                        <p style = font-size:125%>
                          My interests in Computer Science are in Web Development, Human Computer Interaction, Mobile applications, and Core Software Development. I believe the reason I have these interests are because of my ability to be creative and artistic. The visual aspect of things draw to me and I love to see how certain aspects can draw some people’s attention but not others. My interests in these fields have strengthened since my internship with Cisco Systems in San Jose, California where I worked on the front end team of UCS-Central. This product is a manager tool for servers and we build web applications to easily manage these with visual effects. During the summer of 2016 I worked on a Tab Recovery System similar to the way Google Chrome or Mozilla Firefox works. With that I was able to build a dialog to show the user what tabs they had left open. The last project I worked on there was a “Favorites” widget for the dashboard, where users could favorite there most used components of the application for a faster way to reach those components. At this internship I was able to work hands on with team members and was exposed to many technologies that I did not know existed. It was a great learning experience of the profession and a great way to reassure that I have found my passion.
                        </p>
                        <p style = font-size:125%>
                            I have some hobbies that just about every other computer nerd has: Playing video games, board games, and sports. I also enjoy grilling outside with friends enjoying time while we are all in the same central area, and watching my favorite school compete in just about any sport.
                        </p>
                        <p style = font-size:125%>
                            If you want to learn more about me you can easily find me on social media by clicking the links below, or you can contact me via email (see on resume). 
                        </p>
                    </div>
                <center><h2 style = "color:#8c0e0e;"> Thanks and Gig 'Em! </h2></center>

            <br>

            footer 
                                <hr width="500"/>
                <br>
                <center>Social Media</center>
                <center>
                <table>
                    <tr>
            <?php
    //include('../includes/footer.php');
?>
                           </tr>
                </table>
                </center>
                    </div>
                <br>
                <br>
            </div>
	</body>
-->
</hmtl>
        
