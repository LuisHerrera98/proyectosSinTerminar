jQuery('document').ready(function($){
    var menuBton = $('.menu-icon'),
    menu = $ ('.navegacion ul');


    menuBton.click(function(){

        if(menu.hasClass('show')){
          
            menu.removeClass('show');
        }else {
            
            menu.addClass('show');
        }

    });
});

jQuery('document').ready(function($){
    var menuBton = $('.menu-icono'),
    menu = $ ('.navegacionP ul');


    menuBton.click(function(){

        if(menu.hasClass('show')){
          
            menu.removeClass('show');
        }else {
            
            menu.addClass('show');
        }

    });
});



