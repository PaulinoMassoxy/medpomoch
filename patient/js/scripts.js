$(function() {
	$('nav.mobile').click(function(){
		//O que vai acontecer quando clicar na nav.mobile
		var listaMenu = $('nav.mobile ul');

		//Abrir Menu atraves do fadeIn
		/*if (listaMenu.is(':hidden') == true){
		    listaMenu.fadeIn();
		}
		else{
			listaMenu.fadeOut();
		}*/



        //Abrir ou fechar o Menu
        if (listaMenu.is(':hidden') == true){
        	//fa fa-times
		    //fa fa-bars
		    var icone = $('.botao-menu-mobile').find('i')
		    icone.removeClass('fa-bars');
		    icone.addClass('fa-times')
		listaMenu.slideToggle();
	}
	else{
		 var icone = $('.botao-menu-mobile').find('i')
		    icone.removeClass('fa-times');
		    icone.addClass('fa-bars')
		listaMenu.slideToggle();
	}

		

	});

	
})