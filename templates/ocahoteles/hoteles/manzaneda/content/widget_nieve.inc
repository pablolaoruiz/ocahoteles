<?php
/*
 * Widget - Manzaneda estado nieve
 */
 $preIcoclima = $datos['clima'][0]['text'];
    if ($preIcoclima == 'Soleado'){
        $icoClima = 'icon-clima_4';
    };
    
     if ($preIcoclima == 'Intervalos nubosos'){
        $icoClima = 'icon-clima_1';
    };
    
     if ($preIcoclima == 'Intervalos nubosos con precipitaciones'){
        $icoClima = 'icon-clima_5';
    };
    
     if ($preIcoclima == 'Nuboso'){
        $icoClima = 'icon-clima_2';
    };
    
     if ($preIcoclima == 'Nuboso con precipitaciones'){
        $icoClima = 'icon-clima_6';
    };
    
     if ($preIcoclima == 'Niebla'){
        $icoClima = 'icon-clima_3';
    };
    
     if ($preIcoclima == 'Niebla con precipitaciones'){
        $icoClima = 'icon-clima_7';
    };
    
    if ($preIcoclima == 'Nevadas'){
        $icoClima = 'icon-clima_8';
    };
    //print_r($datos);
?>

<div id="widget-nieve">
    <div class="row">
        <div class="col-xs-12 text-center bck-color-primario color-blanco pd-t-5 pd-b-5 font-light txt-140">Parte de Nieve</div>
    </div>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <!-- 01 -->
            <div class="item active ">
                <div class="row">
                    
                    <div class="col-xs-2 col-xs-offset-1 elemento-widget">
                        <a href="#" data-toggle="tooltip" title="<?php echo $datos['clima'][0]['text']?>"><i class="<?php echo $icoClima ?> iconoNieInicial" aria-hidden="true"></i></a>
                    </div>
                    
                    <div class="col-xs-2 elemento-widget">
                        <a href="#" data-toggle="tooltip" title="<?php echo _("Temperatura Máx.")?>"><i class="icon-thermometer-full" aria-hidden="true"></i></a>
                        <span class=""><?php echo $datos['tempMax']?></span>
                    </div>
                    
                    <div class="col-xs-2 elemento-widget">
                        <a href="#" data-toggle="tooltip" title="<?php echo _("Temperatura Mín.")?>"><i class="icon-thermometer-empty" aria-hidden="true"></i></a>
                        <span class=""><?php echo $datos['tempMin']?></span>
                    </div>
                    
                    <div class="col-xs-2 elemento-widget">
                        <a href="#" data-toggle="tooltip" title="<?php echo _("Visibilidad")?>"><i class="icon-eye" aria-hidden="true"></i></a>
                        <span class=""><?php echo $datos['visibilidad'][0]['text'] ?></span>
                    </div>
                    
                    <div class="col-xs-2 elemento-widget">
                        <a href="#" data-toggle="tooltip" title="<?php echo _("Accesos")?>"><i class="icon-exit-door-symbol" aria-hidden="true"></i></a>
                        <span><?php echo $datos['accesos'][0]['text'] ?></span>
                    </div>

                </div>
            </div>
            
            <!--<div class="item ">
                <div class="row">
                    <div class="col-xs-6 pd-l-50 elemento-widget-v2">
                        <div class="row">
                            <div class="col-xs-2">
                                <a href="#" data-toggle="tooltip" title="<?php echo _("Remontes")?>"><i class="icon-lavanderia" aria-hidden="true"></i></a>
                            </div>
                            <div class="col-xs-10">
                                <span><?php echo $datos['remontes'][0]['text'] ?></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-2">
                                <i class="icon-search" aria-hidden="true"></i>
                            </div>
                            <div class="col-xs-10">
                                <span><?php echo $datos['telesqui'][0]['text'] ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 elemento-widget-v2">
                        <div class="row">
                            <div class="col-xs-2">
                                <a href="#" data-toggle="tooltip" title="<?php echo _("Remontes")?>"><i class="icon-lavanderia" aria-hidden="true"></i></a>
                            </div>
                            <div class="col-xs-10">
                                <span><?php echo $datos['remontes'][0]['text'] ?></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-2">
                                <i class="icon-search" aria-hidden="true"></i>
                            </div>
                            <div class="col-xs-10">
                                <span><?php echo $datos['telesqui'][0]['text'] ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            
            <!-- 02 -->
          
            <div class="item ">
                <div class="row pd-l-40">
                    <div class="col-xs-6 ">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="row">
                                    <div class="col-xs-2">
                                        <a href="#" data-toggle="tooltip" title="<?php echo _("Remontes")?>"><i class="icon-ski-remontes" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="col-xs-10">
                                        <span data-title="REMONTES ABIERTOS">
                                            
                                            <?php if ($datos['remontes'][0]['text'] != ''){
                         echo $datos['remontes'][0]['text']; } else{} ?>
                        
                         <?php if ($datos['remontes'][1]['text'] != ''){
                         echo '<br>'.$datos['remontes'][1]['text']; } else{} ?>
                             
                             <?php if ($datos['remontes'][2]['text'] != ''){
                         echo '<br>'.$datos['remontes'][2]['text']; } else{} ?>
                             
                           
                             
                           </span>
                                    </div>
                                </div>
                            </div>
                           
                           
                        </div>
                    </div>
                    
                      <div class="col-xs-6 ">
                        <div class="row">
                     <div class="col-xs-12 ">
                                <div class="row">
                                    <div class="col-xs-2">
                                        <a href="#" data-toggle="tooltip" title="<?php echo _("Telesqui")?>"><i class="icon-ski-remontes" aria-hidden="true"></i></a>
                                        
                                    </div>
                                    <div class="col-xs-10">
                                        <span data-title="TELESQUÍ ABIERTOS">
                                            
                                            <?php if ($datos['telesqui'][0]['text'] != ''){
                         echo $datos['telesqui'][0]['text']; } else{} ?>
                        
                         <?php if ($datos['telesqui'][1]['text'] != ''){
                         echo '<br>'.$datos['telesqui'][1]['text']; } else{} ?>
                             
                             <?php if ($datos['telesqui'][2]['text'] != ''){
                         echo '<br>'.$datos['telesqui'][2]['text']; } else{} ?>
                             
                             <?php if ($datos['telesqui'][3]['text'] != ''){
                         echo '<br>'.$datos['telesqui'][3]['text']; } else{} ?>
                             
                            </span>
                                    </div>
                                </div>
                     </div></div></div>
                  
                </div>
            </div>
            
            <!-- 03 -->
             <div class="item ">
                <div class="row pd-l-10 pd-r-10 pd-t-10">
                                         <div class="row">
                            <div class="col-xs-12">
                                <div class="row">
                                    <div class="col-xs-3 text-center">
                                        <a href="#" data-toggle="tooltip" title="<?php echo _("espesor Máx.")?>"><i class="icon-max" aria-hidden="true"></i> </a><br>
                                        <span data-title="ESPESOR MAXIMO" ><?php echo $datos['espesorMax'] ?> cm</span>
                                    </div>
                                    <div class="col-xs-3 text-center">
                                        <a href="#" data-toggle="tooltip" title="<?php echo _("espesor Mín.")?>"><i class="icon-min" aria-hidden="true"></i> </a> <br>
                                        <span data-title="ESPESOR MINIMO"><?php echo $datos['espesorMin'] ?> cm</span>
                                    </div>
                                      <div class="col-xs-3 text-center">
                                        <a href="#" data-toggle="tooltip" title="<?php echo _("Total pistas abiertas")?>"><i class="icon-pistasabiertas" aria-hidden="true"></i> </a>  <br>
                                        <span data-title="PISTAS ABIERTAS"><?php echo $datos['totalPistasAbiertas'] ?></span>
                                    </div>
                                    <div class="col-xs-3 text-center">
                                        <a href="#" data-toggle="tooltip" title="<?php echo _("Km esquiables")?>"><i class="icon-esquiables" aria-hidden="true"></i></a><br>
                                         <span data-title="KM ESQUIABLES"><?php echo $datos['kmEsquiables'] ?></span>
                                    </div>
                                </div>
                            </div>
                           
                           
                        </div>
                   
                  
                     
                  
                </div>
            </div>
            
            <!-- 004 -->
            <div class="item ">
                <div class="row mg-l-20 mg-r-20">
                    <div class="col-xs-12">
                        <p><span><?php echo _("Instalaciones abiertas")?></span></p>
                    </div>
                    <div class="col-xs-12">
                        <?php foreach ($datos['instalacionesAbiertas'] as $instalaciones){ ?>
                        <span class="cortar instalaciones"><?php echo $instalaciones['text'] ?></span>
                        <?php } ?>
                    </div>
                </div>
            </div>
            
            <!-- 04 -->
           
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="icon-angle-left txt-200"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="icon-angle-right txt-200"></span>
          <span class="sr-only">Next</span>
        </a>
    </div>
    
</div>

<script>
    
    
    jQuery(function(){


    $('[data-toggle="tooltip"]').tooltip(); 
/*        jQuery('#myCarousel').carousel({
          interval: 4000,
          pause: hover
        });*/
        
    });
</script>