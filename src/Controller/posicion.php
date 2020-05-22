<?php

class Posicion{
    private $posicion;
    
    public function __construct(){
        $this->posicion = array();
    }   
    public function push($id_cola){
        $this->posicion[] = $id_cola;
    }
    public function pop(){
        return array_pop($this->posicion);
    }
    public function length(){
        return count($this->posicion);
    }
    public function peek(){
        return $this->posicion[($this->length()-1)];
    }
}