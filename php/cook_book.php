<?php
    include('../includes/assets.php');
    $username = $password = "";
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["username"])) {
           $usernsme = "Name is required";
        } else {
            $username = $_POST["username"];
        }
        if (empty($_POST["password"])) {
            $password = "Password is required";
        } else {
            $password = $_POST["password"];
        }
    }










    // ********************* DELETE *************************

    $username = "cookbook_db";
    $password = "Cookbookpassword";



    // might have to change servername for production use
    $servername = "localhost";
    $dbname = "cookbook_db";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        // USE LINE BELOW FOR PRODUCTION USE
        //header( 'Location: http://www.brandon-ellis.net/php/cook_book_login.php?login_error=1' );
        // USE LINE BELOW FOR DEVELOPMENT USE
        header('Location: http://localhost:8888/php/cook_book_login.php?login_error=1');
    } 
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
                        <li class="active"><a href="/php/projects.php">Projects</a></li>
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
                    class Recipe{
                        function Recipe(){
                            $this->name = "";
                            $this->category = "";
                            $this->cooktime = "";
                            $this->ingredients = "";
                            $this->instructions = "";
                            $this->pic_file = "";
                        }
                    }
                ?>
                
                
                
                
                <!-- ******************************** -->
                <!-- *********** edit_cook_book.php load it in on button using AJAX ************ -->
                <!-- ******************************** -->
                <form>
                <div class="row">
                    <div class="col-md-4">
                        <div class="thumbnail img-square">
                            <img class="img-responsive" src="" id="edit_recipe_img" width="350" height="350">
                        </div>
                        <form action="upload.php" method="post" enctype="multipart/form-data">
                            Select image to upload:
                            <input type="file" name="fileToUpload" id="fileToUpload">
                            <input type="submit" value="Upload Image" name="submit" style="">
                        </form>
                    </div>
                    <div class="col-sm-8">
                        <br>
                        <div class="row">
                            <!-- name -->
                            <div class="form-group">
                                <div class="col-sm-2">
                                    <label for="recipe_name">Recipe Name</label>
                                </div>
                                <div class="col-sm-6">
                                    <input type="email" class="form-control" id="recipe_name" placeholder="Recipe Name">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <!-- category(s) -->
                            <div class="col-sm-2">
                                    <label for="category">Category(s)</label>
                            </div>
                            <div class="col-sm-6">
                                <label class="form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="category1" value="option1"> Chicken
                                </label>
                                <label class="form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="category2" value="option2"> Beef
                                </label>
                                <label class="form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="category3" value="option3"> Pork
                                </label>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <!-- cooktime -->
                            <div class="form-group">
                                    <label for="cooktime-input" class="col-xs-2 col-form-label">Time</label>
                                <div class="col-sm-3">
                                    <input class="form-control" type="text" placeholder="000:00:00" 
                                           defaultValue="000:00:00" id="cooktime-input" onkeyup="showCooktime(this.value)">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <!-- ingredients -->
                            <div class="form-group">
                                <div class="col-sm-2">
                                    <label for="ingredients_input">Ingredients:</label>
                                </div>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="ingredients_input" rows="5" placeholder="Ingredients"></textarea>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <!-- instructions -->
                            <div class="form-group">
                                <div class="col-sm-2">
                                    <label for="instructions_input">Instructions:</label>
                                </div>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="instructions_input" rows="10" placeholder="Instructions"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
                <script>
                    function showCooktime(str){

                    }
                </script>
                
                <!-- ******************************** -->
            
                
                
                
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


<?php
                        
//                        $sql = "SELECT * FROM my_cookbook";
//                        $result = $conn->query($sql);
//                
//                        if ($result->num_rows > 0) {
//                            // output data of each row
//                            while($row = $result->fetch_assoc()) {
//                                //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
//                                echo "recipe: " . $row["recipe"] . " - category: " . $row["category"] . " - cooktime: " . $row["cooktime"] . " - ingredients: " . $row["ingredients"] . " - instructions " . $row["instructions"] . " - picture: " . $row["picture"];
//                            }
//                        } else {
//                            echo "0 results";
//                        }
//                
//                
//                        // done automatically
//                        $conn->close();
                    ?>