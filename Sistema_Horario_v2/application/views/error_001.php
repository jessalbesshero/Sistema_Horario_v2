<?php
/*
 * error_001: Vista de error cuando el recurso solicitado no está disponible
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
	<div class="jumbotron" style="text-align:center;background: #FFF500;">
    	<h1>Error 001</h1>
        <p>
            Usuario ha intentado acceder a un recurso no disponible.
        </p>
  	</div>
<div class="container">
	
	
</div>
<?php $this->load->view('footer/footer_vista');?>