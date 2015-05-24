<?php
    $this->load->view('head/head_vista');
    $this->load->view('header/header_vista');
?>
<div id="body">
    <div class='container'>
	<h1 style="background-color: #dddddd">Agregar Maestro</h1>	
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
				redirect('welcome/add_Maestro');
			}else{
				$this->db->insert('Maestros',$data);
				redirect('welcome/home_Maestros');
			}
		}
	?>	
	<?php $this->load->view('footer/footer_vista');?>