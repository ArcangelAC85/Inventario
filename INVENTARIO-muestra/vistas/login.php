<style>
	.main-container{
		background-image: url('http://localhost/www/INVENTARIO-muestra/img/fondo.png');
		background-size: 100% 100%;
		background-repeat: no-repeat;
		
		overflow: hidden;
	}

	.box.login{
		display: flex;
		flex-direction: column;
		justify-content: center;
		background-color: #0A1B2A;
		border-radius: 10px;
		font-family: Arial, Helvetica, sans-serif;
	}
	.label{
		color: aquamarine;
	}
	.title{
		color: aquamarine;
	}
	.button.is-rounded {
		color: black;
		font-size: 20px;
		background-color: aquamarine;
		box-shadow: white 0 0 0 3px;
		width: 160px;
		height: 32px;
		padding: 0;
		border-radius: 10px;
	}
</style>
<div class="main-container">

	<form class="box login" action="" method="POST" autocomplete="off">
		<h5 class="title is-5 has-text-centered is-uppercase">Sistema de inventario</h5>

		<div class="field">
			<label class="label">Usuario</label>
			<div class="control">
			    <input class="input" type="text" name="login_usuario" pattern="[a-zA-Z0-9]{4,20}" maxlength="20" required >
			</div>
		</div>

		<div class="field">
		  	<label class="label">Clave</label>
		  	<div class="control">
		    	<input class="input" type="password" name="login_clave" pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100" required >
		  	</div>
		</div>

		<p class="has-text-centered mb-4 mt-3">
			<button type="submit" class="button is-info is-rounded">Login</button>
		</p>

		<?php
			if(isset($_POST['login_usuario']) && isset($_POST['login_clave'])){
				require_once "./php/main.php";
				require_once "./php/iniciar_sesion.php";
			}
		?>
	</form>

</div>