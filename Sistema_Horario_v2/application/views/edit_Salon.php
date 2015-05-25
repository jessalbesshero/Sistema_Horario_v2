<?php
/*
 * edit_Salon: Editar salón
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
        <h1  style="background-color: #dddddd">Editar Salón</h1>
        <form method="POST" >
			<table class="table table-hover" >
				<tr>
					<td><label for="IDS">ID Salón:</label></td>
					<td><input type="text"  name="IDS" id="IDS"/></td>
				</tr>
				<tr>
					<td><label for="Salon">Número de salón:</label></td>
					<td><input type="text"  name="Salon" id="Salon"/></td>
				</tr>
				<tr>
					<td><label for="Horario">Horario: </label></td>
					<td><input type="text"  name="Horario" id="Horario" /></td>
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
                    $IDS= $this->input->post('IDS');
		    $Salon= $this->input->post('Salon');
                    $Horario=$this->input->post('Horario');
                    echo $IDS;
                    echo $Salon;
                    echo $Horario;
                    $data=array(
			'IDS'=>$IDS,
			'Salon'=>$Salon,
			'Horario'=>$Horario
                    );
			$this->db->where('IDS',$IDS);
			$prueba= $this->db->get('salon');
			if($prueba->num_rows() > 0){
				redirect('welcome/add_Salon');
			}else{
				$this->db->insert('salon',$data);
				redirect('welcome/home_Salon');
			}
		}
	?>
<?php $this->load->view('footer/footer_vista');?>

