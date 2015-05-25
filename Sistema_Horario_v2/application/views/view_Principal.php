<?php
/*
 * view_Principal: Vista principal del sistema
 * @Sirio
 * @Jesús
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
    $this->load->view('head/head_vista');
    $this->load->view('header/header_vista');
?>
<!-- HTML -->
<div id="body">
	<div class="jumbotron" style="text-align:center;">
    	<h1>Bienvenido Al Sistema de Control De Horarios v2</h1>      
  	</div>
	<div class="container">
            <!--
                <div id="con" style="text-align:center; margin-top: 50px;"><a href=""><img src="<?=base_url()?>imagen/EA.png"></a></div>
		<div id="con" style="text-align:center; margin-top: 50px;"><a href=""><img src="<?=base_url()?>imagen/PD.png"></a></div>
            -->
        </div>
</div>
<?php $this->load->view('footer/footer_vista');?>