$(document).ready(main);

var contador = 1;




﻿function setSidebarHeight(){
	setTimeout(function(){
var height = $(document).height();
    $('.grid_12').each(function () {
        height -= $(this).outerHeight();
    });
    height -= $('#site_info').outerHeight();
	height-=1;
	//salert(height);
    $('.sidemenu').css('height', height);
						},100);
}



//setup left menu

function setupLeftMenu() {
    $("#section-menu")
        .accordion({
            "header": "a.menuitem"
        })
        .bind("accordionchangestart", function (e, data) {
            data.newHeader.next().andSelf().addClass("current");
            data.oldHeader.next().andSelf().removeClass("current");
        })
        .find("a.menuitem:first").addClass("current")
        .next().addClass("current");

		$('#section-menu .submenu').css('height','auto');
}

function desplegar(_elemento,_valor){

	document.getElementById(_elemento).style.visibility= _valor;
}
function desplegar2(_elemento,_valor){

	document.getElementById(_elemento).style.display= 'block';
	document.getElementById(_valor).style.display= 'none';
}

function validarevaluacion(){
  var cadena = "boton=" + "resultados" ;

  peticion = ConstructorXMLHttpRequest();

  if (peticion) {
    peticion.open('get', "resphp.php?" + cadena, false);
    peticion.send(null);

		var u = peticion.responseText;
  }
	if (u == 5)
	{
		window.location.href="resultados.php";
	}
	else {
		alert('Para ver los resultados debe evaluar todos los dominios');
	}

}
function ConstructorXMLHttpRequest() {
  if (window.XMLHttpRequest) /*Vemos si el objeto window posee el metodo XMLHttpRequest(Navegadores como Mozilla y Safari).*/ {
    return new XMLHttpRequest(); //Si lo tiene, crearemos el objeto
  } else if (window.ActiveXObject) /*Sino tenia el metodo anterior,deberia ser el Internet Exp.*/ {
    var versionesObj = new Array(
      'Msxml2.XMLHTTP.5.0',
      'Msxml2.XMLHTTP.4.0',
      'Msxml2.XMLHTTP.3.0',
      'Msxml2.XMLHTTP',
      'Microsoft.XMLHTTP');

    for (var i = 0; i < versionesObj.length; i++) {
      try {
        return new ActiveXObject(versionesObj[i]);
      } catch (errorControlado) {

      }
    }
  }
  throw new Error("No se pudo crear el objeto XMLHttpRequest");
}
