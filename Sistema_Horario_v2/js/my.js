var id_salon = 0;
var id_last_drag;

$(document).ready(function(){

  id_salon = $('#'+id_salon).html();
  $('#'+id_salon).addClass('active')
  $('.btn_salon').on('click', function(){
    id_salon = $(this).html();
    $('#info-salon').html('Salon: '+id_salon);
    repaint_hor();
  });
});

$(document).ready(function(){
    repaint_hor();
  });

function repaint_hor(){
  $.post('http://localhost/ControlUVFEI/ControlUVFEI/index.php/welcome/get_info_horario', {"salon":id_salon}, function(result){
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
  
  if( $(ev.target).attr('ocupado') == "false" ){
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    ev.target.appendChild(document.getElementById(data));
    var datos = $(ev.target).attr('id').split("-");
    var hora = datos[0];
    var dia = datos[1];
    
    $(ev.target).attr('ocupado', "true");
    $.post('http://localhost/ControlUVFEI/ControlUVFEI/index.php/welcome/web_service', {"salon":id_salon,"hora":hora,"dia":dia,"nrc":data}, function(result){
      console.log(result);
    }).fail(function () {
      alert('Error AJAX');
    });
  }
  else{
    alert('No puedes poner mas de una materia en la misma casilla');
  }
}