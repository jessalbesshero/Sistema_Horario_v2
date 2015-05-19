
	<div class="container">
		<div class="row">
			<div class="col-sm-2 col-md-2 col-xs-2">
				<h2>Materias</h2>
			</div>
			<div class="col-sm-2 col-md-2 col-xs-2">
				<h2>Lunes</h2>
			</div>
			<div class="col-sm-2 col-md-2 col-xs-2">
				<h2>Martes</h2>
			</div>
			<div class="col-sm-2 col-md-2 col-xs-2">
				<h2>Miercoles</h2>
			</div>
			<div class="col-sm-2 col-md-2 col-xs-2">
				<h2>Jueves</h2>
			</div>
			<div class="col-sm-2 col-md-2 col-xs-2">
				<h2>Viernes</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-2" id="des1" style="background-color: #C2ACE8;" ondragenter="return enter(event)" ondragover="return overs(event)" ondrop="return drop(event)">
				 <?php 
                $query =$this->db->get('curso');
                 if ($query->num_rows() > 0){
                    if( $query != FALSE ){
                        foreach ($query ->result() as $row) {
                         ?> <div id="<?php $row->NRC; ?>" draggable="true" ondragstart="return empezar(event)" ondragend="return end(event)">
					      <?php echo $row->IDA;?>
				          </div>
                         <?php     
                        } 
                    }else{
                        echo "no hay enlaces";
                    }
                }else{
                    return FALSE;
                }
            ?>
			</div>
			<div class="col-sm-2" id="des2" style="background-color: #6FF572;" ondragenter="return enter(event)" ondragover="return overs(event)" ondrop="return drop(event)">
			</div>
			<div class="col-sm-2" id="des3" style="background-color: #FFF081;" ondragenter="return enter(event)" ondragover="return overs(event)" ondrop="return drop(event)">
			</div>
			<div class="col-sm-2" id="des4" style="background-color: #6FF572;"ondragenter="return enter(event)" ondragover="return overs(event)" ondrop="return drop(event)">
			</div>
			<div class="col-sm-2" id="des5" style="background-color: #FFF081;" ondragenter="return enter(event)" ondragover="return overs(event)" ondrop="return drop(event)">
			</div>
			<div class="col-sm-2" id="des6" style="background-color: #6FF572;" ondragenter="return enter(event)" ondragover="return overs(event)" ondrop="return drop(event)">
			</div>
		</div>
	</div>