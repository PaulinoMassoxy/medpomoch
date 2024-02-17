<?php

    session_start();
    date_default_timezone_set('Europe/Moscow');
    $autoload = function($class){
        include('classes/'.$class.'.php');
    };

    spl_autoload_register($autoload);

    define('INCLUDE_PATH', 'http://localhost/medpomochi/');
    define('INCLUDE_PATH_PAINEL',INCLUDE_PATH.'painel/');
    define('INCLUDE_PATH_PAINEL_PAT',INCLUDE_PATH.'patient/');
    define('BASE_DIR_PAINEL',__DIR__.'/painel');
    define('BASE_DIR_DONATOR',__DIR__.'/patient');
    

    
    //Conectar com Banco de dados!
    define('HOST','localhost');
    define('USER','root');
    define('PASSWORD','');
    define('DATABASE','doctorcare');


    //Constantes para o painel de controle
    define('NOME_EMPRESA','DoctorCare');

    //Funcoes
    function pegaCargo($indice){
        return Painel::$cargos[$indice];
    }

    function selecionadoMenu($par){
        /*<i class="fa fa-angle-double-right" aria-hidden="true"></i>*/
        $url = explode('/',@$_GET['url'])[0];
        if($url == $par){
            echo 'class="menu-active"';
        }
    }

    function verificaPermissaoMenu($permissao){
        if($_SESSION['cargo'] >= $permissao){
            return;
        }else{
            echo 'style="display:none;"';
        }
    }

    function verificaPermissaoPagina($permissao){
        if($_SESSION['cargo'] >= $permissao){
            return;
        }else{
            include('painel/pages/permissao_negada.php');
            die();
        }
    }
   

?>