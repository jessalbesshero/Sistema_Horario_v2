<?php
/*
 * add_Carrera: Agregar carreras
 * @Sirio
 * @Jesús
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
    $this->load->view('head/head_vista');
    $this->load->view('header/header_vista');
?>
<div id="body">
    <div class="container">
	<h1 style="background-color: #dddddd">Agregar Carrera</h1>
	<form method="POST" >
            <table class="table table-hover" >
                <tr>
                    <td>
                        <label for="idCarrera">ID Carrera:</label>
                    </td>
                    <td>
                        <input type="text"  name="idCarrera" id="idCarrera"/>
                    </td>
                </tr>
		<tr>
                    <td>
                        <label for="nombreCarrera">Nombre de la carrera:</label>
                    </td>
                    <td>
                        <input type="text"  name="nombreCarrera" id="nombreCarrera"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="creditos">Créditos:</label>
                    </td>
                    <td>
                        <input type="text"  name="creditos" id="creditos"/>
                    </td>
                </tr>
		<tr>
                    <td>
                        <label for="jefeCarrera">Jefe de la Carrera: </label>
                    </td>
                    <td>
                        <input type="text"  name="jefeCarrera" id="jefeCarrera" />
                    </td>
		</tr>
		<tr>
                    <td>
                        <input class="btn btn-success btn-lg" type="submit" name="Insertar" id="Insertar" value="Insertar"/>
                    </td>
		</tr>
            </table>
	</form>
    </div>
    <?php 
	if (isset($_POST['Insertar'])){
            $idCarrera= $this->input->post('idCarrera');
            $nombreCarrera= $this->input->post('nombreCarrera');
            $creditos=$this->input->post('creditos');
            $jefeCarrera=$this->input->post('jefeCarrera');
            echo $idCarrera;
            echo $nombreCarrera;
            echo $creditos;
            echo $jefeCarrera;
            $data=array(
                'idCarrera'=>$idCarrera,
		'nombreCarrera'=>$nombreCarrera,
		'creditos'=>$creditos,
                'jefeCarrera'=>$jefeCarrera
            );
            $this->db->where('idCarrera',$idCarrera);
            $prueba= $this->db->get('Carrera');
            if($prueba->num_rows() > 0){
                redirect('welcome/add_Carrera');
            }else{
                $this->db->insert('Carrera',$data);
                redirect('welcome/home_Carrera');
            }
	}
    ?>
    <?php $this->load->view('footer/footer_vista');?>