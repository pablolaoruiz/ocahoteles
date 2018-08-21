<?php
// inicializar idioma
$language = '';
if(isset($_REQUEST['language'])) {
  $language =  $_REQUEST['language'];
}

if($language=='en_GB') {
   $lang = 'en_GB'; 
   $ROOT_LANG = 'en/';
   $descubre = 'DISCOVER IT';
} else {
   $lang = 'es_ES';
   $ROOT_LANG = '';
   $descubre = 'DESCÚBRELO';
   
};

?><style type="text/css">
    
   .pet{
    text-align: left;
    position: absolute;
    right: 0;
    bottom: 0;
    }
    .pet img{
        max-width: 140px;
    }

@media (min-width: 576px) { 
    .pet{
    text-align: left;
    position: absolute;
    right: 0;
    bottom: 0;
    }
    .pet img{
        max-width: 130px;
    }
}

@media (min-width: 768px) { 
.pet{
    text-align: left;
    position: absolute;
    right: 0;
    bottom: 0;
    }
     .pet img{
        max-width: 160px;
    }}


@media (min-width: 992px) {  
.pet{
    text-align: left;
    position: absolute;
    right: 0;
    bottom: 0;
    }
    .pet img{
        max-width: 120px;
    }}

@media (min-width: 1200px) { 
      .pet{
    text-align: left;
    position: absolute;
   left: 72%;
   top: 63%;
    }
        .pet img{
        max-width: 140px;
    }}





   

</style>
<style>
    .manzanedaStyle{
        border-bottom: 3px solid #ffffff;}
</style>
<section class="bck-color-blanco">
      <div style="display:none" id="hint2">
       
           </div>
    <div class="container-fluid ">

        <div class="row boxes-destinos">
        
            <?php foreach($datos as $hotel) { 
                $estilo_hotel = "";
                //estilo hotel
                if ($hotel['duerming']==1) { //color verde
                    $estilo_hotel = "hotel-duerming";
                } elseif ($hotel['duerming']==0 && $hotel['shortName'] != '3278') { // No duermin normal (color gris)
                    $estilo_hotel = "hotel-normal";
           
                } elseif($hotel['code'] == '52ba7821-3017-11e4') { //brasil. Gran hotel (color negro)
                    $estilo_hotel = "hide";
                }elseif($hotel['shortName'] == '3278')  { //brasil. Gran hotel (color negro)
                $estilo_hotel = "gran-hotel";}
                elseif($hotel['duerming'] == 3) { //brasil. Gran hotel (color negro)
                    $estilo_hotel = "manzanedaStyle";
                }
                          
                ?>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
              
                <div class="text-center back-image5 <?php echo $estilo_hotel?>" 
                     style="margin-bottom:20px !important; min-height: 400px;background-image: url('<?php echo $ROOT ?>images/hoteles/<?php echo GestionTemplates::slugify($hotel["longNameTemp"])?>/<?php echo GestionTemplates::slugify($hotel["longNameTemp"])?>-home.jpg')">
                  
                    <div class="ps-rel wd-100" style="top:0;background:rgba(0,0,0,0.2);min-height: 400px;height: 400px;">
<!-- PET FRIENDLY BADGE -->
 <?php if ($hotel['petfriendly'] == 1){
               if ($hotel['duerming'] == 1){
                   ?>    <div class="col-xs-12 pet"><img src="https://ocahotels.com/images/duerming-mascotas.png" class="img-responsive" alt='<?php echo _("Este establecimiento admite mascotas") ?>' title='<?php echo _("Este establecimiento admite mascotas") ?>'>
            </div><?php
               }
               else{ ?> 
                   <div class="col-xs-12 pet"><img src="https://ocahotels.com/images/oca-mascotas.png" class="img-responsive" alt='<?php echo _("Este establecimiento admite mascotas") ?>' title='<?php echo _("Este establecimiento admite mascotas") ?>'>
            </div><?php
                   
                   
               }?>
          <?php }?>
<!-- PET FRIENDLY BADGE ENDS -->
                        <h3><?php echo $hotel["longNameTemp"]?></h3>

                        <div class="txt-200 mg-b-10 " style="color:#FFF">
                            <?php 
                            //tipo: Hotel o apertamento
                            $estilo_hotel_icon = "";
                            if ($hotel['type']=='hotel') { //estrellas
                                $estilo_hotel_icon = "icon-estrella";
                            } elseif($hotel['type']=='apto') { //llaves
                                $estilo_hotel_icon = "icon-llave";
                            }
                                
                            //sacar el número
                            $cantidad =  substr ($hotel['quality'] , 0, 1);
                             
                            for ($h=0;$h<$cantidad;$h++) {
                            ?>
                            <i class="fa <?php echo $estilo_hotel_icon?>" ></i> 
                            <?php } ?>
                        </div>
                        <p class='color-blanco font-light txt-130'><?php echo $hotel["city"]?>, <?php echo $hotel["province"]?></p>

                        <a href="<?php echo $ROOT.$ROOT_LANG ?><?php echo $hotel["link_parse"]?>" class="btn btn-primary-box mg-t-50" style="top:0;"><?php echo $descubre ?></a>
                      
                    </div>
 
                </div>
                
            </div>
            <?php } ?>
            
        </div>
        
    </div>
</section>
