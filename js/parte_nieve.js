var parte_nieve = {

    _config:{
        
        "url":"",
        "target":"",
        "fondo":"",
        "fuente1":"",
        "fuente2":""
    },
    
    selector:{
       
        "modal":"#myModal"
        
    },
    
    config: function(args){
        if(typeof args === "object"){
            for(var prop in args){
                if(typeof this._config[prop]!== "undefined"){
                    this._config[prop] = args[prop];
                }
            }
        }
    },
    
    init:function(){
      
        var self = this;
        
        var url = self._config["url"];
        var target = self._config["target"];
        var fondo = self._config["fondo"];
        var fuente1 = self._config["fuente1"];
        var fuente2 = self._config["fuente2"];
        //.container-fluid:eq(2)
        jQuery(target).css('background-color', fondo);
        
        jQuery(target).css('padding', 0);
        
        var parametros = {};

        jQuery.ajax({
           url: url,
           type: "post",
           dataType: 'html',
           data:parametros,
           success: function(data) {
               jQuery(target).html(data).fadeIn();
           },
           error: function(jqXHR,textStatus,errorThrown ) {

           }
        }).done(function( data ) {
            jQuery(target+" i").css('color', fuente1);
            jQuery(target+" span").css('color', fuente2);
            jQuery(target+" .instalaciones").css('background', fuente1).css('color', fondo);
            
        });
           
    }
  
};