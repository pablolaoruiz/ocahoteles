<section id="contenedor-hotel">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-push-8 ps-rel col-sidebar-right">
                <?php GestionTemplates::getTmplInclude("right_sidebar","hoteles",$datos) ?>
            </div>
            <div class="col-md-8 col-md-pull-4 col-contenedor-hotel pd-r-80 pd-md-r-18 pd-l-0 pd-md-l-18 color-negro-texto">
                <?php echo $content?>
            </div>
            
        </div>
    </div>
</section>
<?php GestionTemplates::getTmplInclude("galeria_seccion","hoteles",$datos) ?>

<?php 
if(($datos['longNameTemp'])!=='Grand Oca Maragogi')
    {
GestionTemplates::getTmplInclude("tmpl_action_premium_v2","main",$datos);
}
else {}
?>