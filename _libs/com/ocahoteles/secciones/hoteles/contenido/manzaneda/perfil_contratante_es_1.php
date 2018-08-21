

<?php


//include_once 'http://www.ocahotels.com/_libs/podio/PodioAPI.php';

// Client
$client_id = 'perfilcontratantemanzaneda';
$client_secret = 'w9a91loFAxy4976UttQfxJ7aCZrZwt9cEo3zu0auU1OgQZuKAXZGqSyQHZDrxC7H';

// App
$app_id = 19127786;
$app_token = 'affc300fcd354a6d8bc97a06ba013ac7';

// Authentication
Podio::setup($client_id, $client_secret);
Podio::authenticate_with_app($app_id, $app_token);

// Make sure errors are output to the screen
ini_set('display_errors', '1');

// Items
$collectionDireccion = PodioItem::filter(
$app_id, array(
"sort_desc" => FALSE,
"sort_by" => "created_on",
"filters" => array(
"151536335" => 1
)));

$collectionEjecucion = PodioItem::filter(
$app_id, array(
"sort_desc" => FALSE,
"sort_by" => "created_on",
"filters" => array(
"151536335" => 2
)));

$collectionEscuela = PodioItem::filter(
$app_id, array(
"sort_desc" => FALSE,
"sort_by" => "created_on",
"filters" => array(
"151536335" => 3
)));

?>
<table class="table mg-t-50">
    <tr>
        <th  colspan="4" class="bck-color-primario color-blanco"><?php echo _("Título")?></th>
    </tr>
    <tr>
        <td colspan="4" class="bck-color-blanco">
            <p>
              Explotación en exclusiva del servicio de Escuela de esquí y snowboard en la Estación de montaña de
Manzaneda.

            </p>
        </td>
    </tr>
    <tr class="bck-color-secundario color-blanco ">
        <th class="text-center font-light">
            <?php echo _("Fecha de publicación")?>
        </th>
        <th class="text-center font-light">
            <?php echo _("Fecha límite presentación de ofertas")?>
        </th>
       
       <th class="text-center font-light">
            <?php echo _("Proyecto")?>
        </th>

    </tr>
    <tr  class="bck-color-blanco">
        <td class="text-center">
           11/09/2017
        </td>
        <td class="text-center">
          02/10/2017
        </td>
       
       <td class="text-center">
           Solicitar info a: <br/><a href="mailto:contratacion@manzaneda.com">contratacion@manzaneda.com</a>
        </td>

    </tr>

    <?php
    foreach ($collectionEscuela as $item) {

        $id = $item->id;
        $proyecto = $item->fields[0]->values;
        $titulo = $item->fields[1]->values;
        $fecha = $item->fields[2]->values;
        $filename = $item->fields[3]->values;

    ?>

    <tr  class="bck-color-blanco">
      <td colspan="4">
          <a href="http://ocahotels.com/docs/manzaneda/perfil-contratante/<?php echo $filename ?>" target="_blank"><?php echo $titulo ?> ::    <?php echo $fecha['start']->format('<\b\>d-m-Y<\/b\> \&\n\b\s\p\; ') ?></a>
      </td>

      <?php } ; ?>


    </tr>

</table>

<table class="table mg-t-50">
    <tr>
        <th  colspan="4" class="bck-color-primario color-blanco"><?php echo _("Título")?></th>
    </tr>
    <tr  class="bck-color-blanco">
        <td colspan="4">
            <p>
                Pliego de condiciones generales que ha de regir la contratación,
                en libre concurrencia, del contrato para la dirección de la obra,
                dirección de ejecución de la obra civil e instalaciones y
                la coordinación de seguridad y salud en el proyecto constructivo
                del sistema de innivacion en la estación de montaña oca nova manzaneda
            </p>
        </td>
    </tr>
    <tr class="bck-color-secundario color-blanco ">
        <th class="text-center font-light">
            <?php echo _("Fecha de publicación")?>
        </th>
        <th class="text-center font-light">
            <?php echo _("Límite adminisión")?>
        </th>
        <th class="text-center font-light">
            <?php echo _("Anuncio")?>
        </th>
       <th class="text-center font-light">
             <?php echo _("Pliego")?>
        </th>

    </tr>
    <tr  class="bck-color-blanco">
        <td class="text-center">
           06/04/2017
        </td>
        <td class="text-center">
            24/04/2017
        </td>
        <td class="text-center">
            <a target="_blank" href="<?php global $ROOT;echo $ROOT?>docs/manzaneda/41ff87194502e01d9aa67f20c6926318a9c8b406.pdf"><i class="icon-download"></i></a>
        </td>
       <td class="text-center">
             <a target="_blank" href="<?php global $ROOT;echo $ROOT?>docs/manzaneda/c9c93b80edffa1ae2971462ce143fd98a0414b88.pdf"><i class="icon-download"></i></a>
        </td>

    </tr>
