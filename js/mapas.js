var mapas = {

    _config:{
        
        "lat":"",
        "lng":"",
        "target":"",
        "zoom":15

    },
    
    selector:{
       
        "target":"#myModal"
        
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
        
        var lat = self._config["lat"];
        var lng = self._config["lng"];
        var target = self.selector["target"];
        
        //self._config["target"]!= "undefined" || self._config["target"]!= "" ? target = self._config["target"] : target = self.selector["target"];
        
        jQuery( "#mapas" ).click(function() {
            //pintar mapas
            
            var center = new google.maps.LatLng(self._config["lat"],self._config["lng"]);
            
            var mapOptions = {
                zoom: self._config["zoom"],
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                center: center
            };

            map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

            var marker = new google.maps.Marker({
                map: map,
                position: center
            });
            
            jQuery('#myMapModal').on('show.bs.modal', function() {
               //Must wait until the render of the modal appear, thats why we use the resizeMap and NOT resizingMap!!
               resizeMap();
            })

            function resizeMap() {
               if(typeof map =="undefined") return;
               setTimeout( function(){resizingMap();} , 400);
            }

            function resizingMap() {
               if(typeof map =="undefined") return;
               var center = map.getCenter();
               google.maps.event.trigger(map, "resize");
               map.setCenter(center); 
            }
        });
           
    }
   
};