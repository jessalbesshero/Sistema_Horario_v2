<?php
    $this->load->view('head/head_vista');
    $this->load->view('header/header_vista');
?>
<h1>Asignaturas</h1>
<table class="table table-striped" style="text-align:center" >
         <thead>
            <tr>
                <th style="text-align:center" >Numero de Salon</th>
                <th style="text-align:center" >Carrera:</th>
                <th style="text-align:center" >Eliminar</th>
                <th style="text-align:center" >Editar</th>
           </tr>
         </thead>
         <tbody>
   
   <tr>
        <td>108</td>
        <td>Informatica</td>
       <td> <button type="button" class="btn btn-warning" data-toggle="modal" data-target=".bs-example-modal1-sm">Eliminar</button>
        </td>
       <td> <button type="button" class="btn btn-info">Editar</button></td>
      </tr>  
      <tr>
        <td>102</td>
        <td>Informatica</td>
         <td> <button type="button" class="btn btn-warning" data-toggle="modal" data-target=".bs-example-modal1-sm">Eliminar</button>
        </td>
       <td> <button type="button" class="btn btn-info">Editar</button></td>
      </tr>
      <tr>
        <td>104</td>
        <td>Informatica</td>
        <td> <button type="button" class="btn btn-warning" data-toggle="modal" data-target=".bs-example-modal1-sm">Eliminar</button>
        </td>
       <td> <button type="button" class="btn btn-info">Editar</button></td>
      </tr>
</tbody>
</table>




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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<?php $this->load->view('footer/footer_vista');?>