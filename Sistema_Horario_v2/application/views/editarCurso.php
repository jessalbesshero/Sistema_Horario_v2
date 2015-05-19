<?php
    $this->load->view('head/head_vista');
    $this->load->view('header/header_vista');
?>
<div id="body">

	<div  class= "jumbotron" > 
		<h1 style="font-size: 50pt; text-align:center"> Actualizacion de Curso </h1>
	</div>
	<div class="container">

		<div class="row">
			<div class="col-md-6">
				
				<form method="POST">
					<table class="table table-hover" >
						<tr>
							<td><label for="NCR">NCR :</label></td>
							<td><label><?php echo $NRC;?></label></td>
						</tr>
						<tr>
							<td><label for="IDA">IDA:</label></td>
							<td><label><?php
								$this->db->where('IDA',$IDA);
								$querys= $this->db->get('asignatura');
								if($querys->num_rows() == 1){
								foreach ($querys ->result() as $rows){
									echo $rows->Asignatura;	
								}
								}
							?>
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
				                <th style="text-align:center" >Identificacion</th>
				                <th style="text-align:center" >Nombre</th>
				                <th style="text-align:center" >Materias Asignadas</th>
				           </tr>
        				</thead>
        				<tbody>
							<?php
							$query= $this->db->get('maestros');
							if($query->num_rows() > 0){
								if($query != FALSE){
									foreach ($query ->result() as $row){
										echo "<tr>";
										echo "<td>".$row->IDM."</td>";
										echo "<td>".$row->Nombre." ".$row->ApellidoP." ".$row->ApellidoM."</td>";
										echo "<td>";

										$IDM= $row->IDM;
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


	<?php 
		if (isset($_POST['Editar'])){
			
			$IDM=$_POST['IDM'];
			$data=array(
				'IDM'=>$IDM,
				);
			$this->db->where('NRC',$NRC);
			$this->db->update('curso',$data);
			redirect('welcome/curso');
		}
		<?php $this->load->view('footer/footer_vista');?>
	?>	