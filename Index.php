<!DOCTYPE html>
<html lang="pt-br">

<head><title>Teste de sistema de login</title>

	<link href="css/Bootstrap.css" rel="stylesheet" type="text/css "/>
	<link rel="stylesheet" type="text/css" href="Estiloaula5.css" />
	<script src="jquery.js" type="text/javascript"></script>   
	<meta charset="utf-8">

</head>
<body>

	<?php

	ini_set('display_errors',1);
	ini_set('display_startup_erros',1);
	error_reporting(E_ALL);
	 //   include('Conexao.php');
     /*$username ='root';
     $password ='';
     $conn = new PDO ('mysql:host=localhost;dbname=auladebancophp', $username ,$password);*/
	 //$data = $conn -> query('SELECT * FROM formulario');

     ?>

     <div class="well ">
     	<p><h2>SISTEMA COM JQUERY</h2></p>
     </div>


     <div class="container-fluid">
     	<div class="row">
     		<div class="col-12">
     			<form method="POST" id="form">
     				Nome:
     				<input type="text" name="Nome"></input><br><br>
     				Vilão:
     				<input type="text" name="Vilao"></input><br><br>
     				<input type="button" value="Enviar" class="btn btn-primary" onclick="enviarForm2()"></input>
     				<input type="button" value="listar" class="btn btn-primary" onclick="listar()"></input>
     			</form>
     		</div>
     	</div>
     </div>

     <div class="container">
     	<div class="row">
     		<div class="col-12">
     			<table class="table table-hover" id="tabela">
     				<?php
	  /*
	    foreach($data as $row){
			echo '<tr>';
			  echo'<td>'.$row['Codigo'].'</td>';
		      echo'<td>'.$row['Nome'].'</td>';
		      echo'<td>'.$row['Vilao'].'</td>';
			  echo'<td><a type="button" href="Deletar.php?Codigo='.$row['Codigo'].'" class="btn btn-danger"> Deletar</a>
			  <a type="button" href="Editar.php?Codigo='.$row['Codigo'].'" class="btn btn-info"> Editar</a></td>';
			echo '</tr>';
		}
		*/
		?>
			</table>
		</div>
	</div>
</div>

<?php
		/*
		if(isset($_GET) && $_GET['nome']){
		
		$data = $conn -> query("INSERT INTO formulario (nome,vilao) VALUES ('".$_GET['nome']."', '".$_GET['vilao']."')");
		}
		*/
?>

		<script>
			function enviarForm(){
	/*
	var checkboxSelecionados = [];
	$("inspiracao:checked").each(function(){
		checkboxSelecionados.push($(this).val());
		
	});
	
	var selecoes;
	selecoes = checkboxSelecionados.join(', ');
	
	conteudoDiv = '<h1>Opicões escolhidas</h1> <br> Nome:'
    + $('input[name=nome]').val()+' <br> Qual melhor vilão: '
	
	+ selecoes +'Melhor personagem: '
	+ $('melhor').val() + 'justificativa: '
	+ $('#justificativa').val();
	
	$('#dados').html(conteudoDiv);*/
	
	
	
	/* Exemplo de inserir valor na tela..  */
	/*if($("[name='nome']").val()) {
		
		conteudoTabela ="<tr>"+
		"<td></td>"+
		"<td>"+$("[name='nome']").val()+"</td>"+
		"<td>"+$("[name='vilao']").val()+"</td>"+
		"<td></td>"+
		+"</tr>";
		
		$("[name='nome']").val('');
		$("[name='vilao']").val('');
			
		$('#tabela').append(conteudoTabela);
	} else{ 
		alert('preencha os campos');
	}
	/*-------------------------------*/

}

</script>

<script>
	function enviarForm2(){
		$.ajax({
			method: 'POST',
			url: 'ajax.php',
			data: $('#form').serialize(),

			success: function(data) {	
				$('#tabela').append(data);			
			}		
		});

	}

	function listar(){
		$.ajax({
			method: 'POST',
			url: 'listar.php',
			success: function(data) {	
				var cabecalho  = "<thead><tr><td>CÓDIGO</td><td>NOME</td><td>VILÃO</td></tr></thead>";
				$('#tabela').html('');	
				$('#tabela').html(cabecalho+data);	
			}		
		});

	}

</script>

</body>
</html>