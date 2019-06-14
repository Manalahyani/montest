<?php

include "dbcon.php";

$id = $_GET["id"];

// sql to delete a record
$sql = "DELETE FROM utilisateur WHERE id=".$id;

$result = $conn->prepare($sql);
          $result->execute();

if ($result) {
	header("Location: liste.php");
    echo "Record updated successfully";
	
} else {
    echo "Error updating record: " ;
}



?>