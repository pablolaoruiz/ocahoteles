<header class="intro-header">

    <div id="carousel-home" class="carousel slide " data-ride="carousel" data-interval="6000">

        <div class="carousel-inner" role="listbox">




              <!--div class="item active">

                <div class="row ">
                    <div class="col-md-12 fill fill-before-shadow" style="background-image: url(<?php echo $ROOT?>images/home/1000razones.jpg);" id="mainBig"></div>
                </div>

                 <div class="carousel-caption">

                    <h3 class="text-uppercase">que salten en tu cama a las 7 de la mañana</h3>
                    <h2 class="text-uppercase">1.000 razones para desconectar</h2>
                    <p></p>
                    <a class="btn" href="#hoteles" onclick="location.hash='hoteles'; location.reload();"><?php echo _("ESCÁPATE")?></a>

                </div>
            </div-->

  <!--div class="item active">

                <div class="row ">
                    <div class="col-md-12 fill fill-before-shadow" style="background: url(<?php echo $ROOT?>images/home/veranoca2018.jpg); background-position: top;"></div>
                </div>

                 <div class="carousel-caption">

                    <h3 class="text-uppercase">15% DE DESCUENTO CON EL CÓDIGO</h3>
                    <h2 class="text-uppercase">VERANOCA</h2>
                    <p></p>
                    <a class="btn" href="https://ocahotels.com/#hoteles"><?php echo _("RESERVA")?></a>

                </div>
            </div-->


   <div class="item active">

                <div class="row ">
                    <div class="col-md-12 fill fill-before-shadow" style="background: url(<?php echo $ROOT?>images/home/grand-oca-maragogi.jpg); background-position: top;"></div>
                </div>

                 <div class="carousel-caption">

                    <h3 class="text-uppercase">Beach & Leisure Resort</h3>
                    <h2 class="text-uppercase">GRAND OCA MARAGOGI</h2>
                    <p></p>
                    <a class="btn" href="https://ocahotels.com/<?php echo $ROOT_LANG?>hoteles/brasil/maragogi/alagoas/oca-maragogi/"><?php echo _("DESCÚBRELO")?></a>

                </div>
            </div>

        
              
              
             <div class="item ">

                <div class="row ">
                    <div class="col-md-12 fill fill-before-shadow" style="background: url(<?php echo $ROOT?>images/home/bonos.jpg); background-position: top;"></div>
                </div>

                 <div class="carousel-caption">

                    <h3 class="text-uppercase"><?php echo _("Experiencias inolvidables")?></h3>
                    <h2 class="text-uppercase"><?php echo _("BONOS REGALO")?></h2>
                    <p></p>
                    <a class="btn" href="<?php echo $ROOT . $ROOT_LANG?>bonos-regalo"><?php echo _("DESCÚBRELOS")?></a>

                </div>
            </div>



             <!--div class="item">

                <div class="row ">
                    <div class="col-md-12 fill fill-before-shadow" style="background: url(<?php echo $ROOT?>images/home/campus-verano-manzaneda.jpg);"></div>
                </div>

                 <div class="carousel-caption">

                    <h3 class="text-uppercase">Naturaleza y diversión</h3>
                    <h2 class="text-uppercase">CAMPAMENTO DE VERANO</h2>
                    <p>julio 2017</p>
                    <a class="btn" href="<?php echo $ROOT . $ROOT_LANG?>hoteles/espana/ourense/pobra-de-trives/oca-manzaneda/oferta/campamento-de-verano-2017-multiaventura-manzaneda/34"><?php echo _("APÚNTATE")?></a>

                </div>
            </div-->

          <!--  <div class="item">

                <div class="row ">
                    <div class="col-md-12 fill fill-before-shadow" style="background: url(<?php echo $ROOT?>images/home/allariz-hotel-spa.jpg);"></div>
                </div>

                 <div class="carousel-caption">

                    <h3 class="text-uppercase">SPA en un entorno de ensueño</h3>
                     <h2 class="text-uppercase">Vila de Allariz</h2>
                    <p>Hotel & Spa</p>
                    <a class="btn" href="<?php echo $ROOT . $ROOT_LANG?>hoteles/espana/ourense/allariz/oca-allariz/"><?php echo _("DESCÚBRELO")?></a>

                </div>
            </div> -->

            <div class="item">

                <div class="row ">
                    <div class="col-md-12 fill fill-before-shadow" style="background: url(<?php echo $ROOT?>images/home/unete-a-liveoca.jpg);"></div>
                </div>

                 <div class="carousel-caption">

                    <h3 class="text-uppercase"><?php echo _("Únete a LIVEOCA") ?></h3>
                     <h2 class="text-uppercase"><?php echo _("8% DESCUENTO") ?></h2>
                     <p><?php echo _("en tus reservas online") ?></p>
                     <a class="btn" href="<?php echo $ROOT . $ROOT_LANG?>liveoca/" target="_blank"><?php echo _("REGÍSTRATE")?></a>

                </div>
            </div>



        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#carousel-home" role="button" data-slide="prev">
            <span class="icon-angle-left txt-300" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-home" role="button" data-slide="next">
            <span class="icon-angle-right txt-300" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>

    </div><!-- /.carousel -->

