<?php

/**
 * Description of Forfait
 *
 * @author Juan
 */
class Forfait extends BBDD_PDO {

    var $language;

    function __construct($link_bbdd,$language='') {
       $this->language = $language;
       parent::__construct($link_bbdd);

    }




    public function getReserva($id) {

        //seleccionamos la reseva
        $query = $this->link->prepare("SELECT * FROM reservas_forfait WHERE id=:id");
        $query->execute(array(
		'id'	=>$id
	));
	$reserva=$query->fetch();
        return $reserva;

    }

    public function confirmarReserva($id) {

        $query = $this->link->prepare("UPDATE reservas_forfait SET status=1 WHERE id=:id");
        $query->execute(array("id"=>$id));

        return $this->enviarEmailReserva($id);

    }

    public function getReservaSHA1($id,$email) {

        $query=$this->link->prepare("SELECT * FROM reservas_forfait WHERE sha1(id)=:id AND sha1(email)=:mail");
        $query->execute(array("id"=>$id,"mail"=>$email));
        $reserva=$query->fetch();
        return $reserva;
    }

    public function enviarEmailReserva($id) {

        $exito = 0;

        global $appConfig;

        $query = $this->link->prepare("SELECT * FROM reservas_forfait WHERE id=:id");
        $query->execute(array('id' => $id));
        $reserva=$query->fetch();

        $asunto = "Tu reserva de forfait";
        $to_email = $reserva['email'];
        $to_name = $reserva['nombre'].' '.$reserva['apellidos'];
        $plantilla = $appConfig['EMAILS'] . "compra_forfait";
        $reserva['root'] = $appConfig['ROOT'];


        $resultado = GestionMail::enviarEmail(
                $asunto,
                $to_email,
                $to_name,
                $plantilla,
                $reserva);

        return $resultado;


    }


