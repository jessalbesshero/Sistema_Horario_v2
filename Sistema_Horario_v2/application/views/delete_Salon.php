<?php
/*
 * delete_Salon: Eliminar salón
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
        <h1 style="background-color: #dddddd"> Eliminar Salón</h1>
            <div class="row">
		<div class="col-md-6">		
                    <form method="POST">
			<table class="table table-hover" >
                                <tr>
					<td><label for="IDS">ID del salón:</label></td>
					<td><input type="text"  name="IDS" id="IDS"/></td>
				</tr>
				<tr>
					<td><label for="Salon">Salón:</label></td>
					<td><input type="text"  name="Salon" id="Salon"/></td>
				</tr>
				<tr>
					<td><label for="Horario">Horario de clases:</label></td>
					<td><input type="text"  name="Horario" id="Horario "/></td>
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
				                <th style="text-align:center" >ID del salón:</th>
				                <th style="text-align:center" >Salón:</th>
				                <th style="text-align:center" >Horario de clases:</th>
				           </tr>
        				</thead>
        				<tbody>
					<?php
                                            $query= $this->db->get('salon');
                                            if($query->num_rows() > 0){
                                            if($query != FALSE){
                                                    foreach ($query ->result() as $row){
                                                        echo "<tr>";
                                                        echo "<td style='text-align: center'>".$row->IDS."</td>";
                                                        echo "<td style='text-align: center'>".$row->Salon." "."</td>";
                                                        echo "<td style='text-align: center'>".$row->Horario." "."</td>";
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
	$IDS=$_POST['IDS'];
	$data=array(
            'IDS'=>$IDS,
	);
        $this->db->where('IDS',$IDS);
        $this->db->delete('salon');
	redirect('welcome/home_Salon');
    }
?>	
<?php $this->load->view('footer/footer_vista');?>