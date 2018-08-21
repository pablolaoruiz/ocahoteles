<div class="row" id="sidebar-right">
    
    <?php
        //mostrar widget del tiempo para manzaneda
        if($datos['shortName']=='4117' ) { ?>
        <div class="carouselNieve mg-b-20"></div>
    <?php    } ?>
    
    
    <div class="col-xs-6 col-sm-6 col-md-7 info-precio">
        
        <div class="estrellas">
            <?php 
            //tipo: Hotel o apertamento
            $estilo_hotel_icon = "";
            if ($datos['type']=='hotel') { //estrellas
                $estilo_hotel_icon = "icon-estrella-2";
            } elseif($datos['type']=='apto') { //llaves
                $estilo_hotel_icon = "icon-llave";
            }

            //sacar el número
            $cantidad =  substr ($datos['quality'] , 0, 1);

            for ($h=0;$h<$cantidad;$h++) {
            ?>
            <i class="fa <?php echo $estilo_hotel_icon?>"></i> 
            <?php } ?>
        </div>
        
        <div class="desde">
            <p class="mg-b-4"><span class="hidden-sm hidden-xs texto-precio"><?php echo _("Precio")?><br></span><span class="texto-desde"><?php echo _("desde")?></span></p>
        </div>
        <div class="importe">
            <div id="contenedor-precio">
                <div class="spinner-4">
                    <div class="a"></div>
                    <div class="b"></div>
                </div>
            </div>
        </div>
       
    </div>
        
        <div class="col-xs-6 visible-xs visible-sm"><a href="<?php echo $datos['mapaurl']?>" target="_blank"><div class="pdflink mg-l-25 mg-r-25 text-uppercase" style="font-size:1.35em"><i class="icon-map-marker" style="font-size:2em"></i><br><?php echo _("Mapa")?><br></div></a></div>
    <?php 
        if ($datos['shortName'] == 11111111){
    if (isset($datos['tripadvisor'])){
        $tripKey = $datos['tripadvisor'];
        $taUrl = "https://api.tripadvisor.com/api/partner/2.0/location/$tripKey?key=df87a091ea2941e6a7f6c850c574659d&lang=es";
        $taData = file_get_contents($taUrl);
        $decodedtaData = json_decode($taData,true);
      
      // require_once($_SERVER['DOCUMENT_ROOT']. $ROOT . 'tripadvisor.php');
       
       // $ta = new tripadvisor('df87a091ea2941e6a7f6c850c574659d');
       // $data = $ta->getHotels('"'.$datos['lat'].','.$datos['lng'].'",""');
       // setlocale(LC_TIME, "es_ES.utf8",'spanish');?>   
        <div class="visible-xs visible-sm col-xs-12 mg-t-30"></div>
        <div class="col-xs-10 col-xs-push-1 col-sm-6 col-sm-push-3 col-md-5 col-md-push-0 text-center pd-t-10 pd-b-10 pd-l-8 pd-r-8 " style="background-color: #FFF; border: 1px solid #b4b4b9">
            
<div class="taRating">
<img src="<?=$decodedtaData['rating_image_url']?>" alt="<?=$decodedtaData['rating']?>/5 estrellas" class="rsImg"/>
</div>
            <div class="numReviews"><p> <b><?=$decodedtaData['num_reviews']?></b> <?= _("opiniones")?> </p></div>
        <div class="cdsBadges">
<?php if (isset($decodedtaData['awards'])):
	foreach($decodedtaData['awards'] as $cdsBadge):
?>
 <div class="cdsBadge">
     <div class="cdsBadgeImage"><img src="<?=$cdsBadge['images']['small']?>"></div>
     <div class="cdsBadgeContents cdsBadgeContentsSingleLine">
         <div class="cdsBadgeTitle"><small><?=$cdsBadge['display_name']?></small></div>
     </div> 
     <hr class="mg-t-3 mg-b-3">
      
 </div>
           
<?php
   endforeach;
 endif;?>
            <a href="#masOpiniones"><small><?= _("más opiniones")?></small>
      <i class="icon-angle-down"></i></a>
</div>
        
       </div>
                <?php } ?>
    <!--div class="col-xs-6 col-sm-6 col-md-5 text-center">
        <?php if($datos['tripadvisor']!='') { ?>
        <div id="TA_cdsratingsonlynarrow668" class="TA_cdsratingsonlynarrow">
            <ul id="oyLzXLEw01" class="TA_links iC3VT7l7x " style="list-style: none">
                <li id="YvUHvGe" class="HofWEznklOs3">
                <a target="_blank" href="https://www.tripadvisor.com/"><img src="https://www.tripadvisor.com/img/cdsi/img2/branding/tripadvisor_logo_transp_340x80-18034-2.png" alt="TripAdvisor" width="115px"/></a>
                </li>
            </ul>
        </div>
        <script src="https://www.jscache.com/wejs?wtype=cdsratingsonlynarrow&amp;uniq=668&amp;locationId=<?php echo $datos['tripadvisor'] ?>&amp;lang=es_ES&amp;border=false&amp;backgroundColor=white&amp;display_version=2"></script>
<?php } } ?>
    </div-->
                    
    <div class="col-xs-12 pd-l-0 pd-r-0 hidden-sm hidden-xs">
       <h4 class="font-light txt-180 pd-b-5"><?php echo _("Reservas y contacto")?></h4>
    </div>

    <div class="col-xs-12 pd-l-15 pd-r-15 pd-t-15 pd-b-15 mg-b-20 ln-h-24 hidden-sm hidden-xs" style="border:1px solid #b4b4b9">
        <i class="icon-map-marker txt-120 mg-r-8"></i> <?php echo $datos['address']?>, <?php echo $datos['city']?>, <?php echo $datos['province']?><br>
        <i class="icon-phone txt-120 mg-r-8"></i><?php echo $datos['tlf']?><br>
        <?php 
        if (empty($datos['fax'])) {}
        else
        {?>
          <i class="icon-phone txt-120 mg-r-8"></i><?php echo $datos['fax']?><br><?php
        };?>
          <i class="icon-envelope-o txt-120 mg-r-8"></i><a href="mailto:<?php echo $datos['email']?>"><?php echo $datos['email']?></a><br>
         
          
          <?php 