    public function calcularTotales($fecha,$dias,$adultos_param,$ninos_param,$preinfantil_param) {

        $totales = [];

        if($fecha=="") {
            $fecha=date('d/m/Y',strtotime('tomorrow'));
        }
        $temp=explode("/",$fecha);
        $fecha=$temp[2].'-'.$temp[1].'-'.$temp[0];
        if(strtotime($fecha)<strtotime('tomorrow')) {
            echo 'La fecha debe ser mayor que la actual'; die;
        }


        $query = $this->link->prepare("SELECT * FROM precios_fortifait WHERE id=1");
        $query->execute();
        $precios=$query->fetch();



        if(date('Y-m-d')=="2016-11-25") {
            $precios["adulto0"]=160.98;
            $precios["nino0"]=131.52;
           $precios["preinfantil0"]=116.45;
        }

        $adultos=$ninos=$preinfantil=0;
        $adulto0=$nino0=$preinfantil0=0;
        $adultoalta1=$adultoalta2=$adultoalta3=$adultobaja1=$adultobaja2=$adultobaja3=$ninoalta1=$ninoalta2=$ninoalta3=$ninobaja1=$ninobaja2=$ninobaja3=$preinfantil1=$preinfantil2=$preinfantil3=0;
        $total=0;

        //primera noche
        $query = $this->link->prepare("SELECT * FROM temporadas_manzaneda WHERE fecha=:fecha");
        $query->execute(array("fecha"=>$fecha));
        $uno=$query->rowCount();

        //Si son dos noches miramos si son las dos de la misma temporada
        $totales['misma_temporada']=true;

        if($dias == 3) {
            $adultos=$precios["adulto0"]*$adultos_param; //adultos
            $ninos=$precios["nino0"]*$ninos_param; //ninos
            $preinfantil=$precios["preinfantil0"]*$preinfantil_param; //preinfantil

            $adulto0=$adultos; //adultos
            $nino0=$ninos; //ninos
            $preinfantil0=$preinfantil; //preinfantil
        }
        else {
            if($dias == 2) {
                $query = $this->link->prepare("SELECT * FROM temporadas_manzaneda WHERE fecha=:fecha");
                $query->execute(array("fecha"=>date('Y-m-d',strtotime($fecha.' +1 day'))));
                $dos=$query->rowCount();
                if($uno == $dos) {
                    if ($uno == 1) { //dos días alta
                        $adultos=$precios["adultoalta2"]*$adultos_param; //adultos
                        $ninos=$precios["ninoalta2"]*$ninos_param; //ninos
                        $preinfantil=$precios["preinfantil2"]*$preinfantil_param; //preinfantil

                        $adultoalta2=$adultos; //adultos
                        $ninoalta2=$ninos; //ninos
                        $preinfantil2=$preinfantil; //preinfantil
                    }
                    else { //dos días baja
                        $adultos=$precios["adultobaja2"]*$adultos_param; //adultos
                        $ninos=$precios["ninobaja2"]*$ninos_param; //ninos
                        $preinfantil=$precios["preinfantil2"]*$preinfantil_param; //preinfantil

                        $adultobaja2=$adultos; //adultos
                        $ninobaja2=$ninos; //ninos
                        $preinfantil2=$preinfantil; //preinfantil
                    }
                }
                else {
                    $totales['misma_temporada']=false;
                    // $adultos=$precios["adultoalta1"]*$_POST['adultos']; //adultos
                    // $adultos+=$precios["adultobaja"]*$_POST['adultos']; //adultos
                    // $ninos=$precios["ninoalta1"]*$_POST['ninos']; //ninos
                    // $ninos+=$precios["ninobaja"]*$_POST['ninos']; //ninos
                    // $preinfantil=$precios["preinfantil2"]*$_POST['preinfantil']; //preinfantil

                    // $adultoalta1=$_POST['adultos']; //adultos
                    // $adultobaja1=$_POST['adultos']; //adultos
                    // $ninoalta1=$_POST['ninos']; //ninos
                    // $ninobaja1=$_POST['ninos']; //ninos
                    // $preinfantil2=$_POST['preinfantil']; //preinfantil
                }
            }

            else {
                  if($dias == 4) {
                $query = $this->link->prepare("SELECT * FROM temporadas_manzaneda WHERE fecha=:fecha");
                $query->execute(array("fecha"=>date('Y-m-d',strtotime($fecha.' +1 day'))));
                $dos=$query->rowCount();
                if($uno == $dos) {
                    if ($uno == 1) { //dos días alta
                        $adultos=$precios["adultoalta3"]*$adultos_param; //adultos
                        $ninos=$precios["ninoalta3"]*$ninos_param; //ninos
                        $preinfantil=$precios["preinfantil3"]*$preinfantil_param; //preinfantil

                        $adultoalta3=$adultos; //adultos
                        $ninoalta3=$ninos; //ninos
                        $preinfantil3=$preinfantil; //preinfantil
                    }
                    else { //dos días baja
                        $adultos=$precios["adultobaja3"]*$adultos_param; //adultos
                        $ninos=$precios["ninobaja3"]*$ninos_param; //ninos
                        $preinfantil=$precios["preinfantil3"]*$preinfantil_param; //preinfantil

                        $adultobaja3=$adultos; //adultos
                        $ninobaja3=$ninos; //ninos
                        $preinfantil3=$preinfantil; //preinfantil
                    }
                }
                else {
                    $totales['misma_temporada']=false;
                    // $adultos=$precios["adultoalta1"]*$_POST['adultos']; //adultos
                    // $adultos+=$precios["adultobaja"]*$_POST['adultos']; //adultos
                    // $ninos=$precios["ninoalta1"]*$_POST['ninos']; //ninos
                    // $ninos+=$precios["ninobaja"]*$_POST['ninos']; //ninos
                    // $preinfantil=$precios["preinfantil2"]*$_POST['preinfantil']; //preinfantil

                    // $adultoalta1=$_POST['adultos']; //adultos
                    // $adultobaja1=$_POST['adultos']; //adultos
                    // $ninoalta1=$_POST['ninos']; //ninos
                    // $ninobaja1=$_POST['ninos']; //ninos
                    // $preinfantil2=$_POST['preinfantil']; //preinfantil
                }
            }
            else {

                if ($uno == 1) { //1 días alta

                    $adultos=$precios["adultoalta1"]*$adultos_param; //adultos
                    $ninos=$precios["ninoalta1"]*$ninos_param; //ninos
                    $preinfantil=$precios["preinfantil1"]*$preinfantil_param; //preinfantil

                    $adultoalta1=$adultos; //adultos
                    $ninoalta1=$ninos; //ninos
                    $preinfantil1=$preinfantil; //preinfantil
                }
                else { //1 días baja

                    $adultos=$precios["adultobaja"]*$adultos_param; //adultos

                    $ninos=$precios["ninobaja"]*$ninos_param; //ninos
                    $preinfantil=$precios["preinfantil1"]*$preinfantil_param; //preinfantil

                    $adultobaja1=$adultos; //adultos
                    $ninobaja1=$ninos; //ninos
                    $preinfantil1=$preinfantil; //preinfantil
                }
            } //added 2018 medío día option
        }
        }


        $totales['adultos'] = $adultos;
        $totales['ninos'] = $ninos;
        $totales['preinfantil'] = $preinfantil;

        $totales['adulto0'] =$adulto0;
        $totales['nino0']= $nino0;
        $totales['preinfantil0'] = $preinfantil0;
        $totales['adultoalta1'] = $adultoalta1;
        $totales['adultoalta2'] = $adultoalta2;
        $totales['adultoalta3'] = $adultoalta3;
        $totales['adultobaja1'] = $adultobaja1;
        $totales['adultobaja2'] = $adultobaja2;
        $totales['adultobaja3'] = $adultobaja3;
        $totales['ninoalta1'] = $ninoalta1;
        $totales['ninoalta2'] = $ninoalta2;
        $totales['ninoalta3'] = $ninoalta3;

        $totales['ninobaja1'] = $ninobaja1;
        $totales['ninobaja2'] = $ninobaja2;
        $totales['ninobaja3'] = $ninobaja3;
        $totales['preinfantil1'] = $preinfantil1;
        $totales['preinfantil2'] = $preinfantil2;
        $totales['preinfantil3'] = $preinfantil3;

        $totales['total_adultos'] = $adultos;
        $totales['total_ninos'] = $ninos;
        $totales['total_preinfantil'] = $preinfantil;
        $totales['total'] = $adultos + $ninos + $preinfantil;


        return $totales;

    }

