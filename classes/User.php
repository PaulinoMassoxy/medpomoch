<?php
	
	class User{

		public function updateUser($name,$password,$image){
			$sql = MySql::conectar()->prepare("UPDATE `tb_patient` SET name = ?,password = ?,img = ? WHERE email = ?");
			if($sql->execute(array($name,$password,$image,$_SESSION['email']))){
				return true;
			}else{
				return false;
			}
		}

		public static function userExists($email){
			$sql = MySql::conectar()->prepare("SELECT `id` FROM `tb_patient` WHERE email=?");
			$sql->execute(array($email));
			if($sql->rowCount() == 1)
				return true;
			else
				return false;
		}

		public static function cadastrarUsuario($email,$password,$image,$name,$cargo){
			$sql = MySql::conectar()->prepare("INSERT INTO `tb_patient` VALUES (null,?,?,?,?,?)");
			$sql->execute(array($email,$password,$image,$name,$cargo));
		}

	}

?>