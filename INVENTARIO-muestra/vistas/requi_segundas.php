<style>
  .table{
    font-size: 17px;
	display: flex;
	justify-content: center;
	text-align: center;
  }
</style>
<div class="container is-fluid mb-6">
	<h1 class="title">Requisiciones Segundas</h1>
</div>

<div class="container pb-6 pt-6">
	<?php
		require_once "./php/main.php";
	?>

	<div class="form-rest mb-6 mt-6"></div>

	<form action="./php/producto_guardar.php" method="POST" class="FormularioAjax" autocomplete="off" enctype="multipart/form-data" >
		<div class="columns">
			<div class="column">
				<div class="control">
					<label>No. Requisicion:</label>
					<input class="input" type="text" name="producto_codigo" pattern="[a-zA-Z0-9- ]{1,70}" maxlength="70" required >
				</div>
			</div>
			<div class="column">
				<div class="control">
					<label>Solicitado por:</label>
					<input class="input" type="text" name="producto_nombre" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,$#\-\/ ]{1,70}" maxlength="70" required >
				</div>
			</div>
		</div>
		<div class="columns">
			<div class="column">
				<div class="control">
					<label>Cant. Boxs:</label>
					<input class="input" type="text" name="producto_precio" pattern="[0-9.]{1,25}" maxlength="25" required >
				</div>
			</div>
			<div class="column">
				<div class="control">
					<label>Total Piezas:</label>
					<input class="input" type="text" name="producto_stock" pattern="[0-9]{1,25}" maxlength="25" required >
				</div>
			</div>
			<div class="column">
				<label>Planta</label><br>
				<div class="select is-rounded">
					<select name="producto_categoria" >
						<option value="" selected="" >Seleccione una opción</option>
						<?php
							$categorias=conexion();
							$categorias=$categorias->query("SELECT * FROM categoria");
							if($categorias->rowCount()>0){
								$categorias=$categorias->fetchAll();
								foreach($categorias as $row){
									echo '<option value="'.$row['categoria_id'].'" >'.$row['categoria_nombre'].'</option>';
								}
							}
							$categorias=null;
						?>
					</select>
				</div>
			</div>
		</div>
		<div class="container pb-6 pt-6">
			<div class="form-rest mb-6 mt-6"></div>
			<table class="table">
				<thead>
					<tr>
						<th scope="col">O/C</th>
						<th scope="col">CLIENTE</th>
						<th scope="col">ESTILO</th>
						<th scope="col">COLOR</th>
						<th scope="col">FECHA ENTREGA</th>
						<th scope="col">CANT. DIAS</th>
						<th scope="col">FECHA DEVOLUCION</th>
						<th scope="col">2XS</th>
						<th scope="col">XS</th>
						<th scope="col">S</th>
						<th scope="col">M</th>
						<th scope="col">L</th>
						<th scope="col">XL</th>
						<th scope="col">2XL</th>
						<th scope="col">3XL</th>
						<th scope="col">4XL</th>
						<th scope="col">5XL</th>
						<th scope="col">6XL</th>
					</tr>
				</thead>
			</table>
		</div>
		<p class="has-text-centered">
			<button type="submit" class="button is-info is-rounded">Guardar</button>
		</p>
	</form>
</div>