    public function obtenerForfaits($fecha) {

        global $appConfig;
           $query = $this->link->prepare("SELECT * FROM reservas_forfait WHERE fechaReserva=:fecha AND status=1");
	$query->execute(array(
		'fecha' => $fecha,
           
	));
	$result=$query->fetchAll();

        $fecha_format = date("d/M/Y", strtotime($fecha));

        $asunto = "Ventas de Forfait Online: " . $fecha_format;
       $to_email = "manzaneda@manzaneda.com";
        $to_name = "Oca Manzaneda";
        $copy_email = "ven@manzaneda.com";
        $copy_name = "Oca Manzaneda";
        $cCopy_email = "pablo@puraenvidia.com";
        $cCopy_name= "OcaManzaneda";
        $plantilla = $appConfig['EMAILS'] . "lista_forfait";

        $datos['root'] = $appConfig['ROOT'];
        $datos['result'] = $result;
        $datos['fecha'] = $fecha_format;

        $resultado = GestionMail::enviarEmail(
                $asunto,
                $to_email,
                $to_name,
                $copy_email,
                $copy_name,
                $cCopy_email,
                $cCopy_name,
                $plantilla,
                $datos);

        return $resultado;

    }

        public function addReserva($datos) {

        //calcular totales
        $totales = $this->calcularTotales(
                $datos['fecha'],
                $datos['dias'],
                $datos['adultos'],
                $datos['ninos'],
                $datos['preinfantil']);
        $fechaHoy = date("Y-m-d");
        $fechaReserva = $_POST["dateok"];

                        $query = $this->link->prepare("INSERT INTO reservas_forfait (fecha,fechaReserva,dni,nombre,apellidos,email,telefono,adulto0,nino0,preinfantil0,adultoalta1,adultoalta2,adultoalta3,adultobaja1,adultobaja2,adultobaja3,ninoalta1,ninoalta2,ninoalta3,ninobaja1,ninobaja2,ninobaja3,preinfantil1,preinfantil2,preinfantil3,total,totaladulto,totalnino,totalpreinfantil) VALUES (:fecha,:fechaReserva,:dni,:nombre,:apellidos,:email,:telefono,:adulto0,:nino0,:preinfantil0,:adultoalta1,:adultoalta2,:adultoalta3,:adultobaja1,:adultobaja2,:adultobaja3,:ninoalta1,:ninoalta2,:ninoalta3,:ninobaja1,:ninobaja2,:ninobaja3,:preinfantil1,:preinfantil2,:preinfantil3,:total,:totaladulto,:totalnino,:totalpreinfantil)");

        $query->execute(array(
            "fecha"=> $fechaHoy,
            "fechaReserva"=> $fechaReserva,
            "dni"=>$datos['dni'],
            "nombre"=>$datos['nombre'],
            "apellidos"=>$datos['apellidos'],
            "email"=>$datos['email'],
            "telefono"=>$datos['telefono'],
            "adulto0"=>$totales['adulto0']/235,
            "nino0"=>$totales['nino0']/192,
            "preinfantil0"=>$totales['preinfantil0']/170,
            "adultoalta1"=>$totales['adultoalta1']/22,
            "adultoalta2"=>$totales['adultoalta2']/37,
            "adultoalta3"=>$totales['adultoalta3']/17,
            "adultobaja1"=>$totales['adultobaja1']/17,
            "adultobaja2"=>$totales['adultobaja2']/28,
            "adultobaja3"=>$totales['adultobaja3']/12,
            "ninoalta1"=>$totales['ninoalta1']/15,
            "ninoalta2"=>$totales['ninoalta2']/24,
            "ninoalta3"=>$totales['ninoalta3']/12,
            "ninobaja1"=>$totales['ninobaja1']/12,
            "ninobaja2"=>$totales['ninobaja2']/19,
            "ninobaja3"=>$totales['ninobaja3']/9,
            "preinfantil1"=>$totales['preinfantil1']/5,
            "preinfantil2"=>$totales['preinfantil2']/8,
            "preinfantil3"=>$totales['preinfantil3']/5,
            "total"=>$totales['total'],
            "totaladulto"=>$totales['adultos'],
            "totalnino"=>$totales['ninos'],
            "totalpreinfantil"=>$totales['preinfantil']
        ));

        return $this->link->lastInsertId();
    }


}
?>
