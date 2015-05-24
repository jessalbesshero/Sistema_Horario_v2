<!--    @Jesus Rodriguez   -->
<?php
    //$this->load->view('head/head_vista');
?>
   
    <nav class="navbar-collapse">
        <div class="container-fluid">
            <div class="navbar-header">
                <h1>Administración de Proyectos</h1>
            </div>
        </div>
    </nav>
    <!--    @Jesus Rodriguez   
    <div role="navigation">
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <ul>
                    <a onclick="/../home_view">
                        <i class="glyphicon glyphicon-home"></i>
                        <span>INICIO</span>
                    </a>
                </ul>
                <ul>
                    <a onclick="ExperienciaEducativa()">
                        <i class="glyphicon glyphicon-book"></i>
                        <span>E.EDUCATIVA</span>
                    </a>
                </ul>
                <ul>
                    <a onclick="Maestros()">
                        <i class="glyphicon glyphicon-book"></i>
                        <span>MAESTROS</span>
                    </a>
                </ul>
                <ul>
                    <a onclick="Carrera()">
                        <i class="glyphicon glyphicon-book"></i>
                        <span>CARRERAS</span>
                    </a>
                </ul>
                <ul>
                    <a onclick="../horarios()">
                        <i class="glyphicon glyphicon-book"></i>
                        <span>HORARIO</span>
                    </a>
                </ul>
                <ul>
                    <a onclick="../TSalon()">
                        <i class="glyphicon glyphicon-book"></i>
                        <span>SALON</span>
                    </a>
                </ul>
            </ul>
        </div>
    </div>
    
    
    <div id='cssmenu'>
        <ul>
            <li class='active'>
                <a href='../home_view.php'>
                    <i class="glyphicon-home"></i>
                    <span>home</span>
                </a>
            </li>
            <li>
                <a href='../TMaestros.php'>
                    <i class="glyphicon-book"></i>
                    <span>maestros</span>
                </a>
            </li>
            <li>
                <a href='../TMaterias.php'>
                    <i class="glyphicon-book"></i>materias
                </a>
            </li>
            <li>
                <a href='../TSalon.php'>
                    <i class="glyphicon-book"></i>salón
                </a>
            </li>
            <li>
                <a href='../Tcurso.php'>
                    <i class="glyphicon-book"></i>curso
                </a>
            </li>
            <li>
                <a href='../DDHorario.php'>
                    <i class="glyphicon-book"></i>horario
                </a>
            </li>
        </ul>
    </div>
    Jesús Rodríguez --->
<div id="nav">
    <nav class="navbar navbar-default navbar-static affix-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <!--<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>-->
                <!--<a class="navbar-brand" href='<?/=base_url('/welcome','acerca_de');?>'>Sistema Horario.v2</a>-->
                <a class="navbar-brand" href="<?php$this->load->view('acerca_de');?>">Sistema Horario.v2</a>
            </div>
        <!--  -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?php$this->load->view('principal_vista');?>"><i class="glyphicon glyphicon-home"></i>Principal</a></li>
                    <li><a href='<?=base_url()."views/TMaestros.php";?>'><i class="glyphicon glyphicon-book"></i>Maestros</a></li>
                    <li><a href="#"><i class="glyphicon glyphicon-book"></i>Materias</a></li>
                    <li><a href="#"><i class="glyphicon glyphicon-book"></i>Salon</a></li>
                    <li><a href="#"><i class="glyphicon glyphicon-book"></i>Curso</a></li>
                    <li><a href="#"><i class="glyphicon glyphicon-book"></i>Horario</a></li>
                </ul>
            </div><!-- cierre del navbar-collapse -->
        </div>
    </nav>
</div>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
