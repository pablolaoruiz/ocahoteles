<?php
// Client
$client_id = 'partenievemanzaneda-7ia1nf';
$client_secret = 'JokraE6tvQOQ0Ow1gDxEwGB34aaRKvj9RqyKu5p5IN3s1FfZvJeExhBFqeiBsGWG';

// App
$app_id = 19127765;
$app_token = '6f19ecabd7ec40d8ac67dd48e4f48638';

// Authentication
Podio::setup($client_id, $client_secret);
Podio::authenticate_with_app($app_id, $app_token); 

// Items
$collection = PodioItem::filter($app_id, ['sort_by' => 'created_on', 'sort_desc' => true, 'limit' => 1]);


$datos = [];

foreach ($collection as $item) {
	
    $datos['id']= $item->id;
    $datos['prevision']= $item->fields[0]->values;
    $datos['fecha'] = $item->fields[1]->values;
    $datos['remontes'] = $item->fields[2]->values;
    $datos['accesos'] = $item->fields[3]->values;
    $datos['telesqui'] = $item->fields[4]->values;
    $pistas = $item->fields[5]->values;
    $datos['totalPistasAbiertas'] = $item->fields[6]->values;
    $datos['kmEsquiables'] = $item->fields[7]->values;
    $datos['tipoDeNieve'] = $item->fields[8]->values;
    $datos['espesorMax'] = $item->fields[9]->values;
    $datos['espesorMin'] = $item->fields[10]->values;
    $datos['tempMax'] = $item->fields[11]->values;
    $datos['tempMin'] = $item->fields[12]->values;
    $datos['clima'] = $item->fields[13]->values;
    $openinstalaciones = $item->fields[14]->values;
    $datos['visibilidad'] = $item->fields[15]->values;
    $datos['notas'] = $item->fields[17]->values;
    
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
    

}
?>
<style type="text/css">
    #newParte i{
        font-size: 36px;
       
    }
    #newParte span{
        font-size: 20px;
       
    }
    #newParte span:before{
        content: ' ';
    }
    #newParte div{
         margin-top: 30px;
    }
