<!-- Navigation -->
<nav class="navbar navbar-default <?php echo $class_menu?>" role="navigation">
    <div class="container-fluid pd-md-t-0">
      
        <div class="navbar-header pull-left">
             <div style="display:none">
                <?php 
                print_r ($oferta);
                    $datos_hotel = $ctrlHoteles->getHotelByLink($hotel,$parametros);?>
                 
            </div>
            
            <a class="navbar-brand" href="<?php echo HotelesDisplay::getLinkLogo($datos_hotel,$seccion_hotel);?>">
                
               <?php echo HotelesDisplay::getLogo($datos_hotel, $seccion_hotel);?>
            </a>
            <?php
                //solo mostrar el nombre del hotel si la seccion no tiene cabecera y estamos en un hotel
                if ($class_menu!="" && isset($datos_hotel) ) { 
            ?>
            <span class="text-hotel-name"><?php echo $datos_hotel['longNameTemp']?></span>
            <?php } ?>
        </div>
        
        <ul class="nav navbar-nav pull-right pd-t-0 pd-md-t-20 mg-r-0">

            <li>
                <a href="tel:<?php echo HotelesDisplay::getTelefonoHead($datos_hotel)?>" class="txt-200 lt-s-2 hoverOrange"> <i class="icon-phone visible-xs visible-sm"></i><span class="hidden-xs hidden-sm" style="font-size:16px;"><?php echo _("Llámanos")?> <?php echo HotelesDisplay::getTelefonoHead($datos_hotel)?></span></a>
            </li>
            <li class="hidden-xs hidden-sm">
                <a href="https://www.facebook.com/ocahotels/" target="_blank" class="txt-180 social hoverOrange"><i class="icon-facebook-f"></i></a>
                <a href="https://www.instagram.com/ocahotels/" class="txt-180 social hoverOrange" target="_blank"><i class="icon-instagram"></i></a>
                <a href="https://twitter.com/ocahotels" class="txt-180 social hoverOrange" target="_blank"><i class="icon-twitter"></i></a>
            </li>

            <li>
                
               
                
               
                
                
        <!-- oculto selector de idiomas-->
                <div id="language-menu" class="pd-lg-b-30 pd-b-10 pd-md-l-0 pd-l-20 pd-r-20 pd-md-r-0 mg-t-5 "> 
                    <div class="dropdown">

                        <button type="button" class="btn dropdown-toggle idioma" style="background: none" data-toggle="dropdown">
                            <?php

                             //   $urls_idiomas= Urls::getPaginasIdiomas($pagina_url,$lang,$link_paginas_idiomas);

                            ?>
                             <?php if($language=="en") { ?>
                                EN <span class="caret black"></span>
                            <?php } elseif($language=="pt") {?>
                                PT <span class="caret"></span>
                            <?php }  elseif($language=="ca") {?>
                                CA <span class="caret"></span>
                            <?php } else { ?>
                                ES <span class="caret "></span>
                            <?php } ?>
                        </button>
                        
                        
                        <?php if (($datos_hotel['link'])!=='maragogi'&&($datos_hotel['link'])!=='rocallaura'){?>
                        
                        <ul class="dropdown-menu pull-right down-idioma" role="menu" aria-labelledby="dropdownMenu1">
                           
                            
                            <?php if($language=="en") { ?>
                            <li class="">
                                <a id="<?php echo HotelesDisplay::getLinkLogoC($datos_hotel,$seccion_hotel)?>" class="idioma" href="<?php echo HotelesDisplay::getLinkLogoC($datos_hotel,$seccion_hotel) ?>" title="<?php echo _("Español");?>"><?php echo _("Español");?></a>
                            </li>
                            
                            <?php }?>
                            <?php if($language=="") { ?>
                            <li class="">
                                <a  id="<?php echo HotelesDisplay::getLinkLogoC($datos_hotel,$seccion_hotel)?>" class="idioma" href="<?php echo $ROOT.'en'.HotelesDisplay::getLinkLogoC($datos_hotel,$seccion_hotel)?>" title="<?php echo _("Inglés");?>"><?php echo _("Inglés");?></a>
                            </li>
                            <?php } ?>

                        </ul> <?php }
                        
                        elseif (($datos_hotel['link'])=='rocallaura'){
                            
                            ?>
  <ul class="dropdown-menu pull-right down-idioma" role="menu" aria-labelledby="dropdownMenu1">
                           
       <?php if($language=="ca") { ?>
                            <li class="">
                                <a id="<?php echo HotelesDisplay::getLinkLogoC($datos_hotel,$seccion_hotel)?>" class="idioma" href="<?php echo HotelesDisplay::getLinkLogoC($datos_hotel,$seccion_hotel) ?>" title="<?php echo _("Español");?>"><?php echo _("Español");?></a>
                            </li>
                             <li class="">
                                <a  id="<?php echo HotelesDisplay::getLinkLogoC($datos_hotel,$seccion_hotel)?>" class="idioma" href="<?php echo $ROOT.'en'.HotelesDisplay::getLinkLogoC($datos_hotel,$seccion_hotel)?>" title="<?php echo _("Inglés");?>"><?php echo _("Inglés");?></a>
                            </li>
                            
                            <?php }?>
                            
                            
                            <?php if($language=="en") { ?>
                            <li class="">
                                <a id="<?php echo HotelesDisplay::getLinkLogoC($datos_hotel,$seccion_hotel)?>" class="idioma" href="<?php echo HotelesDisplay::getLinkLogoC($datos_hotel,$seccion_hotel) ?>" title="<?php echo _("Español");?>"><?php echo _("Español");?></a>
                            </li>
                             <li class="">
                                <a id="<?php echo HotelesDisplay::getLinkLogoC($datos_hotel,$seccion_hotel)?>" class="idioma" href="<?php echo $ROOT.'ca'.HotelesDisplay::getLinkLogoC($datos_hotel,$seccion_hotel) ?>" title="<?php echo _("Català");?>"><?php echo _("Català");?></a>
                            </li>
                            
                            <?php }?>
                            
                            <?php if($language=="") { ?>
                            <li class="">
                                <a  id="<?php echo HotelesDisplay::getLinkLogoC($datos_hotel,$seccion_hotel)?>" class="idioma" href="<?php echo $ROOT.'en'.HotelesDisplay::getLinkLogoC($datos_hotel,$seccion_hotel)?>" title="<?php echo _("Inglés");?>"><?php echo _("Inglés");?></a>
                            </li>
                             <li class="">
                                <a id="<?php echo HotelesDisplay::getLinkLogoC($datos_hotel,$seccion_hotel)?>" class="idioma" href="<?php echo $ROOT.'ca'.HotelesDisplay::getLinkLogoC($datos_hotel,$seccion_hotel) ?>" title="<?php echo _("Català");?>"><?php echo _("Català");?></a>
                            </li>
                            <?php } ?>

                        </ul> <?php                                                       
                            
                        }
                        else { ?>
  <ul class="dropdown-menu pull-right down-idioma" role="menu" aria-labelledby="dropdownMenu1">
                           
       <?php if($language=="pt") { ?>
                            <li class="">
                                <a id="<?php echo HotelesDisplay::getLinkLogoC($datos_hotel,$seccion_hotel)?>" class="idioma" href="<?php echo HotelesDisplay::getLinkLogoC($datos_hotel,$seccion_hotel) ?>" title="<?php echo _("Español");?>"><?php echo _("Español");?></a>
                            </li>
                             <li class="">
                                <a  id="<?php echo HotelesDisplay::getLinkLogoC($datos_hotel,$seccion_hotel)?>" class="idioma" href="<?php echo $ROOT.'en'.HotelesDisplay::getLinkLogoC($datos_hotel,$seccion_hotel)?>" title="<?php echo _("Inglés");?>"><?php echo _("Inglés");?></a>
                            </li>
                            
                            <?php }?>
                            
                            
                            <?php if($language=="en") { ?>
                            <li class="">
                                <a id="<?php echo HotelesDisplay::getLinkLogoC($datos_hotel,$seccion_hotel)?>" class="idioma" href="<?php echo HotelesDisplay::getLinkLogoC($datos_hotel,$seccion_hotel) ?>" title="<?php echo _("Español");?>"><?php echo _("Español");?></a>
                            </li>
                             <li class="">
                                <a id="<?php echo HotelesDisplay::getLinkLogoC($datos_hotel,$seccion_hotel)?>" class="idioma" href="<?php echo $ROOT.'pt'.HotelesDisplay::getLinkLogoC($datos_hotel,$seccion_hotel) ?>" title="<?php echo _("Portugues");?>"><?php echo _("Portugues");?></a>
                            </li>
                            
                            <?php }?>
                            <?php if($language=="") { ?>
                            <li class="">
                                <a  id="<?php echo HotelesDisplay::getLinkLogoC($datos_hotel,$seccion_hotel)?>" class="idioma" href="<?php echo $ROOT.'en'.HotelesDisplay::getLinkLogoC($datos_hotel,$seccion_hotel)?>" title="<?php echo _("Inglés");?>"><?php echo _("Inglés");?></a>
                            </li>
                             <li class="">
                                <a id="<?php echo HotelesDisplay::getLinkLogoC($datos_hotel,$seccion_hotel)?>" class="idioma" href="<?php echo $ROOT.'pt'.HotelesDisplay::getLinkLogoC($datos_hotel,$seccion_hotel) ?>" title="<?php echo _("Portugues");?>"><?php echo _("Portugues");?></a>
                            </li>
                            <?php } ?>

                        </ul> <?php } ?>
                    </div>
                </div> 
            </li>

            <li class="pd-t-0">
                <a href="#" id="search-xs" class="pd-t-0"><i class="icon-search txt-180"></i></a>
            </li>
        </ul>
  
      
    </div>
    <!-- /.container -->
</nav>