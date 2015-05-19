<?php
    $this->load->view('head/head_vista');
    $this->load->view('header/header_vista');
?>
<div id="body">
	<div class="jumbotron" style="text-align:center;">
    	<h1>Bienvenido Al Control De Horarios</h1>      
  	</div>
	<div class="container">
		<div id="con" style="text-align:center; margin-top: 50px;"><a href=""><img src="<?=base_url()?>imagen/EA.png"></a></div>
		<div id="con" style="text-align:center; margin-top: 50px;"><a href=""><img src="<?=base_url()?>imagen/PD.png"></a></div>
	</div>
	<?php $this->load->view('footer/footer_vista');?>