<?php
$ctrlHotelDisplay->getHeader(); 
$ctrlHotelDisplay->getMenuNavegacion();
//$idTorneo = (int )$_GET["id"];


?>

<section id="contenedor-hotel">
    
    
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-push-8 ps-rel col-sidebar-right">
                <?php GestionTemplates::getTmplInclude("right_sidebar","hoteles",$datos_hotel) ?>
            </div>
         
            
             <?php




// Podio API
//error_reporting(E_ALL);
//ini_set('display_errors', 1);



// Client
//$client_id = 'devtorneos';
//$client_secret = 'LHc9wsYbqq9FpmqHXwhyV4NqWbEQY7fGqlyKMdXAKSu4AHgiCGc6tObyKkBVKX2F';

$client_id = 'torneosgolf';
$client_secret = 'RezhqLgvR4Q8DEl5xOv3nbbnzU0V1TTTRKy2MkRgjO5p9cyLXBiKCox9BWloDDIR';

// App
//$app_id = 19067829;
//$app_token = '37406bb5be884b51bc536c47e6b5e2b7';

$app_id = 19001849;
$app_token = '0ab11ac1250d47f28fd4fa32ffdf00fa';

// Authentication
Podio::setup($client_id, $client_secret);
Podio::authenticate_with_app($app_id, $app_token);

$uploadPath= $_SERVER['DOCUMENT_ROOT'].'/devGolf';
//echo $uploadPath;

//$date = new DateTime();
//$today = print $date->format('d-m-Y');
//$plusDate= $date->modify('-10 days');

// Items
$collection = PodioItem::filter($app_id, array(
  'filters' => array('item_id'=> $idTorneo), 
));


foreach ($collection as $item) {
    $id = $item->id;

    $torneoTitles = $item->fields['titulo'];
    $obj = PodioItem::get($id);
    $obj_file = $obj->files[0];
        $activo = $item->fields['activo']->humanized_value();
    //$file = PodioFile::get($obj_file->file_id);
    $torneoTitle = $item->fields['titulo']->humanized_value();
    $torneoClase = $item->fields['clase']->humanized_value();
    $torneoModalidad = $item->fields['modalidad']->humanized_value();
    $torneoCartel = $item->fields['imagen']->values;
    foreach ($torneoCartel as $torneoCartels){
    $torneoCartelId = $torneoCartels->id;
    $torneoCartelLink = $torneoCartels->link;
    $objPreCartel = PodioFile::get($torneoCartelId);
    $objCartel = $objPreCartel->get_raw();

    if (file_exists($uploadPath.'/'.$torneoCartelId.'.jpg')){}
    else{
    file_put_contents($uploadPath.'/'.$torneoCartelId.'.jpg', $objCartel );}

    };
    $torneoIniRaw = $item->fields['fecha-torneo']->humanized_value();
    $torneoIni = date('d-m-Y',  strtotime($torneoIniRaw));
    $torneoFinRaw = $item->fields['fecha-fin']->humanized_value();
    $torneoFin = date('d-m-Y',  strtotime($torneoFinRaw));
    $torneoInfo = $item->fields['contenido']->values;



?>






 

  <!-- replico estructura -->
  <div class="col-md-8 col-md-pull-4 col-contenedor-hotel pd-r-80 pd-md-r-18 pd-l-0 pd-md-l-18 color-negro-texto">
                <div class="row">
                    <div class="col-xs-12 mg-b-20">
                        <h2 class="mg-b-30 color-primario"><?php echo $torneoTitle ?></h2>
                       
                        <i class="icon-golf  mg-r-10 txt-140"></i><span class="mg-t-0 mg-b-0  font-light txt-110 mg-r-25"><?php echo $torneoClase ?></span>
                                     <i class="icon-tag  mg-r-10 txt-140"></i><span class="mg-t-0 mg-b-0  font-light  txt-110"><?php echo $torneoModalidad ?></span>
                       
                    </div>
                    <div class="col-xs-12 mg-b-10">
                        <!-- imagen del torneo -->
                     
                                <img src="/devGolf/<?php echo $torneoCartelId ?>.jpg" width="100%" alt="<?php echo $torneoTitle ?>">
                                            
                    </div>

                    
                    <div class="col-xs-12 mg-b-30 mg-t-10">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 txt-120">
                                <?php echo date("d M Y", strtotime($torneoIni));?> - <?php echo date("d M Y", strtotime($torneoFin));?>
                            </div>
                            
                        </div>
                    </div>
                    
                    <div class="col-xs-12 mg-b-30 contenido-torneo">
                        <hr>
                        <h4>Descargas</h4><br><br>
                             <?php
        $torneoDocs = PodioFile::get_for_app( $app_id, $attributes = array('attached_to'=> 'item')); ?>
                            <?php




             foreach ($torneoDocs as $documentos){


                 if (($documentos->context['id'] == $id)){
                  //echo $documentos->context['id'];
                  //echo '-/-';
                 //echo $documentos->context['title'];
                  //echo '-/-';
                 echo '<a href="/devGolf/'.$documentos->name.'" target="_blank">'.$documentos->name.'</a><br>';
                 //echo '-/-';
                 //echo $documentos->file_id;
                 //echo '<br>';
             }

               $objPreDocs = PodioFile::get($documentos->file_id);
    $objDocs = $objPreDocs->get_raw();

    if (file_exists($uploadPath.'/'.$documentos->name.'.pdf')){}
    else{
    file_put_contents($uploadPath.'/'.$documentos->name.'.pdf', $objDocs );}
                 }

         ?>
                        
                  
                    <hr> <?php 
                  if ($activo == 'SI'){?>
                    <h4><?php echo _("Inscripción")?></h4><br>
                    <h3>SERVICIO NO DISPONIBLE TEMPORALMENTE INSCRIPCIONES:<br> <a href="tel:+34982456705">982 456 705</a></h3>
                    <!--h2 class="pdflink"><a href="https://podio.com/webforms/19001877/1280263?fields[torneo]=<?php echo $idTorneo ?>" target="_blank">ON-LINE</a></h2-->
                  <hr> <?php } else {}?>
                    <div class="col-xs-12 contenido-torneo">
                          <?php echo $torneoInfo ?>
                    </div>
                    <hr>
                    <h4>
                    
                </div>
            </div> </div>
  <!-- fin nuevo -->

<?php



  
             };




?>

  
  
            
        </div>
    </div>

</section>

<?php GestionTemplates::getTmplInclude("tmpl_newsletter","main") ?>

   