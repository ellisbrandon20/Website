<!DOCTYPE html>
<html>
<body>
    <h1>DBtrial.php</h1>
    <p>will try to connect to cook_book.mdb</p>

    
<?php
$host = $_SERVER['HTTP_HOST'];
$connect = new mysqli($host, "brandonellis","warriors13");
if ($connect ->connect_error){
	die("Connection FAILED!: " . $connect->connect_error);
}

echo "Succesful";
/*
print "<TABLE border='1'><TR><TD colspan='6'>DATA</TD><TR>";
while (!$data->EOF)
{
print "<tr>";
print "<td>" . $ data ->Fields[0]->value . " </td>";
print "<td>" . $ data ->Fields[1]->value . " </td>";
print "<td>" . $ data ->Fields[2]->value . " </td>";
print "</tr>";
$ data ->MoveNext();
}
echo "</TABLE>";
*/





/*
$db = new PDO("odbc:DRIVER={Microsoft Access Driver (*.mdb)}; DBQ=$dbName; Uid=; Pwd=;");
$sql = "SELECT * FROM table";
$data = $db->query($sql);
*/
 /*   
echo "<TABLE border='1'><TR><TD colspan='6'>DATA</TD><TR>";
while (!$data->EOF)
{
    echo "<tr>";
    echo "<td>" . $ data ->Fields[0]->value . " </td>";
    echo "<td>" . $ data ->Fields[1]->value . " </td>";
    echo "<td>" . $ data ->Fields[2]->value . " </td>";
    echo "</tr>";
    $ data ->MoveNext();
}
echo "</TABLE>";
$conn->close;

*/

//$db = null; //close connection



/*

$dir = $_SERVER["DOCUMENT_ROOT"];
echo "<br><br>reading from directory<br>";
$file = scandir($dir);
$file .= "/Tutorials.php";
print_r($file);
echo "<br><br><br>"; 

echo $_SERVER["DOCUMENT_ROOT"];
//$dbName = $_SERVER["DOCUMENT_ROOT"] . "/public_html/cgi-bin/Brandon_Webpag.mdb";
$dbName = "U:/toaster/e/l/ellisbrandon20/public_html/cgi-bin/Brandon_Webpag.mdb";
if (!file_exists($dbName)) {
    die("Could not find database file.");
}
$db = new PDO("odbc:DRIVER={Microsoft Access Driver (*.mdb)}; DBQ=$dbName; Uid=; Pwd=;");
*/

?>
    
    
</body>
</html>
