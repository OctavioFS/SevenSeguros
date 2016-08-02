$(document).ready(function(){
	console.log('el DOM se cargo correctamente');


	$(".btnCotizador").on("click", function(){
    	cotizador();
	});

});

function cotizador(){

	var edad 		= $('#txtedad').val();
	var retiro 		= $('#txtretiro').val();
	var ahorro 		= $('#txtAhorroActual').val();
	var aporte 		= $('#txtAporte').val();


	var fecha 		= new Date();
	const plazo 	= retiro - edad;
	const pMes 		= plazo*12;
	const añoActual = fecha.getFullYear();
	const pASI		= 0.10;
	const cRC 		= 0.01;
	const inf		= 0.04;
	const tIN 		= 0.10;
	const rEE 		= 0.85;
	const tINR 		= 0.06;
	// CALCULO DE TASA DE INTERES REAL Y MENSUAL
	const tIR 		= (1+tIN)/(1+inf)-1;
	const tIM 		= (1+tIR)^(1/12)-1;
	// INGRESO MENSUAL A FUTURO
	var iMF 		= aporte*(1+(inf+cRC))^plazo;
	// CUANTO $ NECESITAS A FUTURO
	var nFut 		= (iMF*12*rEE)/tINR; 
	// CUANTO $ NECESITAS A FUTURO HOY
	var nH 			= nFut/(1+inf)^plazo;
	// CUANTO $ TENDRAS EN EL FUTURO A PESOS HOY
	var tH 			= ((aporte*pASI)*(((1+tIM)^pMes)-1)/ tIM) + (ahorro * (1+tIR)^plazo);
	// CUANTO TENDRAS EN EL FUTURO A PESOS EN TU FECHA DE RETIRO
	var tFut		= tH*(1+inf)^plazo;

	alert('--- ESTO ES SOLO UNA PRUEBA ----\n INGRESO MENSUAL FUTURO: $'+iMF+'  \n CUANTO NESESITAS EN UN FUTURO: $'+nFut+'  \n CUANTO NESESITAS EN UN FUTURO HOY: $'+nFut+'  \n CUANTO TRENDRAS EN UN FUTURO HOY: $'+tH+'  \n CUANTO TENDRAS EN UN FUTURO: $'+tFut);
	
	var data = {
	    labels: ["cuanto necesitas","cuanto tendras"],
	    datasets: [
	        {
	            label: "Cotización",
	            backgroundColor: [
	                'rgba(255, 255, 255, 1)',
	                'rgba(0, 0, 85, 1)'
	            ],
	            borderColor: [
	                'rgba(192,192,192,0.3)',
	                'rgba(192,192,192,0.3)'
	            ],
	            borderWidth: 1,
	            data: [tH,tFut],
	        	}
		]
	};

	grafica(data);
}


function grafica(data){

	$("#imgGrafica").css("display", "none");
	$("#myChart").css("display", "block");

	Chart.defaults.global.defaultFontColor = '#fff';
	Chart.defaults.global.elements.line.borderColor="rgba(255, 255, 255, 1)";
	Chart.defaults.global.elements.line.backgroundColor	="rgba(255, 255, 255, 1)";

	var ctx = document.getElementById("myChart").getContext("2d");
	var myBarChart = new Chart(ctx, {
		type: 'bar',
		data: data,
		options: {
	        legend: {
	            display: true,
	            labels: {
	                fontColor: 'rgba(255, 255, 255, 1)'
	            }
	        }
        }
	});


}