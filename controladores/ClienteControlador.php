<?php

include_once "clases/clientes.php";


class ClienteControlador
{
    public  function mostrar(){
        $cliente = new cliente();
        return $cliente->mostrar();
    }

}