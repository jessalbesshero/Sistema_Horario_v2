<?php
/*
 * home_Maestro: Vista principal de maestros
 * @Sirio
 * @Jesús
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
    $this->load->view('head/head_vista');
    $this->load->view('header/header_vista');
?>
<!--
Vista Maestros:
@Sirio
@Jesús
-->
<div id="body">
<div class="container">
<h1 style="background-color: #dddddd">Maestros</h1>
<table class="table table-striped" style="text-align:center" >
         <thead>
            <tr>
              <th style="text-align:center" >Numero:</th>
                <th style="text-align:center" >Nombre:</th>
                <th style="text-align:center" >Apellido Paterno:</th>
                <th style="text-align:center" >Apellido Materno:</th>
                <th style="text-align:center" >Agregar:</th>
                <th style="text-align:center" >Editar:</th>
                 <th style="text-align:center" >Eliminar:</th>
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
                                    echo "<a href='agregar_maestro' class='label label-info'>";
                                    echo "<span class='glyphicon glyphicon-plus'></a></span>";  
                                echo "</td>";
                                echo "<td>";
                                    echo "<a href='editar_Maestro' class='label label-info'>";
                                    echo "<span class='glyphicon glyphicon-pencil'></a></span>";  
                                echo "</td>";
                                echo "<td>";
                                    echo "<a href='eliminar_Maestro' class='label label-danger'>";
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

