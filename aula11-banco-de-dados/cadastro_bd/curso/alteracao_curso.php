<!DOCTYPE html>
<!-- alteracao.php -->
<html>
	<head>
	  <title>Cadastro de cursos - Alteração</title>
	  <meta charset="utf-8">
	</head>
	<body>

<?php 
// efetua alteração do curso informado em form_alteracao_curso.php
$id_curso = $_GET["id_curso"];
$ds_curso = $_GET["ds_curso"];
$carga_horaria = $_GET["nr_carga_horaria"];
$dt_inicio = $_GET["dt_inicio"];

include_once "../inc/conectabd.inc.php";

$query = "UPDATE tb_curso 
        SET ds_curso = '$ds_curso'
          , nr_carga_horaria = $carga_horaria
          , dt_inicio = '$dt_inicio'
WHERE id_curso = $id_curso;";
// echo $query.'<br>';
if ($result = mysqli_query($link, $query)) {
    echo "Alteração efetuada com sucesso";
} else {
    echo mysqli_error($link);
}
  
  // fecha a conexão
  mysqli_close($link);
?>  
 <br>
 <a href="consulta_curso.php">Ver cursos cadastrados</a>
 
 </body>
</html>

