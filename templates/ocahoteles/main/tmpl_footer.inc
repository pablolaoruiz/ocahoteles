<?php 
if ($language == 'ca'){
    $ROOT_LANG = '';
}?>
<footer>
    <div class="container-fluid">
        <div class="row pd-t-50 pd-b-100" >
           
            <div class="col-xs-6 col-sm-4 col-md-2 col-md-offset-1 txt-a-c-md mg-xs-b-30">
                <h4>Oca Hotels</h4>
                <ul>
                    <?php 
                   
                   if (($datos_hotel['link'])==='manzaneda'){ 
                       ?>
                    <li><a href="<?php echo $ROOT?>politica-de-calidad-manzaneda.pdf"><?php echo _("Política de calidad y seguridad")?></a></li>
                   <?php }
                   else{}?>
                    <li>
                        <a href="<?php echo $ROOT?><?php
                   
                    if (is_null($hotel)){
                        echo $ROOT_LANG.'aviso-legal/';                                             
                    }
                    else {
                        echo 'docs/legal/aviso-legal-politica-privacidad-'.$hotel.'.pdf';
                         }
                    
                     ?> " target="_blank"><?php echo _("Aviso Legal")?></a></li>
                    
                    
                    <li>
                        
                        <?php if (($datos_hotel['link'])==='augas-santas'){?> <a href="<?php /*echo  $ROOT.'docs/legal/politica-privacidad-augas-santas.pdf'*/ echo $ROOT.$ROOT_LANG?>politica-de-privacidad/"><?php } else {?>
                        <a href="<?php echo $ROOT.$ROOT_LANG?>politica-de-privacidad/"> <?php }?><?php echo _("Política de privacidad") ?></a></li>
                      <li><a href="<?php echo $ROOT.$ROOT_LANG?>canal-denuncia/"><?php echo _("Canal denuncia")?></a></li>
                       <li>
                           
                           <?php if (($datos_hotel['link'])==='augas-santas'){?> <a href="<?php /*echo  $ROOT.'docs/legal/politica-cookies-augas-santas.pdf' */echo $ROOT.$ROOT_LANG?>cookies/"><?php } else {?>
                               
                           <a href="<?php echo $ROOT.$ROOT_LANG?>cookies/"> <?php }?><?php echo _("Política de Cookies")?></a></li>
                       
                </ul>

            </div>
            <div class="col-xs-6 col-sm-4 col-md-2 txt-a-c-md mg-xs-b-30">
                <h4><?php echo _("Corporate")?></h4>
                <ul>
                    <li><a href="<?php echo $ROOT.$ROOT_LANG?>oca-hotels/"><?php echo _("Oca Hotels")?></a></li>
                    <li><a href="<?php echo $ROOT.$ROOT_LANG?>empleo/"><?php echo _("Empleo")?></a></li>
                    <li><a href="<?php echo $ROOT.$ROOT_LANG?>franquicias/"><?php echo _("Franquicias")?></a></li>
                    <li><a href="<?php echo $ROOT.$ROOT_LANG?>duerming/">Duerming</a></li>
                </ul>

            </div>
            <div class="col-xs-6 col-sm-4 col-md-2 txt-a-c-md mg-xs-b-30">
                <h4><?php echo _("Contacto")?></h4>
                <ul>
                    <li><a href="<?php echo $ROOT.$ROOT_LANG?>reservas-telefonicas/"><?php echo _("Reservas telefónicas")?></a></li>
                    <li><a href="<?php echo $ROOT.$ROOT_LANG?>atencion-al-cliente/"><?php echo _("Atención al cliente")?></a></li>                         
                </ul>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-2 txt-a-c-md  mg-xs-b-30">
                <h4><?php echo _("Profesionales")?></h4>
                <ul>
                    <li><a href="<?php echo $ROOT.$ROOT_LANG?>agentes/"><?php echo _("Agentes")?></a></li>
                    <li><a href="<?php echo $ROOT.$ROOT_LANG?>empresas/"><?php echo _("Empresas")?></a></li>
                </ul>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-2 txt-a-c-md" style="float:left">
                <h4><?php echo _("Más")?></h4>
                <ul><?php 
                if ($ROOT_LANG == ''){
                $giftLink = 'bonos-regalo';} else {
                    $giftLink = 'gift-vouchers';
                }
                    
                ?>
                    
                    <?php if (($datos_hotel['longNameTemp']) == 'Palacio de la Llorea') {?>
<li><a href="https://ocahotels.com/<?php echo $ROOT_LANG ?>hoteles/espana/asturias/gijon/oca-palacio-llorea/<?= $giftLink?>"><?php echo _("BONOS REGALO")?></a></li>
 <?php } elseif (($datos_hotel['longNameTemp']) == 'Augas Santas') {?>
<li><a href="https://ocahotels.com/<?php echo $ROOT_LANG ?>hoteles/espana/lugo/panton/oca-augas-santas/<?= $giftLink?>"><?php echo _("BONOS REGALO")?></a></li>

 <?php } elseif (($datos_hotel['longNameTemp']) == 'Vila de Allariz') {?>
<li><a href="https://ocahotels.com/<?php echo $ROOT_LANG ?>hoteles/espana/ourense/allariz/oca-allariz/<?= $giftLink?>"><?php echo _("BONOS REGALO")?></a></li> <?php } else { ?>

<li><a href="<?php echo $ROOT.$ROOT_LANG?>bonos-regalo/"><?php echo _("BONOS REGALO")?></a></li> <?php } ?>
                    <li><a href="<?php echo $ROOT.$ROOT_LANG?>liveoca/"><?php echo _("LIVE OCA")?></a></li>
                    <li><a href="<?php echo $ROOT.$ROOT_LANG?>rse/"><?php echo _("RSE")?></a></li>
                    <li><a href="<?php echo $ROOT?>blog/"><?php echo _("Blog")?></a></li>
                    <li><a href="<?php echo $ROOT.$ROOT_LANG?>sala-de-prensa/"><?php echo _("Sala de Prensa")?></a></li>    
                   
                </ul>
            </div>
        </div>
         <div class="col-xs-12 text-center"><div id="thawteseal" style="text-align:center;" title="Click to Verify - This site chose Thawte SSL for secure e-commerce and confidential communications.">
<div><script type="text/javascript" src="https://seal.thawte.com/getthawteseal?host_name=ocahotels.com&amp;size=S&amp;lang=es"></script></div>
<div><a href="https://www.thawte.com/ssl-certificates/" target="_blank" style="color:#000000; text-decoration:none; font:bold 10px arial,sans-serif; margin:0px; padding:0px;">Acerca de los certificados SSL</a></div>
        </div></div>
    </div>
    
        <div id="cookie_directive_container" class="" style="display: none">
            <nav class="footer navbar-fixed-bottom bck-color-secundario">

                <div class="container pd-l-20 pd-r-20">
                <div class="navbar-inner navbar-content-center" id="cookie_accept">

                    <a href="#" class="btn btn-default pull-right ">Aceptar</a>
                    <p class="text-muted credit mg-t-10 color-negro txt-120">
                        Si continúa navegando, consideramos que acepta nuestra <a href="<?php echo $ROOT?>cookies">política de cookies</a> para mejorar su experiencia.
                    </p>
                    <br>

                </div>
              </div>

            </nav>
            
            
        </div>
        

  
   
</footer>