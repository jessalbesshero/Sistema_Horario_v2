<?php
    $this->load->view('head/head_vista');
?>
<div>

<form id="login" method="POST" class="form-inline" role="form" >
	<br></br>
	<br></br>
	<br></br>
	<br></br>
	<h1 class="form-signin-heading">Iniciar Sesion</h1>
	<div class"form-group">
		<label for="Usuario"> <h3>Usuario</h3> </label><br/>
		<input class="form-control" type="text" name="user" /><br/>
	</div>
	<div class"form-group">
		<label for="contraseña"> <h3>Contraseña</h3> </label><br/>
		<input class="form-control" type="password" name="pass" /><br/>
	</div>
	<br/>
	<input class="btn btn-success btn-lg" type="submit" value="Entrar" name="Entrar">
</form>
</div>
	<?php 
		if (isset($_POST['Entrar'])){
			$User= $this->input->post('user');
			$Password= $this->input->post('pass');
			$this->principalmodel->login($User,$Password);
		}
	?>
	<?php $this->load->view('footer/footer_vista');?>