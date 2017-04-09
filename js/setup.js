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

function aceptar_cerrar(){
	$(document).ready(function(){
	  $("#hide").click(function(){
	    $("#cajaproceso").hide();
	  });
	  $("#siguiente").click(function(){
	    $("#cajaproceso").show();
	  });
	});
}
