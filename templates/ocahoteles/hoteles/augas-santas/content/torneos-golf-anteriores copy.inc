<section id="contenedor-hotel">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-push-8 ps-rel col-sidebar-right">
                <?php GestionTemplates::getTmplInclude("right_sidebar","hoteles",$datos) ?>
            </div>
                  <div class="col-md-8 col-md-pull-4 col-contenedor-hotel pd-r-80 pd-md-r-18 pd-l-0 pd-md-l-18 color-negro-texto">
        
        <?php



// Podio API
//error_reporting(E_ALL);
//ini_set('display_errors', 1);

$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);


include_once $_SERVER['DOCUMENT_ROOT'].'/_libs/podio/PodioAPI.php';

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



//$date = new DateTime();
//$today = print $date->format('d-m-Y');
//$plusDate= $date->modify('-10 days');

// Items PodioItem::filter(31060, array('limit' => 20, 'offset' => 20, 'sort_by' => 'created_on'));
//$collection = PodioItem::filter($app_id, array('filters'=> array('item_id'=>'ffdfs'),limit' => 10, 'sort_by' => 'created_on', 'sort_desc' => true,));
 

// Items
$collection = PodioItem::filter($app_id, array(
  'filters' => array('151463053'=> 2), 
    'sort_by'=> '150381938',
    'sort_desc' => true,
      'limit' => 40,
));


foreach ($collection as $item) {
    $id = $item->id;

    $obj = PodioItem::get($id);
    $obj_file = $obj->files[0];
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
    //$link = $ROOT .  $ROOT_LANG  . $datos['link_parse'] . "/torneo-golf/" . GestionTemplates::slugify($torneo["CAMPEONATO"]) . "/" . $torneo["ID"];
 $link2 = $ROOT .  $ROOT_LANG  . $datos['link_parse'] . "/torneo-golf/" . GestionTemplates::slugify($torneoTitle) ."/552/" . $id;


?>




   <div class="row mg-b-30">
                    <div class="col-xs-12 col-sm-2 text-center bck-color-blanco color-primario pd-t-10" style="min-height: 120px;">
                        <span class="txt-380 ln-h-11 mg-t-0"><?php  echo strftime("%d", strtotime($torneoIni));?></span><br>
                        <span class="txt-220 text-uppercase"><?php  echo strftime("%b", strtotime($torneoIni));?></span>
                    </div>
                    <div class="col-xs-12 col-sm-2 back-image-torneo" style="background-image: url('/devGolf/<?php echo $torneoCartelId ?>.jpg');">
                        
                    </div>
                    <div class="col-xs-12 col-sm-6 bck-color-blanco" style="min-height: 120px;">
                        <h3 class=" txt-240 mg-t-0 mg-b-0 pd-t-10 pd-b-10 pd-l-10 pd-r-10" style="margin-bottom: 0;padding-top: 10px;"><?php echo $torneoTitle ?></h3>
                        
                        <div class="mg-b-5 color-primario"><i class="icon-golf pd-l-15 txt-120"></i><span class="mg-t-0 mg-b-0 pd-l-10 font-light txt-110"><?php echo $torneoClase ?></span></div>
                      
                       
                        <i class="icon-tag  pd-l-15 txt-120 color-primario"></i><span class="mg-t-0 mg-b-0 pd-l-10 font-light  txt-110 color-primario"><?php echo $torneoModalidad ?></span>
                      
                    </div>
                    <div class="col-xs-12 col-sm-2 text-center bck-color-secundario pd-t-20" style="min-height: 120px;">
                        <a href="<?php echo $link2?>"><i class="icon-angle-right txt-500 font-bold color-blanco"></i></a>
                    </div>
                </div>
         
         
   
<?php


             };



?>

<div class="pdflink"><a href="https://ocahotels.com/hoteles/espana/lugo/panton/oca-augas-santas/torneos-golf">VER TORNEOS VIGENTES</a></div>
    </div>
     
        </div>
    </div>
    
    
    
     
</section>
<?php GestionTemplates::getTmplInclude("galeria_seccion","hoteles",$datos) ?>

<script>
    
    jQuery(document).ready(function() {
        
        $( "#fecha_inicio_torneos" ).datepicker({
           dateFormat: 'dd/mm/yy',
           onSelect: function(dateText) {
           }

        });

        jQuery( "#fecha_fin_torneos" ).datepicker({
            dateFormat: 'dd/mm/yy'
        });
    });
    

    
</script>