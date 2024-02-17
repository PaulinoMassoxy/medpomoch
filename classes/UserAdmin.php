<?php
	
	class UserAdmin{

		public function updateUser($name,$password,$image){
			$sql = MySql::conectar()->prepare("UPDATE `tb_admin` SET name = ?,password = ?,img = ? WHERE user = ?");
			if($sql->execute(array($name,$password,$image,$_SESSION['user']))){
				return true;
			}else{
				return false;
			}
		}

		public static function userExists($user){
			$sql = MySql::conectar()->prepare("SELECT `id` FROM `tb_admin` WHERE user=?");
			$sql->execute(array($user));
			if($sql->rowCount() == 1)
				return true;
			else
				return false;
		}

		public static function cadastrarUsuario($user,$password,$image,$name,$cargo){
			$sql = MySql::conectar()->prepare("INSERT INTO `tb_admin` VALUES (null,?,?,?,?,?)");
			$sql->execute(array($user,$password,$image,$name,$cargo));
		}

	}

?>