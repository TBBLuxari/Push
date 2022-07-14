<?php 
    //  (COMPARAR)
     echo 'Hola we'
    /*
    header("Access-Control-Allow-Origin: *");
    require_once __DIR__ . '/vendor/autoload.php';
    // Crear Cliente---------------------------------------------------------------------
    $client = new MongoDB\Client('mongodb+srv://TBBLuxari:DMc53jwH5CIQAryP@prueba-puntos.veb9sop.mongodb.net/?retryWrites=true&w=majority');
    // Traer Base de datos-----------------------------------------------------------------
    $database = $client->Flutter;
    // Crear o Traer coleccion-----------------------------------------------------------
    $collection = $database->push;
    // Logica de Login -------------------------------------------------------------------------------------

    //Variables que necesito -----------
    $Correo = $_GET['Correo'];
    $EstadoAnterior = $_GET['EstadoAnterior'];
    $EstadoActual = $_GET['EstadoActual'];
    //-----------
    $stringCorreo = $Correo;
    //----------
    $filtroCorreo =['Correo' => $stringCorreo];

    $filtroEstadoAnterior = ['EstadoAnterior' => $EstadoAnterior];
    $filtroEstadoActual = ['EstadoActual' => $EstadoActual];

    $update1 = ['$set'=>['EstadoAnterior' => $EstadoAnterior]]
    $update2 = ['$set'=>['EstadoActual' => $EstadoActual]]  
 
    
   
    // $filtro = ['CORREO' => $CorreoUnity];
    //$update = ['$set' => ['PUNTAJE' => intval($PuntajeUnity) , 'INTENTO' => $TiempoUnity]];

    // $Actualizar = $collection2->updateOne($filtro,$update);

    $CORREO = $collection->findOne($filtroCorreo);

    if($CORREO != null)
    {
       
        $datosCorreo = $CORREO->jsonSerialize();
        // Comprobar 
        if($datosCorreo->Correo != null)
        {
            if( $stringCorreo == $datosCorreo->Correo)
            {
                //Update de los Estados   
                $updateResult1 = $collection->updateOne($filtroEstadoAnterior, $update1);
                $updateResult2 = $collection->updateOne($filtroEstadoActual , $update2);
                
            }else
            {
                $var = json_encode(null);
                die($var);
            }

        }else
        {
            $var = json_encode(null);
            die($var);
        }

    }else
    {
        $var = json_encode(null);
        die($var);
    }

    */
?>


