<?php
    $this->load->view('head/head_vista');
    $this->load->view('header/header_vista');
?>
<div id="body">
<div class="container">
  <h1>Asignaturas</h1>
  <table class="table table-striped" style="text-align:center" >
           <thead>
              <tr>
                  <th style="text-align:center" >IDMateria:</th>
                  <th style="text-align:center" >Asignatura:</th>
                  <th style="text-align:center" >Carrera:</th>
                  <th style="text-align:center" >Horas</th>
                  <th style="text-align:center" >Requerimientos</th>
                  <th style="text-align:center" >Creditos</th>
                  <th style="text-align:center" >Eliminar</th>
                  <th style="text-align:center" >Editar</th>
             </tr>
           </thead>
           <tbody>
          <tr>
           <?php 
                $query = $this->db->get('Asignatura');
                 if ($query->num_rows() > 0){
                    if( $query != FALSE ){
                        foreach ($query ->result() as $row) {
                             
                                echo "<tr>";
                                echo "<td>".$row->IDA."</td>"; 
                                echo "<td>".$row->Asignatura."</td>"; 
                                echo "<td>".$row->Carrera."</td>";
                                 echo "<td>".$row->Horas."</td>";
                                 echo "<td>".$row->Requerimiento."</td>";
                                 echo "<td>".$row->Creditos."</td>";
                                echo "<td>";
                                    echo "<a href='".base_url()."index.php/welcome/editarMaterias/".$row->IDA."' class='label label-info'>";
                                    echo "<span class='glyphicon glyphicon-pencil'></a></span>";  
                                echo "</td>";
                                echo "<td>";
                                    echo "<a href='".base_url()."index.php/welcome/eliminarMaterias/".$row->IDA."' class='label label-danger'>";
                                    echo "<span class='glyphicon glyphicon-remove'></a></span>";  
                                echo "</td>";
                                echo "</tr>"; ?>    
                       <?php } 
                    }else{
                        echo "no hay enlaces";
                    }
                }else{
                    return FALSE;
                }
            ?>
       </tbody>
     
    
  </table>
</div>
<?php $this->load->view('footer/footer_vista');?>
