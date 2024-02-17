<?php 
  if(isset($_GET['loggout'])){
  	Painel_PAT::patloggout();
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo INCLUDE_PATH_PAINEL_PAT; ?>css/home.css" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel patient</title>
</head>
<body>


    <header>
      <div class="logo">
        <img src="<?php echo INCLUDE_PATH_PAINEL_PAT; ?>images/logoCare.svg" alt="">
      </div>
    </header>

		
<div id="menu-rodape" class="container-fluid">
  <div class="container no-padding">
      <a href="<?php echo INCLUDE_PATH_PAINEL_PAT ?>">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 17"><path d="M1 7l7-5.7L15 7v10h1V6.5L8 0 0 6.5V17h1z"/></svg>
          <br>Home
      </a>
      <a href="<?php echo INCLUDE_PATH_PAINEL_PAT ?>?loggout">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 15 18"><path d="M12.5 16H2V2.5H1V17h11.5v-1zm1 0v2H0V1.5h2V0h13v16h-1.5zm.5-1V1H3v14h11zM4.6 4.5v-1h7.8v1H4.6zm0 4v-1h7.8v1H4.6zm0 4v-1h7.8v1H4.6z"/></svg>
          <br>Log out
      </a>
                  <a href="#">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16.3"><path d="M8 8C5.8 8 4 6.2 4 4s1.8-4 4-4 4 1.8 4 4-1.8 4-4 4zm0-1c1.7 0 3-1.3 3-3S9.7 1 8 1 5 2.3 5 4s1.3 3 3 3zm-7 9.3H0v-2.2C0 11.9 1.9 10 4.1 10h7.7c2.3 0 4.1 1.9 4.1 4.1v2.2h-1v-2.2c0-1.7-1.4-3.1-3.1-3.1H4.1C2.4 11 1 12.4 1 14.1v2.2z"/></svg>
              <br>Profile
          </a>
              </div>                            
</div>                <div class="clearfix"></div>
          </div>

				 
      </div>
  </div>

  <div class="content">
		<div class="box-content">
			

		</div><!--box-conten-->

        <?php Painel_PAT::loadPage(); ?>
	</div><!--conten-->

	
	<script src="<?php echo INCLUDE_PATH_PAINEL_PAT ?>js/jquery.js"></script>

<script src="<?php echo INCLUDE_PATH_PAINEL_PAT ?>js/slide.js"></script>






</body>
</html>
    
