<?php 
	class Conexao{
		private $host 		= 'localhost';
		private $username 	= 'root';
		private $password	= '123456';
		private $bd			= 'formulario';
		private $pdo;

		function conectar(){
			$this -> pdo = new pdo("mysql:host=".$this-> host.";dbname=".$this -> bd, $this -> username, $this -> password);
		}
		
		function insert($tabela, $dados){
			$this->conectar();
			$campos = '';
			$valores = '';
			foreach($dados as $campo => $valor){
				if(!is_array($valor)) {
					$campos[] = $campo;
					$valores[] = $valor;
				}
			}
			$sql = "INSERT INTO $tabela ( ".implode($campos, ', ')." ) VALUES ( '".implode($valores, '\', \'')."') ";
			$this -> pdo-> query($sql);
			$last_id = $this -> pdo ->lastInsertId();
			return $last_id;
			
			
			/*
			$this->conectar();
	   $campos = '';
	   $valores ='';
	   foreach($dados as $campo => $valor){
		   if(!is_array($valor)){
			   $campos[] = $campo;
			   $valores[] = $valor;
			   
		   }
	   }
	   $sql = "INSERT INTO $tabela (".implode($campos, ', ').") VALUES ('".implode($valores, '\', \'')."')";
	   
	   $this->PDO-> query($sql);
	   $last_id = $this -> PDO -> lastInsertId();

	   return $last_id;
	   */
		}
		
		function selectPorID($tabela, $id){
			$this->conectar();
			return $this->pdo->query("select * from ".$tabela." WHERE ID = ". $id);
		}
		
		
		function select($tabela){
			$this->conectar();
			return $this->pdo->query("select * from ".$tabela);
		}
	}
 ?>