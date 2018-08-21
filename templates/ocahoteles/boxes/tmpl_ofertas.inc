<?php
// inicializar idioma
$language = '';
if(isset($_REQUEST['language'])) {
  $language =  $_REQUEST['language'];
}

if($language=='es_ES') {
   $lang = 'es_ES'; 
   $ROOT_LANG = '';
} else {
   $lang = 'en_GB';
   $ROOT_LANG = 'en/';
   
};

if($lang== 'es_ES'){
    $suffix = '';
            $reservar = 'RESERVAR';
;} else {
    if ($lang == 'en_GB'){
        $suffix ='_en';
         $reservar = 'BOOK NOW';
    }
}

?>
<section class="bck-color-blanco">
    
    <div class="container-fluid ">
        
         <div class="row boxes-destinos">
            <?php foreach($datos as $oferta) { ?>
             
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                <div class="text-center back-image5" style="min-height:300px !important; margin-bottom:20px !important;  background-image: url('<?php echo $ROOT ?>images/ofertas/<?php echo $oferta['link_hotel']?>/<?php echo $oferta['id_oferta']?>/min-<?php echo  $oferta["id_oferta"]?>.jpg')">

                    <div class="ps-rel wd-100" style="top:0;background:rgba(0,0,0,0.2);min-height: 260px;height:300px;">

                        <h3 style="font-size:2em"><?php echo $oferta['titulo'.$suffix.'']?></h3>
                        <p class='color-blanco font-light txt-150'><?php echo $oferta["hotel"]?>, <?php echo $oferta["city"]?></p>
                        
                        <?php 
                            //consturir link a la oferta
                            $link_oferta = $ROOT . $ROOT_LANG."hoteles" . "/" . GestionTemplates::slugify($oferta['country']) . "/"  . GestionTemplates::slugify($oferta['province']) . "/" . GestionTemplates::slugify($oferta['city']) . "/oca-" . $oferta['link_hotel'] . "/";
                            $link_oferta = $link_oferta . "oferta/" .  GestionTemplates::slugify($oferta['titulo'.$suffix.'']) . "/" . $oferta["id_oferta"];

                        ?>
                        <a href="<?php echo $link_oferta?>" class="btn btn-primary-box mg-t-50" style="top:0; font-size: 1.33em !important;"><?php echo $reservar ?></a>
                    </div>

                </div>
                
            </div>
            <?php } ?>
            
        </div>

    </div>
    
</section>