<?php
// inicializar idioma
$language = '';
if(isset($_REQUEST['language'])) {
  $language =  $_REQUEST['language'];
}

if($language=='es_ES') {
   $lang = 'es_ES'; 
   $ROOT_LANG = '';
} else {
   $lang = 'en_GB';
   $ROOT_LANG = 'en/';
   
};

?>
<section class="bck-color-blanco">
    <div class="container-fluid ">
        <div class="row boxes-destinos">
<?php 

$j=0;

$control_estilo=1;
$estilo="col-xs-12 col-sm-12 col-md-6 col-lg-5";
$estilo_par = 1;

$fila = current($datos);
while ($j<count($datos)) {
    
    if ($control_estilo<=2) {
        
        if ($estilo_par==1) {
            $estilo = "col-xs-12 col-sm-12 col-md-6 col-lg-7";
            $estilo_par=0;
        } else {
            $estilo = "col-xs-12 col-sm-12 col-md-6 col-lg-5 ";
            $estilo_par=1;
        }

        $control_estilo++;
        
    } else if($control_estilo>2 && $control_estilo<=5) {
       
        $estilo = "col-xs-12 col-sm-12 col-md-6 col-lg-4";
        if ($estilo_par==0) {
            $estilo_par=1;
        } else {
            $estilo_par = 0;
        }
       
        if ($control_estilo==5) {
            
            $control_estilo=1;
        } else {
            $control_estilo++;
        }
    } ?>
    

    <div class="<?php echo $estilo?>">
        <div class="text-center back-image5" style="margin-bottom:20px !important; background-image: url('<?php echo $fila['imagen']?>')">
             <a href="<?php echo $fila['link']?>" class="btn btn-primary-box  <?php echo $fila['class']?>" data-province="<?php echo $fila['data-province']?>"><?php 
             
           
if (($fila['province'])=='Maragogi'){
    echo 'Brasil' .'</br>'.  $fila['province'];
}
else { echo $fila['province'];
}
    
  
             
              ?></a>
        </div>
    </div>

<?php    
  
    $fila=next($datos);
    $j++;
}

?>
        </div>
    </div>
</section>
<script type="text/javascript">
    
    jQuery(document).ready(function () {
        jQuery(".filtro-destino" ).bind( "click",function(){
            
            var operacion = "hoteles";
            var province = jQuery(this).attr("data-province");
            var url = "<?php echo $ROOT?>services/ajax.php";
            var parametros = {operacion:operacion,province:province,language:"<?php echo $language ?>"};
            var offset = jQuery("#contenedor-boxes").offset();
           
            jQuery('html, body').animate({ scrollTop : offset.top -172 }, 'slow');
           
            jQuery("#contenedor-boxes").fadeOut(250,function(){
                loading.show(); 
                jQuery.ajax({
                   url: url,
                   type: "post",
                   dataType: 'html',
                   data:parametros,
                   success: function(data) {
                       jQuery("#loading").fadeOut(350,function(){
                           jQuery("#contenedor-boxes").html(data).fadeIn();
                       });
                   },
                   error: function(jqXHR,textStatus,errorThrown ) {

                   }
                }).done(function( data ) {
                });
            });

            return false;
             
        });
 
    });
</script>