<?php
namespace App\Validation;

use App\Lib\Response;

class PedidoValidation {
    public static function validate($data, $update = false) {
        $response = new Response();
        
        $key = 'Cliente';
        if(empty($data[$key])) {
            $response->errors[$key][] = 'Este campo es obligatorio';
        } else {
            $value = $data[$key];
            
            if(strlen($value) < 10) {
                $response->errors[$key][] = 'Debe contener como mínimo 10 caracteres';
            }
        }
        
        $key = 'Empleado_id';
        if(empty($data[$key])) {
            $response->errors[$key][] = 'Este campo es obligatorio';
        } else {
            $value = $data[$key];
            
            if(!is_numeric($value)) {
                $response->errors[$key][] = 'El valor ingresado no es un Empleado Valido';
            }
        }

     $key = 'Total';
        if(empty($data[$key])) {
            $response->errors[$key][] = 'Este campo es obligatorio';
        } else {
            $value = $data[$key];
            
            if(!is_numeric($value)) {
                $response->errors[$key][] = 'Total no Valido';
            }
        }

        $key = 'Detalle';
        if(empty($data[$key])) {
            $response->errors[$key][] = 'Este campo es obligatorio';
        } else if (!is_array($data[$key])) {
              $response->errors[$key][] = 'Detalle no Valido';

        }
        
        else{
            $value = $data[$key];
            
            if(count($value)=== 0 ) {
                $response->errors[$key][] = 'Debe Ingresar un Detalle para el Pedido';
            }
        }

        $response->setResponse(count($response->errors) === 0);

        return $response;
    }
}