<!DOCTYPE html>
<html>
<body>
<h1>trial.php</h1>
    
    
<?php
//variables
$x=1;
$y=5;
$name = "Brandon";

//output with variables
echo "Hello $name!";
echo "Hello ". $name . "!";
echo $x+$y;

/*GLOBAL VARIABLES:
	- named outside functions
	- to use the global variable type: global $name_of_variable
*/

/*STATIC variables:
	- when we dont want local variables to be deleted after function is complete
*/

//ECHO:
echo "<br>Write your html code to produce html code";
echo "<br><h1>Header 1</h1>";
echo "<br><p>paragraph one</p>";
echo "<br> <p>A break between paragraph 1 and 2</p>";



//=======================================================================
/* PHP Data Types:
		-String
			> can use '' or ""
		-Integer
			> must have at least one digit
			>
		-Float
		-Boolean
		-Array
			> ex: $cars = array("Volvo", "BMW", "Toyota");
				  var_dump($cars);
				  >> produces:
						array(3) { [0]=> string(5) "Volvo" [1]=> string(3) "BMW" [2]=> string(6) "Toyota" }
		-Object
			> stores data and infor on how to process that data
		-NULL
			> variables not initalized are set to NULL;
		-Resource
			> storing of a reference to functions and resources external to PHP
			> ex: database call
			
			
			
		-var_dump($variable)
			> returns the data type and value
*/


//=======================================================================
//String Functions

//Concatenation
$str_1 = "Hello";
$str_2 = "World";
$str_3 = $str_1 . " " . $str_2;
echo "<br>" . $str_3;

//Concatenation assignment
$str_1 .= $str_2;
// $str_1 becomes "HelloWorld"

echo "<br>strlen(Hello World) = " . strlen("Hello World!"); //outputs: 12

echo "<br> str_word_count(\"Hello World!\") = " . str_word_count("Hello World!"); //outputs: 2

echo strpos("Hello World!", "World"); //outputs: 6
// > returns position of first letter if found
// > if NOT found returns FALSE

echo "<br>str_replace(\"world\", \"Brandon\", \"Hello world!\") = " . str_replace("world", "Brandon", "Hello world!");
// > outputs: Hello Brandon!

//String funtions reference
//http://www.w3schools.com/php/php_ref_string.asp


// variable Constants
define("My_Name", "Brandon Ellis");
echo "<br>My_name is a constant = " . My_Name;
/* 
> to create a constant use define() funciton

php code: define(name, value, case-insensitive)

> name: name of constant
> value: value of constant
> case-insensitive:  true or false
	-- false meaning it IS case-sensitive
	-- default = false
	
!!!! CONSTANTS ARE GLOBAL !!!!!
*/


//=======================================================================
//Comparison operators
$x1 = 24;
$y1 = 30;
$z1 = 24;

//Equal
//$x1 == $y1 // false
//$x1 == $z1 // true
//NOT Equal
//$x1 != $z1 //false
//$x1 != $y1 //true
//$x1 <> $y1 //true


//Identical
//$x1 === $z1 //return true
//> value and data type must be same
//$str_x1 = "24";
//$x1 === $str_x1; // false
// NOT Identical
//$x1 !=== $z1 // FALSE

//Greater than 
//$x1 > $z1
//Greater than  or equal to
//$x1 >= $z1
//Less than
//$x1 < $z1
//Less than or equal to
//$x1 <= $z1

/* LOGICAL OPERATORS

&&: AND
||: OR
!: NOT

*/


//=======================================================================

// CONDITIONAL STATEMENTS
/*
if (condition) {
		code
} elseif (condition) {
		code
} else {
		code
}
*/

/*
SWITCH STATEMENT

switch (n) {
    case label1:
        code to be executed if n=label1;
        break;
    case label2:
        code to be executed if n=label2;
        break;
    case label3:
        code to be executed if n=label3;
        break;
    ...
    default:
        code to be executed if n is different from all labels;
}

*/
//While loop
/*
while (condition is true) {
    code to be executed;
}
*/

//do-while loop
/*
do {
    code to be executed;
} while (condition is true);
*/

//for loop
/*
for (init counter; test counter; increment counter) {
    code to be executed;
}
*/
echo"<br><br> for loops <br>";
for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
} 



//for-each loop
/*
foreach ($array as $value) {
    code to be executed;
}
*/
echo "<br><br> for-each loops <br>";
$colors = array("red", "green", "blue", "yellow"); 
foreach ($colors as $value) {
    echo "$value <br>";
}


//=======================================================================
// FUNCTIONS
function writeMsg() {
    echo "<br> written from called function writeMSG()";
}
writeMsg(); // call the function

//passing variables
echo "<br><br> passing variables into functions<br>";
function familyName($fname) {
    echo "$fname Refsnes.<br>";
}

familyName("Jani");
familyName("Hege");
familyName("Stale");
familyName("Kai Jim");
familyName("Borge");




