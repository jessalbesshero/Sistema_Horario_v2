<?php
    $this->load->view('head/head_vista');
    $this->load->view('header/header_vista');
?>
<div id="body">
	
<div class='container' style='background-color:'>
	<h1>Cursos</h1>
	<table class="table table-condensed">
		<thead >
			<tr>
				<th style="text-align:center">NCR</th>
				<th style="text-align:center">Asignatura</th>
				<th style="text-align:center">Maestro</th>
				<th style="text-align:center"></th>
				<th style="text-align:center"></th>
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
								echo "<td>No hay maestro para esta ".$row->NRC."</td>";
							}
							echo "<td><a href='".base_url()."index.php/welcome/editarCurso/".$row->NRC."' class='label label-info'><span class='glyphicon glyphicon-pencil'></a></span></td>";
							echo "<td><a href='".base_url()."index.php/welcome/eliminarCurso/".$row->NRC."' class='label label-danger'><span class='glyphicon glyphicon-remove'></a></span></td>";
							echo "</tr>";
						}
					}
				}

				?>				
		</tbody>
	</table>
</div>
<?php $this->load->view('footer/footer_vista');?>