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
                       <div class="col-md-12 fill-40" style="background-image: url('<?php echo $foto ?>')"></div>
                   </div>
               </div>
            <?php } ?>
            
            
                <div class="carousel-caption">
                     <h2 class="text-uppercase txt-220">WEBCAMS</h2>
                </div>
            
        </div>

    </div>
    
</header>

<?php GestionTemplates::getTmplInclude("tmpl_buscador_horizontal_manzaneda","main",$datos) ?>
<?php //GestionTemplates::getTmplInclude("tmpl_action_premium_v2","main",$datos) ?>

