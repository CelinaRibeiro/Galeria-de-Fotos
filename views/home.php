<div class="container">
	<form method="POST" enctype="multipart/form-data">
		<h2>Galeria de Fotos</h2>
		<br />

		<div class="form-group row">
			<label for="titulo" class="col-sm-2 col-form-label">Título: </label>
			<div class="col-sm-10">
				<input type="text" name="titulo" id="titulo" class="form-control" />
			</div>
		</div>

		<div class="form-group row">
			<label for="arquivo" class="col-sm-2 col-form-label">Foto: </label>
			<div class="col-sm-10">
				<input type="file" name="arquivo" id="arquivo"
					class="form-control-file" />
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-2 col-form-label"></label>
			<div class="col-sm-10">
				<input type="submit" value="Enviar Arquivo"
					class="btn btn-secondary" /> <input type="reset" value="Limpar"
					class="btn btn-secondary" />
			</div>
		</div>
	</form>

	<hr />
		
		<?php foreach ($fotos as $foto): ?>
		<img class="img-fluid img-thumbnail rounded"
		src="assets/images/galeria/<?php echo $foto['url']; ?>"
		style="width: 500; height: 300;" /> <br />
		<?php echo $foto['titulo']; ?>
		<hr />
		<?php endforeach; ?>
		
	</div>



