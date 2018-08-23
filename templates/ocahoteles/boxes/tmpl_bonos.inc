<?php 

// inicializar idioma
$language = '';
if(isset($_REQUEST['language'])) {
  $language =  $_REQUEST['language'];
}

if($language=='es_ES') {
   $lang = 'es_ES'; 
   $ROOT_LANG = '';
   $bonos = 'BONOS REGALO';
   $alojamiento = 'BONOS REGALO con ALOJAMIENTO';
} else {
   $lang = 'en_GB';
   $ROOT_LANG = 'en/';
    $bonos = 'GIFT VOUCHERS';
   $alojamiento = 'GIFT VOUCHERS with ACCOMMODATION';
   
}; 

?>
<section class="bck-color-blanco">
    <div class="container">
        
        <div class="row boxes-destinos">
            
                 <div class="row mg-b-40">
                      <div class="col-xs-10 col-xs-push-1 col-sm-4 col-sm-push-0">
                          <div class="text-center back-image5" style="margin-bottom:20px !important;  background-image: url('<?php echo $ROOT ?>images/hoteles/rio-pambre/rio-pambre-home.jpg'); background-position:center;"></div>                          
                      </div>
                      
                        <div class="col-xs-12 col-sm-6 col-sm-push-1"><h2 class="text-center"><?php echo $bonos ?> RÍO PAMBRE</h2><br>
                    
                            <a href="https://www.centrotel.es/ocahotels/gifts.asp?idEstablishmentSRT=6&idPT=7" target="_blank" class="pdflink"><strong><?php echo $bonos ?></strong></a><br>
                          <a href="https://www.centrotel.es/ocahotels/gifts.asp?idEstablishmentSRT=6&idPT=1,3,6" target="_blank" class="pdflink"><?php echo $alojamiento ?></a>
                                           
                        </div></div>
            
            
         <div class="row mg-b-40">
                      <div class="col-xs-10 col-xs-push-1 col-sm-4 col-sm-push-0">
                          <div class="text-center back-image5" style="margin-bottom:20px !important;  background-image: url('<?php echo $ROOT ?>images/hoteles/rocallaura/rocallaura-home.jpg'); background-position:center;"></div>                          
                      </div>
                      
                        <div class="col-xs-12 col-sm-6 col-sm-push-1"><h2 class="text-center"><?php echo $bonos ?> ROCALLAURA</h2><br>
                    
                            <a href="https://www.centrotel.es/ocahotels/gifts.asp?idEstablishmentSRT=5&idPT=7&head=0" target="_blank" class="pdflink"><strong><?php echo $bonos ?></strong></a><br>
                          <a href="https://www.centrotel.es/ocahotels/gifts.asp?idEstablishmentSRT=5&idPT=3,1,6&head=0" target="_blank" class="pdflink"><?php echo $alojamiento ?></a>
                                           
                        </div></div>
            
                 <div class="row mg-b-40">
                      <div class="col-xs-10 col-xs-push-1 col-sm-4 col-sm-push-0">
                          <div class="text-center back-image5" style="margin-bottom:20px !important;  background-image: url('<?php echo $ROOT ?>images/hoteles/augas-santas/augas-santas-home.jpg'); background-position:center;"></div>                          
                      </div>
                      
                        <div class="col-xs-12 col-sm-6 col-sm-push-1"><h2 class="text-center"><?php echo $bonos ?> AUGAS SANTAS</h2><br>
                    
                            <a href="https://www.centrotel.es/ocahotels/gifts.asp?idEstablishmentSRT=3&idPT=7&head=0" target="_blank" class="pdflink"><strong><?php echo $bonos ?></strong></a><br>
                          <a href="https://www.centrotel.es/ocahotels/gifts.asp?idEstablishmentSRT=3&idPT=3,1,6&head=0" target="_blank" class="pdflink"><?php echo $alojamiento ?></a>
                                           
                        </div></div>
                  
                  
                  
                   <div class="row mg-b-40">
                      <div class="col-xs-10 col-xs-push-1 col-sm-4 col-sm-push-0">
                          <div class="text-center back-image5" style="margin-bottom:20px !important;  background-image: url('<?php echo $ROOT ?>images/hoteles/vila-de-allariz/vila-de-allariz-home.jpg'); background-position:center;"></div>                          
                      </div>
                      
                        <div class="col-xs-12 col-sm-6 col-sm-push-1"><h2 class="text-center"><?php echo $bonos ?> VILLA DE ALLARIZ</h2><br>
                    
                            <a href="https://www.centrotel.es/ocahotels/gifts.asp?idEstablishmentSRT=1&idPT=2,4,5&head=0" target="_blank" class="pdflink"><strong><?php echo $bonos?></strong></a><br>
                          <a href="https://www.centrotel.es/ocahotels/gifts.asp?idEstablishmentSRT=1&idPT=3,1,6&head=0" target="_blank" class="pdflink"><?php echo $alojamiento ?></a>
                                           
                        </div></div>
                  
                  
                   <div class="row mg-b-40">
                      <div class="col-xs-10 col-xs-push-1 col-sm-4 col-sm-push-0">
                          <div class="text-center back-image5" style="margin-bottom:20px !important;  background-image: url('<?php echo $ROOT ?>images/hoteles/palacio-de-la-llorea/palacio-de-la-llorea-home.jpg'); background-position:center;"></div>                          
                      </div>
                      
                        <div class="col-xs-12 col-sm-6 col-sm-push-1"><h2 class="text-center"><?php echo $bonos ?> PALACIO DE LA LLOREA</h2><br>
                    
                            <a href="https://www.centrotel.es/ocahotels/gifts.asp?idEstablishmentSRT=4&idPT=7&head=0" target="_blank" class="pdflink"><strong><?php echo $bonos ?></strong></a><br>
                          <a href="https://www.centrotel.es/ocahotels/gifts.asp?idEstablishmentSRT=4&idPT=3,1,6&head=0" target="_blank" class="pdflink"><?php echo $alojamiento ?></a>
                                           
                        </div></div>
            
        </div>
        
    </div>
</section>