/*
default arguments:
    > when you dont send an argument to the parameter it uses 50
*/
echo "<br>";
function setHeight($minheight = 50) {
    echo "The height is : $minheight <br>";
}

setHeight(350);
setHeight(); // will use the default value of 50
setHeight(135);



/*
    functions - returning values
*/
function sum($x, $y) {
    $z = $x + $y;
    return $z;
}

echo "<br>5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";
echo "2 + 4 = " . sum(2, 4);



//=======================================================================
// ARRAYS

$cars = array("Volvo", "BMW", "Toyota");
echo "<br>I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";


/*
    3 types of arrays:
        > Indexed arrays - Arrays with a NUMERIC INDEX
        > Associative arrays - Arrays with NAMED KEYS
        > Multidimensional arrays - Arrays containing one or more arrays
*/

//indexed array is like the first example
        // to get the length of array
        $cars_count = count($cars);
        // looping through array
        $arrlength = count($cars);
        echo "<br><br>looping through index array<br>";
        for($x = 0; $x < $arrlength; $x++) {
            echo $cars[$x];
            echo "<br>";
        }

// associative arrays
        //two ways to create:
            $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
            //or
            $age['Peter'] = "35";
            $age['Ben'] = "37";
            $age['Joe'] = "43";

        echo "<br>Peter is " . $age['Peter'] . " years old.";
        echo "<br>Ben is " . $age['Ben'] . " years old.";
        //looping through array
        echo "<br><br>looping through associative array:<br>";
        foreach($age as $x => $x_value) {
            echo "Key=" . $x . ", Value=" . $x_value;
            echo "<br>";
        }


//Multi-dim arrays

        /*
        Name	   Stock	Sold
        Volvo	     22	     18
        BMW	         15   	 13
        Saab	      5       2
        Land Rover	  17	  15

        can use a 2-d array
        */
        $cars = array
          (
          array("Volvo",22,18),
          array("BMW",15,13),
          array("Saab",5,2),
          array("Land Rover",17,15)
          );
        /*
            $cars[0][0] is "Volvo"
            $cars[1][0] is "BMW"
            $cars[2][0] is "Saab"
            $cars[3][0] is "Land Rover"

            $cars[2][2] is 2
        */

        //for loop that creates a ul (HTML)
        echo "<br><br>Table of Cars: <br>";
        for ($row = 0; $row < 4; $row++) {
          echo "<p><b>Row number $row</b></p>";
          echo "<ul>";
          for ($col = 0; $col < 3; $col++) {
            echo "<li>".$cars[$row][$col]."</li>";
          }
          echo "</ul>";
        }


//=======================================================================

// Sort Functions

/*
    sort() - sort arrays in ASC
    rsort() - sort arrays in DESC
    asort() - sort associative arrays in ASC, according to VALUE
    ksort() - sort associative arrays in ASC, according to KEY
    arsort() - sort associative arrays in DESC, according to VALUE
    krsort() - sort associative arrays in DESC, according to VALUE
*/

$cars = array("Volvo", "BMW", "Toyota");
sort($cars);

$numbers = array(4, 6, 2, 22, 11);
sort($numbers);

$cars = array("Volvo", "BMW", "Toyota");
rsort($cars);

$numbers = array(4, 6, 2, 22, 11);
rsort($numbers);

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
asort($age);

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
ksort($age);

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
arsort($age);

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
krsort($age);


//=======================================================================

// SUPER GLOBALS

/*
    PHP stores all global variables in an array called $GLOBALS[index]. 
        The index holds the name of the variable.
    
    $_SERVER is a PHP super global variable which holds information
        about headers, paths, and script locations.
    
*/


echo "<br> PHP_SELF: ";
echo $_SERVER['PHP_SELF']; 
echo "<br> SERVER_NAME: ";
echo $_SERVER['SERVER_NAME']; 
echo "<br> HTTP_HOST: ";
echo $_SERVER['HTTP_HOST'];
echo "<br> HTTP_REFERER: ";
echo $_SERVER['HTTP_REFERER'];
echo "<br> HTTP_USER_AGENT: ";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];


//random exmaple?????
?>
    <br><br><br><br><br>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
   Name: <input type="text" name="fname">
   <input type="submit">
</form>  

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
     // collect value of input field
     $name = $_REQUEST['fname']; 
     if (empty($name)) {
         echo "Name is empty";
     } else {
         echo $name;
     }
}


//end example;

//====================================================================================
//====================================================================================
//====================================================================================
//====================================================================================
//====================================================================================
//====================================================================================

//              END BASICS

//===================================================================================

// FORMS
?>
<br><br>
<p>FORMS</p>
<form action="welcome.php" method = "post">
Name: <input type = "text" name = "name"><br>
E-mail: <input type = "text" name = "email"><br>
<input type = "submit">
</form>
<?php
/*  
    - to send informationfrom one page to the next you use FORMS
    - action="" : here you type the name of the file you are sending the form to
    - mehod = "" :
        > GET: only allows 2000 characters to be sent, all variables are visible to everyone in address bar
        > POST:  no limit on characters, all variables are HIDDEN to others, it is not posted in address bar
*/
    
