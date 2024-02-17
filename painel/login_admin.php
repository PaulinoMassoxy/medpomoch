<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login admin</title>
	<link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>css/font-awesome.min.css">
	<link href="<?php echo INCLUDE_PATH_PAINEL; ?>css/style.css" rel="stylesheet" />
	<link rel="icon" href="<?php echo INCLUDE_PATH_PAINEL; ?>images/logo-icon.png" />
	<meta name = "viewport" content = "width=device-width, initial-scale=1.0">
</head>
<body>
    
    <div class="box-login">
    	<?php
            if (isset($_POST['acao'])) {
            	$user = $_POST['user'];
            	$password = $_POST['password'];
            	$sql = MySql::conectar()->prepare("SELECT * FROM `tb_admin` WHERE user = ? AND password = ?");
            	$sql->execute(array($user,$password));
            	if ($sql->rowCount() == 1) {
            		$info = $sql->fetch();
            		//Logamos com sucesso.
            		$_SESSION['login_admin'] = true;
            		$_SESSION['user'] = $user;
            		$_SESSION['password'] = $password;
            		$_SESSION['cargo'] = $info['cargo'];
            		$_SESSION['name'] = $info['name'];
            		$_SESSION['img'] = $info['img'];
            		header('Location: '.INCLUDE_PATH_PAINEL);
            		die();

            	}else{
            		//Falhou
            		echo '<div class= "erro-box"><i class= "fa fa-times"></i> User or password incorrect!</div>';
            	}
            }

    	?>
    	<h2>Login Admin:</h2>
    	<form method="post">
    		<input type="text" name="user" placeholder="login..." required>
    		<input type="password" name="password" placeholder="password..." required>
    		<input type="submit" name="acao" value="Sign">
    	</form>

    </div>

</body>
</html>