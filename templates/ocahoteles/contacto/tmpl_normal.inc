<div class="row row-eq-height">
    <div class="col-xs-12 col-sm-7 col-md-7 bck-color-blanco ">
        <div class="content-re-contacto bck-color-blanco ">
            <h3 class="txt-320 mg-t-0 pd-t-0"><?php echo _("Contact us")?></h3>
            <p class="txt-130 mg-t-20 mg-b-20">¿Necesitas ayuda? Contacta con nosotros</p>
            <div id="content-mensaje" style="display: none"></div>
            <div id="content-contacto">
                <form role="form" id="contacto-form" method="post">
                    <br style="clear:both">
                    <div class="form-group">
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="<?php echo _("Name")?>" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="email" name="email" placeholder="<?php echo _("Email")?>" required />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="telefono" name="telefono" placeholder="<?php echo _("Phone")?>"/>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="asunto" name="asunto" placeholder="<?php echo _("Suject")?>" required />
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" type="textarea" id="mensaje" name="mensaje" placeholder="<?php echo _("Comments")?>" maxlength="140" rows="7"></textarea>                 
                    </div>
                     <div class="form-group">
                    <button type="submit" class="btn btn-primary txt-140 text-uppercase"><?php echo _("Send")?></button>
                     </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-5 col-md-5 pd-b-100 pd-l-70  pd-xs-l-70 pd-md-l-30 contenedor-contacto-datos">
        <h4 class="mg-t-0 pd-t-0"><i class="icon-phone-square color-primario txt-240"></i></h4>
        <p class="pd-t-5 ln-h-2">
           
        </p>
        <hr class="mg-t-30">
        
        <hr class="mg-t-30">
        <h4 class="mg-t-0 pd-t-0"><i class="icon-map-marker color-primario txt-240"></i></h4>
        <p class="pd-t-5 ln-h-2">
           
        </p>
 
    </div>
</div>

<script type="text/javascript">
    
    jQuery(document).ready(function () {
        
        jQuery("#contacto-form").validate({
            rules: {

                nombre: "required",
                email: "required",
                asunto:"required",
                mensaje:"required"
                
            },
            messages: {

            },
            
            submitHandler: function(form) {
                
                jQuery("#content-contacto").hide();
                jQuery("#loading").show();

               var campos = jQuery(form).serialize();

               var url = "<?php echo $ROOT?>services/ajax.php?" + campos;

               var parametros = {operacion:"contacto"};

                jQuery.ajax({
                        url: url,
                        type: "post",
                        dataType: 'html',
                        data:parametros,
                        success: function(data) {
                            
                            jQuery("#loading").hide();
                            var obj = JSON.parse(data);
                            jQuery("#content-mensaje").html(obj.mensaje);
                            jQuery("#content-mensaje").show();
                        },
                        error: function(jqXHR,textStatus,errorThrown ) {

                        }
                    }).done(function( data ) {

                });
                   
                
               
                
            }
           
        });
       
        
    });
</script>
