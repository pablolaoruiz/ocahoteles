

 var inicio_pantalla = 0;
 
// Navigation Scripts to Show Header on Scroll-Up
jQuery(document).ready(function() {
    
    // site preloader -- also uncomment the div in the header and the css style for #preloader
    jQuery(window).load(function(){
        jQuery('#preloader').fadeOut('slow',function(){jQuery(this).remove();});
    });

    var height_listado = jQuery("#wrapper").outerHeight();
    var porcentaje_show = parseInt(height_listado/2);
    
    jQuery(window).scroll(function(){
        if(jQuery(window).scrollTop() > porcentaje_show){
            jQuery("#ancla-ir-arriba").fadeIn();
        }else{
            jQuery("#ancla-ir-arriba").fadeOut();
        }
    });
    
    // button to top
    jQuery("#ancla-ir-arriba a").click(function(){
        jQuery('html, body').animate({ scrollTop : 0 }, 'slow');
    });
    
    // button to booking
    jQuery("#booking").click(function(){
        jQuery('html, body').animate({ scrollTop: jQuery(".carousel-caption").offset().top }, 'slow', function(){jQuery("#arrival").focus()});
    });
    
    // button to pestañas
    jQuery(".pestana").click(function(){
        jQuery('html, body').animate({ scrollTop: jQuery(".navbar-collapse").offset().top }, 'slow');
    });
    
    var MQL = 1170;
    
    var form_reserva_hotel;
    var origOffsetY;
    
    if ( jQuery("#contenedor-reserva-top").length > 0 ) {
        form_reserva_hotel = jQuery('#contenedor-reserva-top');
        origOffsetY = form_reserva_hotel.offset().top;
    }
    var content_hotel;
    content_hotel = jQuery('#sidebar-right');

    
    var origOffsetSideBarLeftY =0;
    if(content_hotel.length>0 ){
        origOffsetSideBarLeftY  = content_hotel.offset().top -  220;
    }
    
    
    function scroll() {
        
    
        if (jQuery(window).scrollTop() >= origOffsetY) {
            
            jQuery(form_reserva_hotel).addClass('fixed-top');
            jQuery('#buscador-horizontal .contenedor-buscador').removeClass("pd-t-40",300);
            if (inicio_pantalla==0) {
                inicio_pantalla = jQuery(window).scrollTop();
            }
           
        } else {
            jQuery(form_reserva_hotel).removeClass('fixed-top');
            inicio_pantalla=0;
 
        }

        var scroll_usuario = jQuery(window).scrollTop();
        
     
        if (jQuery(form_reserva_hotel).hasClass('fixed-top')) {
          
            if ((scroll_usuario-inicio_pantalla)>140
                    || (scroll_usuario-inicio_pantalla)<-140) {
                jQuery("#bs-search-form").collapse("hide");
                 //cambiar el icono por flechas arriba/abajo
                jQuery("#btn-reserva-top").find( "i" ).removeClass("icon-angle-double-up");
                jQuery("#btn-reserva-top").find( "i" ).addClass("icon-angle-double-down");
               
            }
        }
        moveToPosicionSidebarleft();

    }
    
    document.onscroll = scroll;
    
    jQuery("#search-xs").click(function(){
         jQuery('#buscador-xs').modal('show'); 
         return false;
    });
    
    function moveToPosicionSidebarleft() {
        
        //solo posicionamos la barra si el contenido el height del contenido del hotel es mayor que la sidebar right
        if (jQuery(".col-contenedor-hotel").outerHeight()>jQuery("#sidebar-right").outerHeight()) {
            if (jQuery(window).scrollTop() >= origOffsetSideBarLeftY) {  
                jQuery("#sidebar-right").addClass('fixed-sidebar-left');

            } else {
                jQuery("#sidebar-right").removeClass('fixed-sidebar-left');
            }

            var el = jQuery("#sidebar-right");
            var hct = jQuery("#contenedor-hotel");



            if(el.length>0 ){

                var bht_offset = jQuery("#contenedor-reserva-top").css('position')=='fixed' ? 
                                        1*jQuery("#contenedor-reserva-top").outerHeight() : 2*jQuery("#contenedor-reserva-top").outerHeight();



                var windowpos = jQuery(window).scrollTop() + bht_offset;
                var elpos = el.offset().top - 15;



                //posicion de partida del contenedor de contendio de seccion de hotel
                var hct_original = hct.length>0 ? hct.offset().top - 15 : 0;

                var hct_height = parseInt((hct_original + hct.height()) - el.outerHeight())+15;



                if(windowpos >= hct_height){

                    //class absolute-sidebar-right
                    el.removeClass("fixed-sidebar-right");
                    el.removeClass("relative-sidebar-right");
                    el.addClass("absolute-sidebar-right");
                    el.css({'top':hct_height-hct_original,'width':el.parent().width(),'left':'auto','display':'block'});

                } else if(windowpos > elpos || windowpos >= hct_original){


                        //class fixed-sidebar-right
                        el.removeClass("absolute-sidebar-right");
                        el.removeClass("relative-sidebar-right");
                        el.addClass("fixed-sidebar-right");
                        el.css({'top':bht_offset + 15,'width':el.parent().width(),'left':'auto','display':'block'});

                }

                if(windowpos <= hct_original) { 
                    //class relative-sidebar-right
                    el.removeClass("absolute-sidebar-right");
                    el.removeClass("fixed-sidebar-right");
                    el.addClass("relative-sidebar-right");
                    el.css({'top':0,'width':el.parent().width(),'left':'auto','display':'block'});

                };

            }
        }

    }

});

