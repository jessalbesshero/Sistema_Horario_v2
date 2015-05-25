<?php
/* 
 * edit_Materias: editar Experiencias Educativas
 * @Sirio
 * @Jesús
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
    $this->load->view('head/head_vista');
    $this->load->view('header/header_vista');
?>
<div id="body">
    <div class="container">
	<h1 style="background-color: #dddddd">Editar Experiencias Educativas</h1>		
		<form method="POST">
			<table class="table table-hover" >
				<tr>
					<td><label for="Asignatura">Nombre de la Asignatura :</label></td>
					<td><input type="text"  name="Asignatura" id="Asignatura" value="<?php echo $Asignatura;?>"/></td>
				</tr>
				<tr>
					<td><label for="Carrera">Carrera:</label></td>
					<td><input type="text"  name="Carrera" id="Carrera" value="<?php echo $Carrera;?>"/></td>
				</tr>
				<tr>
					<td><label for="Horas">Horas:</label></td>
					<td><input type="text"  name="Horas" id="Horas" value="<?php echo $Horas;?>"/></td>
				</tr>
				<tr>
					<td><label for="Requerimiento">Requerimientos:</label></td>
					<td><input type="text"  name="Requerimiento" id="Requerimiento" value="<?php echo $Requerimiento;?>"/></td>
				</tr>
				<tr>
					<td><label for="Creditos">Creditos:</label></td>
					<td><input type="text"  name="Creditos" id="Creditos" value="<?php echo $Creditos;?>"/></td>
				</tr>
				<tr>
					<td></br>
						<input class="btn btn-success btn-lg" type="submit" name="Editar" id="Editar" value="Editar"/></td>
				</tr>
			</table>
		</form>
	</div>
	<?php 
		if (isset($_POST['Editar'])){
			$Asignatura=$_POST['Asignatura'];
			$Carrera=$_POST['Carrera'];
			$Horas=$_POST['Horas'];
			$Requerimiento=$_POST['Requerimiento'];
			$Creditos=$_POST['Creditos'];
			$data=array(
				'Asignatura'=>$Asignatura,
				'Carrera'=>$Carrera,
				'Horas'=>$Horas,
				'Requerimiento'=>$Requerimiento,
				'Creditos'=>$Creditos,
				);
			$this->db->where('IDA',$IDA);
			$this->db->update('Asignatura',$data);
			redirect('welcome/home_Materias');
		}
	?>	
    <?php $this->load->view('footer/footer_vista');?>