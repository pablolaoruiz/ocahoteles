<?php
global $reserva;
?>
<section id="contenedor-hotel">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-push-8 ps-rel col-sidebar-right">
                <?php GestionTemplates::getTmplInclude("right_sidebar","hoteles",$datos) ?>
            </div>
            <div class="col-md-8 col-md-pull-4 col-contenedor-hotel pd-r-80 pd-md-r-18 pd-l-0 pd-md-l-18 color-negro-texto">
                <h3>Reserva de forfait</h3>
                <?php
                    //diferenciar si la reserva se hizo con éxito o no
                    if ($reserva['status']=='1') { ?>
                    <p>Gracias por confiar en ocahotels.com<br/>
                    <?php echo $reserva['nombre'] . ' ' . $reserva['apellidos']?>. La reserva de su forfait se ha realizado con éxito.<br/>No olvide recogerlo en la recepción de los apartamentos presentando el DNI. 
                    </p>
                
                <?php } else { ?>
                        
                    <p>Error durante la reserva. Por favor vuelva a intentarlo o pónganse en contacto con nosotros en el <b>988 30 90 90</b></p>
                    
                <?php }?>
               
            </div>
            
        </div>
    </div>
</section>