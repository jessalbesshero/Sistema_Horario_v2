<?php
    $this->load->view('head/head_vista');
    $this->load->view('header/header_vista');
?>
<div id="body">

<div class ="jumbotron" style="color:#FFFFFF; background-color:#6EE768; text-align:center">
	<h1 style="font-size: 50pt"> Horario</h1>
</div>
<div class="container">
	<div class="row">
		<div class="col-sm-2 col-md-2 col-xs-2">
			<h2>Horario</h2>
		</div>
		<div class="col-sm-2 col-md-2 col-xs-2">
			<h2>Lunes</h2>
		</div>
		<div class="col-sm-2 col-md-2 col-xs-2">
			<h2>Martes</h2>
		</div>
		<div class="col-sm-2 col-md-2 col-xs-2">
			<h2>Miercoles</h2>
		</div>
		<div class="col-sm-2 col-md-2 col-xs-2">
			<h2>Jueves</h2>
		</div>
		<div class="col-sm-2 col-md-2 col-xs-2">
			<h2>Viernes</h2>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-2" id="des1" style="background-color: #C2ACE8;" ondragenter="return enter(event)" ondragover="return overs(event)" ondrop="return drop(event)">
				<div id="ar1" draggable="true" ondragstart="return empezar(event)" ondragend="return end(event)">
					<h3>RedesII</h3>
				</div>
				<div id="ar2" draggable="true" ondragstart="return empezar(event)" ondragend="return end(event)">
					<h3>RedesII</h3>
				</div>
				<div id="ar3" draggable="true" ondragstart="return empezar(event)" ondragend="return end(event)">
					<h3>RedesII</h3>
				</div>
			<div class="col-sm-2" id="des2" style="background-color: #6FF572;" ondragenter="return enter(event)" ondragover="return overs(event)" ondrop="return drop(event)">
			</div>
			<div class="col-sm-2" id="des3" style="background-color: #FFF081;" ondragenter="return enter(event)" ondragover="return overs(event)" ondrop="return drop(event)">
			</div>
			<div class="col-md-1">
				<form method="POST">
					<table class="table table-condensed" >
						<tr>
							<td><label form= "materia"> Materia </label></td>
							<td><select class="form-control" id="materia" name="materia">
								<?php
									$query=$this->$db->$get('asignatura');
									
										if ($query!=FALSE){
											foreach ($query->$result() as $rows) {

												echo "<option value'=".$rows->asignatura."'>";

												echo "<option value='".$rows->asignatura."'>";

												?>
							</select></td>
						</tr>
					</table>
				</form>
			</div>
	</div>
</div>
		
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-1">
			<form method="POST">
				<table class ="table table-condend">
					<tr>
					<td><label form="horarios">7:00-8:00</label></td>
					<td><label form="horarios">8:00-9:00</label></td>
					<td><label form="horarios">9:00-10:00</label></td>
					<td><label form="horarios">10:00-11:00</label></td>
					<td><label form="horarios">11:00-12:00</label></td>
					<td><label form="horarios">12:00-13:00</label></td>
					<td><label form="horarios">13:00-14:00</label></td>
					<td><label form="horarios">14:00-15:00</label></td>
					<td><label form="horarios">15:00-16:00</label></td>
					<td><label form="horarios">16:00-17:00</label></td>
					<td><label form="horarios">17:00-18:00</label></td>
					<td><label form="horarios">18:00-19:00</label></td>
					<td><label form="horarios">19:00-20:00</label></td>
				</tr>
				</table>
			</form>
	</div>
</div>
<?php $this->load->view('footer/footer_vista');?>