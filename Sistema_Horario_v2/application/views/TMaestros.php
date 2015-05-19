<?php
    $this->load->view('head/head_vista');
    $this->load->view('header/header_vista');
?>
<div id="body">
<div class="container">
<h1>Maestros</h1>

<table class="table table-striped" style="text-align:center" >
         <thead>
            <tr>
              <th style="text-align:center" >Numero:</th>
                <th style="text-align:center" >Nombre:</th>
                <th style="text-align:center" >Apellido Paterno:</th>
                <th style="text-align:center" >Apellido Materno:</th>
                <th style="text-align:center" >Editar</th>
                 <th style="text-align:center" >Eliminar</th>
           </tr>
         </thead>
         <tbody>
          <tr>
           <?php 
                $query = $this->db->get('Maestros');
                 if ($query->num_rows() > 0){
                    if( $query != FALSE ){
                        foreach ($query ->result() as $row) {
                             
                                echo "<tr>";
                                echo "<td>".$row->IDM."</td>"; 
                                echo "<td>".$row->Nombre."</td>"; 
                                echo "<td>".$row->ApellidoP."</td>";
                                 echo "<td>".$row->ApellidoM."</td>";
                                echo "<td>";
                                    echo "<a href='".base_url()."index.php/welcome/editarMaestro/".$row->IDM."' class='label label-info'>";
                                    echo "<span class='glyphicon glyphicon-pencil'></a></span>";  
                                echo "</td>";
                                echo "<td>";
                                    echo "<a href='".base_url()."index.php/welcome/eliminarMaestro/".$row->IDM."' class='label label-danger'>";
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

