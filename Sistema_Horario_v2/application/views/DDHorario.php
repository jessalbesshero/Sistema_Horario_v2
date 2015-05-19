<?php
    $this->load->view('head/head_vista');
    $this->load->view('header/header_vista');
?>
    <div class="container">
      <ul class="pagination">
        <div class="row">
          <h2 id="info-salon" class="text-center">Salon:
          <?php
          $query =$this->db->get('salon');
          echo $query->result()[0]->Salón;
          ?>
          </h2>
        </div>
        <?php
        $query =$this->db->get('salon');
        foreach ($query->result() as $key => $row) {
        echo '<li><a id="'.$key.'" data-id="'.$row->Salón.'" href="#" class="btn_salon">'.$row->Salón.'</a><li>';
        }
        ?>
      </ul>
    </div>
    <div class="row">
      <div class="col-sm-1">
        <div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
          <?php
          $query =$this->db->get('asignatura');
          foreach ($query ->result() as $key => $row) {
          echo '<div id="'.$row->IDA,'" draggable="true" ondragstart="drag(event)" class="text-center asignatura">'.$row->Asignatura.' '.$row->IDA.'</div>';
          }
          ?>
        </div>
      </div>
      <div class="col-sm-11">
        <div class="row">
          <?php
          for( $i = 1; $i <= 7; $i++ ){
          $hour = $i;
          switch ($hour) {
          case 1: $hour="07:00 - 08:59";break;
          case 2: $hour="09:00 - 10:59";break;
          case 3: $hour="11:00 - 12:59";break;
          case 4: $hour="13:00 - 14:59";break;
          case 5: $hour="15:00 - 16:59";break;
          case 6: $hour="17:00 - 18:59";break;
          case 7: $hour="19:00 - 20:59";break;
          }
          echo '<div class="row">';
            echo '<div class="col-sm-1"><h5>'.$hour.'</h5></div>';
            echo '<div class="col-sm-11"><div class="row">';
              for( $j = 1; $j <= 6; $j++ ){
              echo '<div class="col-sm-2">';
                if( $i == 1 ){
                switch ($j) {
                case 1: echo '<h5 class="text-center">Lunes</h5>';break;
                case 2: echo '<h5 class="text-center">Martes</h5>';break;
                case 3: echo '<h5 class="text-center">Miercoles</h5>';break;
                case 4: echo '<h5 class="text-center">Jueves</h5>';break;
                case 5: echo '<h5 class="text-center">Viernes</h5>';break;
                case 6: echo '<h5 class="text-center">Sabado</h5>';break;
                }
                }
                echo '<div id="'.$i.'-'.$j.'"data-id="1" ocupado="false" class="segmento-horario" ondrop="drop(event)" ondragover="allowDrop(event)"></div>';
              echo '</div>';
              }
            echo '</div>';
          echo '</div>';
        echo '</div>';
        }
        ?>
      </div>
    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <script src="http://localhost/Sistema_Horario_v2/Sistema_Horario_v2/js/my.js"></script>
    <?php $this->load->view('footer/footer_vista');?>