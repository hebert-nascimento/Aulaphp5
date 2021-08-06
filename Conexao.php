<?php
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
   class Conexao{
	
	private $host = "localhost";
	private $usuario = "root";
	private $senha = "123456";
	private $bd = "auladebancophp";
	private $PDO;

	
   function conectar(){
	   //$this -> PDO = new pdo("mysql:host=".$this->host.";bdname".$this-> bd,$this->usuario, $this -> senha);
	   $this->pdo = new pdo("mysql:host=".$this->host.";dbname=".$this->bd, $this->usuario, $this->senha);
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
			$this->pdo-> query($sql);
			$last_id = $this->pdo->lastInsertId();
			return $last_id;
   }	
	
	
	function selectPorID($tabela, $id){
			$this->conectar();
			return $this->pdo->query("select * from ".$tabela." WHERE Codigo = ". $id);
		}
		
	
    function select($tabela){
			$this->conectar();
			return $this->pdo-> query("select * from ".$tabela);   
   		}
}
?>
