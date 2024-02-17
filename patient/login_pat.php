<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH_PAINEL_PAT; ?>css/style.css">
    <link rel="icon" href="<?php echo INCLUDE_PATH_PAINEL_PAT; ?>images/logo-icon.png" />


    <title>Sign in patient</title>
  </head>
  <body>
    <div class="container">

      <div class="forms-container">
        <div class="signin-signup">
          <form method="post" class="sign-in-form">
            <h2 class="title">Sign in</h2>
            <?php
            if (isset($_POST['action'])) {
              $email = $_POST['email'];
              $password = $_POST['password'];
              $sql = MySql::conectar()->prepare("SELECT * FROM `tb_patient` WHERE email = ? AND password = ?");
              $sql->execute(array($email,$password));
              if ($sql->rowCount() == 1) {
                $info = $sql->fetch();
                //Logamos com sucesso.
                $_SESSION['login_pat'] = true;
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;
                $_SESSION['name'] = $info['name'];
                $_SESSION['img'] = $info['img'];
                header('Location: '.INCLUDE_PATH_PAINEL_PAT);
                die();

              }else{
                //Falhou
                echo '<div class= "erro-box"><i class= "fa fa-times"></i> User or password incorrect!</div>';
              }
            }

           ?>
            <div class="input-field">
              <i class="fa fa-envelope"></i>
              <input type="email" name="email" placeholder="E-mail..." required>
            </div>
            <div class="input-field">
              <i class="fa fa-lock"></i>
              <input type="password" name="password" placeholder="Password..." required>
            </div>
            <input class="btn solid" type="submit" name="action" value="Sign">
          
          </form>
          <form action="#" class="sign-up-form">
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fa fa-user"></i>
              <input type="text" placeholder="Username" />
            </div>
            <div class="input-field">
              <i class="fa fa-envelope"></i>
              <input type="email" placeholder="Email" />
            </div>
            <div class="input-field">
              <i class="fa fa-lock"></i>
              <input type="password" placeholder="Password" />
            </div>
            <input type="submit" class="btn" value="Sign up" />
            
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Don't have an account?</h3>
            <p>
              Register and schedule your appointment!
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <a href="<?php echo INCLUDE_PATH; ?>">
          <img src="./images/LogoCare.svg" class="image" alt="Logo DoctorCare" />
          </a>
        </div>
        
        <div class="panel right-panel">
          <div class="content">
            <h3>Already have an account?</h3>
            <p>
              Log in and treat your health.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <a href="<?php echo INCLUDE_PATH; ?>">
          <img src="./images/LogoCare.svg" class="image" alt="Logo DoctorCare" />
          </a>
        </div>
      </div>
    </div>

    <script src="<?php echo INCLUDE_PATH_PAINEL_PAT; ?>js/app.js"></script>
  </body>
</html>
