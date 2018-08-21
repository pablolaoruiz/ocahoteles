<?php include(getTmpl("tmpl_buscador_horizontal","main")) ?>
<section class="pd-t-50 pd-b-50 bck-color-gris">
    <div class="container content-interior">
        <div class="row">
            <div class="col-xs-12">
                <h3><?php echo _("Lo sentimos")?></h3>
                
                <p>
                   La página que buscas no existe, pero puedes seguir descubriendo Oca Hotels.
                </p>
                
                
            </div>
        </div>
    </div>
    
</section>

<?php include(getTmpl("tmpl_pestanas","main")) ?>

<div class="ps-rel">
    
    <div id="loading" style="display: none;">
        <img src="<?php echo $ROOT?>images/loading.gif"  alt="Loading...">
    </div>
    <div id="contenedor-boxes">

    <?php GestionTemplates::getTmplInclude("tmpl_destinos","boxes",$destinos);?>

    </div>
    
</div>


<?php include(getTmpl("tmpl_newsletter","main")) ?>

