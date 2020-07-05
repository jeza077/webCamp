<?php 
    error_reporting(E_ALL ^ E_NOTICE);
function productos_json(&$boletos, &$camisas = 0, &$etiquetas = 0){// El signo "&" significa: PASAR LOS DATOS POR REFERENCIA.
    $dias = array(0 => 'un_dia', 1 => 'pase_completo', 2 => 'pase_2dias');

    unset($boletos['un_dia']['precio']);
    unset($boletos['completo']['precio']);
    unset($boletos['2dias']['precio']);


    $total_boletos = array_combine($dias, $boletos);//Combinamos o unimos 2 array en Un array.
    // $json = array();//CREAMOS UN ARRAY VACIO PARA IR LLENANDOLO CON LOS BOLETOS, CAMISAS Y ETIQUETAS.
    
    // //MANDAR EL TOTAL DE BOLETOS AL ARRAY $json.
    // foreach($total_boletos as $key => $boletos):
    //     if((int) $boletos > 0)://HACEMOS QUE SOLO RETORNE O GUARDE LOS BOLETOS QUE SEAN MAYOR A 0.
    //         $json[$key] = (int) $boletos['cantidad'];
    //     endif;
    // endforeach;


    //MANDAR EL TOTAL DE CAMISAS AL ARRAY $json.
    $camisas = (int) $camisas;
    if($camisas >0):
        $total_boletos['camisas'] = $camisas;
    endif;

    //MANDAR EL TOTAL DE ETIQUETAS AL ARRAY $total_boletos.
    $etiquetas = (int) $etiquetas;
    if($etiquetas >0):
        $total_boletos['etiquetas'] = $etiquetas;
    endif;

    return json_encode($total_boletos); //json_encode PARA FORMATEAR EL ARRAY $total_boletos.
}


function eventos_json(&$eventos) {
    $eventos_json = array();

     //MANDAR EL TOTAL DE EVENTOS AL ARRAY $json.
    foreach($eventos as $evento):
        $eventos_json['eventos'][] = $evento;
    endforeach;

    return json_encode($eventos_json);
}