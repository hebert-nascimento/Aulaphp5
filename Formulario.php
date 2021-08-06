<?php

ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

   require 'Conexao.php';
   
   class Formulario extends Conexao{
	   
	   private $nome;
	   private $vilao;
	   private $melhor_personagem;
	   private $comentario;
	   
	   function inicioFormulario ( $nome, $vilao, $melhor_personagem, $comentario){
		   $this -> nome                      =$nome;
		   $this -> vilao					  =$vilao;
		  // $this -> melhor_personagem		  =$melhor_personagem;
		  // $this -> comentario				  =$comentario;
	   }
   
       
	   function setFormulario($dados){
		   
		   $lastID = $this -> insert("formulario", $dados);
		   $retornoTable= '';
		   
		   $retornoConsulta = $this -> selectPorID("formulario", $lastID);
		   foreach($retornoConsulta as $linha){
			   $retornoTable .= '<tr>';
			   $retornoTable .= '<td>'.$linha['Codigo'].'</td>';
			   $retornoTable .= '<td>'.$linha['Nome'].'</td>';
			   $retornoTable .= '<td>'.$linha['Vilao'].'</td>';
			   $retornoTable .= '</tr>';
		   }
		   return $retornoTable;
	   }

		 function getFormulario(){
			 
			  $dados = $this -> select("formulario");
			   $retornoTable= '';
				foreach($dados as $linha){
			   
			   $retornoTable .= '<tr>';
			   $retornoTable .= '<td>'.$linha['Codigo'].'</td>';
			   $retornoTable .= '<td>'.$linha['Nome'].'</td>';
			   $retornoTable .= '<td>'.$linha['Vilao'].'</td>';
			   $retornoTable .= '</tr>';
		   }				
		   
		   return $retornoTable;
		 }
	   
   }
   ?>