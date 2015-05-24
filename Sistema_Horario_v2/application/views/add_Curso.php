<?php
/*
 * Agregar curso
 * @Sirio
 * @Jesús
 */
    $this->load->view('head/head_vista');
    $this->load->view('header/header_vista');
?>
<div id="body">
    <div class="container">
	<h1 style="background-color: #dddddd">Agregar Curso</h1>
		<form method="POST" >
			<table class="table table-hover" >
				<tr>
					<td><label for="NRC">NRC:</label></td>
					<td><input type="text"  name="NRC" id="NRC"/></td>
				</tr>
				<tr>
					<td><label for="IDA">ID Experiencia Educativa:</label></td>
					<td><input type="text"  name="IDA" id="IDA"/></td>
				</tr>
				<tr>
					<td><label for="IDM">ID Maestro : </label></td>
					<td><input type="text"  name="IDM" id="IDM" /></td>
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
                    $NRC= $this->input->post('NRC');
		    $IDA= $this->input->post('IDA');
                    $IDM=$this->input->post('IDM');
                    echo $NRC;
                    echo $IDA;
                    echo $IDM;
                    $data=array(
			'NRC'=>$NRC,
			'IDA'=>$IDA,
			'IDM'=>$IDM
                    );
			$this->db->where('NRC',$NRC);
			$prueba= $this->db->get('Curso');
			if($prueba->num_rows() > 0){
				redirect('welcome/add_Curso');
			}else{
				$this->db->insert('Curso',$data);
				redirect('welcome/home_Curso');
			}
		}
	?>
	<?php $this->load->view('footer/footer_vista');?>