<?php
    include('../includes/assets.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title> Brandon Ellis E-Portfolio Resume</title>
        <link rel="icon" type="image/png" href="/pics/title_icon.png">
		<link rel="stylesheet" type="text/css" href="/css/style2.css">
		<link rel="stylesheet" type="text/css" href="/css/gallery.css">
<!--        <link rel="javascript" type="text/javascript" href="/js/galleryJS.js">-->
	
    </head>

            
    <body bgcolor="#f2f2f2">
        <div class = "header">
            <div class="headerBreak"></div>
            <div class = "headerContent">
                <center><img src="/pics/header_2_gallery.png" alt="Resume Header image" title="Resume Header image"</center>
                <div class = "nav">
                    <?php include('../includes/nav.php');?>
                </div>
            </div>
            <div class = "headerBreak2"></div>
        </div>	
    <div class="body">
        <div class = "outercontainer">
            <p><!-- favorite artist-->
                <b><font size="5">Favorite Artists</font></b>
                <table style="width:50%">
                    <tr>
                        <td><b><u>Artist</b></u></td>
                        <td><b><u>Field</b></u></td>
                        <td><b><u>Favorite Work</b></u></td>
                    </tr>
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
                        <td>Will Ferrell</td>
                        <td>Actor</td>
                        <td>Step Brothers, Anchorman</td>
                    </tr>
                </table>
            </p>
            <hr />
            <p><!-- favorite websites-->
                <b><font size="5">Favorite Websites</font></b>
                <ul>
                    <li><a href="http://www.techradar.com/us">Techradar</a></li>
                    <li><a href="http://www.reddit.com/">Reddit</a></li>
                    <li><a href="http://www.stumbleupon.com/">Stumbleupon</a></li>
                </ul>
            </p>
            <hr />
<!--
            <!-- Trying to do cooler image gallery 
            <div class = "images">
            <b><font size = "5">Images</font></b>
            <table>
                <tr>
                    <td><img id = "pic01" src = "/cgi-bin/Gallery/kylefield.JPG" alt="Kyle Field"></td>
                    <td><img id = "pic02" src = "/cgi-bin/Gallery/pjandi.jpg" alt = "Pj and I at Game"></td>
                    <td><img id = "pic03" src = "/cgi-bin/Gallery/dog.jpg" alt = "a random puppy"></td>
                </tr>
                <tr>
                    <td><img id = "pic04" src = "/cgi-bin/Gallery/Java_coding.png" alt = "Java coding"></td>
                    <td><img id = "pic05" src = "/cgi-bin/Gallery/winning.png" alt = "I was so close"></td>
                    <td><img id = "pic06" src = "/cgi-bin/Gallery/friends.jpg" alt = "friends and I playing pool"></td>
                </tr>
                <tr>
                    <td><img id = "pic07" src = "/cgi-bin/Gallery/rotaract.jpg" alt = "rotaract friends"></td>
                    <td><img id = "pic08" src = "/cgi-bin/Gallery/codingpractice.png" alt = "practicing my coding skills"></td>
                    <td><img id = "pic09" src = "/cgi-bin/Gallery/cruise01.jpg" alt = "cruise ship fun"></td>
                </tr>
                <tr>
                    <td><img id = "pic10" src = "/cgi-bin/Gallery/cruise02.jpg" alt = "cruise ship fun"></td>
                    <td><img id = "pic11" src = "/cgi-bin/Gallery/aggiefootball.jpg" alt = "football game with rachel"></td>
                    <td><img id = "pic12" src = "/cgi-bin/Gallery/grilling01.jpg" alt = "grilling bacon wrapped chicken"></td>
                </tr>
                <tr>
                    <td><img id = "pic13" src = "/cgi-bin/Gallery/finals01.jpg" alt = "prepping for finals while sleeping"></td>
                    <td><img id = "pic14" src = "/cgi-bin/Gallery/firstapps.png" alt = "first apps on iOS"></td>
                    <td><img id = "pic15" src = "/cgi-bin/Gallery/aggierings01.jpg" alt = "ordered aggie ring"></td>
                </tr>
                <tr>
                    <td><img id = "pic16" src = "/cgi-bin/Gallery/aggiering02.jpg" alt = "Ordered aggie ring"></td>
                    <td><img id = "pic17" src = "/cgi-bin/Gallery/codingESPN.jpg" alt = "homework and espn"></td>
                    <td><img id = "pic18" src = "/cgi-bin/Gallery/UPEvolunteer.jpg" alt = "UPE BIG EVENT"></td>
                </tr>
                <tr>
                    <td><img id = "pic19" src = "/cgi-bin/Gallery/aggiering03.jpg" alt = "getting my ring"></td>
                    <td><img id = "pic20" src = "/cgi-bin/Gallery/315code.jpg" alt = "coding for 315 multiplayer game"></td>
                    
                </tr>
            </table>
            </div>
            
            -->
            
            <!-- Trying to do cooler image gallery -->
            <b><font size = "5">Images</font></b>
            <div class = "gallery">
                <div class="img-container">
                    <img id = "pic01" src = "../cgi-bin/Gallery/kylefield.JPG" alt="Kyle Field">
                </div>
                <div class="img-container">
                    <img id = "pic02" src = "../cgi-bin/Gallery/pjandi.jpg" alt = "Pj and I at Game">
                </div>
                <div class="img-container">
                    <img id = "pic03" src = "../cgi-bin/Gallery/dog.jpg" alt = "a random puppy">
                </div>
                <div class="img-container">
                    <img id = "pic04" src = "../cgi-bin/Gallery/Java_coding.png" alt = "Java coding">
                </div>
                <div class="img-container">
                    <img id = "pic05" src = "../cgi-bin/Gallery/winning.png" alt = "I was so close">
                </div>
                <div class="img-container">
                    <img id = "pic06" src = "../cgi-bin/Gallery/friends.jpg" alt = "friends and I playing pool">
                </div>
                <div class="img-container">
                    <img id = "pic07" src = "../cgi-bin/Gallery/rotaract.jpg" alt = "rotaract friends">
                </div>
                <div class="img-container">
                    <img id = "pic08" src = "../cgi-bin/Gallery/codingpractice.png" alt = "practicing my coding skills">
                </div>
                <div class="img-container">
                    <img id = "pic09" src = "../cgi-bin/Gallery/cruise01.jpg" alt = "cruise ship fun">
                </div>
                <div class="img-container">
                    <img id = "pic10" src = "../cgi-bin/Gallery/cruise02.jpg" alt = "cruise ship fun">
                </div>
                <div class="img-container">
                    <img id = "pic11" src = "../cgi-bin/Gallery/aggiefootball.jpg" alt = "football game with rachel">
                </div>
                <div class="img-container">
                    <img id = "pic12" src = "../cgi-bin/Gallery/grilling01.jpg" alt = "grilling bacon wrapped chicken">
                </div>
                <div class="img-container">
                    <img id = "pic13" src = "../cgi-bin/Gallery/finals01.jpg" alt = "prepping for finals while sleeping">
                </div>
                <div class="img-container">
                    <img id = "pic14" src = "../cgi-bin/Gallery/firstapps.png" alt = "first apps on iOS">
                </div>
                <div class="img-container">
                    <img id = "pic15" src = "../cgi-bin/Gallery/aggierings01.jpg" alt = "ordered aggie ring">
                </div>
                <div class="img-container">
                    <img id = "pic16" src = "../cgi-bin/Gallery/aggiering02.jpg" alt = "Ordered aggie ring">
                </div>
                <div class="img-container">
                    <img id = "pic17" src = "../cgi-bin/Gallery/codingESPN.jpg" alt = "homework and espn">
                </div>
                <div class="img-container">
                    <img id = "pic18" src = "../cgi-bin/Gallery/UPEvolunteer.jpg" alt = "UPE BIG EVENT">
                </div>
                <div class="img-container">  
                    <img id = "pic19" src = "../cgi-bin/Gallery/aggiering03.jpg" alt = "getting my ring">
                </div>
                <div class="img-container">
                    <img id = "pic20" src = "../cgi-bin/Gallery/315code.jpg" alt = "coding for 315 multiplayer game">
                </div> 
            </div>
            
            <!--footer -->
            <div class = "footer">
                 <hr width="500"/>
            </div>
            <!-- end footer -->
        </div>
    </div>
    </body>
</html>