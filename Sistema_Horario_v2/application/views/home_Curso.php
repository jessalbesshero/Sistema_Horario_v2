<?php
/*
 * home_Curso: Vista principal de cursos
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
    <div class='container'>
        <h1 style="background-color: #dddddd">Cursos</h1>
        <table class="table table-striped" style="text-align:center">
		<thead >
			<tr>
				<th style="text-align:center">NCR:</th>
				<th style="text-align:center">Experiencia Educativa:</th>
				<th style="text-align:center">ID del Maestro:</th>
                                <th style="text-align:center">Agregar:</th>
				<th style="text-align:center">Editar:</th>
				<th style="text-align:center">Eliminar:</th>
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
							$this->db->where('IDA',$row->IDA);
							$querys= $this->db->get('asignatura');
							if($querys->num_rows() == 1){
								foreach ($querys ->result() as $rows){
									echo "<td>".$rows->Asignatura."</td>";	
								}
							}
							$this->db->where('IDM',$row->IDM);
							$queryc= $this->db->get('maestros');
							if($queryc->num_rows() == 1){
								foreach ($queryc ->result() as $rowc){
									echo "<td>".$rowc->Nombre." ".$rowc->ApellidoP." ".$rowc->ApellidoM."</td>";	
								}
							}else{
								echo "<td>".$row->NRC."</td>";
							}
                            echo "<td><a href='agregar_curso' class='label label-info'><span class='glyphicon glyphicon-plus'></a></span></td>";
							echo "<td><a href='editar_curso' class='label label-info'><span class='glyphicon glyphicon-pencil'></a></span></td>";
							echo "<td><a href='eliminar_curso' class='label label-danger'><span class='glyphicon glyphicon-remove'></a></span></td>";
							echo "</tr>";
						}
					}
				}

				?>				
		</tbody>
	</table>
</div>
    
    <div class="modal fade bs-example-modal1-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="input-group"> 
                    <span class="input-group-addon" id="basic-addon1"></span>
                </div>
                <div class="input-group">
                    <label>Desea eliminar el registro:</label>
                    <br>
                    <div class="form-group">        
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">SI</button>
                            <button type="submit" class="btn btn-default">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>         
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<?php $this->load->view('footer/footer_vista');?>