//recieving page welcome.php
/*
        Welcome <?php echo $_POST["name"]; ?><br>
        Your email address is: <?php echo $_POST["email"]; ?>
*/

//Form validation
echo htmlspecialchars($_SERVER["PHP_SELF"]);
/*
    - this can be used in the action section of forms
    - htmlspecialchars() : converts special characters to HTML entities
        > ex: "<" becomes &lt
        > helps with hackers    
*/


//Form REQUIRED FIELDS
//EXAMPLE:
?>
<style>
.error {color: #FF0000;}
</style>    
<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = ""; //Error variables
$name = $email = $gender = $comment = $website = ""; //variables for form

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["name"])) {
     $nameErr = "Name is required";
   } else {
     //$name = test_input($_POST["name"]);
       $name = $_POST["name"];
       if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
           $nameErr = "Only letters and white space allowed"; 
       }
   }
   
   if (empty($_POST["email"])) {
     $emailErr = "Email is required";
   } else {
       //$email = test_input($_POST["email"]);
       $email = $_POST["email"];
       if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
           $emailErr = "Invalid email format"; 
       }
       // !!!!!!!!!!!!! ONLY CHECKS FORMAT OF EMAIL:   SDF@DFV.COM    IS VALID
   }
     
   if (empty($_POST["website"])) {
     $website = "";
   } else {
     $website = test_input($_POST["website"]);
   }

   if (empty($_POST["comment"])) {
     $comment = "";
   } else {
     $comment = test_input($_POST["comment"]);
   }

   if (empty($_POST["gender"])) {
     $genderErr = "Gender is required";
   } else {
     $gender = test_input($_POST["gender"]);
   }
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
   Name: <input type="text" name="name">
   <span class="error">* <?php echo $nameErr;?></span>
   <br><br>
   E-mail: <input type="text" name="email">
   <span class="error">* <?php echo $emailErr;?></span>
   <br><br>
   Website: <input type="text" name="website">
   <span class="error"><?php echo $websiteErr;?></span>
   <br><br>
   Comment: <textarea name="comment" rows="5" cols="40"></textarea>
   <br><br>
   Gender:
   <input type="radio" name="gender" value="female">Female
   <input type="radio" name="gender" value="male">Male
   <span class="error">* <?php echo $genderErr;?></span>
   <br><br>
   <input type="submit" name="submit" value="Submit"> 
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>

<?php
    
//=================================================================================
// END FORMS    
//=================================================================================    
//=================================================================================    
    
    
// PHP FILE HANDELING


//        to read a text file use readfile("name.txt") and echo it to screen
echo "<br><br> Reading from file: header.txt : <br><br>";
echo readfile("header.txt");

/* 
    fopen(): opens a specific file
    > fopen("php.txt", "modes")
        > modes:
        > r: read only
        > w: write only, OVERWRITES file, creates new if doesnt exist
        > a: write only, APPENDS to file, creates new if doesnt exist
        > x: creates a new file for write only, returns false if file already exists
        > r+: read/write, file pointer starts at begin
        > w+: read/write, erases everything creats new file if doesnt exists, starts at beiginning
        > a+: read/write, appends to file, creates new if doesnt exist
        > x+: creates a new file for read/write, returns false and error if files exists
    
    $myfile = fopen("php.txt", "r") or die("Unable to open file!");
       
       
    fread(): reads from open file
    > fread($myfile,filesize("webdictionary.txt"));
    > $myfile is the name of file
    > second parameter tells how much of the file to read, in this case it reads to the end of file
    
    
    fclose(): close an open file
    > pass in the name of the file
    > fclose("php.txt");
    > fclose($myfile);
    
    
    fgets(): reads a single line in file
    > pass in the name of the file
    > echo fgets("php.txt");
    > echo fgets($myfile);
    
    
    feof(): checks if you're at the end of the file
    >while(!feof($myfile)) {
        echo fgets($myfile) . "<br>";
     }
     
    fgetc(): reads single character at a time 
    
    EX of writing to a new file:
        $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
        $txt = "John Doe\n";
        fwrite($myfile, $txt);
        //$txt = "Jane Doe\n";
        fwrite($myfile, "Jane Doe");
        fclose($myfile);
*/ 


//====================================================================================
// ERROR HANDELING
/*
    > "die()" statements
    > Custon errors and error triggers
    > error reporting
*/

echo "<br><br><br>example use of error handle for file";
if(!file_exists("welcome.txt")) {
  die("File not found");
} else {
  $file=fopen("welcome.txt","r");
}

/*
    custom error handler
        syntax: error_function(error_level,error_message, error_file,error_line,error_context)
        > error_level: REQUIRED, level: 2, 8, 256, 512, 1024, 4096, 8191
        > error_message: REQUIRED, specifies the error message for the userdefioned error
*/






























    
    ?>
</body>
</html>