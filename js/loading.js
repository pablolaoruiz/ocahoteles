var loading = {

    _config:{
        "mensaje":"Mensaje cargando",
        "estilo":""
    },
    selector:{
        "id":"#loading"
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
        /*$(self.selector["filtro"]).click(function(){
            //comprobar si esta seleccionado para marcarlo o desmarcarlo
            self.mark_unmark(this);
            self.filtre();
            return false;
        });
        
        $(self.selector["filtro_menu"]).click(function(){
            //seleccionar el elemento pinchado y ponerlo en el filtro marcado
            self.mark_unmark_menu(this);
            self.filtre();
            return false;
        });*/
    },

    show:function(){
        
        var self = this;
   
        $(self.selector["id"]).fadeIn(1000) ;
   
    },
    
    hide:function(){
        
        var self = this;
   
        $(self.selector["id"]).fadeOut(100) ;
        
        
    },
    
};