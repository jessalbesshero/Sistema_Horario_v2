<?php
    $this->load->view('head/head_vista');
    $this->load->view('header/header_vista');
?>
<div id="body">
	
	<div  class= "jumbotron" > 
		<h1 style="font-size: 50pt">Actualizacion de Maestros</h1>
	</div>
	<div class="container">
		
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
			redirect('welcome/tmaes');
		}
	?>	
	<?php $this->load->view('footer/footer_vista');?>