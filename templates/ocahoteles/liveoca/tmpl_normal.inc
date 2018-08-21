<header class="intro-header">
    
    <div id="carousel-home" class="carousel slide " data-ride="carousel" data-interval="4000">

        <div class="carousel-inner" role="listbox">
            
            
                <div class="item active">
                   <div class="row ">
                       <div class="col-md-12 fill-40 fill-before-shadow" style="background-image: url('http://ocahotels.com/images/liveoca/liveoca-home.jpg')"></div>
                   </div>
               </div>
         
            
            <div class="carousel-caption">
                <h2 class="text-uppercase txt-220"><?php echo $titulo?></h2>
                <h3 style="font-weight: 300"><?php echo $datos['longNameTemp']?></h3>
            </div>
            
        </div>
        
      

    </div>
    
</header>
    
    <?php include(getTmpl("tmpl_buscador_horizontal","main")) ?>
<section class="pd-t-50 pd-b-50 bck-color-gris">
    <div class="container content-interior">
        <div class="row">
            <div class="col-xs-12">
                <h3>LIVEOCA</h3>
              
                <p><?php echo _(" Gracias a nuestro programa <strong>LIVEOCA</strong>, nuestros clientes pueden beneficiarse de un <strong>descuento especial del 8%</strong> sobre el precio la habitación a través de reserva online en cualquiera de nuestros hoteles Oca España.<p><p> Para ello solo tiene que completar el cuestionario que encontrará a continuación:")?>
                   
                </p>
                  <div class="col-xs-12 col-sm-8 col-sm-push-2 col-md-8 col-md-push-2 col-lg-6 col-lg-push-3">
               <!-- BEGIN Podio web form -->
<script src="https://podio.com/webforms/19127686/1287536.js"></script>
<script type="text/javascript">
  _podioWebForm.render("1287536")
</script>
<noscript>
  <a href="https://podio.com/webforms/19127686/1287536" target="_blank">Por favor, rellena el formulario</a>
</noscript>
 
<!-- END Podio web form -->
            </div>
        </div>
    </div>
    
</section>
<?php GestionTemplates::getTmplInclude("tmpl_newsletter","main") ?>