<?php
foreach ($collectionDireccion as $item) {

    $id = $item->id;
    $proyecto = $item->fields[0]->values;
    $titulo = $item->fields[1]->values;
    $fecha = $item->fields[2]->values;
    $filename = $item->fields[3]->values;

?>

<tr  class="bck-color-blanco">
  <td colspan="4">
      <a href="http://ocahotels.com/docs/manzaneda/perfil-contratante/<?php echo $filename ?>" target="_blank"><?php echo $titulo ?> ::    <?php echo $fecha['start']->format('<\b\>d-m-Y<\/b\> \&\n\b\s\p\; ') ?></a>
  </td>

  <?php } ; ?>

</table>



<table class="table mg-t-50">
    <tr>
        <th  colspan="4" class="bck-color-primario color-blanco"><?php echo _("Título")?></th>
    </tr>
    <tr>
        <td colspan="4" class="bck-color-blanco">
            <p>
               ANUNCIO de licitación de proyecto INNIVACIÓN de la Estación

            </p>
        </td>
    </tr>
    <tr class="bck-color-secundario color-blanco ">
        <th class="text-center font-light">
            <?php echo _("Fecha de publicación")?>
        </th>
        <th class="text-center font-light">
            <?php echo _("Anuncio")?>
        </th>
        <th class="text-center font-light">
            <?php echo _("Pliegos")?>
        </th>
       <th class="text-center font-light">
            <?php echo _("Proyecto")?>
        </th>

    </tr>
    <tr  class="bck-color-blanco">
        <td class="text-center">
           28/12/2016
        </td>
        <td class="text-center">
           <a target="_blank" href="<?php global $ROOT;echo $ROOT?>docs/manzaneda/anuncio_innivacion.pdf"><i class="icon-download"></i></a> &nbsp;
            <a target="_blank" href="<?php global $ROOT;echo $ROOT?>docs/manzaneda/AnuncioDog.pdf"><i class="icon-download"></i></a>
        </td>
        <td class="text-center">
           <a target="_blank" href="<?php global $ROOT;echo $ROOT?>docs/manzaneda/pcp.pdf">PCP</a> |
           <a target="_blank" href="<?php global $ROOT;echo $ROOT?>docs/manzaneda/pptp.pdf">PPTP</a> |
           <a target="_blank" href="<?php global $ROOT;echo $ROOT?>docs/manzaneda/erratas_pcp.pdf">Fé de erratas PCP</a>
        </td>
       <td class="text-center">
           Solicitar info a: <br/><a href="mailto:contratacion@manzaneda.com">contratacion@manzaneda.com</a>
        </td>

    </tr>

    <?php
    foreach ($collectionEjecucion as $item) {

        $id = $item->id;
        $proyecto = $item->fields[0]->values;
        $titulo = $item->fields[1]->values;
        $fecha = $item->fields[2]->values;
        $filename = $item->fields[3]->values;

    ?>

    <tr  class="bck-color-blanco">
      <td colspan="4">
          <a href="http://ocahotels.com/docs/manzaneda/perfil-contratante/<?php echo $filename ?>" target="_blank"><?php echo $titulo ?> ::    <?php echo $fecha['start']->format('<\b\>d-m-Y<\/b\> \&\n\b\s\p\; ') ?></a>
      </td>

      <?php } ; ?>


    </tr>

</table>


<table class="table mg-t-50">
    <tr>
        <th  colspan="2" class="bck-color-primario color-blanco"><?php echo  _("Título")?></th>
    </tr>
    <tr  class="bck-color-blanco">
        <td colspan="2">
            <p>Instrucciones internas de contratación</p>
        </td>
    </tr>
    <tr class="bck-color-secundario color-blanco ">
        <th class="text-center font-light">
            <?php echo _("Fecha de publicación")?>
        </th>
       <th class="text-center font-light">
            <?php echo _("Documento")?>
        </th>

    </tr>
    <tr  class="bck-color-blanco">
        <td class="text-center">
           16/08/2016
        </td>
       <td class="text-center">
            <a target="_blank" href="<?php global $ROOT;echo $ROOT?>docs/manzaneda/instrucciones-internas-de-contratacion.pdf"><i class="icon-download"></i></a>
        </td>

    </tr>
</table>
