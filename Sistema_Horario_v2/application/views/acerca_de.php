<?php  
/* 
 * acerca_de: Breve descripción del sistema de horariosv2.
 * @Sirio
 * @Jesús
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
    $this->load->view('head/head_vista');
    $this->load->view('header/header_vista');
?>
<div class="hero-unit">
    <h1 style="background-color: #dddddd">Sistema de control de horarios versión 2.0</h1>
    <hr>
    <p style="text-align: center">Sistema de administración de horarios - Versión 2.0 - desarrollado en PHP Codeigniter</p>
    <p style="text-align: center"> 
        <!--<img src="<?//=base_url('../img/logo-codeigniter.png')?>">-->
        <img src='<?=base_url()."img/logo-codeigniter.png"?>'>
    </p>
    <p style="text-align: center">Sistema para la experiencia educativa de: administración de proyectos</p>
    <p style="text-align: center">
        <img src='<?=base_url()."img/fei.jpg"?>'>
    </p>
</div>
<?php $this->load->view('footer/footer_vista');?>

