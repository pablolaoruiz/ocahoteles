<section class="bck-color-blanco color-primario pd-t-40 pd-b-40 pd-md-t-0" >
   
    <div class="container-fluid pestana smart-menu">
        <div class="row">
            
            <div class="col-xs-12 pd-l-0 pd-r-0 bck-color-primario visible-xs visible-sm" id="btn-menu-option">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-pestanas" style="width: 100%;margin:0 0" >
                    <span class="text-uppercase pd-l-32" style="width:80%;display:inline-block;vertical-align: top" id="etiqueta_menu"><?php echo _("Destinos") ?></span>
                    <div style="display:inline-block;" class="mg-t-15">
                        <span class="sr-only" style="background-color: #fff">Toggle navigation</span>
                        <span class="icon-bar" style="background-color: #fff"></span>
                        <span class="icon-bar" style="background-color: #fff"></span>
                        <span class="icon-bar" style="background-color: #fff"></span>
                    </div>
                   
                </button>
            </div>
            
            <div class="collapse navbar-collapse" id="bs-pestanas">
                
                <div class="col-xs-12 col-sm-12 col-md-2 col-md-offset-1 text-center menu-colapse-hide pd-md-t-10">
                    <a href="#destinos" class="pestana" data-operacion="destinos" data-label="<?php echo _("Destinos") ?>" id="destinos"><?php echo _("Destinos") ?>
                        <div class="linea active"></div>
                    </a>
                </div>
                
                  <div class="col-xs-12 col-sm-12 col-md-2 text-center pd-md-t-10">
                    <a href="#ofertas" class="pestana" data-operacion="ofertas" data-label="<?php echo _("Ofertas") ?>" id="ofertas"><?php echo _("Ofertas") ?>
                        <div class="linea"></div>
                    </a>
                </div>
                 <!-- incluyo bonos regalo -->
                   <div class="col-xs-12 col-sm-12 col-md-2 text-center pd-md-t-10">
                    <a href="#bonos" class="pestana" data-operacion="bonos" data-label="<?php echo _("Bonos Regalo") ?>" id="bonos"><?php echo _("Bonos Regalo") ?>
                        <div class="linea"></div>
                    </a>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-2 text-center pd-md-t-10">
                    <a href="#experiencias" class="pestana" data-operacion="experiencias" data-label="<?php echo _("Experiencias") ?>" id="experiencias"><?php echo _("Experiencias") ?>
                        <div class="linea"></div>
                    </a>
                </div>
                
               
                
                <!-- fin de añadido -->
                
                <div class="col-xs-12 col-sm-12 col-md-2 text-center pd-md-t-10">
                    <a href="#hoteles" class="pestana" data-operacion="hoteles" data-label="<?php echo _("Hoteles") ?>" id="hoteles"><?php echo _("Hoteles") ?>
                        <div class="linea"></div>
                    </a>
                </div>
                
              
                
            </div>
        </div>
        
    </div>
</section>
<form method="post" action="" id="langForm">
<input type="hidden" value="<?=$lang?>" name="hidLang" id="hidLang">
</form>

<script type="text/javascript">
    
    jQuery(document).ready(function () {
        
        jQuery(".pestana a").click(function(e){             
                        
            var operacion = jQuery(this).attr("data-operacion");
            var url = "<?php echo $ROOT?>services/ajax.php";
        
             var parametros = {operacion:operacion,language:"<?php echo $lang?>"};
           
            jQuery(".linea").removeClass( "active" );
            jQuery(this).children( ".linea").addClass( "active" );
            
            //colapse menu
            jQuery("#bs-pestanas").collapse('hide');
            jQuery("#bs-pestanas div").removeClass("menu-colapse-hide");
            jQuery(this).parent().addClass("menu-colapse-hide");
            
            var label = jQuery(this).attr("data-label");
            jQuery("#etiqueta_menu").html(label);

            jQuery("#contenedor-boxes").fadeOut(250,function(){
                loading.show(); 
                jQuery.ajax({
                   url: url,
                   type: "post",
                   dataType: 'html',
                   data:parametros,
                   success: function(data) {
                       jQuery("#loading").fadeOut(350,function(){
                           jQuery("#contenedor-boxes").html(data).fadeIn();
                       });                    
                                  
                        
                   },
                   
                   
                   error: function(jqXHR,textStatus,errorThrown ) {
                   }
                }).done(function( data ) {   
                                      
                                    });
            });
            //e.preventDefault();
            //return false;
             
        });
 
    });
     $(".pestana a").click(function() {
            $("hidLang").submit();
            return false;
  });
  
    $(document).ready(function(){
   var id = window.location.hash;
   $(id).trigger('click');
});
    
   
</script>