</header>

<?php include(getTmpl("tmpl_buscador_horizontal","main")) ?>
<?php include(getTmpl("tmpl_action_premium","main")) ?>
<?php include(getTmpl("tmpl_pestanas","main")) ?>

<div class="ps-rel">

    <div id="loading" style="display: none;">
        <img src="<?php echo $ROOT?>images/loading.gif"  alt="Loading...">
    </div>
    <div id="contenedor-boxes">

    <?php GestionTemplates::getTmplInclude("tmpl_destinos","boxes",$destinos);?>

    </div>

</div>


<?php include(getTmpl("tmpl_newsletter","main")) ?>

<script type="text/javascript">

/* <![CDATA[ */
jQuery(document).ready(function() {

    var config = {estilo:"estilo",mensaje:"Mensaje"};
    loading.config(config);
    loading.init();

  /*  //Enable swiping...
    jQuery(".carousel-inner").swipe({
        swipeLeft:function(event, direction, distance, duration, fingerCount) {
            jQuery(this).parent().carousel('next');
        },
        swipeRight: function() {
            jQuery(this).parent().carousel('prev');
        },
        threshold:0
    });
    */
    // Replace the search result table on load.
    if (('sessionStorage' in window) && window['sessionStorage '] !== null) {
        if ('contenedor-boxes' in sessionStorage  && window.location.hash) {
            var hash = (window.location.hash);
            jQuery(".linea").removeClass( "active" );
            jQuery("a[href=" + hash + "]").children( ".linea").addClass( "active" );
           // input[value='Hot Fuzz']
            jQuery("#contenedor-boxes").html(sessionStorage.getItem('contenedor-boxes'));
        }
    }
});

jQuery(window).unload(function () {
   if (('sessionStorage' in window) && window['sessionStorage'] !== null) {
       var contenido = jQuery("#contenedor-boxes").html();
       sessionStorage.setItem('contenedor-boxes', contenido);
   }
});


/* ]]> */
</script>


<!-- Modal -->
<div class="modal fade" id="popupModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #f2f1ed;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

      </div>
        <div class="modal-body" style="background-color: #f2f1ed;">
          <a href="#hoteles" onclick="location.hash='hoteles'; location.reload();">
              <img src="images/home/popUp1000razones.jpg" class="img-responsive" alt="1000 Razones Oca">
          </a>
      </div>
      <div class="modal-footer" style="background-color: #f2f1ed;">
        <button type="button" class="btn btn-default" data-dismiss="modal">x</button>

      </div>
    </div>
  </div>
</div>
