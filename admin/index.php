<?php 
 require_once "models/enlaces.php";
 //require_once "models/registro.php";
 //require_once "models/select.php";
 
 //require_once "controllers/select.php";
 //require_once "controllers/registro.php";
 require_once "controllers/enlaces.php";
 require_once "controllers/template.php";
 
//FUNCION QUE LLAMA LA PLANTILLA (LA VISTA PRINCIPAL)
    $template = new TemplateController();
    $template -> template();