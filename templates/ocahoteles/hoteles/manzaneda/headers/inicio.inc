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
            
                break;
                } ?>
            
             
            
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

<?php GestionTemplates::getTmplInclude("tmpl_buscador_horizontal","main",$datos) ?>
<?php //GestionTemplates::getTmplInclude("tmpl_action_premium_v2","main",$datos) ?>
