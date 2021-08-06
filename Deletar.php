<?php
  include('Conexao.php');
  $data = $conn -> query('DELETE FROM formulario where Codigo = '.$_GET['Codigo']);
  
  
  echo 'Registro deletado com sucesso cod='.$_GET['Codigo'];
  ?>
 <a type="button" href="Index.php" class="btn btn-info"> Voltar</a>;
