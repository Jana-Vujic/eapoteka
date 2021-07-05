<?php include("init.php");
		$poruka = '';
		if(isset($_POST['login'])){
		  require("korisnikKlasa.php");
		  $korisnik= new Korisnik($db);
		  $uspesno = $korisnik->login();

		  if($uspesno){
		      header("Location: index.php");
		  }else{
		    $poruka = 'Neuspesno logovanje';
		  }
		}
 ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-Apoteka</title>

 	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/jquery.bxslider.css">
	<link rel="stylesheet" type="text/css" href="css/isotope.css" media="screen" />
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
	<link href="css/prettyPhoto.css" rel="stylesheet" />
	<link href="css/style.css" rel="stylesheet" />

	<!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Ruda:400,900,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/prettyphoto/css/prettyphoto.css" rel="stylesheet">
  <link href="lib/hover/hoverex-all.css" rel="stylesheet">
  <link href="lib/jetmenu/jetmenu.css" rel="stylesheet">
  <link href="lib/owl-carousel/owl-carousel.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style2.css" rel="stylesheet">
  </head>
  <body>


  <?php include 'heder.php'; ?>
	<div class="features">
		<div class="container">
			<div class="text-center" style="width: 450px; text-align: center; margin-left:30%;">
				<div class="dm-icon-effect-1" data-effect="slide-bottom">
					<h2>Prijavljivanje</h2>
				</div>

        <div class="dm-icon-effect-1" data-effect="slide-bottom">
					<form method="post" action="">
              <div class="form-group">
                <label for="username" class="cols-sm-2 control-label">Korisničko ime</label>
                  <div class="cols-sm-10">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fas fa-id-card"></i></span>
                      <input type="text" class="form-control" name="username" placeholder="Korisničko ime" id="username" />
                    </div>
                  </div>
              </div>
              <div class="form-group">
                <label for="password" class="cols-sm-2 control-label">Lozinka</label>
                  <div class="cols-sm-10">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fas fa-unlock-alt"></i></span>
                      <input type="password" class="form-control" name="password"  placeholder="Lozinka" id="password" />
                    </div>
                  </div>
              </div>

                <div class="form-group ">
                  <input type="submit" name="login" class="btn btn-lg " value="Login" style="margin-bottom: 10px;">
                </div>
            </form>
						<?php
				        if($poruka!=''){
				          echo($poruka);
				        }

				     ?>
				</div>
			</div>
		</div>
	</div>

  <?php include 'footer2.php'; ?>





	<script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/fancybox/jquery.fancybox.pack.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/jquery.bxslider.min.js"></script>
	<script src="js/jquery.prettyPhoto.js"></script>
	<script src="js/jquery.isotope.min.js"></script>
	<script src="js/functions.js"></script>
	<script>wow = new WOW({}).init();</script>

</body>
</html>
