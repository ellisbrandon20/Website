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
        
        <link rel="icon" type="image/png" href="/pics/title_icon.png">
        <title> Brandon Ellis E-Portfolio Projects</title>
        
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
                <center><img class="img-responsive" src="/pics/header_2_projects.png" alt="Header image" width="800" height="200"></center>
            </div>

            <div class="container body-content">
                
                <!-- list the projects -->
                <div class="row">
                    <div class="col-sm-offset-7 col-sm-4">
                    <center><h3 style="color:#8c0e0e;"> My Website </h3></center>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <center>
                        <div class="thumbnail img-square">
                            <a href="index.php" target="_blank">
                                <img class="img-responsive" src="../data/projects/website.png" alt="My Website" width="350" height="350">
                            </a>
                        </div>
                        </center>
                    </div>
                    
                    <div class="col-sm-6">
                        <p style=font-size:1.25em>
                            As my interest with website and UI development grows I continue to add more tabs to my navigation bar and update the features to this personal "E-Portfolio". It all started with my initial interest in website development my freshman year. So I quickly started to learn HTML and basic CSS, and created a beautifuly awful looking website. No it wasn't in the "Top ugliest websites of year XXXX" but it was definitely a contender. Later after more research and experience in other school and work related projects I continued to ramp up the style and make this personal site cleaner and more appealing. I look forward to my breaks from school to focus on this site to add more features such as a cookbook app for personal use. Now I must leave you to learn about PHP and MySQL
                        </p>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-offset-7 col-sm-4">
                    <center><h3 style="color:#8c0e0e;"> IntenseDefense </h3></center>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <center>
                        <div class="thumbnail img-square">
                            <div class="embed-responsive embed-responsive-4by3">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/xy72W9JQHFQ" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                        </center>
                    </div>
                    
                    <div class="col-sm-6">
                        <p style=font-size:1.25em>
                            IntenseDefense is an online multiplayer game that was created for a class project in a group of 4. My contributions to this project include design documentation, rules design, and all UI development. I was also able to learn a some of the networking pieces related to this project as I overlooked a colleagues code for review. This project I learned not only important technical skills but time management and skills management. We were only given 8 weeks to complete this project with deliverables each week. I learned how to manage my time with what pieces of the project to devote more time to and what to assign other members to do based on their skill in certain area. You can view our presentation slides <a href="https://docs.google.com/presentation/d/1ZwRKX4dDFim0zvTHTKHFwe-COhjQRzqOb_LzDveaHUY/edit#slide=id.p" target="_blank">here</a>.
                        </p>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-offset-7 col-sm-4">
                    <center><h3 style="color:#8c0e0e;"> Interactive PPT </h3></center>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <center>
                        <div class="thumbnail img-square">
                            <a href="https://github.com/ellisbrandon20/Interactive-PPT-with-DB" target="_blank">
                                <img class="img-responsive" src="../data/projects/interactive_ppt.png" alt="My Website" width="350" height="350">
                            </a>
                        </div>
                        </center>
                    </div>
                    
                    <div class="col-sm-6">
                        <p style=font-size:1.25em>
                            While working at 4.0 and Go Test Review and Tutoring, I grabbed an extra project for my boss with this interactive Power Point application. This interactive PPT allows for a church to quickly add, edit, delete songs to the current slide show on the fly while in presentation mode without the audience knowing. This program utilizies a dual screen monitor feature where one monitor is simply the projector and the second monitor is the UI that I designed. This UI allows you to add, edit, delete, and reorganize that current slide show presentation. The user can also quickly switch between any slides without having to go in an incremental/decremental order. This project was made on the computer that it was being used on, therefore you cannot just download and expect it to work due to filename paths, and other limitations.
                        </p>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-offset-7 col-sm-4">
                    <center><h3 style="color:#8c0e0e;"> Grab 'Em by the "Posts" </h3></center>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <center>
                        <div class="thumbnail img-square">
                            <a href="../CSCE489/grabem-by-the-posts.html" target="_blank">
                                <img class="img-responsive" src="../data/projects/grabem_posts.png" alt="My Website" width="350" height="350">
                            </a>
                        </div>
                        </center>
                    </div>
                    
                    <div class="col-sm-6">
                        <p style=font-size:1.25em>
                            In my Data Science class, I teamed up with 3 other students to tackle the question if there was media bias in the 2016 U.S. Presidential Election. SPOILER ALERT! No one knows how they feal about Trump according to our data. This was my first time for a lot of areas to complete this project. Data grabbing, Data cleaning, Amazon Mechanical Turk, Training and Testing, Naive Bayes, Word Clouds, and correct use of Data Visualization. In this project I learned that you cannot always trust an outsource for training data labels, the correct way to create data visualizations, and how to write the best sentences to convey your message. Yes that last one is very true we spent a day of lecture discussing this and being in computer science degree we are only required to take two English courses and a couple of writing intensive courses. Please click on the image and check out our website for more information. 
                        </p>
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