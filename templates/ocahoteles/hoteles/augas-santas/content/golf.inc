<section id="contenedor-hotel">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-push-8 ps-rel col-sidebar-right">
          
                <h3 class="mg-b-20  pd-sm-l-10 pd-sm-r-10"><?php echo _("Calendario de Torneos")?></h3>
         
                
                 <?php


// Podio API
                // echo $_SERVER['DOCUMENT_ROOT'];
error_reporting(E_ALL);
ini_set('display_errors', 1);

//$ch = curl_init();
//curl_setopt($ch, CURLOPT_SSLVERSION, 3);
//curl_setopt($ch, CURLOPT_TIMEOUT, 0); //Wait forever
//curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);


//include_once $_SERVER['DOCUMENT_ROOT'].'/_libs/podio/PodioAPI.php';

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
  'filters' => array('151463053'=> 1), 
    'sort_by'=> '150381938',
    'sort_desc' => false,
    'limit' => 30
));


foreach ($collection as $item) {
    $id = $item->id;

    $obj = PodioItem::get($id);
    $obj_file = $obj->files[0];
    //$file = PodioFile::get($obj_file->file_id);
    $torneoTitle = $item->fields['titulo']->humanized_value();
   

    $torneoIniRaw = $item->fields['fecha-torneo']->humanized_value();
    $torneoIni = date('d-m-Y',  strtotime($torneoIniRaw));
    $torneoFinRaw = $item->fields['fecha-fin']->humanized_value();
    $torneoFin = date('d-m-Y',  strtotime($torneoFinRaw));
   
    //$link = $ROOT .  $ROOT_LANG  . $datos['link_parse'] . "/torneo-golf/" . GestionTemplates::slugify($torneo["CAMPEONATO"]) . "/" . $torneo["ID"];
 $link2 = $ROOT .   $datos['link_parse'] . "/torneo-golf/" . GestionTemplates::slugify($torneoTitle) ."/552/" . $id;


?>
                
                
               
                
                <div class="row mg-b-30 pd-sm-l-10 pd-sm-r-10">
                    <div class="col-xs-3 col-sm-3 text-center bck-color-blanco color-primario pd-t-10" style="min-height: 85px;">
                        <span class="txt-260 ln-h-11 mg-t-0"><?php  echo strftime("%d", strtotime($torneoIni));?></span><br>
                        <span class="txt-140 text-uppercase"><?php  echo strftime("%b", strtotime($torneoIni));?></span>
                    </div>

                    <div class="col-xs-7 col-sm-7 bck-color-blanco" style="min-height: 85px;">
                        <h3 class=" txt-120 mg-t-15 mg-b-0 pd-t-10 pd-b-10 pd-l-10 pd-r-10" style="margin-bottom: 0;padding-top: 10px;"><?php echo $torneoTitle ?></h3>
                       
                    </div>
                    <div class="col-xs-2 col-sm-2 text-center bck-color-secundario pd-t-12" style="min-height: 85px;">
                        <a href="<?php echo $link2 ?>"><i class="icon-angle-right txt-400 font-bold color-blanco"></i></a>
                    </div>
                </div>
                

                    
                    <?php 
                    
    };
                    ?>


              
                
            </div>
            <div class="col-md-8 col-md-pull-4 col-contenedor-hotel pd-r-80 pd-md-r-18 pd-l-0 pd-md-l-18 color-negro-texto">
                <?php echo $content ?>
            </div>
            
        </div>
    </div>
    

</section>
<?php GestionTemplates::getTmplInclude("galeria_seccion","hoteles",$datos) ?>