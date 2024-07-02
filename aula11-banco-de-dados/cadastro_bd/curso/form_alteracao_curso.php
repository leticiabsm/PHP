<!DOCTYPE html>
<!-- form_alteracao.html -->
<?php
 include "../inc/conectabd.inc.php";
 include "../inc/funcoes.inc.php";
 
 $id = $_GET["id"];
 $al = recupera_curso($id);
var_dump($al);
if (!isset($al["nr_carga_horaria"])){
	$al["nr_carga_horaria"] = "";
}

?>

<html>
	<head>
	  <title>Cadastro de curso</title>
	  <meta charset="utf-8">
	</head>
	<body>
		<h1>Atualizar x curso</h1>
		<form action="alteracao_curso.php" method="GET">
            <input type="hidden" name="id_curso" value="<?php echo $al['id_curso']; ?>">
			<label for="id_curso">
			Nome:
			</label>
			<input type="text" name="ds_curso" id="id_curso" value="<?php echo $al['ds_curso']; ?>">
			<br>
            <label for="id_carga_horaria">
			Carga horária:
			</label>
			<input type="text" name="nr_carga_horaria" id="id_carga_horaria" value="<?php echo $al['nr_carga_horaria']; ?>">
			<br>
            <label for="id_dt_inicio">
			Data de inicio:
			</label>
			<input type="date" name="dt_inicio" id="id_dt_inicio" value="<?php echo $al['dt_inicio']; ?>">
			<br>
			<input type="submit" value="Ok">
		</form>
	</body>
</html>