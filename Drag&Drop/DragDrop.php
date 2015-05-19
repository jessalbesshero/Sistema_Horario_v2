<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<link href="css/style.css" type="text/css" rel="stylesheet">
	<title>Ejemplo de Arrastrar y Soltar</title>
	<script type="text/javascript" src="js/java.js"></script>
</head>
<body>
	<div  class= "jumbotron"  style=" color:#FFFFFF; background-color:#6EE768; text-align:center"> 
    <h1 style="font-size: 50pt">Ejemplo de Drag & Drop</h1>
	</div>
	<a href="DDHorario.php" class="btn btn-primary btn-lg" > Horario Juego</a><br></br>
	<div class="container" style="text-align: center;">
		<div class="row">
			<div id="destino1" class="col-sm-4" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)">
				<div id="arrastrable4" draggable="true" ondragstart="return empezar(event)" ondragend="return end(event)">
					<h3>RedesII</h3>
				</div>
				<div id="arrastrable1" draggable="true" ondragstart="return empezar(event)" ondragend="return end(event)">
					<h3>Graficacion</h3>
				</div>
				<div id="arrastrable2" draggable="true" ondragstart="return empezar(event)" ondragend="return end(event)">
					<h3>AdmProyec</h3>
				</div>
				<div id="arrastrable3" draggable="true" ondragstart="return empezar(event)" ondragend="return end(event)">
					<h3>Etica<h3>
				</div>
			</div>
			<div id="destino2" class="col-sm-4" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)"></div>
			<div id="destino3" class="col-sm-4" ondragenter="return enter(event)" ondragover="return over(event)" ondrop="return drop(event)"></div>
		</div>
	</div>
	<br>
	</br>
	<footer  class="footer" style="text-align:center; color:white; background-color:black">
	    <div class="container">
	    	<br>
	        <p  class="text-muted">© 2015 <a href="http://localhost/index.php">Joaquin Esau</a> All rights reserved.</p>
	    </div>
	</footer> 
</body>
</html>