<?php

$result = $datos['result'];
$root = $datos['root'];
$fecha = $datos['fecha'];
$url_b = $_SERVER['SERVER_NAME'];
$url_b = "http://" . $url_b . $root;


$A1D=$A2D=$A3D=$N1D=$N2D=$N3D=$P1D=$P2D=$P3D=$APA=$NPA=$PPA=0;

$tabla='';

$tabla.= '<table style="width:100%;" border="0">
                <tr class="oscuro1" style="background-color: #b4b4b9;">
                       
                        <td>FECHA</td>
                        <td>DNI</td>
                        <td>NOMBRE</td>
                        <td>EMAIL</td>
                        <td>TELÉFONO</td>
                        <td>A1D</td>
                        <td>A2D</td> 
                        <td>A1/2D</td> 
                        <td>N1D</td>
                        <td>N2D</td>    
                        <td>N1/2D</td> 
                        <td>P1D</td>
                        <td>P2D</td>   
                         <td>P1/2D</td> 
                        <td>APA</td>
                        <td>NPA</td>
                        <td>PPA</td>
                </tr>';
foreach ($result as $row) {
        $tabla.= '<tr>';
        //$tabla.= '<td>'.date('d/m/Y',strtotime($row['fecha'])).'</td>';
        $tabla.= '<td align="center"><b>'.date("d/m/Y",strtotime($row['fechaReserva'])).'<b></td>';
        $tabla.= '<td>'.$row['dni'].'</td>';
        $tabla.= '<td>'.$row['nombre'].' '.$row['apellidos'].'</td>';
        $tabla.= '<td>'.$row['email'].'</td>';
        $tabla.= '<td>'.$row['telefono'].'</td>';
        $A1D+=$row['adultoalta1']+$row['adultobaja1'];
        $tabla.= '<td>'.($row['adultoalta1']+$row['adultobaja1']).'</td>';
        $A2D+=$row['adultoalta2']+$row['adultobaja2'];
        $tabla.= '<td>'.($row['adultoalta2']+$row['adultobaja2']).'</td>';
        $A3D+=$row['adultoalta3']+$row['adultobaja3'];
        $tabla.= '<td>'.($row['adultoalta3']+$row['adultobaja3']).'</td>';
        $N1D+=$row['ninoalta1']+$row['ninobaja1'];
        $tabla.= '<td>'.($row['ninoalta1']+$row['ninobaja1']).'</td>';
        $N2D+=$row['ninoalta2']+$row['ninobaja2'];
        $tabla.= '<td>'.($row['ninoalta2']+$row['ninobaja2']).'</td>';
        $N3D+=$row['ninoalta3']+$row['ninobaja3'];
        $tabla.= '<td>'.($row['ninoalta3']+$row['ninobaja3']).'</td>';
        $P1D+=$row['preinfantil1'];
        $tabla.= '<td>'.$row['preinfantil1'].'</td>';
        $P2D+=$row['preinfantil2'];
        $tabla.= '<td>'.$row['preinfantil2'].'</td>';
        $P3D+=$row['preinfantil3'];
        $tabla.= '<td>'.$row['preinfantil3'].'</td>';

        $APA+=$row['adulto0'];
        $tabla.= '<td>'.$row['adulto0'].'</td>';

        $NPA+=$row['nino0'];
        $tabla.= '<td>'.$row['nino0'].'</td>';

        $PPA+=$row['preinfantil0'];
        $tabla.= '<td>'.$row['preinfantil0'].'</td>';

        $tabla.= '</tr>';

}
$tabla.= '
                <tr class="oscuro1" style="background-color: #b4b4b9;">
                        <td colspan="5" rowspan="2">TOTALES</td>
                        <td>A1D</td>
                        <td>A2D</td>
                        <td>N1D</td>
                        <td>N2D</td>
                        <td>P1D</td>
                        <td>P2D</td>
                        <td>APA</td>
                        <td>NPA</td>
                        <td>PPA</td>
                </tr>
                <tr style="font-weight:bold;">
                        <td>'.$A1D.'</td>
                        <td>'.$A2D.'</td>
                            <td>'.$A3D.'</td>
                        <td>'.$N1D.'</td>
                        <td>'.$N2D.'</td>
                            <td>'.$N3D.'</td>
                        <td>'.$P1D.'</td>
                        <td>'.$P2D.'</td>
                             <td>'.$P3D.'</td>
                        <td>'.$APA.'</td>
                        <td>'.$NPA.'</td>
                        <td>'.$PPA.'</td>
                </tr>';
$tabla.= '</table>';

return <<<FFF

<table style="width:100%; background: #FFF;" cellpadding="0" cellspacing="0" border="0">
   <tr>
        <td style="padding:30px 0px">
            <table style="width:90%;" align="center" cellpadding="0" cellspacing="0" border="0">
                <tr>
                    <td style="width:100%;text-align:center;background-color:#b4b4b9 ;padding:30px;20px;box-shadow: 1px 1px 14px #ddd;" valign="center" align="center">
                        <img src="{$url_b}images/logo-ocahotels.png" width="115px" alt="Oca Hotels">
                        <h2 style="color:#FFF;font-size:2.4em;font-weignt:300;margin-top:10px;margin-bottom:5px;padding:0 0">Manzaneda</h2>
                        <h3 style="color:#FFF;font-size:1,8em;font-weignt:300;margin-top:5px;margin-bottom:5px;padding:0 0">Estación de Montaña</h2>
                    </td>
                </tr>
            </table>
            <table style="background:#f3f3f3;width:90%;" align="center" cellpadding="0" cellspacing="0" border="0">
                <tr>
                    <td style="padding:50px 30px">
                        
                        <div style=" display:block;width:100%;">
                            <h4 style="text-align:center">Venta de Forfait Online: $fecha</h4>
                            
                            $tabla

        
                        </div>
              
                    </td>
                </tr>
                
            </table>
           
             <table style="background: #FFF;" align="center" cellpadding="0" cellspacing="0" border="0">
                <tr>
                    <td style="width:100%;padding:20px 12px;height:30px;font-size:0.96em" valign="center" align="left">
        
                        <div style="display:block;width:100%;text-align:center;padding-top:4%;">
                             info@ocahotels.com
                        </div>
                        <div style="display:block;width:100%;text-align:center;padding-top:4%;">
                             Copyright © Oca Hotels, 2018 
                        </div>
                     
                    </td>
                 
                </tr>
            </table>
        </td>
   </tr>
</table>
FFF;
?>