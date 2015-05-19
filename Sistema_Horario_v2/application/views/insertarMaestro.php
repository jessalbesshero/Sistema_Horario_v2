<?php
    $this->load->view('head/head_vista');
    $this->load->view('header/header_vista');
?>
<div id="body">

	<div  class= "jumbotron"> 
		<h1 style="font-size: 50pt">Agregar Maestro</h1>
	</div>
	<div class="container">
		
		<form method="POST" >
			<table class="table table-hover" >
				<tr>
					<td><label for="IDM">Num de personal:</label></td>
					<td><input type="text"  name="IDM" id="IDM"/></td>
				</tr>
				<tr>
					<td><label for="Nombre">Nombre del Maestro:</label></td>
					<td><input type="text"  name="Nombre" id="Nombre"/></td>
				</tr>
				<tr>
					<td><label for="ApellidoP">Apellido Paterno : </label></td>
					<td><input type="text"  name="ApellidoP" id="ApellidoP" /></td>
				</tr>
				<tr>
					<td><label for="ApellidoM">Apellido Materno : </label></td>
					<td><input type="text"  name="ApellidoM" id="ApellidoM" /></td>
				</tr>
				<tr>
					<td></br>
						<input class="btn btn-success btn-lg" type="submit" name="Insertar" id="Insertar" value="Insertar"/></td>
				</tr>
			</table>
		</form>
	</div>
	<?php 
		if (isset($_POST['Insertar'])){
			    $IDM= $this->input->post('IDM');
			    $Nombre= $this->input->post('Nombre');
				$ApellidoP=$this->input->post('ApellidoP');
				$ApellidoM=$this->input->post('ApellidoM');
				echo $IDM;
				echo $Nombre;
				echo $ApellidoP;
				echo $ApellidoM;
				$data=array(
					'IDM'=>$IDM,
					'Nombre'=>$Nombre,
					'ApellidoP'=>$ApellidoP,
					'ApellidoM'=>$ApellidoM
					);
			$this->db->where('IDM',$IDM);
			$prueba= $this->db->get('Maestros');
			if($prueba->num_rows() > 0){
				redirect('welcome/inserMaestro');
			}else{
				$this->db->insert('Maestros',$data);
				redirect('welcome/tmaes');
			}
		}
	?>	
	<?php $this->load->view('footer/footer_vista');?>