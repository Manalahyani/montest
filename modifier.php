<html>
<head>
</head>
<body>

<center><h1>Modifier Utilisateur</h1>


<?php
if(!empty($_GET)){
	$id = $_GET["id"];
	$email = $_GET["email"];
	$login = $_GET["login"];
	$tel = $_GET["tel"];

	
}
?>

<h3><a href="liste.php">Liste utilisateur</a></h3>


<form method="POST" action="modifier.php">



<table class='tabel'>
	<tr>
		<td>id</td>
		<td><input type="text" name="id" value="<?php if(!empty($_GET)){ echo $id; } ?>"></td>
	</tr>
	<tr>
		<td>Email</td>
		<td><input type="text" name="email" value="<?php if(!empty($_GET)){ echo $email; } ?>"></td>
	</tr>
	<tr>
		<td>Username</td>
		<td><input type="text" name="login"  value="<?php if(!empty($_GET)){ echo $login; } ?>" disabled></td>
	</tr>

	<tr>
		<td>Tel</td>
		<td><input type="text" name="tel" value="<?php if(!empty($_GET)){ echo $tel; } ?>"></td>
	</tr>


	
	<tr>
		<td> </td>
		<td><input type="submit" value="Enregistrer" class="btn btn-outline-primary" ></td>
	</tr>
</table>

<?php
if(!empty($_POST)){

include "dbcon.php";
$sql = "UPDATE utilisateur SET email='".$_POST["email"]."' WHERE id='".$_POST["id"]."'"
and "UPDATE utilisateur SET tel='".$_POST["tel"]."' WHERE id='".$_POST["id"]."'";

echo $sql;
$result = $conn->prepare($sql);
          $result->execute();

if ($result) {
	header("Location: liste.php");
    echo "Record updated successfully";
	
} else {
    echo "Error updating record: " ;
}

}



?>



</center>

</form>
</body>