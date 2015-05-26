<?php
/*
 * delete_Carrera: Eliminar carrera
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
        <h1 style="background-color: #dddddd"> Eliminar Carrera</h1>
            <div class="row">
		<div class="col-md-6">		
                    <form method="POST">
                        <table class="table table-hover" >
                                <tr>
					<td><label for="idCarrera">Id de la carrera:</label></td>
					<td><input type="text"  name="idCarrera" id="idCarrera"/></td>
				</tr>
				<tr>
					<td><label for="nombreCarrera">Nombre de la carrera:</label></td>
					<td><input type="text"  name="nombreCarrera" id="nombreCarrera"/></td>
				</tr>
                                <tr>
					<td><label for="creditos">Créditos de la carrera:</label></td>
					<td><input type="text"  name="creditos" id="creditos"/></td>
				</tr>
				<tr>
					<td><label for="jefeCarrera">Jefe de la carrera:</label></td>
					<td><input type="text"  name="jefeCarrera" id="jefeCarrera" /></td>
				</tr>
				<tr>
					<td>
						<input class="btn btn-danger btn-lg" type="submit" name="Eliminar" id="Eliminar" value="Eliminar"/></td>
				</tr>
                        </table>
                    </form>
		</div>
		<div class="col-md-6">
				<div id="iframe">
					<table class="table table-hover">
						<thead>
				            <tr>
				                <th style="text-align:center" >ID Carrera:</th>
				                <th style="text-align:center" >Nombre de la carrera:</th>
				                <th style="text-align:center" >Créditos:</th>
                                                <th style="text-align:center" >Jefe de la carrera:</th>
				           </tr>
        				</thead>
        				<tbody>
							<?php
							$query= $this->db->get('carrera');
							if($query->num_rows() > 0){
								if($query != FALSE){
									foreach ($query ->result() as $row){
										echo "<tr>";
										echo "<td style='text-align: center'>".$row->idCarrera."</td>";
										echo "<td style='text-align: center'>".$row->nombreCarrera." "."</td>";
                                                                                echo "<td style='text-align: center'>".$row->creditos."</td>";
                                                                                echo "<td style='text-align: center'>".$row->jefeCarrera."</td>";
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
    if (isset($_POST['Eliminar'])){		
	$idCarrera=$_POST['idCarrera'];
	$data=array(
            'idCarrera'=>$idCarrera,
	);
        $this->db->where('idCarrera',$idCarrera);
        $this->db->delete('carrera');
	redirect('welcome/home_Carrera');
    }
?>	
<?php $this->load->view('footer/footer_vista');?>