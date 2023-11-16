<?php

class Categoria{

    public int $_idCategoria;
    public string $_nombreCat;
    public string $_descripcionCat;

    public function __construct($idCategoria, $nombreCat, $descripcionCat){
        $this->_idCategoria = $idCategoria;
        $this->_nombreCat = $nombreCat;
        $this->_descripcionCat = $descripcionCat;
    }

    public function getIdCategoria(){
        return $this->_idCategoria;
    }

    public function getNombreCat(){
        return $this->_nombreCat;
    }

    public function getDescripcionCat(){
        return $this->_descripcionCat;
    }

    public function setIdCategoria($idCategoria){
        $this->_idCategoria = $idCategoria;
    }

    public function setNombreCat($nombreCat){
        $this->_nombreCat = $nombreCat;
    }

    public function setDescripcionCat($descripcionCat){
        $this->_descripcionCat = $descripcionCat;
    }
}

?>