<?php
  
     include('../config.php');

     if (Painel::logado() == false){
     	include('login_admin.php');
     }else{
     	include('main.php');
     }
?>