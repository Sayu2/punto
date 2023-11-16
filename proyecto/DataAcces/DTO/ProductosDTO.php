<?php

class productos {

    private int $_idproducto;
    private int $_idCategoria;
    private string $_nombreProducto;
    private string $_descripcion;
    private float $_precioVenta;
    private int $_stock;
    private int $_status;

    public function __construct(int $idCategoria, string $nombreProducto, string $descripcion, float $precioVenta, int $stock, int $status) {
        $this->_idCategoria = $idCategoria;
        $this->_nombreProducto = $nombreProducto;
        $this->_descripcion = $descripcion;
        $this->_precioVenta = $precioVenta;
        $this->_stock = $stock;
        $this->_status = $status;
    }

    public function getIdProducto(): int {
        return $this->_idproducto;
    }

    public function getIdCategoria(): int {
        return $this->_idCategoria;
    }

    public function getNombreProducto(): string {
        return $this->_nombreProducto;
    }

    public function getDescripcion(): string {
        return $this->_descripcion;
    }

    public function getPrecioVenta(): float {
        return $this->_precioVenta;
    }

    public function getStock(): int {
        return $this->_stock;
    }

    public function getStatus(): int {
        return $this->_status;
    }

    public function setIdProducto(int $idproducto): void {
        $this->_idproducto = $idproducto;
    }

    public function setIdCategoria(int $idCategoria): void {
        $this->_idCategoria = $idCategoria;
    }

    public function setNombreProducto(string $nombreProducto): void {
        $this->_nombreProducto = $nombreProducto;
    }

    public function setDescripcion(string $descripcion): void {
        $this->_descripcion = $descripcion;
    }

    
    public function setPrecioVenta(float $precioVenta): void {
        $this->_precioVenta = $precioVenta;
    }

    public function setStock(int $stock): void {
        $this->_stock = $stock;
    }

    public function setStatus(int $status): void {
        $this->_status = $status;
    }
}

}