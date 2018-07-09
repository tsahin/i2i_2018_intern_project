<?php
ob_start();
@session_start();

require('soap.php');
require('classSystem.php');

if($_SESSION){
	?>
	<html>
	<head>
		<title>Cell2i Login Page</title>
<link rel="icon" type="image/png" sizes="16x16" href="img/favicon.png">
<meta name="theme-color" content="#ffffff">
		<link rel="stylesheet" href="css/standart.css"/>
		<link rel="stylesheet" href="css/global.css"/>
	</head>
	<body>
<div class="box col-12 line-bottom box-shadow1">
	<div class="row">
		<a href="http://i2i-systems.com/" class="box col-2 col-sm-12 a-center"><img src="img/i2iLogo.png"/></a>
		<div class="box col-1 forDesktop"></div>
		<div class="col col-6 col-sm-12">
			<div class="row menu">
				<a href="" class="box col-2 a-center Btn" title="Mesajlarım"><img src="img/messageIcon.png"/></a>
				<a href="" class="box col-2 a-center Btn" title="Tarifelerim"><img src="img/tariffIcon.png"/></a>
				<a href="" class="col col-4 a-center logoBtn" title="Cell2i"><img src="img/cell2i-original.png"/></a>
				<a href="" class="box col-2 a-center Btn" title="Faturalarım"><img src="img/invoiceIcon.png"/></a>
				<a href="" class="box col-2 a-center Btn" title="Oturumu Kapat"><img src="img/logoutIcon.png"/></a>
			</div>
		</div>
		<div class="box col-1 forDesktop"></div>
	</div>
</div>
<div class="inner">
	<div class="box col-12">
		<div class="row">
			<div class="box col-3 forDesktop"></div>
		<form action="" method="POST">
			<div class="box col-6 col-sm-12">
				<div class="row">
					<div class="box col-12 a-center">
						<img src="img/cell2i-original.png" />
					</div>
				</div>
				<div class="row">
					<div class="box col-12">
						
							<input type="text" name="MSISDN" placeholder="Enter your phone number" class="box col-12 box-shadow1 border1 Segoe" maxLength="10"/>
						
					</div>
				</div>
				<div class="row">
					<div class="box col-12">
						
							<input type="password" name="Password" placeholder="Enter your password" class="box col-12 box-shadow1 border1 Segoe"/>
						
					</div>
				</div>
				<div class="row">
					<div class="col col-12">
						
							<a href="forgotPassword.php" class="col col-sm-12 a-right fr line-under color4 Segoe">Forgot your password?</a>
						
					</div>
				</div>
				<div class="row">
					<div class="col col-12 color5 a-center Segoe">
						<?php 
							if($_POST){
								$MSISDN = $_POST['MSISDN'];
								$Password = $_POST['Password'];		
								echo $cell2i->UserLogin($MSISDN,$Password);
							}
							?>
					</div>
				</div>
				<div class="row">
					<div class="box col-12">
						<div class="row">
							<div class="box col-4 col-sm-1"></div>
							<input type="submit" value="LOGIN" class="box col-4 col-sm-10 box-shadow1 border1 cPointer bg4 color1 fsize16 Segoe"/>
							<div class="box col-4 col-sm-1"></div>
						</div>
					</div>
				</div>
			</div>
		</form>
			<div class="box col-3 forDesktop"></div>
		</div>
	</div>
</div>

	</body>
</html>
	<?php
}else{
	header('Location:loginPage.php');
}

ob_end_flush();
?>