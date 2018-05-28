<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sınav</title>
	<link rel="stylesheet" type="text/css" href="temalar/bootstrap/libraries/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="temalar/bootstrap/libraries/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="temalar/bootstrap/css/customize.css">
	<script src="temalar/bootstrap/javascript/jquery-2.1.4.min.js"></script>
	<script src="temalar/bootstrap/libraries/bootstrap/js/bootstrap.min.js"></script>
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
   
<!--- Header --->
<div id="Header">
	<nav class="navbar navbar-default">
	  <div class="container">
		<div class="navbar-header">
			<a class="navbar-brand" href="index.php">Admin Paneli</a>
		</div>
		<ul class="nav navbar-nav navbar-right">
		<?php
			if($_SESSION == true){
				if($_SESSION["Login"]["LoginUyeGrup"] == 1){ ?>
					
					<li><a href="index.php?git=anasayfa">Anasayfa</a></li>
					<li><a href="../index.php?git=anasayfa">Siteye Git</a></li>
					<li><a href="index.php?git=profil"><?php echo $_SESSION["Login"]["LoginUyeAdi"]; ?></a></li>
					<li><a href="index.php?git=cikis">Çıkış</a></li>
					
				<?php }else{
					header("Location: ../index.php");
				}
			}
		?>
		</ul>
	  </div>
	</nav>
</div>
<!--- # Header # --->