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
