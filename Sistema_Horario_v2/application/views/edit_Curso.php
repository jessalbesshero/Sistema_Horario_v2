<?php
/*
 * edit_Curso: Editar curso
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
        <h1 style="background-color: #dddddd"> Editar Curso</h1>
            <div class="row">
		<div class="col-md-6">		
                    <form method="POST">
                        <table class="table table-hover" >
                            <tr>
                                <td><label for="NCR">NCR :</label></td>
				<td><label><?php
                                            $this->db->where('NRC',$NRC);
                                            $querys= $this->db->get('curso');
                                            if($querys->num_rows() == 1){
                                                foreach ($querys ->result() as $rows){
                                                    echo $rows->curso;	
						}
                                            }
                                ?></label></td>
                            </tr>
                            <tr>
                            <td><label for="IDA">IDA:</label></td>
                            <td><label><?php echo $IDA; ?>
				</label>
                            </tr>
                            <tr>
				<td><label for="IDM">IDM :</label></td>
				<td><input type="text"  name="IDM" id="IDM" value="<?php echo $IDM;?>"/></td>
                            </tr>
                            <tr>
				<td></br>
				<input class="btn btn-success btn-lg" type="submit" name="Editar" id="Editar" value="Editar"/></td>
                            </tr>
                        </table>
                    </form>	
		</div>
		<div class="col-md-6">
				<div id="iframe">
					<table class="table table-hover">
						<thead>
				            <tr>
				                <th style="text-align:center" >NRC:</th>
				                <th style="text-align:center" >ID Experiencia Educativa:</th>
				                <th style="text-align:center" >ID Maestro:</th>
				           </tr>
        				</thead>
        				<tbody>
							<?php
							$query= $this->db->get('curso');
							if($query->num_rows() > 0){
								if($query != FALSE){
									foreach ($query ->result() as $row){
										echo "<tr>";
										echo "<td>".$row->NRC."</td>";
										echo "<td>".$row->IDA." ".$row->IDM."</td>";
										echo "<td>";

										/*$IDM= $row->IDM;
										$this->db->where('IDM',$IDM);
										$quer= $this->db->get('asignaturaasignada');
										if($quer->num_rows() > 0){
											if($quer != FALSE){
												foreach($quer->result() as $rows){
													echo "".$rows->Asignatura." ";
												}
											}
										}
										echo "</td>";
										echo "</tr>";*/
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
			
			$NRC=$_POST['NRC'];
			$data=array(
				'NRC'=>$NRC,
				);
			$this->db->where('NRC',$NRC);
			$this->db->update('curso',$data);
			redirect('welcome/home_Curso');
		}
	?>	
<?php $this->load->view('footer/footer_vista');?>