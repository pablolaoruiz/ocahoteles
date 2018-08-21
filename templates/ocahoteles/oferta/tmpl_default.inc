<?php
if($lang== 'es_ES'){
    $suffix = ''
;} elseif ($lang== 'ca_ES') {
   $suffix ='_ca';
} else {
    if ($lang == 'en_GB'){
        $suffix ='_en';
    }
}
       
   

?>
<div itemscope itemtype="http://schema.org/Product">

<header class="intro-header">
    
    <div id="carousel-home" class="carousel slide " data-ride="carousel" data-interval="6000">

        <div class="carousel-inner" role="listbox">
            
             <div class="item active">

                <div class="row ">
                    <div  class="col-md-12 fill-50 fill-before-shadow" style="background-image: url('<?php echo $ROOT ?>images/ofertas/<?php echo $oferta['link']?>/<?php echo $oferta['id_oferta']?>/001-<?php echo $oferta['id_oferta']?>.jpg')"></div>
                    
                    <span  style="display:none"><img src="<?php echo $ROOT ?>images/ofertas/<?php echo $oferta['link']?>/<?php echo $oferta['id_oferta']?>/001-<?php echo $oferta['id_oferta']?>.jpg" itemprop="image"></span>
                </div>
                 
                 <div class="carousel-caption"> <span itemprop="name">
                     <h3 class="text-uppercase txt-100"><?php echo _("Oferta")?></h3>
                     <h2 class="text-uppercase txt-190"><?php echo $oferta['titulo'.$suffix.''] ?></h2>
                     
                     
                     <h3><?php echo $oferta['hotel']?></h3>
                     </span>
                </div>
            </div>
            
        </div>
    </div>
    
</header>


<?php GestionTemplates::getTmplInclude("tmpl_buscador_horizontal","main",$oferta) ?>
<?php include(getTmpl("tmpl_action_premium","main")) ?>



<section class="bck-color-blanco color-primario pd-t-40 pd-b-40" >
    <div class="container ">
        
        <?php 
$fechaLimite = date('Y-m-d');

if ($oferta['fecha_fin'] < $fechaLimite) {?>
        <div class="row pd-r-40 pd-l-40 fill-50">
            
            <div class="col-xs-12 col-sm-8">
                <h3 class="text-uppercase font-light"><?php echo _("Lo sentimos, la oferta "); ?><br><b><?php echo $oferta['titulo'.$suffix.''];?> </b><br> <?php echo _("no está disponible en estos momentos.") ?><br><br></h3>
                <?php
                $link_url = "hoteles" . "/" . GestionTemplates::slugify($datos_hotel['country']) . "/"  . GestionTemplates::slugify($datos_hotel['province']) . "/" . GestionTemplates::slugify($datos_hotel['city']) . "/oca-" . $datos_hotel['link'] . "/"; ?>
                <h4 class="pdflink"><a href="https://ocahotels.com/<?php echo $link_url ?>ofertas"><?php echo _("Puede consultar las ofertas actuales aquí.") ?></a></h4>
            </div>
        </div>
     
<?php }else { ?>
        <div class="row pd-r-40 pd-l-40 fill-50">
            
            <div class="col-xs-12 col-sm-8">
                
                <h3 class="text-uppercase txt-220 font-light"><?php echo $oferta['titulo'.$suffix.''] ?></h3>
                
                <div class="row mg-t-20">
                    
                    <div class="col-xs-12 txt-130 font-light" itemprop="description">
                        <?php echo $oferta['descripcion'.$suffix.'']?>
                    </div>
                    
                </div>
                
            </div>
            <div class="col-xs-12 col-sm-4 mg-t-30 oferta-precio">
                <span class="bck-color-accion color-blanco pd-r-40 pd-l-40 font-light pd-t-10 pd-b-10 txt-240" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                    <meta itemprop="priceCurrency" content="EUR" /> <?php echo _("DESDE")?>: <span itemprop="price"><?php echo $oferta['precio']?></span> €
                </span><br>
               <p class="mg-t-20 txt-100 wd-70" style="display:inline-block;overflow: hidden">
                   <b style="text-transform:uppercase"><?php echo $oferta['multiplicador'.$suffix.'']?></b>
                </p>
                <p class="mg-t-1 txt-100 wd-70" style="display:inline-block;overflow: hidden">
                    <?php echo $oferta['condiciones'.$suffix.'']?>
                </p>
                <div class="col-xs-12" style="margin-top:20px !important;"></div>
                 <?php $link_oferta = "/docs/"  . GestionTemplates::slugify($oferta['hotel']) ."/ofertas/".  GestionTemplates::slugify($oferta["titulo"])."-".$oferta['id_oferta'].".pdf"; ?>
                <a href="<?= $link_oferta ?>" class="bck-color-accion color-blanco pd-r-40 pd-l-40 font-light  pd-b-20 txt-240 " target="_blank">PDF</a>
                
            </div>
        </div>
        
        <?php 
};?>
    </div>
</section>
</div>
<?php GestionTemplates::getTmplInclude("tmpl_newsletter","main") ?>