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
        <h1 style="background-color: #dddddd"> Editar Maestros</h1>
            <div class="row">
		<div class="col-md-6">		
                    <form method="POST">
                        <table class="table table-hover" >
                                <tr>
					<td><label for="IDM">ID Maestro:</label></td>
					<td><input type="text"  name="IDM" id="IDM"/></td>
				</tr>
				<tr>
					<td><label for="Nombre">Nombre:</label></td>
					<td><input type="text"  name="Nombre" id="Nombre"/></td>
				</tr>
				<tr>
					<td><label for="ApellidoP">Apellido paterno:</label></td>
					<td><input type="text"  name="ApellidoP" id="ApellidoP" /></td>
				</tr>
                                <tr>
					<td><label for="ApellidoM">Apellido materno:</label></td>
					<td><input type="text"  name="ApellidoM" id="ApellidoM" /></td>
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
				                <th style="text-align:center" >ID Maestro:</th>
				                <th style="text-align:center" >Nombre del maestro:</th>
				                <th style="text-align:center" >Apellido paterno:</th>
                                                <th style="text-align:center" >Apellido materno:</th>
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
		if (isset($_POST['Editar'])){		
			$IDM=$_POST['IDM'];
                        $Nombre=$_POST['Nombre'];
                        $ApellidoP=$_POST['ApellidoP'];
                        $ApellidoM=$_POST['ApellidoM'];
			$data=array(
                            'Nombre'=>$Nombre,
                            'ApellidoP'=>$ApellidoP,
                            'ApellidoM'=>$ApellidoM
			);
                        $this->db->where('IDM',$IDM);
                        $this->db->update('maestros', $data);
			redirect('welcome/home_Maestro');
		}
	?>	
<?php $this->load->view('footer/footer_vista');?>