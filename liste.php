<?php
include "dbcon.php";
$select = $conn->query("SELECT id, email, login, tel FROM utilisateur");
$data = $select->fetchAll(PDO::FETCH_ASSOC);
?>         
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<center><h1> Liste des utilisateurs </h1>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="Contenu/sweetalert2/sweetalert2.min.css">
        <script src=""></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <script src="Contenu/sweetalert2/sweetalert2.min.js"></script>



	<table border="1" class="table">
		<thead>
			<tr>
				<th>E-Mail</th>
				<th>Login</th>
				<th>Tel</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($data as $user): ?>
				<tr>
					<td><?= $user["email"] ?></td>
					<td><?= $user["login"] ?></td>
					<td><?= $user["tel"] ?></td>
					<td>
						<a href="modifier.php?id=<?= $user["id"] ?>&email=<?= $user["email"] ?>&login=<?= $user["login"]?>&tel=<?= $user["tel"] ?>">Modifier
						</a>

						<a href="supprimer.php?id=<?= $user["id"] ?>&email=<?= $user["email"] ?>&login=<?= $user["login"]?>&tel=<?= $user["tel"] ?>">
					     Supprimer
						</a>
					</td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>
</body>
</html>
