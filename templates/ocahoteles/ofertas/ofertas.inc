
<?php 
// inicializar idioma
$language = '';
if(isset($_REQUEST['language'])) {
  $language =  $_REQUEST['language'];
}



// inicializar idioma
$language = '';
if(isset($_REQUEST['lang'])) {
  $language =  $_REQUEST['lang'];
}

if($language=='') {
   $lang = 'es_ES'; 
   $ROOT_LANG = '';
} elseif ($language == 'pt') {
   $lang = 'pt_PT'; 
   $ROOT_LANG = 'pt/';
} elseif ($language == 'ca') {
   $lang = 'ca_ES'; 
   $ROOT_LANG = 'ca/';
} 
else {
   $lang = 'en_GB';
   $ROOT_LANG = 'en/';
   
}; 


if($lang== 'es_ES'){
    $suffix = ''
;}
elseif ($language == 'ca') {
  
    $suffix = '_ca';
} 
else {
    if ($lang == 'en_GB'){
        $suffix ='_en';
    }
}

?>
    

<section class="bck-color-blanco pd-t-100">
    
    <div class="container-fluid ">
        
        <div class="row boxes pd-r-30 pd-l-30">
            <?php foreach($datos as $oferta) { ?>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 mg-b-20">
                <div style="min-height: 300px">
                    
                    <div class="row pd-l-10 pd-r-10" style="min-height: 400px">
                        <div class="col-xs-12 ps-rel text-center" style="padding:0 0;min-height: 300px; 
                                background: url('<?php echo $ROOT ?>images/ofertas/<?php echo $oferta['link_hotel']?>/<?php echo $oferta['id_oferta']?>/001-<?php echo $oferta['id_oferta']?>.jpg') no-repeat center center scroll;
                                background-position: center center;
                                background-repeat: no-repeat;
                                background-size: cover !important;">
                            
                            <div class="ps-rel wd-100"style="top:0;background:rgba(0,0,0,0.2);min-height: 400px;height: 400px;">
                           
                                <h3 class="color-blanco txt-280 " style="margin: 0 0;padding: 80px 10px 20px 10px;"><?php echo $oferta['titulo'.$suffix.'']?></h3>
                               
                                <?php 
                                    //consturir link a la oferta
                                    $link_oferta = $ROOT .$ROOT_LANG. "hoteles" . "/" . GestionTemplates::slugify($oferta['country']) . "/"  . GestionTemplates::slugify($oferta['province']) . "/" . GestionTemplates::slugify($oferta['city']) . "/oca-" . $oferta['link_hotel'] . "/";
                                    $link_oferta = $link_oferta . "oferta/" .  GestionTemplates::slugify($oferta['titulo'.$suffix.'']) . "/" . $oferta["id_oferta"];
                                    
                                ?>
                                <a href="<?php echo $link_oferta?>" class="btn btn-primary-box mg-t-50 text-uppercase" style="top:0;"><?php echo _("Reservar")?></a>
                                
                            </div>
                             
                        </div>
                       
                    </div>

                </div>
                
            </div>
            <?php } ?>
            
        </div>

    </div>
    
</section>