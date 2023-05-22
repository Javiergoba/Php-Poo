<?php
class Banco{


    
}
class Cuenta extends Banco{
    $nombre;
    $apellidos;
    $numCuenta;
    $saldo;
    
     function constructor__(String $nombre, String $apellidos,int $numCuenta, float $saldo){
        $this-> nombre= $nombre;
        $this-> apellidos = $apellidos;
        this-> numCuenta = $numCuenta;
        this-> saldo = $saldo;
    }
    function get_nombre(){
        return $this->nombre;
    }
    function get_apellidos(){
        return $this->apellidos;
    }
    function get_numCuenta(){
        return $this->$numCuenta;
    }
    function get_saldo(){
        return $this->saldo;
    }
    function set_nombre($nombre){
        $this->nombre = $nombre;
    }
    function set_apellidos($apellidos){
        $this->apellidos= $apellidos;
    }
    function set_numCuenta($numCuenta){
        $this->numCuenta = $numCuenta;
    }
    function set_saldo($saldo){
        $this->saldo=$saldo;
    }
    
    
    
    }
    


?> 