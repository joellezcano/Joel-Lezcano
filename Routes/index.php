<?php
 echo ("MVC Routing");

 $ruta = $_SERVER['DOCUMENT_ROOT'];
 $proyecto = '/tallerphp10/';
 $rootproyecto = $ruta . $proyecto;

 echo '<br>'. $rootproyecto;
 echo '<br>'. $rootproyecto.'php.navbar.php';

 echo '<br>'.__Dir__;
 echo '<br>'.__FILE__;
 echo '<br>'.$_SERVER['REQUEST_URI'];
 echo '<br>'.$_SERVER['SERVER_NAME'];
//include($rootproyecto.'php/navbar.php');
