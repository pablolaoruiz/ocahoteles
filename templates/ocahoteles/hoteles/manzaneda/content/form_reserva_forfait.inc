<?php

if($datos['misma_temporada']) { ?>
<table class="table mg-t-40">
    <tr class="bck-color-primario color-blanco ">
        <th class="font-light">ADULTOS</th>
        <th class="font-light">NIÑOS</th>
        <th class="font-light">PREINFANTIL</th>
        <th class="text-right font-bold">TOTAL</th>
    </tr>
    <tr>
            <td class="tdleft"><?php echo $datos['adultos']?> €</td>
            <td><?php echo $datos['ninos']?> €</td>
            <td><?php echo $datos['preinfantil']?> €</td>
            <td class="text-right"><b><?php echo $datos['total']?> €</b></td>
    </tr>
    <tr>
    <td><b><?php
      $fechaokpre = $_POST['fecha'];
      $dt   = new DateTime();
  $date = $dt->createFromFormat('d/m/Y', $fechaokpre);
  $fechaok = $date->format('Y-m-d');
       echo $fechaok ?></b></td></tr>
</table>
<form class="booking_form" action="javascript:reservar_forfait();" method="post">
        <h3 class="txt-120">TUS DATOS</h3>

        <div class="row">
            <div class="col-md-12 mg-b-15">
              <input type="hidden" name="dateok" required class="form-control" value="<?= $fechaok ?>">
                <input type="text" name="dni" required class="form-control" placeholder="DNI">
            </div>
            <div class="col-md-12 mg-b-15">
                <input type="email" name="email" required class="form-control" placeholder="Email">
            </div>
            <div class="col-md-12 mg-b-15">
                <input type="email" name="rep_email" required class="form-control" placeholder="Repite email">
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 mg-b-15">
                <input type="text" name="nombre" required class="form-control" placeholder="Nombre">
            </div>
            <div class="col-md-12 mg-b-15">
                <input type="text" name="apellidos" required class="form-control" placeholder="Apellidos">
            </div>
            <div class="col-md-12 mg-b-15">
                <input type="text" name="telefono" required class="form-control" placeholder="Teléfono">
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <p>Métodos de pago aceptados <img src="<?php echo $ROOT ?>images/9999minicon-visa.jpg"> <img src="<?php echo $ROOT ?>images/9999minicon-mastercard.jpg"> <img src="<?php echo $ROOT ?>images/9999minicon-mastercard2.jpg"></p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 mg-t-10">
                <input type="checkbox" required> He leído y acepto la <a href="http://ocahotels.com/docs/legal/aviso-legal-manzaneda.pdf" target="_blank">política de privacidad</a>.<br/>
                <input type="checkbox" required> Sé que tengo que recoger las tarjetas en las oficinas de recepción de los apartamentos Galicia y acepto pagar 3 € de fianza en el momento de recoger las tarjetas.<br/>

            </div>
        </div>

                <?php
                        if($datos['$adulto0']!=0 || $datos['$nino0']!=0 || $datos['$preinfantil0']!=0) {
                                echo '<input type="checkbox" required> <strong>Comprendo que el pase anual tiene validez para la temporada de invierno 2017/2018. Nos pondremos en contacto para indicarle los pasos para su activación.</strong>';
                        }
                ?>
        <div class="row">
            <div class="col-md-12">
                 <div class="indicacion">(*) Datos obligatorios</div>
            </div>
            <div class="col-md-12 mg-t-20">
                <button type="submit" class="btn btn-success form-control">FINALIZAR RESERVA <span class="mg-l-10 font-bold icon-angle-right"></span></button>
            </div>
        </div>

</form>
<?php }
	else {
		echo '<div style="text-align:center;margin:20px 0;color:#f00;">Para dias que salten entre temporada alta y baja debe hacer una reserva por día. Disculpe las molestias.</div>';
	}
?>

<script type="text/javascript">

    function reservar_forfait() {
        jQuery.post("<?php echo $ROOT?>services/forfait.php?operacion=add_reserva",jQuery("#form_reservas_forti").serialize()+'&'+jQuery(".booking_form").serialize(),function(data) {

            document.location.href='<?php echo $ROOT ?>compra-forfait/?id='+data;
        });
    }

</script>
