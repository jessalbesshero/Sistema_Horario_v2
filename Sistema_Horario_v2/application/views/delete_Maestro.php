<?php
/*
 * delete_Maestro: Eliminar maestro
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
        <h1 style="background-color: #dddddd"> Eliminar Maestros</h1>
            <div class="row">
		<div class="col-md-6">		
                    <form method="POST">
			<table class="table table-hover" >
                                <tr>
					<td><label for="IDM">ID del Maestro :</label></td>
					<td><input type="text"  name="IDM" id="IDM"/></td>
				</tr>
				<tr>
					<td><label for="Nombre">Nombre del Maestro :</label></td>
					<td><input type="text"  name="Nombre" id="Nombre"/></td>
				</tr>
				<tr>
					<td><label for="ApellidoP">Apellido Paterno:</label></td>
					<td><input type="text"  name="ApellidoP" id="ApellidoP"/></td>
				</tr>
				<tr>
					<td><label for="ApellidoM">Apellido Materno:</label></td>
					<td><input type="text"  name="ApellidoM" id="ApellidoM"/></td>
				</tr>
				<tr>
					<td></br>
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
				                <th style="text-align:center" >ID del Maestro:</th>
				                <th style="text-align:center" >Nombre del Maestro:</th>
				                <th style="text-align:center" >Apellido Paterno:</th>
                                                <th style="text-align:center" >Apellido Materno:</th>
				           </tr>
        				</thead>
        				<tbody>
					<?php
                                            $query= $this->db->get('maestros');
                                            if($query->num_rows() > 0){
                                            if($query != FALSE){
                                                    foreach ($query ->result() as $row){
                                                        echo "<tr>";
                                                        echo "<td style='text-align: center'>".$row->IDM."</td>";
                                                        echo "<td style='text-align: center'>".$row->Nombre." "."</td>";
                                                        echo "<td style='text-align: center'>".$row->ApellidoP." "."</td>";
                                                        echo "<td style='text-align: center'>".$row->ApellidoM."</td>";
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
	$IDM=$_POST['IDM'];
	$data=array(
            'IDM'=>$IDM,
	);
        $this->db->where('IDM',$IDM);
        $this->db->delete('maestros');
	redirect('welcome/home_Maestro');
    }
?>	
<?php $this->load->view('footer/footer_vista');?>
