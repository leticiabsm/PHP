<!DOCTYPE html>
<!-- cadastro.html -->
<html>
	<head>
	  <title>Cadastro de curso</title>
	  <meta charset="utf-8">
	</head>
	<body>
	<h1>Cadastrar novo curso</h1>
		<form action="insercao_curso.php" method="GET">
			<label for="id_curso">
			Nome:
			</label>
			<input type="text" name="curso" id="id_curso">
			<br>
			<label for="id_curso">
			Carga horária:
			</label>
			<input type="text" name="carga_horaria" id="id_carga_horaria">
			<br>
			<label for="id_curso">
			Data de ínicio:
			</label>
			<input type="date" name="dt_inicio" id="id_dt_inicio">
			           
			<?php
				include "../inc/conectabd.inc.php";
				include "../inc/funcoes.inc.php";
			?>
			<br>
			<input type="submit" value="Ok">
		</form>
	</body>
</html>