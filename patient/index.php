<?php
  
     include('../config.php');

     if (Painel_PAT::patlogado() == false){
     	include('login_pat.php');
     }else{
     	include('main_pat.php');
     }
?>

