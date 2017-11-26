<?php
session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
	print "<script>alert(\"Acceso invalido!\");window.location='login.php';</script>";
}

?>
<html>
	<head>
		<title>.: HOME :.</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link href="style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/fondos.css">
    
	</head>
	<body>
	<?php include "php/navbar.php"; ?>
<div class="container">
<div class="row">
<div class="col-md-6">
		<h2>Bienvenido</h2>

</div>
</div>
</div>

  
<div class="container-fluid">

<img src="IMGS/redesdetutoria.PNG" class="imagenprincipal">

</div>


<div   class="card text-white bg-primary mb-3" class="div1" style="max-width: 20rem; margin:auto; margin-top: 20px; ">
  <div class="card-header">Grupos</div>
  <div class="card-body">
    <h4 class="card-title"></h4>
    <h4 class="card-text">Los Alumnos selcionaran entre actividades culturales, asesorias y experiencias literarias.</h4>
     <button type="button" class="btn btn-danger btn-lg btn-block">Asignar</button>
  </div>
</div>




	</body>
	 <footer class="imagenpiedepagina">
    
    

<p>"TECNOLOGIA Y CALIDAD PARA LA VIDA"</p>
<P>Tels.(445)4566468 al 71, 4588278, 4588311 y 4588312</P>
<p>Av.Educación Superior No. 2000, Col.Benito Juarez Uriangato,Gto. CP. 38980 Ap.Postal.No.61</p>
<p>Todos los Derechos Reservados @ ITSUR 2018</p>
  </footer>
</html>