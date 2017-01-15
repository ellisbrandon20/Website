<?php
    include('../includes/assets.php');
    $username = $password = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // get login criteria
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
    // might have to change servername for production use
    $servername = "localhost";
    $dbname = "cookbook_db";
    $tblname = "my_cookbook";
    // ********************* DELETE *************************
    $username = "cookbook_db";
    $password = "Cookbookpassword";
    // **********************************************

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        // USE LINE BELOW FOR PRODUCTION USE
        //header( 'Location: http://www.brandon-ellis.net/php/cook_book_login.php?login_error=1' );
        // USE LINE BELOW FOR DEVELOPMENT USE
        header('Location: http://localhost:8888/php/cook_book_login.php?login_error=1');
    } 
    
     class Recipe implements JsonSerializable{
        function __construct(){
            $this->name = "";
            $this->category = "";
            $this->cooktime = "";
            $this->ingredients = "";
            $this->instructions = "";
            $this->pic_file = "";
        }
        
        public function jsonSerialize () {
            return array(
                'name'=>$this->name,
                'category'=>$this->category,
                'cooktime'=>$this->cooktime,
                'ingredients'=>$this->ingredients,
                'instructions'=>$this->instructions,
                'pic_file'=>$this->pic_file
            );
        }
        
        public function json_to_object($data) {
            foreach ($data AS $key => $value) $this->{$key} = $value;
        }
    }
    
    class searchRecipe{
        function __construct(){
            $this->name = "";
            $this->category = "";
            $this->cooktimeOperator = "";
            $this->cooktime = "";
            $this->SQL = "";
        }
        function createSQL(){
            $where_flag = $name_flag = $category_flag = false;
            $sql = "SELECT * FROM `" . $GLOBALS['tblname'] . "`";
            if(!empty($this->name)){
                $sql .= " WHERE `recipe` LIKE '%" . $this->name . "%'";
                $where_flag = true;
            }
            if(!empty($this->category)){
                if($where_flag){
                    $sql .= " AND";
                } else{
                    $sql .= " WHERE";
                    $where_flag = true;
                }
                $sql .= " `category` = '" . $this->category . "'";
            }
            if(!empty($this->cooktime)){
                if($where_flag){
                    $sql .= " AND";
                } else {
                    $sql .= " WHERE";
                    $where_flag = true;
                }
                $sql .= " `cooktime` " . $this->cooktimeOperator . "'" . $this->cooktime . "'";
            }
            $this->SQL = $sql;
        }
    }
    

    $recipe_flag = 0;
    if ($_SERVER["REQUEST_METHOD"] == "POST") { 
        // get search criteria
        if($_POST["page_form"] == "searchRecipe"){
            $searchRecipe = new searchRecipe();
            if (!empty($_POST["recipeName"])) {
                $searchRecipe->name = $_POST["recipeName"];
            }
            if (!empty($_POST["category"])) {
               $searchRecipe->category = $_POST["category"];
            }
            if (!empty($_POST["cooktimeOperator"])) {
               $searchRecipe->cooktimeOperator = $_POST["cooktimeOperator"];
            }
            if (!empty($_POST["cooktime"])) {
               $searchRecipe->cooktime = $_POST["cooktime"];
            }
            // construct the SQL string
            $searchRecipe->createSQL();
        }
        
        $result = $conn->query($searchRecipe->SQL);
        $recipe_flag = 1;
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
        
        <script src="../js/cook_book.js"></script>
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
                        <li class="active"><a href="/php/projects.php">Cookbook</a></li>
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
                
                <div id="recipeContent">
                    <button class="btn btn-primary" id="create">Create Recipe</button>
                    <button class="btn btn-primary" id="edit">Edit Recipe</button>
                    <button class="btn btn-primary" id="search">Search Recipe</button>
                    
                    <!-- search for recipe and load it -->
                    <div id="searchRecipe">
                        
                    </div>
                    
                </div>
                <div id="sql-search">
                    <?php
                        if(isset($searchRecipe)){
                            echo "<br>sql - " . $searchRecipe->SQL . "<br>";
                            echo "<br>SQL Results<br>";
                            
                            
                        if ($result->num_rows > 0) {
                            
                            if($result->num_rows == 1){
                                //echo "<script>alert('1 result');</script>";
                                $data = $result->fetch_assoc();
                                $recipe = new Recipe();
                                $recipe->name = $data["recipe"];
                                $recipe->category = $data["category"];
                                $recipe->cooktime = $data["cooktime"];
                                $recipe->ingredients = $data["ingredients"];
                                $recipe->instructions = $data["instructions"];
                                $recipe->pic_file = $data["picture"];
                                
                                $json_recipe = json_encode($recipe);
                                
                                //echo "<script>alert('".$json_recipe."');</script>";
                                echo "<script>
                                    $(document).ready(function(){
                                        $(\"#searchRecipe\").load('http://localhost:8888/php/cook_book_helper/view_recipe.php', ".$json_recipe.");
                                    });
                                </script>";
                            }
                            else{
                                // output data of each row
                                echo "<div class=\"table-responsive\"><table class=\"table table-striped\" id=\"query-results\">";
                                echo "<thead><tr><th>Recipe</th><th>Category</th><th>Cooktime</th><th>Ingredients</th></tr></thead>";
                                while($row = $result->fetch_assoc()) {
                                    //echo "recipe: " . $row["recipe"] . " - category: " . $row["category"] . " - cooktime: " . $row["cooktime"] . " - ingredients: " . $row["ingredients"] . " - instructions " . $row["instructions"] . " - picture: " . $row["picture"];
                                    echo "<tr>";
                                    echo "<td>" . $row["recipe"] . "</td>";
                                    echo "<td>" . $row["category"] . "</td>";
                                    echo "<td>" . $row["cooktime"] . "</td>";
                                    echo "<td>" . $row["ingredients"] . "</td>";
                                    echo "</tr>";
                                }
                                echo "</table></div>";
                            }
                        } else {
                            echo "0 results";
                        }
                
                            
                        }
                        else{
                            echo "searchRecipe NOT SET";
                        }
                    ?>
                </div>
                
                <script>
                    $(document).ready(function(){
                        if(!<?php echo $recipe_flag; ?>)
                            $("#searchRecipe").load('http://localhost:8888/php/cook_book_helper/search_recipe.php');
                        
                        $("#create").click(function(){
                            $("#recipeContent").load('http://localhost:8888/php/cook_book_helper/create_recipe.php');
                        });
                        $("#edit").click(function(){
                            $("#recipeContent").load('http://localhost:8888/php/cook_book_helper/create_recipe.php');
                        });
                        $("#search").click(function(){
                            $("#searchRecipe").load('http://localhost:8888/php/cook_book_helper/search_recipe.php');
                        });
                        $("#submitSearch").click(function(){
                            $("#searchRecipe").load('http://localhost:8888/php/cook_book_helper/view_recipe.php');
                        });
                    });
                    
                    function loadRecipe(){
//                        alert('here');
//                        $("#searchRecipe").load('http://localhost:8888/php/cook_book_helper/view_recipe.php');
//                        alert('theres');
                    };
                </script>
            
                
                
                
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
//                 if ($result->num_rows > 0) {
//                            // output data of each row
//                            while($row = $result->fetch_assoc()) {
//                                //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
//                                echo "recipe: " . $row["recipe"] . " - category: " . $row["category"] . " - cooktime: " . $row["cooktime"] . " - ingredients: " . $row["ingredients"] . " - instructions " . $row["instructions"] . " - picture: " . $row["picture"];
//                            }
//                        } else {
//                            echo "0 results";
//                        }
//                
//                        // done automatically
//                        $conn->close();
                    ?>