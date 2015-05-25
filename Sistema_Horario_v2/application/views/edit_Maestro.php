<?php
/*
 * edit_Maestro: Editar maestros
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
	<h1  style="background-color: #dddddd">Editar Maestro</h1>	
		<form method="POST">
			<table class="table table-hover" >
				<tr>
					<td><label for="Nombre">Nombre del Maestro :</label></td>
					<td><input type="text"  name="Nombre" id="Nombre" value="<?php echo $Nombre;?>"/></td>
				</tr>
				<tr>
					<td><label for="ApellidoP">Apellido Paterno:</label></td>
					<td><input type="text"  name="ApellidoP" id="ApellidoP" value="<?php echo $ApellidoP;?>"/></td>
				</tr>
				<tr>
					<td><label for="ApellidoM">Apellido Materno:</label></td>
					<td><input type="text"  name="ApellidoM" id="ApellidoM" value="<?php echo $ApellidoM;?>"/></td>
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
			$Nombre=$_POST['Nombre'];
			$ApellidoP=$_POST['ApellidoP'];
			$ApellidoM=$_POST['ApellidoM'];
			$data=array(
				'Nombre'=>$Nombre,
				'ApellidoP'=>$ApellidoP,
				'ApellidoM'=>$ApellidoM,
				);
			$this->db->where('IDM',$IDM);
			$this->db->update('Maestros',$data);
			redirect('welcome/home_Maestro');
		}
	?>	
	<?php $this->load->view('footer/footer_vista');?>