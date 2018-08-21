<div class="container " style="position: relative;">
        <div class="row ">
            <div class="bck-color-blanco pd-t-80 text-center">
                <div class="bck-color-blanco ">
                    <div class="col-xs-12 col-xs-push-0 col-sm-10 col-sm-push-1 col-md-8 col-md-push-2 col-lg-6 col-lg-offset-3 col-lg-push-0 text-center pd-b-40">
                        <img src="<?php global $ROOT;echo $ROOT?>images/colectivos/<?php echo $colectivo['colectivo']?>.png" class="img-responsive" style="display: block; margin: 0 auto;"></div>
                    <div class="col-xs-12">
                    <h3 class="txt-320 mg-t-0 pd-t-0">Bienvenid@ <?php echo $colectivo['nombre']?>.</h3>
                    <p class="txt-130 mg-t-40 mg-b-20 pd-l-10 pd-r-10 text-justify">Mediante convenio firmado estos días,
                        la cadena Oca Hotels ofrece a tod@s los <?php echo $colectivo['nombre']?> <strong><?php echo $colectivo['dto']?>%</strong> de descuento en todas sus reservas de alojamiento on line.
                        Date de alta es rápido y fácil...te enviamos tu código promocional de acceso.</p>
                    <div id="content-mensaje" style="display: none"></div>
                    <div id="content-contacto">
                        <form role="form" id="contacto-form" method="post">
                            <input type="hidden" value="<?php echo $colectivo['colectivo']?>" name="colectivo">
                              <input type="hidden" value="<?php echo $colectivo['codigo']?>" name="codigo">
                            <input type="hidden" value="<?php echo $colectivo['nombre']?>" name="colectivo_nombre">
                            <input type="hidden" value="alta-persona" name="operacion">

                            <br style="clear:both">

                            <div class="form-group">
                                <input type="text" class="form-control" id="email" name="email" placeholder="<?php echo _("Email")?>" required />
                            </div>

                             <div class="form-group">
                                <input type="text" class="form-control" id="reemail" name="reemail" placeholder="<?php echo _("ReEmail")?>" required />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="telefono" name="telefono" placeholder="<?php echo _("teléfono")?>" required/>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="dni" name="dni" placeholder="<?php echo _("DNI")?>" required/>
                            </div>
                             <div class="form-group">
                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="<?php echo _("Nombre")?>" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="<?php echo _("Apellidos")?>" required>
                            </div>
                            
                            <div class="form-group"><label for="legal" class="mg-r-8">He leído y acepto la <a href="https://ocahotels.com/politica-de-privacidad/" target="_blank">política de privacidad</a></label>
                                <input type="checkbox" class="" id="legal" name="legal"required>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary txt-140 text-uppercase"><?php echo _("Enviar")?></button>
                             </div>
                        </form>
                    </div></div>
                </div>
            </div>
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

                /*
                $("#content-contacto").hide();
                $("#loading").show();*/

               var parametros = jQuery(form).serialize();

               var url = "<?php echo $ROOT?>services/colectivos.php";


                jQuery.ajax({
                        url: url,
                        type: "post",
                        dataType: 'html',
                        data:parametros,
                        success: function(data) {
                           jQuery("#content-mensaje").html("<h3>Bienvenid@ a OCA Hotels</h3><br/> <h3 class='pdfLink'>Comprueba tu correo y haz uso de tu código promocional para tus reservas on-line.</h3>");
                           jQuery("#content-mensaje").show();
                           jQuery("#contacto-form")[0].reset();
                        },
                        error: function(jqXHR,textStatus,errorThrown ) {

                        }
                    }).done(function( data ) {

                });




            }

        });


    });
</script>
