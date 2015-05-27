<html>
<head>
  <title>Cursos UV - FEI</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?=base_url()?>/css/AdminLTE.css">
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>css/index_style.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script>
var id_salon = 0;
var id_last_drag;

$(document).ready(function(){

  id_salon = $('#'+id_salon).html();
  $('#'+id_salon).addClass('active')
  $('.btn_salon').on('click', function() {
    id_salon = $(this).html();
    $('#info-salon').html('Salon activo: '+id_salon);
    repaint_hor();
  });
});

$(document).ready(function(){
    repaint_hor();
  });

function repaint_hor(){
  $.post('http://localhost/Sistema_Horario_v2/Sistema_Horario_v2/Sistema_Horario_v2/welcome/get_info_horario', {"salon":id_salon}, function(result){
    $('.curso_drag').each(function(){
      $('#curso').append($(this));
    });

    var json = $.parseJSON(result);
    for (var i = json.length - 1; i >= 0; i--) {
      var hora = json[i].Hora;
      var dia = json[i].Dia;
      var nrc = json[i].NCR;
      switch(dia){
        case 'Lunes': dia     =1; break;
        case 'Martes': dia    =2; break;
        case 'Miercoles': dia =3; break;
        case 'Jueves': dia    =4; break;
        case 'Viernes': dia   =5; break;
        case 'Sabado': dia    =6; break;
      }
      switch(hora){
        case '7': hora  =1; break;
        case '9': hora  =2; break;
        case '11': hora =3; break;
        case '13': hora =4; break;
        case '15': hora =5; break;
        case '17': hora =6; break;
        case '19': hora =7; break;
      }
      var tt_id = hora+'-'+dia;
      $('#'+tt_id).append($('#'+nrc));
    }
  }).fail(function () {
    alert('error');
  });
}

function allowDrop(ev) {
    ev.preventDefault();
}

function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
    console.log(ev);
}

function drop(ev) {
    if($ (ev.target).attr('id')=="curso"){
      ev.preventDefault();
      var data = ev.dataTransfer.getData("text");
      ev.target.appendChild(document.getElementById(data));

      $.post('http://localhost/Sistema_Horario_v2/Sistema_Horario_v2/Sistema_Horario_v2/welcome/BHorario', {"salon":id_salon,"nrc":data}, function(result){
        console.log(result);
        
      }).fail(function () {
        alert('Error AJAX 1');
      });
    }
    else if( $(ev.target).attr('ocupado') == "false" ){    
      ev.preventDefault();
      var data = ev.dataTransfer.getData("text");
      ev.target.appendChild(document.getElementById(data));
      var datos = $(ev.target).attr('id').split("-");
      var hora = datos[0];
      var dia = datos[1];
      
      $(ev.target).attr('ocupado', "true");
      //alert('Error AJAX 2');
      $.post('http://localhost/Sistema_Horario_v2/Sistema_Horario_v2/Sistema_Horario_v2/welcome/web_service', {"salon":id_salon,"hora":hora,"dia":dia,"nrc":data}, function(result){
        console.log(result);
      }).fail(function () {
        alert('Error AJAX 3');
      });
      }
    else{
      alert('No puedes poner mas de una materia en la misma casilla');
    }
  }
</script>
</head>
<body>

    <?php $this->load->view('head/head_vista'); ?>
    <?php $this->load->view('header/header_vista'); ?>
<div id="body">
<div class="container">

	<div class="container">
  <div class="row">
  <h2 id="info-salon" class="text-center text-primary">Salon activo: 
  <?php
    $query =$this->db->get('salon');
    echo $query->result()[0]->Salón;
  ?>
  </h2>
</div>
  <ul class="pagination">
	  <?php 
      $Salón=0;
      $query =$this->db->get('salon');
      foreach ($query->result() as $key => $row) {
         echo '<li><a id="'.$key.'" data-id="'.$row->Salón.'" href="#" class="btn_salon">'.$row->Salón.'</a><li>';
      } 
    ?>
  </ul>
</div>

<div class="row">
  <div class="col-md-3"></div>
  <div class="col-md-9">
    <div class="row">
      <div class="col-md-2"><label>Lunes</label></div>
      <div class="col-md-2"><label>Martes</label></div>
      <div class="col-md-2"><label>Miercoles</label></div>
      <div class="col-md-2"><label>Jueves</label></div>
      <div class="col-md-2"><label>Viernes</label></div>
      <div class="col-md-2"><label>Sabado</label></div>
    </div>
  </div>
</div>
<div class="row">
<div id="curso" class="col-sm-2 text-center"  id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
  <?php 
    $query =$this->db->get('curso');$query =$this->db->get('curso');
      foreach ($query ->result() as $key => $row) {
        echo '<div id="'.$row->NRC,'" class="curso_drag btn btn-success btn-block" draggable="true" ondragstart="drag(event)">'.$row->NRC.'</div>';
      } 
  ?>
</div>
<div class="col-sm-1">
  <div class="row">
    <div id="Hor" class="col-sm-2 btn btn-default btn-block">7-9</div>
  </div>
  <div class="row">
    <div id="Hor" class="col-sm-2 btn btn-default btn-block">9-11</div>
  </div>
  <div class="row">
    <div id="Hor" class="col-sm-2 btn btn-default btn-block">11-13</div>
  </div>
  <div class="row">
    <div id="Hor" class="col-sm-2 btn btn-default btn-block">13-15</div>
  </div>
  <div class="row">
    <div id="Hor" class="col-sm-2 btn btn-default btn-block">15-17</div>
  </div>
  <div class="row">
    <div id="Hor" class="col-sm-2 btn btn-default btn-block">17-19</div>
  </div>
  <div class="row">
    <div id="Hor" class="col-sm-2 btn btn-default btn-block">19-21</div>
  </div>
</div>
<div class="col-sm-9">
<?php
  for( $i = 1; $i <= 7; $i++ ){
    echo '<div class="row">';
    for( $j = 1; $j <= 6; $j++ ){
      echo '<div class="col-sm-2">';
      echo '<div id="'.$i.'-'.$j.'"data-id="1" ocupado="false" class="segmento-horario btn text-center" ondrop="drop(event)" ondragover="allowDrop(event)"></div>';
      echo '</div>';
    }
    echo '</div>';
  }
?>
</div>
</div>
<br></br>
<br></br>