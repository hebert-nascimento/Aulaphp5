<?php 
   require 'Formulario.php';
   
   $form = new Formulario();
   $conteudo = $form->getFormulario();
   echo $conteudo;
   
?>