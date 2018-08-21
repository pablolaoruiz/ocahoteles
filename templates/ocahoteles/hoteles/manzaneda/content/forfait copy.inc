<section id="contenedor-hotel">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-push-8 ps-rel bck-color-blanco pd-r-20 pd-l-20 pd-t-20 pd-b-20">
                <div id="mod_reservas" class="gray_border ">
                                <form id="form_reservas_forti" class="reservas_body padding10 row" action="javascript:calcular_fortifaits();">

                                    <div class="col-md-12 mg-b-20">
                                        <h3 class="text-uppercase txt-130">Compra tu forfait aquí</h3>
                                    </div>
                                    
                                    <div class="col-md-12 mg-b-15">
                                           <div class="labels"><label>Días</label></div>
                                            <select name="dias" required="" onchange="tipo_forfait();" class="form-control">
                                                     
                                                    <option value="1">1 Día</option>
                                                    <option value="2">2 Días</option>                                                    
                                                    <option value="3">Pase anual</option>
                                                     <option value="4">1/2 Día</option>
                                            </select>
                                    </div>
                                    <div class="col-md-12 mod-fecha mg-b-15">
                                        <div class="labels"><label>Fecha</label></div>
                                        <input type="text" class="form-control" name="fecha" value="" required="" id="dp1491811882655" >
                                    </div>
                                        <div class="col-md-4 pd-r-5">
                                                <div class="labels"><label>Adultos</label></div>
                                                <select name="adultos" class="form-control">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                </select>
                                        </div>
                                        <div class="col-md-4 pd-r-5">
                                                <div class="labels"><label>Niños (6-12)</label></div>
                                                <select name="ninos" class="form-control">
                                                        <option value="0">0</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                </select>
                                        </div>
                                        <div class="col-md-4">
                                                <div class="labels"><label>Preinfantil (0-5)</label></div>
                                                <select name="preinfantil" class="form-control">
                                                        <option value="0">0</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                </select>
                                        </div>
                                        <div class="col-md-12 mg-t-20">
                                                <button type="submit" class="btn btn-success form-control">Calcular</button>
                                        </div>
                                </form>
                    <div class="col-md-12 mg-t-20"> <a href="http://ocahotels.com/docs/manzaneda/CONDICIONES_GENERALES_FORFAIT.pdf" target="_blank"><p>Condicones Genreales de venta de Forfaits</p></a></div>
                        </div>
                        <div id="resultado_calculo"></div>
                
                
                
                
                
                <?php //GestionTemplates::getTmplInclude("right_sidebar","hoteles",$datos) ?>
            </div>
            <div class="col-md-8 col-md-pull-4 col-contenedor-hotel pd-r-80 pd-md-r-18 pd-l-0 pd-md-l-18 color-negro-texto">
                <h3>INFORMACIÓN SOBRE FORFAITS</h3>
                        <ul>
                                        <li><b>Los forfaits se recogerán en las oficinas de recepción de los apartamentos Galicia.</b></li>
                                        <li><b>En el momento de la entrega de la tarjeta el cliente tendrá que abonar 3 € como fianza que serán reembolsados al entregar la tarjeta.</b></li>
                                        <li>El acceso al telesilla Manzaneda podrá ser restringido cuando la estación lo estime oportuno.</li>
                                        <li>Los precios incluyen I.V.A. y  S.O.V. Tarifas aprobadas por la Dirección Xeral de Transporte - Xunta de Galicia.</li>
                                        <li>Para niños hasta 12 años y menores de 5 años es imprescindible presentar documento que acredite la edad.</li>
                                        <li>El importe de los forfaits solo podrá ser reembolsable hasta dos días antes de la prestación del servicio.</li>
                                        <li><b>PASE ANUAL: Validez para la temporada de invierno 2017/2018.  Más información en el número 988 30 90 90 </b></li>
                                </ul>
                <br>
                <h3>Precios y pases 2017 / 2018</h3>
                <!--table class="table" style="font-size: 12px">
                        <tbody><tr>
                                <td rowspan="2" class="oscuro1 tdleft">PRECIOS<br>2017 / 2018</td>
                                <td class="oscuro2" rowspan="2">PASE ANUAL</td>
                                <td colspan="4" class="oscuro1">TEMPORADA ALTA</td>
                                <td colspan="4" class="oscuro1 tdright">TEMPORADA BAJA</td>
                        </tr>
                        <tr>
                                <td class="oscuro2">1 DÍA</td>
                                <td class="oscuro2 leftoscuro">2 DÍAS</td>
                                <td class="oscuro2">1/2 DÍA*</td>
                                 <td class="oscuro2 leftoscuro">Debutante<br>
(TQ Xeixo)**</td>
                                <td class="oscuro2">1 DÍA</td>
                                <td class="oscuro2 tdright leftoscuro">2 DÍAS</td>
                                <td class="oscuro2">1/2 DÍA*</td>
                                <td class="oscuro2 leftoscuro">Debutante<br>
