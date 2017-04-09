
function submitchat(){
  if(chat1.mensaje.value=="")
  {
    alert('Ingrese su mensaje');
    return;
  }

  var mensaje= chat1.mensaje.value;

alert(mensaje);
  var xmlhttp = ConstructorXMLHttpRequest();

  xmlhttp.onreadystatechange = function(){
    if(xmlhttp.readyState ==4 && xmlhttp.status==200){
      document.getElementById('chatlogs').innerHTML = xmlhttp.responseText;
    }
  }
  xmlhttp.open("get","chat.php?mensaje="+mensaje,false);
  xmlhttp.send();
}


//funcion para llamar al php requisito
function requisitos(rango1,rango2, formu){

  var cadena = "calificacion"+rango1+"="+ document.getElementById("idcal"+rango1).checked;;

       for (var i = rango1+1; i < rango2 ; i++)
        {
        var d = "idcal"+i;
        //  var idc = document.getElementById(d);
        var cali = "cal"+i;
        var cal = document.getElementById(d).checked;
        cadena = cadena + "&" + "calificacion"+i + "=" + cal;
  //      cadena = "calificacion1="+cal;
        }
        cadena = cadena + "&" + "formulario="+formu;
  //      alert (cadena);
//         //instanciamos el objetoAjax
        var peticion = null;
        peticion = ConstructorXMLHttpRequest();

        if(peticion){
          peticion.open('get',"requisitos.php?"+cadena,false);
          peticion.send(null);
      //    peticion.setRequestHeader("Content-length", cadena.length);
        //  peticion.setRequestHeader("Connection","close");



          document.getElementById("resp"+formu).innerHTML = peticion.responseText;
        }

}

//Ajax.js
function ConstructorXMLHttpRequest()
{
    if(window.XMLHttpRequest) /*Vemos si el objeto window posee el metodo XMLHttpRequest(Navegadores como Mozilla y Safari).*/
    {
        return new XMLHttpRequest(); //Si lo tiene, crearemos el objeto
    }

    else if(window.ActiveXObject) /*Sino tenia el metodo anterior,deberia ser el Internet Exp.*/
    {
        var versionesObj = new Array(
                                    'Msxml2.XMLHTTP.5.0',
                                    'Msxml2.XMLHTTP.4.0',
                                    'Msxml2.XMLHTTP.3.0',
                                    'Msxml2.XMLHTTP',
                                    'Microsoft.XMLHTTP');

        for (var i = 0; i < versionesObj.length; i++)
        {
            try
                {
                    return new ActiveXObject(versionesObj[i]);
                }
                catch (errorControlado)
                {

                }
        }
    }
    throw new Error("No se pudo crear el objeto XMLHttpRequest");
}
