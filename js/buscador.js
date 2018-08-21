var buscador_reservas = {
    
    codigo_valido: false,

    _config:{
        
        "con_buscador":false,
        "url":"",
        "url_recursos":"",
        "fecha_inicio":"",
        "fecha_fin":""
        
    },
    
    selector:{
       
        "modal":"#myModal",
        "form":"#search_form",
        "promo":"#promo",
        "colectivo":"#comprobar_colectivo",
        "dni_colectivo":"#dni_colectivo",
        "buscador_hotel": "#hotel",
        "id_hotel": "#id"
        
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
        
        //reglas de validación
        //diferenciar entre formulario con búscador de hoteles y sin
        var reglas;
        
        reglas = { 
            arrival: "required",
            departure: "required"
        };
                
        var mensajes = {
            hotel: "Selecciona un hotel"
        };
                
       
        if (self._config["con_buscador"]) {
            reglas = { 
                arrival: "required",
                departure: "required",
                hotel: {hotel_valido:true}
            };
            
            self.inicializar_autocomplete();
            
            jQuery.validator.addMethod("hotel_valido", function (value, element, options) {
      
                if (jQuery(self.selector["id_hotel"]).val() !=="") {
                    return true;
                } else {
                    return false;
                }

            });
        } 

        
        //validacion del formulario
        jQuery(self.selector["form"]).validate({

            rules: reglas,
            
            messages: mensajes,

            submitHandler: function(form) {
                // do other things for a valid form
                self.enviar_formulario(form);
            }

        });
        
        
        // datepicker: disable old dates "#arrival, #departure"
        var minFecha = self._config["fecha_inicio"]=='' || new Date(self._config["fecha_inicio"])<new Date() ? new Date() : new Date(self._config["fecha_inicio"]);
        var maxFecha = self._config["fecha_fin"]!='' ? new Date(self._config["fecha_fin"]) : "+1Y";
        
        var chosen=[];
        var dates = jQuery("#arrival, #departure").datepicker({
            minDate: minFecha,
            maxDate: maxFecha,
            dateFormat: 'dd/mm/yy',
            numberOfMonths: 1,
            beforeShowDay: function(date){
                var mmddyy=jQuery.datepicker.formatDate(  'dd/mm/yy', date ),
                    sameAs=jQuery.inArray(mmddyy,chosen)
                //console.log(mmddyy)
                if (sameAs>=0)
                    return  [false, "nope","fecha"+(1+sameAs)]
                else
                    return [true]
            },
            onSelect: function(selectedDate) {
                chosen=dates.map(function(){
                    return this.value
                }).get();
                var option = this.id == "arrival" ? "minDate" : "maxDate",
                    instance = jQuery(this).data("datepicker"),
                    date = jQuery.datepicker.parseDate(instance.settings.dateFormat || jQuery.datepicker._defaults.dateFormat, selectedDate, instance.settings);
                dates.not(this).datepicker("option", option, date);
            },
            onClose: function (selectedDate){
                if (this.id == "arrival" && selectedDate) {jQuery("#departure").focus()}
            }
        });

        // datepicker: translate to spanish
        jQuery.datepicker.regional['es'] = {
            closeText: 'Cerrar',
            prevText: '< Ant',
            nextText: 'Sig >',
            currentText: 'Hoy',
            monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
            monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
            dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
            dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
            dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
            weekHeader: 'Sm',
            dateFormat: 'dd/mm/yy',
            firstDay: 1,
            isRTL: false,
            showMonthAfterYear: false,
            yearSuffix: ''
        };
        jQuery.datepicker.setDefaults(jQuery.datepicker.regional['es']);
        

        jQuery( "#arrival" ).datepicker({
           dateFormat: 'dd/mm/yy',
           onSelect: function(dateText) {
           }

        });

        jQuery( "#departure" ).datepicker({
            dateFormat: 'dd/mm/yy'
        });
        
        
        jQuery(self.selector["colectivo"]).click(function(){
         
            jQuery.post(self._config["url"],
                {
                    "dni":jQuery(self.selector["dni_colectivo"]).val(),
                    "operacion":"comprobar_colectivo"
                },
                function(data) {
                    if (data === "NO") {
                        alert("El dni no se encuentra entre nuestros colectivos");
                    } else {
                        alert(data);
                     
                        jQuery(self.selector["form"]).submit();
                    }
                });
        });
        
        jQuery(self.selector["modal"]).on('hidden.bs.modal', function () {
           self.codigo_valido = false;
        });

    },
    
    enviar_formulario(form) {
        
        var self = this;

        if(jQuery(self.selector["promo"]).val()!=="" && !self.codigo_valido) {
            
            //diferenciar entre buscador de hotel
            if(self._config["con_buscador"]) {
                
                jQuery(self.selector["id_hotel"]).val(jQuery(self.selector["buscador_hotel"]).data ("seletectedId"));
        
            } 
  
            jQuery.post(self._config["url"],
            
            jQuery(form).serialize(),
               
            function(data) {

                switch(data) {

                    case "1":

                        form.submit();

                    break;

                    case "colectivo":

                        self.codigo_valido = true;
                        jQuery(self.selector["modal"]).modal('show');
                        return;

                    break;

                    default:

                        alert(data);
                        return;

                    break;

                }
                
            });

            return;
       }
       form.submit();
        
    },
    
    inicializar_autocomplete() {
        
        var self = this;
        
        var srcHoteles = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.obj.whitespace('nombre'),
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            prefetch: {
                ttl: 1,
                url:  self._config["url_recursos"],
            }  
        });
        
        srcHoteles.initialize();

        jQuery(self.selector["buscador_hotel"]).typeahead({
            hint: true,
            highlight: true,
            minLength: 2
        },
        {
            name: "result",
            displayKey: "nombre",
            source: srcHoteles.ttAdapter()
        }).bind("typeahead:selected", function(obj, datum, name) {
             jQuery(self.selector["id_hotel"]).val(datum.id);
             jQuery(this).data("seletectedId", datum.id);

        });
        
    }
  
};