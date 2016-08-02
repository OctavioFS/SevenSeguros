<div class="container">
	<br>
	<h1>Enviar</h1>
	<form action="/sevenseguros/enviar" method="POST">
		<div class="form-group">
			<label for=""></label>
			<input name="envio" type="text" class="form-control" value="<?php echo $asunto; ?>">		
		</div>
		<div class="form-group">
			<label for=""></label>
			<input name="envio2" type="text" class="form-control" value="<?php echo $mensaje; ?>">		
		</div>
	</form>
</div>
