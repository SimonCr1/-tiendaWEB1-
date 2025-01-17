<?php

class Basedatos{

    //VARIABLES O ATRIBUTOS
    public $usuarioBD="root";
    public $passwordBD="";

    //CONSTRUCTOR
    public function __construct(){}

    //FUNCIONES O METODOS
    public function conectarBD(){

    
        try{
        
            $GamesBD="mysql:host=localhost;dbname=gamestore";
            $conexionBD=new PDO($GamesBD,$this->usuarioBD,$this->passwordBD);
            return($conexionBD);

        }catch(PDOException $error){

            echo($error->getMessage());

        }


    }


    public function agregarDatos($consultaSQL){

        //1.Se debe establecer una conexion a BD
        $conexionBD=$this->conectarBD();

        //2.Preparar la consulta para insertar datos
        $consultaAgregarDatos=$conexionBD->prepare($consultaSQL);

        //3.Ejecutar la consulta
        $resultado=$consultaAgregarDatos->execute();

        //4.Validar la operacion
        if($resultado){
            echo("Exito insertando los datos");
        }else{
            echo("error insertando los datos");

        }

    }

    public function consultarDatos($consultaSQL){

        //1.Se debe establecer una conexion a BD
        $conexionBD=$this->conectarBD();

        //2.Preparar la consulta para insertar datos
        $consultaBuscarDatos=$conexionBD->prepare($consultaSQL);

        //3.Indicar el metodo para tarer los datos
        $consultaBuscarDatos->setFetchMode(PDO::FETCH_ASSOC);

        //4.Se ejecuta la consulta
        $resultado=$consultaBuscarDatos->execute();

        //5.RETORNE LOS DATOS CONSULTADOS
        return($consultaBuscarDatos->fetchAll());

    }

    public function eliminarDatos($consultaSQL){

         //1.Se debe establecer una conexion a BD
         $conexionBD=$this->conectarBD();

         //2.Preparar la consulta para insertar datos
         $consultaEliminarDatos=$conexionBD->prepare($consultaSQL);
 
         //3.Ejecutar la consulta
         $resultado=$consultaEliminarDatos->execute();
 
         //4.Validar la operacion
         if($resultado){
             echo("Exito eliminando los datos");
         }else{
             echo("error eliminando los datos");
 
         }


    }

    public function editarDatos($consultaSQL){
        //1.Se debe establecer una conexion a BD
        $conexionBD=$this->conectarBD();

        //2.Preparar la consulta para insertar datos
        $consultaEditarDatos=$conexionBD->prepare($consultaSQL);

        //3.Ejecutar la consulta
        $resultado=$consultaEditarDatos->execute();

        //4.Validar la operacion
        if($resultado){
            echo("Exito editando los datos");
        }else{
            echo("error editando los datos");

        }

    }


}



?>