</style>
<section id="contenedor-hotel">
    <div class="container">
        <div class="row">
           
            <div class="col-xs-12 col-sm-8 col-sm-push-2  text-center col-contenedor-hotel color-negro-texto" id="newParte">
                <h3>PARTE DE NIEVE de la ESTACIÓN OCA MANZANEDA</h3>
                <h2><?php echo $datos['fecha']['start']->format('<\b\>d-m-Y<\/b\> ') ?> - <?php echo $datos['prevision'][0]['text']?></h2>
                  <div class="row">
                      <div class="col-xs-4 text-center">                    
                          Tiempo<br>
                              
                        <i class="<?php echo $icoClima ?> iconoNieInicial" aria-hidden="true"></i><br>
                        <span class="black"><?php echo $datos['clima'][0]['text']?></span>
                        
                      </div>
                    <div class="col-xs-4 text-center">
                         Temp. Máxima<br>
                        <i class="icon-thermometer-full" aria-hidden="true"></i><br>
                          <span class=""><?php echo $datos['tempMax']?><sup>o</sup>C</span>
                    </div>
                    
                    <div class="col-xs-4 text-center">
                       Temp. Mínima<br>
                     <i class="icon-thermometer-empty" aria-hidden="true"></i><br>
                        <span class=""><?php echo $datos['tempMin']?><sup>o</sup>C</span>
                    </div>
                      <div class="col-xs-12"></div>
                    <div class="col-xs-4 col-xs-push-2 text-center">
                       Visibilidad<br>
                      <i class="icon-eye" aria-hidden="true"></i><br>
                        <span class=""><?php echo $datos['visibilidad'][0]['text'] ?></span>
                    </div>
                    
                    <div class="col-xs-4 col-xs-push-2 text-center">
                        Accesos<br>
                    <i class="icon-exit-door-symbol" aria-hidden="true"></i><br>
                        <span><?php echo $datos['accesos'][0]['text'] ?></span>
                    </div>
                      
                      <div class="col-xs-12" style="border-top:1px solid #ccc"><br></div>
                      <div class="col-xs-5 text-center">
                          <i class="icon-ski-remontes" aria-hidden="true"></i><br>
                      <?php echo _("Remontes Abiertos")?></div>
                      <div class="col-xs-7 text-left">
                        <span data-title="REMONTES ABIERTOS">
                            <?php if ($datos['remontes'][0]['text'] != ''){
                         echo $datos['remontes'][0]['text']; } else{} ?>
                        
                         <?php if ($datos['remontes'][1]['text'] != ''){
                         echo '<br>'.$datos['remontes'][1]['text']; } else{} ?>
                             
                             <?php if ($datos['remontes'][2]['text'] != ''){
                         echo '<br>'.$datos['remontes'][2]['text']; } else{} ?>
                            
                             
                       </span>
                    </div>
                      <div class="col-xs-12"></div>
                      
                        <div class="col-xs-5 text-center">
                          
                           <i class="icon-ski-remontes" aria-hidden="true"></i><br>  <?php echo _("Telesqui Abiertos")?></div>
                             <div class="col-xs-7 text-left">
                         <span><?php if ($datos['telesqui'][0]['text'] != ''){
                         echo $datos['telesqui'][0]['text']; } else{} ?>
                        
                         <?php if ($datos['telesqui'][1]['text'] != ''){
                         echo '<br>'.$datos['telesqui'][1]['text']; } else{} ?>
                             
                             <?php if ($datos['telesqui'][2]['text'] != ''){
                         echo '<br>'.$datos['telesqui'][2]['text']; } else{} ?>
                             
                             <?php if ($datos['telesqui'][3]['text'] != ''){
                         echo '<br>'.$datos['telesqui'][3]['text']; } else{} ?>
                             
                             
                         </span>
                    </div>
 <div class="col-xs-12" style="border-top:1px solid #ccc"><br></div>
 <div class="col-xs-4 text-center">
                     <?php echo _("espesor Máx.")?><br><i class="icon-max" aria-hidden="true"></i>  <br>
                      <span data-title="ESPESOR MAXIMO" ><?php echo $datos['espesorMax'] ?> cm</span>
                    </div>
                      
                       <div class="col-xs-4 text-center">
                           <?php echo _("espesor Mín.")?><br>
                         <i class="icon-min" aria-hidden="true"></i>  <br>
                                        <span data-title="ESPESOR MINIMO"><?php echo $datos['espesorMin'] ?> cm</span>
                    </div>
                      
                      
                                           
                        
                       <div class="col-xs-4 text-center">
                           <?php echo _("Tipo de Nieve")?><br>
                           <i class="icon-clima_8" aria-hidden="true"></i> <br>
                                      <span data-title="KM ESQUIABLES"><?php echo $datos['tipoDeNieve'][0]['text'] ?></span>
                            
                    </div>
                        
                                      
                        
                       <div class="col-xs-4 col-xs-push-2 text-center">
                           <?php echo _("Km esquiables")?><br>
                                     <i class="icon-esquiables" aria-hidden="true"></i> <br>
                                      <span data-title="KM ESQUIABLES"><?php echo $datos['kmEsquiables'] ?></span>
                    </div>
                      
                      
                         <div class="col-xs-4 col-xs-push-2 text-center">
                             <?php echo _("Total pistas abiertas")?><br>
                                     <i class="icon-pistasabiertas" aria-hidden="true"></i>   <br>
                                          <span data-title="PISTAS ABIERTAS"><?php echo $datos['totalPistasAbiertas'] ?></span>
                    </div>
                      
                      <div class="col-xs-12">
                          <h3>Pistas Abiertas: </h3>
                          <?php
foreach ($pistas as $pista){ ?>
                          <div class="col-xs-12 col-sm-6 col-md-4"><h5><?php echo $pista['text']?></h5></div>

<?php }
?>
                      </div>
                      
                      
                       <div class="col-xs-12">
                          <h3>Instalaciones Abiertas: </h3>
                          <?php
foreach ( $openinstalaciones as $open){ ?>
                          <div class="col-xs-12 col-sm-6 col-md-4"><h5><?php echo $open['text']?></h5></div>

<?php }
?>
                      </div>
                      
                      <?php if ($datos['notas'] != ''){?>
                       <div class="col-xs-12">
                          <h3>Observaciones: </h3>
                                                   <p><?php echo  $datos['notas']?></p>


                      </div> 
                          <?php }?>
                </div>
               
                  
                        
             
                
            </div>
          
        </div>
    </div>
</section>



<script>
    
    
    jQuery(function(){


    $('[data-toggle="tooltip"]').tooltip(); 
/*        jQuery('#myCarousel').carousel({
          interval: 4000,
          pause: hover
        });*/
        
    });
</script>

<script>
 var config = {"url":"<?php echo $ROOT?>services/widget_nieve.php","target":".carouselNieve","fondo":"#b4b4b9","fuente1":"#fff","fuente2":"#fff"};
        parte_nieve.config(config);
        parte_nieve.init();
        </script>