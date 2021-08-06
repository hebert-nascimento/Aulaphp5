<?php
   print_r($_GET['Codigo']);
   include('Conexao.php');
	$data = $conn -> query('SELECT * FROM formulario where Codigo='.$_GET['Codigo']);
	foreach($data as $row){
		$nome = $row['Nome'];
	    $vilao = $row['Vilao'];
	}
?>
<br>

<form>
<input type="hidden" name="Codigo" value="<?=$_GET['Codigo']?>"/>
 Nome:<br>
   <input type="text" name="nome" value="<?=$nome?>"/><br>
 Vilão:<br>
   <input type="text" name="vilao" value="<?=$vilao?>"/><br><br>
   <input type="submit" value="Editar" name="editar">

</form>

<?php
    if(isset($_GET['vilao'])){
	  $data = $conn -> query("UPDATE formulario set Nome ='".$_GET['nome']."',Vilao = '".$_GET['vilao']."' WHERE Codigo = ".$_GET['Codigo']);
	  echo 'Registro editado com sucesso';
	}

?>

