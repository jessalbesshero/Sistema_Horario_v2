<?php
    $this->load->view('head/head_vista');
    $this->load->view('header/header_vista');
?>
<div class="container">
  <h2>Registro de Salones</h2>
  <form class="form-horizontal" role="form">
    <div class="form-group">
      <label class="control-label col-sm-2" for="Numero_salon"> Numero de Salon:</label>
      <div class="col-sm-10">
        <input type="Numero_salon" class="form-control" id="Numero_salon" placeholder="Ingresa Numero de salon">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="Carrera">Carrera:</label>
      <div class="col-sm-10">          
        <input type="Carrera" class="form-control" id="Carrera" placeholder="Nombre de Carrera">
      </div>
    </div>
   
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Aceptar</button>
        <button type="submit" class="btn btn-default">Cancelar</button>
      </div>
    </div>
  </form>
</div>
<?php $this->load->view('footer/footer_vista');?>