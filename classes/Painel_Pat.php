<?php
 class Painel_Pat
  {

  	public static function patlogado()
    {
      return isset($_SESSION['login_pat']) ? true : false;
    }

    public static function patloggout()
    {
      setcookie('lembrar','true',time()-1,'/');
      session_destroy();
      header('Location: '.INCLUDE_PATH_PAINEL_PAT);
    }

    public static function loadPage(){
      if(isset($_GET['url'])){
        $url = explode('/',$_GET['url']);
        if(file_exists('pages/'.$url[0].'.php')){
          include('pages/'.$url[0].'.php');
        }else{
          //Página não existe!
          header('Location: '.INCLUDE_PATH_PAINEL_PAT);
        }
      }else{
        include('pages/home.php');
      }
    }

    public static function alert($type,$message){
      if($type == 'sucess'){
        echo '<div class="box-alert sucesso"><i class="fa fa-check"></i> '.$message.'</div>';
      }else if($type == 'error'){
        echo '<div class="box-alert erro"><i class="fa fa-times"></i> '.$message.'</div>';
      }
    }


    public static function validImage($image){
      if($image['type'] == 'image/jpeg' ||
        $image['type'] == 'imagem/jpg' ||
        $image['type'] == 'imagem/png'){

        $size = intval($image['size']/1024);
        if($size < 300)
          return true;
        else
          return false;
      }else{
        return false;
      }
    }

    public static function uploadFile($file){
      $formatFile = explode('.',$file['name']);
      $imageName = uniqid().'.'.$formatFile[count($formatFile) - 1];
      if(move_uploaded_file($file['tmp_name'],BASE_DIR_PATIENT.'/uploads/'.$imageName))
        return $imageName;
      else
        return false;
    }

    public static function deleteFile($file){
      @unlink('uploads/'.$file);
    }

  }

  ?>