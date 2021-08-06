<?php

ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);


   require 'Formulario.php';
   
   $form = new Formulario();
   $lastID = $form->setFormulario($_POST);
   echo $lastID;
   
?>