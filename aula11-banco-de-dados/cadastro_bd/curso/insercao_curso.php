<!DOCTYPE html>
<!-- insercao_aluno.php -->
<html>
	<head>
	  <title>Cadastro de curso - Inclusão</title>
	  <meta charset="utf-8">
	</head>
	<body>
<?php 
// efetua inclusao do aluno informado em cadastro_aluno.php

  $curso = $_GET["curso"];
  $carga_horaria = $_GET["carga_horaria"];
  $dt_inicio = $_GET["dt_inicio"];
  
  include_once "../inc/conectabd.inc.php";
  $stmt = $link->prepare("INSERT INTO tb_curso(ds_curso, nr_carga_horaria, dt_inicio) VALUES (?,?,?)");
  $stmt -> bind_param("sis", $curso, $carga_horaria, $dt_inicio);

  if ($stmt->execute()) {
  echo "Inclusão efetuada com sucesso";
  }else {
  echo "Erro: " . $stmt -> error;
  }
  
  // fecha a conexão
  mysqli_close($link);
?>  
 <br>
 <a href="consulta_curso.php">Ver cursos cadastrados</a>
 
 </body>
</html>

