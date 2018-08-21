<!-- Sojern Container Tag cp_v1_js, Pixel Version: 1 -->
<script>
(function () {
/* Please fill the following values. */
var params = {
hpid: "<?php echo $datos['trackingId']?>", /* Property ID */
pt: "TRACKING" /* Page Type - HOME_PAGE or PRODUCT or TRACKING */
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

<header class="intro-header">
    
    <div id="carousel-home" class="carousel slide " data-ride="carousel" data-interval="4000">

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
                       <div class="col-md-12 fill-40 fill-before-shadow" style="background-image: url('<?php echo $foto ?>')"></div>
                   </div>
               </div>
            <?php } ?>
            
            <div class="carousel-caption">
                <h2 class="text-uppercase txt-220"><?php echo $titulo?></h2>
                <h3 style="font-weight: 300"><?php echo $datos['longNameTemp']?></h3>
            </div>
            
        </div>
        
        <?php if (count($datos['galeria'])>1) { ?>
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#carousel-home" role="button" data-slide="prev">
            <span class="icon-angle-left txt-300" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-home" role="button" data-slide="next">
            <span class="icon-angle-right txt-300" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <?php } ?>

    </div>
    
</header>




<?php 

if(($datos['longNameTemp']) === 'Manzaneda') {
   GestionTemplates::getTmplInclude("tmpl_buscador_horizontal_manzaneda","main",$datos); 
}
else {
    GestionTemplates::getTmplInclude("tmpl_buscador_horizontal","main",$datos); 
    
}?>