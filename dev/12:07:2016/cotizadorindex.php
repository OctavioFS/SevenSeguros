<div class="row" id="cotizadorHome">
	<div class="col-md-6" id="frmCotizador">
		<h3> ¿Qué tan poderoso quieres ser?</h3>
		<form class="formCotizador">

		  <div class="form-group">
		    <label for="txtedad">Edad actual:</label>
		    <input type="text" class="form-control" id="txtedad">
		  </div>
		  <div class="form-group">
		    <label for="txtretiro">Edad de retiro:</label>
		    <input type="text" class="form-control" id="txtretiro">
		  </div>
		  <div class="form-group">
		    <label for="txtAhorroActual">Ahorro actual:</label>
		    <input type="text" class="form-control" id="txtAhorroActual">
		  </div>
		  <div class="form-group">
		    <label for="txtAporte">Aporte mensual:</label>
		    <input type="text" class="form-control" id="txtAporte">
		  </div>

		</form>
		  <button class="btnCotizador">TU NIVEL DE PODER ES</button>

	</div>
	<div class="col-md-6" id="colchonVsSeven">
		<div>
			<h3>COTIZA TU</h3>
			<p><span>SÚPER PODER</span></p>
			<div id="grafica">
				<img src="assets/images/grafica.png" id="imgGrafica"	alt="colchonVsSeven" style="display:block">
				<canvas id="myChart" width="300" height="200" style="display:none"> </canvas>
			</div>
		</div>
	</div>
</div>