function initMap (latitud, longitud) {
    var styles = [
            {
              stylers: [
                { hue: "#9d915b" },
                { saturation: -70 }
              ]
            }
          ];
            
    /*var stylers = [
                    {"hue": "#000000" },
                    {"saturation": 60 },
                    {"lightness": -20 },
                    {"gamma": 1.51 },
                    {"visibility": "off" }
                  ]

    var maps_stylesArray = [{
        "featureType": "poi",
        "elementType": "labels",
        "stylers": stylers
    }];*/
            
    var myLatlng = new google.maps.LatLng(43.1440948,-2.7264414);

    var mapOptions = {
      zoom: 12,
      center: myLatlng,

      scrollwheel: false,
      zoomControlOptions: {style:google.maps.ZoomControlStyle.SMALL}
      
    }


    var map;
    map = new google.maps.Map(document.getElementById("mapaGoogle"), mapOptions);

   // self.map = new google.maps.Map(document.getElementById(self.selector["id_mapa"]), mapOptions);
    var boundbox;
    boundbox = new google.maps.LatLngBounds();

    var directionsDisplay;
    directionsDisplay = new google.maps.DirectionsRenderer();

    var directionsService;
    directionsService = new google.maps.DirectionsService();

    var contenido='';


    var puntos = [

        {x:latitud,y:longitud,valor:'Oca Hoteles',contenido:contenido},

    ];

    jQuery.each(puntos, function( index, value ) {
        //marcar el punto en la mapa

        myLatlng = new google.maps.LatLng(value.x, value.y);
        puntos.push(myLatlng);
        boundbox.extend(myLatlng);
        marker = new google.maps.Marker({
            animation: google.maps.Animation.DROP,
            position: myLatlng,
            map: map,
            title: value.valor,
         //   icon:   root + "images/map-marker.png"
        });

       // self.markersArray.push(marker);

        infowindow = new google.maps.InfoWindow();

        google.maps.event.addListener(marker, 'click', (function(marker) {
            return function() {

                infowindow.setContent(value.contenido);
                infowindow.open(map, marker);
            }
        })(marker));


    });

    map.setCenter(boundbox.getCenter());
    //map.fitBounds(boundbox);
           
}