

 <?php

//$servername = "localhost";
//$username = "root";
//$dbname = "montest";

// Create connection
//$conn = new mysqli($servername, $username, $password,$dbname);
 try{

 	$conn = new PDO('pgsql:host=localhost;port=5432;dbname=montest', 'postgres', 'kalimonjaro11');
echo "";

 }
catch(PDOException $e){
	echo $e->getMessage();



//	$conn = new PDO('pgsql:host=localhost;port=5432;dbname=montest', 'postgres', 'kalimonjaro11');
// Check connection
//if ($conn->connect_error) {
    //die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
?> 