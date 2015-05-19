<?php
    $this->load->view('head/head_vista');
    $this->load->view('header/header_vista');
?>
<div id="body">

	<div  class= "jumbotron"> 
		<h1 style="font-size: 50pt">Agregar Asignaturas</h1>
	</div>
	<div class="container">
		
		<form method="POST" >
			<table class="table table-hover" >
				<tr>
					<td><label for="IDA">Num de asignatura:</label></td>
					<td><input type="text"  name="IDA" id="IDA"/></td>
				</tr>
				<tr>
					<td><label for="Asignatura">Nombre de la asignatura:</label></td>
					<td><input type="text"  name="Asignatura" id="Asignatura"/></td>
				</tr>
				<tr>
					<td><label for="Carrera">Carrera: </label></td>
					<td><input type="text"  name="Carrera" id="Carrera" /></td>
				</tr>
				<tr>
					<td><label for="Horas">Horas totales: </label></td>
					<td><input type="text"  name="Horas" id="Horas" /></td>
				</tr>
				<tr>
					<td><label for="Requerimientos">Requerimientos: </label></td>
					<td><input type="text"  name="Requerimientos" id="Requerimientos" /></td>
				</tr>
				<tr>
					<td><label for="Creditos">Creditos: </label></td>
					<td><input type="text"  name="Creditos" id="Creditos" /></td>
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
			    $IDA= $this->input->post('IDA');
			    $Asignatura= $this->input->post('Asignatura');
				$Carrera=$this->input->post('Carrera');
				$Horas=$this->input->post('Horas');
				$Requerimientos=$this->input->post('Requerimientos');
				$Creditos=$this->input->post('Creditos');
				$data=array(
					'IDA'=>$IDA,
					'Asignatura'=>$Asignatura,
					'Carrera'=>$Carrera,
					'Horas'=>$Horas,
					'Requerimiento'=>$Requerimientos,
					'Creditos'=>$Creditos,
					);
			$this->db->where('IDA',$IDA);
			$prueba= $this->db->get('Asignatura');
			if($prueba->num_rows() > 0){
				redirect('welcome/agmate');
			}else{
				$this->db->insert('asignatura',$data);
				redirect('welcome/tmaterias');
			}
		}
	?>	
	<?php $this->load->view('footer/footer_vista');?>