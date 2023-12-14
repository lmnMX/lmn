
/* ARRAY DE IMAGENES */
ads = new Array(3);
ads[0] = "imagenes/banner/bn_ng2.png";
ads[1] = "imagenes/banner/bn_ng.png";
ads[2] = "imagenes/banner/bn_ng3.png";

//variable para llevar la cuenta de la imagen siguiente
var longuitudArray = ads.length;
var contador = 0
// Cojemos un numero aleatorio
contador = Math.floor((Math.random() * longuitudArray))

var tiempo = 1// En segundos
var timer = tiempo * 3000;

$(document).ready(function(){
		$('#fade').cycle();
			timeout: 5000
		 });


function banner() {
	contador++;
	contador = contador % longuitudArray
	document.banner.src = ads[contador];
	setTimeout("banner()", timer);
}

function ponerURL() {
	contador2 = contador;
	url = window.open(arrayURLs[contador2]);
	return false;
}