(TQ Xeixo)**</td>
                        </tr>
                        <tr>
                                <td class="tdleft col1">ADULTO</td>
                                <td>235,00 €</td>
                                <td>22,00 €</td>
                                <td>37,00 €</td>
                                <td>17,00€</td>
                                <td></td>
                                <td>17,00 €</td>
                                <td class="tdright">28,00 €</td>
                                <td>12,00€</td>
                                 <td></td>
                        </tr>
                        <tr>
                                <td class="tdleft col1">NIÑO (5 a 12 años)</td>
                                <td>192,00 €</td>
                                <td>15,00 €</td>
                                <td>24,00 €</td>
                                <td>12,00€</td>
                                 <td></td>
                                <td>12,00 €</td>
                                <td class="tdright">19,00 €</td>
                                <td>9,00€</td>
                                 <td></td>
                        </tr>
                        <tr>
                                <td class="tdleft col1">PREINFANTIL (hasta 5 años)</td>
                                <td>170,00 €</td>
                                <td>5,00 €</td>
                                <td>8,00 €</td>
                                <td>5,00€</td>
                                 <td>3 hs. 11,00€</td>
                                <td>5,00 €</td>
                                <td class="tdright">8,00 €</td>
                                <td>5,00€</td>
                          <td>3 hs. 8,00€</td>
                        </tr>
                </tbody></table-->
                         <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table">
  <tbody>
    <tr>
        <th scope="col" colspan="3"><h4>ADULTOS - PASE ANUAL: 235,00€</h4></th>
      <th scope="col">&nbsp;</th>
      <th scope="col" class="text-right"></th>
    </tr>
    <tr>
      <th scope="col">&nbsp;</th>
      <th scope="col" class="text-center">TEMPORADA ALTA</th>
      <th scope="col" class="text-center">TEMPORADA BAJA</th>
    </tr>
    <tr>
      <th scope="row">1 DÍA</th>
      <td align="center">22,00€</td>
      <td align="center">17,00€</td>
    </tr>
    <tr>
      <th scope="row">2 DÍAS</th>
      <td align="center">37,00€</td>
      <td align="center">28,00€</td>
    </tr>
    <tr>
      <th scope="row">1/2 DÍA*</th>
      <td align="center">17,00€</td>
      <td align="center">12,00€</td>
    </tr>
  </tbody>
</table>
                
                <br>
                                     <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table">
  <tbody>
    <tr>
        <th scope="col" colspan="3"><h4>NIÑOS 5 a 12 años - PASE ANUAL: 192,00€</h4></th>
      <th scope="col">&nbsp;</th>
      <th scope="col" class="text-right"></th>
    </tr>
    <tr>
      <th scope="col">&nbsp;</th>
      <th scope="col" class="text-center">TEMPORADA ALTA</th>
      <th scope="col" class="text-center">TEMPORADA BAJA</th>
    </tr>
    <tr>
      <th scope="row">1 DÍA</th>
      <td align="center">15,00€</td>
      <td align="center">12,00€</td>
    </tr>
    <tr>
      <th scope="row">2 DÍAS</th>
      <td align="center">24,00€</td>
      <td align="center">19,00€</td>
    </tr>
    <tr>
      <th scope="row">1/2 DÍA*</th>
      <td align="center">12,00€</td>
      <td align="center">9,00€</td>
    </tr>
  </tbody>
</table>
                <br>
                
                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table">
  <tbody>
    <tr>
        <th scope="col" colspan="3"><h4>PREINFANTIL  hasta 5 años - PASE ANUAL: 170,00€</h4></th>
      <th scope="col">&nbsp;</th>
      <th scope="col" class="text-right"></th>
    </tr>
    <tr>
      <th scope="col">&nbsp;</th>
      <th scope="col" class="text-center">TEMPORADA ALTA</th>
      <th scope="col" class="text-center">TEMPORADA BAJA</th>
    </tr>
    <tr>
      <th scope="row">1 DÍA</th>
      <td align="center">5,00€</td>
      <td align="center">5,00€</td>
    </tr>
    <tr>
      <th scope="row">2 DÍAS</th>
      <td align="center">8,00€</td>
      <td align="center">8,00€</td>
    </tr>
    <tr>
      <th scope="row">1/2 DÍA*</th>
      <td align="center">5,00€</td>
      <td align="center">5,00€</td>
    </tr>
    <tr>
      <th scope="row">Debutante - (TQ Xeixo)**</th>
      <td align="center">3 horas 11,00€</td>
      <td align="center">3 horas 8,00€</td>
    </tr>
  </tbody>
</table>
                <br>
                <p>*Disponible a partir de las 14 horas</p>
                <p>**Incluye subida y bajada en Telesilla Manzaneda</p>
                 
                
                
                <?php echo $content?>
                  <div class="col-xs-12">
                <a href="http://ocahotels.com/docs/manzaneda/CALENDARIO_ESTACION.pdf"  class="pdflink" target="_blank"><h3>CALENDARIO TEMPORADA 2017/2108</h3></a>
                 
            </div>
            </div>
          
        </div>
    </div>
</section>
<?php GestionTemplates::getTmplInclude("galeria_seccion","hoteles",$datos) ?>
 <script type="text/javascript">
    jQuery(".readonly").keydown(function(e){
                   e.preventDefault();
               });
               
    function calcular_fortifaits() {
        jQuery.post("<?php echo $ROOT?>services/forfait.php?operacion=calcular_forfait",jQuery("#form_reservas_forti").serialize(),function (data) {
                jQuery("#resultado_calculo").html(data);
        });
    }

    function tipo_forfait() {
        if(jQuery("select[name='dias']").val()==3) {
                jQuery("input[name='fecha']").attr('required', false);
                jQuery(".mod-fecha").hide();
        }
        else {
                jQuery("input[name='fecha']").attr('required', true);
                jQuery(".mod-fecha").show();
        }
    }

    jQuery(document).ready(function(){
        jQuery("#dp1491811882655" ).datepicker({
           dateFormat: 'dd/mm/yy',
           onSelect: function(dateText) {
           }

        });
    });
    
    
</script>