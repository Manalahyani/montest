<html>
<head>
</head>
<body>

<center><h1>Ajouter Utilisateur</h1>


	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="Contenu/sweetalert2/sweetalert2.min.css">
        <script src=""></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <script src="Contenu/sweetalert2/sweetalert2.min.js"></script>
        <form method="POST" action="ajouter.php">
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-3 col-form-label">Email</label>
    <div class="col-sm-6">
      <input type="email" name="mail" class="form-control" id="inputEmail3" placeholder="Entrez votre email">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputText" class="col-sm-3 col-form-label">Name</label>
    <div class="col-sm-6">
      <input type="text" name="login" class="form-control" id="inputEmail3" placeholder="Entrez votre nom">
    </div>

</div></div>

  <div class="form-group row">
    <label for="inputText" class="col-sm-3 col-form-label">Tel</label>
    <div class="col-sm-6">
      <input type="text" name="tel" class="form-control" id="inputEmail3" placeholder="Entrez votre numero">
    </div> </div>
  
  
  <button type="submit" class="btn btn-primary">Valider</button>
</form>


</center>


<?php
	if(!empty($_POST)){
		$email = $_POST["mail"];
		$login = $_POST["login"];
		$tel = $_POST["tel"];

		include "dbcon.php";
		$sql = "INSERT INTO utilisateur (email, login, tel) VALUES ('$email', '$login', '$tel')";
				

        $result = $conn->prepare($sql);
          $result->execute();

	if ($result) {
		echo "New record created successfully";
	} else {
		echo "Error lors de l'insertion";
	}
}
?>

</form>
</body>