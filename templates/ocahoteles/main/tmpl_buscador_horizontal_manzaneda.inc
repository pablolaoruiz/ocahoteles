<div style="display: none">aqui <?php global $ROOT_LANG;
echo $ROOT_LANG;
 if($ROOT_LANG === 'en/'){
                      $myLangS = '/en';
                  } else {
                      $myLangS = '';
                  };
                  
                  // inicializar idioma
$language = '';
if(isset($_REQUEST['language'])) {
  $language =  $_REQUEST['language'];
}
                  ?></div><div id="buscador-horizontal" class="container-fluid pd-l-0 pd-r-0">
       
         <script>
                 function submitform() {
                var dpd1 = $('#arrival').val( $('#arrival').val().replace(/\//g, '') );
                var dpd2 = $('#departure').val( $('#departure').val().replace(/\//g, '') );
                
                var q = $('#q');
                var lang = $('#langM');
                var ad = $('#ad');
                var ch = $('#ch');
                var code = $('#promo');
                
                window.open('https://reservations.omnibees.com/default.aspx?q=' + q.val() +'&lang=' + lang.val() + '&CheckIn=' + dpd1.val() + '&CheckOut='+ dpd2.val() + '&ad='+ ad.val() + '&ch='+ ch.val() + code.val(), 'Reserva'); 
            }

                </script>
                <div class="row smart-menu-buscador mg-l-0 mg-r-0" id="contenedor-reserva-top">
              
        <div class="col-xs-12 pd-l-0 pd-r-0 bck-color-primario visible-xs visible-sm" >
            <button type="button" class="navbar-toggle btn btn-success" data-toggle="collapse" data-target="#bs-search-form"  id="btn-reserva-top">
                <span class="text-uppercase"><?php echo _("Reservar")?></span>
                <div>
                    <i class="icon-angle-double-down txt-100 color-blanco"></i>
                </div>
            </button>
        </div>
            
        <div class="col-xs-12 collapse navbar-collapse bck-color-primario"  id="bs-search-form">
           
         
            <form id="search_form"  
                  <?php 
                 
                  if (($datos['province']=='Maragogi')){?>
      onsubmit="submitform()"
                
                  <?php } else {?>method="get"
                  action="https://bookings.ocahotels.com<?= $myLangS ?>/step-1" <?php }?>>
                 <input type="hidden" name="q" id="q" value="2619"/>
                 <!--input type="hidden" name="lang" id="langM" value="es_ES"/-->
                 <input type="hidden" name="ad" id="ad" value="2"/>
                <input type="hidden" name="operacion" value="validar_codigo" />
                <?php if (isset($datos)) { ?>
                <input type="hidden" name="id" value="<?php echo $datos['neobookingid']?>" />
                <?php } ?>
                <div class="row mg-l-0 mg-r-0">
                    
                    
                    <?php if (isset($datos)) { ?>
                    <div class="col-xs-12 col-md-12 col-lg-4 mejor-precio hidden-xs hidden-sm">
                        <?php echo _("Mejor Precio online garantizado")?> <i class="icon-check-circle mg-r-20 mg-l-20 txt-120"></i>
                    </div>
                    
                    <div class="col-xs-12 col-md-12 col-lg-4 mejor-precio visible-xs visible-sm">
                        <i class="icon-phone-square mg-r-20 txt-120" style="vertical-align: text-bottom"></i> <a class="color-blanco" href="tel:<?php echo HotelesDisplay::getTelefonoHead($datos_hotel)?>"><?php echo HotelesDisplay::getTelefonoHead($datos_hotel)?></a>
                       
                    </div>
                    <?php } else { ?>
                        <div class="col-xs-12 col-md-12 col-lg-4 pd-l-0 pd-r-0">
                            <div id="multiple-datasets">
                               <input id="hotel" class="typeahead form-control" type="text" name="hotel" placeholder="<?php echo _("Ciudad o Nombre de Hotel")?>">
                               <input name="id" value="" id="id" type="hidden">
                            </div>
                        </div>
                    <?php }?>
               
                        <div class="col-xs-12 col-md-3 col-lg-2 pd-l-0 pd-r-0">
                            <input type="text" class="form-control" id="arrival" name="arrival" placeholder="<?php echo _("Fecha de llegada")?>" readonly />
                        </div>

                        <div class="col-xs-12 col-md-3 col-lg-2 pd-l-0 pd-r-0">
                            <input type="text" class="form-control" id="departure" name="departure" placeholder="<?php echo _("Fecha de salida")?>" readonly />
                        </div>

                        <div class="col-xs-12 col-md-3 col-lg-2 pd-l-0 pd-r-0">
                            <input type="text" class="form-control" id="promo" name="promo" placeholder="<?php echo _("Código promocional")?>" />
                        </div>

                        <div class="col-xs-12 col-md-3 col-lg-2 pd-l-0 pd-r-0">
                            <?php if (!isset($datos[id_oferta])) { ?>
                                <button type="submit" class="btn form-control btn-success"><?php echo  (isset($datos)) ? _("Reservar") :  _("buscar");?></button> 
                            <?php } else { ?>
                                <div class="hidden">
                                    <input type="hidden" class="form-control" id="select_packid" name="select_packid" value="<?php echo $datos[neobooking_id] ?>" readonly />
                                </div>
                                <button type="submit" class="btn form-control btn-success"><?php echo _("Reservar oferta"); ?></button>
                            <?php } ?>
                        </div>     </div>            </form>       
        
        
        </div>
    </div>
</div>
<?php include(getTmpl("tmpl_pop_up_dni","main")) ?>

<script>

jQuery(document).ready(function(){
    
    <?php if (isset($datos)) { ?>
        var con_buscador = false;
    <?php } else { ?>
        var con_buscador = true;
    <?php } ?>
    var config = {"con_buscador":con_buscador,"url":"<?php echo $ROOT?>services/reservas.php","url_recursos":"<?php echo $ROOT?>services/recursos.php",fecha_inicio:"<?php echo $datos[f_inicio] ?>",fecha_fin:"<?php echo $datos[f_caducidad] ?>"};
    buscador_reservas.config(config);
    buscador_reservas.init();
    
    jQuery("#btn-reserva-top").click(function() {
        var offset = jQuery("#btn-reserva-top").offset();
        inicio_pantalla = 0;
        //solo si es despliegue
       if(!jQuery("#bs-search-form").hasClass("in")) {
            jQuery('html, body').animate({ scrollTop : offset.top }, 'slow');
       }
       
        //cambiar el icono por flechas arriba/abajo
        if (jQuery(this).find( "i" ).hasClass("icon-angle-double-up")) {
             jQuery(this).find( "i" ).removeClass("icon-angle-double-up");
             jQuery(this).find( "i" ).addClass("icon-angle-double-down");
        } else {
            jQuery(this).find( "i" ).removeClass("icon-angle-double-down");
            jQuery(this).find( "i" ).addClass("icon-angle-double-up");
        }
        
    });
          
});

</script>