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
        <div class="row">
		<div class="col-md-6">
                    <form method="POST">
			<table class="table table-hover" >
                                <tr>
					<td><label for="IDA">ID de la Experiencia Educativa:</label></td>
					<td><input type="text"  name="IDA" id="IDA"/></td>
				</tr>
				<tr>
					<td><label for="Asignatura">Nombre de la Experiencia Educativa:</label></td>
					<td><input type="text"  name="Asignatura" id="Asignatura"/></td>
				</tr>
				<tr>
					<td><label for="Carrera">Carrera:</label></td>
					<td><input type="text"  name="Carrera" id="Carrera"/></td>
				</tr>
				<tr>
					<td><label for="Horas">Horas:</label></td>
					<td><input type="text"  name="Horas" id="Horas"/></td>
				</tr>
				<tr>
					<td><label for="Requerimiento">Requerimientos:</label></td>
					<td><input type="text"  name="Requerimiento" id="Requerimiento"/></td>
				</tr>
				<tr>
					<td><label for="Creditos">Creditos:</label></td>
					<td><input type="text"  name="Creditos" id="Creditos"/></td>
				</tr>
				<tr>
					<td>
						<input class="btn btn-warning btn-lg" type="submit" name="Editar" id="Editar" value="Editar"/></td>
				</tr>
			</table>
                    </form>
                </div>
        <div class="col-md-6">
				<div id="iframe">
					<table class="table table-hover">
						<thead>
				            <tr>
				                <th style="text-align:center" >ID de la EE:</th>
				                <th style="text-align:center" >Nombre de la EE:</th>
				                <th style="text-align:center" >Carrera:</th>
                                                <th style="text-align:center" >Horas:</th>
                                                <th style="text-align:center" >Requerimientos:</th>
                                                <th style="text-align:center" >Créditos:</th>
				           </tr>
        				</thead>
        				<tbody>
					<?php
                                            $query= $this->db->get('asignatura');
                                            if($query->num_rows() > 0){
                                            if($query != FALSE){
                                                    foreach ($query ->result() as $row){
                                                        echo "<tr>";
                                                        echo "<td style='text-align: center'>".$row->IDA."</td>";
                                                        echo "<td style='text-align: center'>".$row->Asignatura." "."</td>";
                                                        echo "<td style='text-align: center'>".$row->Carrera." "."</td>";
                                                        echo "<td style='text-align: center'>".$row->Horas."</td>";
                                                        echo "<td style='text-align: center'>".$row->Requerimiento." "."</td>";
                                                        echo "<td style='text-align: center'>".$row->Creditos." "."</td>";
                                                        echo "</tr>";
                                                    }
                                                }
                                            }
					?>
						</tbody>
					</table>
				</div>
			</div>
		</div>		
	</div>
</div>
	<?php 
		if (isset($_POST['Editar'])){
                    $IDA=$_POST['IDA'];
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