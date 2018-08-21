<style type="text/css">
    
   .pet{
    text-align: left;
    position: absolute;
    right: 0;
    bottom: 0;
    }
    .pet img{
          display: inline-block;
        max-width: 140px;
    }

@media (min-width: 576px) { 
    .pet{
    text-align: left;
    position: absolute;
    right: 0;
    bottom: 0;
    }
    .pet img{
          display: inline-block;
        max-width: 130px;
    }
}

@media (min-width: 768px) { 
.pet{
    text-align: left;
    position: absolute;
    right: 0;
    bottom: 0;
    }
     .pet img{
           display: inline-block;
        max-width: 160px;
    }}


@media (min-width: 992px) {  
.pet{
    text-align: left;
    position: absolute;
    right: 0;
    bottom: 0;
    }
    .pet img{
          display: inline-block;
        max-width: 180px;
    }}

@media (min-width: 1200px) { 
      .pet{
    text-align: left;
    position: absolute;
    right: -10%;
    bottom: 0;
    }
        .pet img{
            display: inline-block;
        max-width: 180px;
    }}





   

</style>
    <!-- Sojern Container Tag cp_v1_js, Pixel Version: 1 -->
<script>
(function () {
/* Please fill the following values. */
var params = {
hpid: "<?php echo $datos['trackingId']?>", /* Property ID */
pt: "HOME_PAGE" /* Page Type - HOME_PAGE or PRODUCT or TRACKING */
};
/* Please do not modify the below code. */
var paramsArr = [];
for(key in params) { paramsArr.push(key + '=' + encodeURIComponent(params[key])) };
var pl = document.createElement('script');
pl.type = 'text/javascript';
pl.async = true;
pl.src = "https://beacon.sojern.com/pixel/cp/165?f_v=cp_v1_js&p_v=1&" + paramsArr.join('&');
(document.getElementsByTagName('head')[0] ||
document.getElementsByTagName('body')[0]).appendChild(pl);
})();
</script>
<!-- End Sojern Tag -->
    
    <?php if (count($datos['galeria'])>0)  { ?>
<header class="intro-header">
    
    <div id="carousel-home" class="carousel slide slide-hotel" data-ride="carousel" data-interval="6000">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <?php 
            $j=0;
            foreach($datos['galeria'] as $foto) { 
                $active="";
                if ($j==0) {
                    $active = " active";
                }
            ?>
          <!--  <li data-target="#carousel-home" data-slide-to="<?php echo $j?>" class="<?php echo $active?> fill-galery" style="background-image: url('<?php echo $foto ?>')"></li> -->
            
            <?php 
                    
                  $j++;
                } ?>
            
        </ol>

        <div class="carousel-inner" role="listbox">
            <?php
                $i=0;
                foreach($datos['galeria'] as $foto) { 
                $active="";
                if ($i==0) {
                    $active = " active";
                }
                $i++;
            ?>
                <div class="item <?php echo $active?>">
                   <div class="row ">
                       <div class="col-md-12 fill fill-before-shadow" style="background-image: url('<?php echo $foto ?>')"></div>
                   </div>
               </div>
            <?php                         
               } ?>

           <?php if ($datos['petfriendly'] == 1){
               if ($datos['duerming'] == 1){
                   ?>   <div class="col-xs-12 pet"> <a href="#nosinti"><img src="https://ocahotels.com/images/duerming-mascotas.png" class="img-responsive" alt='<?php echo _("Este establecimiento admite mascotas") ?>' title='<?php echo _("Este establecimiento admite mascotas") ?>'></a>
                       </div><?php
               }
               else{ ?> 
                  <div class="col-xs-12 pet"> <a href="#nosinti"><img src="https://ocahotels.com/images/oca-mascotas.png" class="img-responsive" alt='<?php echo _("Este establecimiento admite mascotas") ?>' title='<?php echo _("Este establecimiento admite mascotas") ?>'></a>
                       </div><?php
                   
                   
               }?>
          <?php }?>
             <div class="carousel-caption">
                 <div class="title-box">
                    <h2>
                        <?php if (isset($titulo) && $titulo!='') {
                            echo $titulo;
                        } else { ?>
                            <?php echo $datos['longNameTemp'] ?>

                        <?php } ?>
                    </h2>

                    <?php if (isset($datos['servicio']) && $datos['servicio']!='') { ?>
                        <p><?php echo $datos['servicio'] ?></p>
                    <?php } ?>
                </div>

             </div>
            
        </div>
       
    </div>
    
</header>
<?php } ?>

<?php 
if(($datos['shortName']) === '666666'){
    
}
else{
if(($datos['longNameTemp']) === 'Manzaneda') {
   //GestionTemplates::getTmplInclude("tmpl_buscador_horizontal_manzaneda","main",$datos); 
    GestionTemplates::getTmplInclude("tmpl_buscador_horizontal","main",$datos); 
}
else {
    GestionTemplates::getTmplInclude("tmpl_buscador_horizontal","main",$datos); 
    
}}?>