if(($datos['longNameTemp']) === 'Manzaneda') { ?>
  <button type="button" class="btn form-control btn-success mg-t-25 text-uppercase font-light" onclick="location.href='https://bookings.ocahotels.com/es/step-1?id=q3lPoYvt5bQu3Caz4nNmfQ&arrival=1&nights=1';" ><?php echo _("Reservar")?></button>
   <?php
}
else { ?>
   <button type="button" class="btn form-control btn-success mg-t-25 text-uppercase font-light" id="booking"><?php echo _("Reservar")?></button>
    <?php
}?>
          
          
        
    </div>
    <?php  
        if ($datos['lat'] !='' && $datos['lng']!='') {
    ?>
    <div class="col-xs-12 pd-l-0 pd-r-0 contenedor-mapa-hotel hidden-sm hidden-xs">
        <div class="row pd-b-">
            <div class="col-xs-8">
                <h4 class="font-light txt-160"><?php echo _("Mapa de localización")?></h4>
            </div>
            <div class="col-xs-4">
                <a href="#myMapModal" data-toggle="modal" id="mapas" class="pull-right txt-120 mg-b-10 mg-t-10"><i class="icon-search"></i> <?php echo _("Ampliar mapa")?></a>
            </div>
        </div>
        <img src="https://maps.googleapis.com/maps/api/staticmap?center=<?php echo $datos['lat']?>,<?php echo $datos['lng']?>&amp;markers=color:blue%7Clabel:H%7C<?php echo $datos['lat']?>,<?php echo $datos['lng']?>&amp;zoom=14&amp;size=332x182&amp;sensor=false&amp;style=feature:poi|visibility:off&amp;style=feature:poi.park|visibility:on&amp;key=AIzaSyAU6PIlehUGaxhMD-V6pAelZcfsCjTTKhE" alt="<?php echo _("Mapa") . " " . $datos['longNameTemp'] ?> " class="mapa-ubicacion" width="100%" height="100%">
        <?php //GestionTemplates::getTmplInclude("tmpl_map_footer","main",$datos) ?>
    </div>
    
    <?php } ?>

</div>


<?php  
        if ($datos['lat'] !='' && $datos['lng']!='') {
    ?>
    <!-- /.modal -->
    <div class="modal fade" id="myMapModal" style="z-index: 4000; display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close txt-200" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title"><?php echo $datos['longNameTemp'] ?></h4> 
                </div>
                <div id="map-canvas"></div>
            </div>
        </div>
    </div>

<script type="text/javascript">
    
    var config = {"lat":"<?php echo $datos['lat']?>","lng":"<?php echo $datos['lng']?>","target":""};
    mapas.config(config);
    mapas.init();
    
    
</script>
<?php } ?>


<script type="text/javascript">
    
    jQuery(document).ready(function () {
                var url = "<?php echo $ROOT?>services/ajax.php";
         
                var operacion = "precio_minimo";
                
                var url = "<?php echo $ROOT?>services/ajax.php";
                var id = "<?php echo $datos['shortName']?>";
                var parametros = {operacion:operacion,language:"<?php echo $language ?>",id:id};
                jQuery.ajax({
                   url: url,
                   type: "post",
                   dataType: 'html',
                   data:parametros,
                   success: function(data) {
                        jQuery("#contenedor-precio").html(data).fadeIn('slow');
                   },
                   error: function(jqXHR,textStatus,errorThrown ) {

                   }
                }).done(function( data ) {
                });
          

    });
    
     <?php
        //mostrar widget del tiempo para manzaneda
        if($datos['shortName']=='4117' ) { ?>
         var config = {"url":"<?php echo $ROOT?>services/widget_nieve.php","target":".carouselNieve","fondo":"#b4b4b9","fuente1":"#fff","fuente2":"#fff"};
        parte_nieve.config(config);
        parte_nieve.init();
    <?php    } ?>
                 
     
    
</script>

 