<?php

include_once  "config/conexion.php";

class Cliente
{
    private $id;
    private $nombre;

      public function mostrar(){
          try {
            $objConexion = new ConexionDB();
            $conexion = $objConexion->abrir();
            $query = "SELECT * FROM clientes";
            $resultado = $conexion->query($query);

          }catch (PDOException $e){
              echo "Error: ".$e->getMessage();
              exit();
          }

          return $resultado;
      }


    public  function insertar(){

          return null;
    }

    public  function eliminar(){

        return null;
    }
}