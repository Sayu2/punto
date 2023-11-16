<?php

    class proveedor
{
   private int $_idProveedor;
   public string $_nombre;
   public string $_correo_electronico;
   public string $_telefono;
   public string $_direccion;
   public string $_ciudad;
   private int $_status;

   public function __construct(int $idProveedor, string $nombre, string $correo_electronico, string $telefono, string $direccion, string $ciudad, int $status)
   {
      $this->_idProveedor = $idProveedor;
      $this->_nombre = $nombre;
      $this->_correo_electronico = $correo_electronico;
      $this->_telefono = $telefono;
      $this->_direccion = $direccion;
      $this->_ciudad = $ciudad;
      $this->_status = $status;
   }

   public function getIdProveedor(): int
   {
      return $this->_idProveedor;
   }

   public function getNombre(): string
   {
      return $this->_nombre;
   }

   public function getCorreoElectronico(): string
   {
      return $this->_correo_electronico;
   }

   public function getTelefono(): string
   {
      return $this->_telefono;
   }

   public function getDireccion(): string
   {
      return $this->_direccion;
   }

   public function getCiudad(): string
   {
      return $this->_ciudad;
   }

   public function getStatus(): int
   {
      return $this->_status;
   }

   public function setIdProveedor(int $idProveedor): void
   {
      $this->_idProveedor = $idProveedor;
   }

   public function setNombre(string $nombre): void
   {
      $this->_nombre = $nombre;
   }

   public function setCorreoElectronico(string $correo_electronico): void 
   {
    $this->_correo_electronico=$correo_electronico;
   }

   public function setTelefono(string $telefono): void
    {
        $this->_telefono = $telefono;
    }

    public function setDireccion(string $direccion): void
    {
        $this->_direccion = $direccion;
    }

    public function setCiudad(string $ciudad): void
    {
        $this->_ciudad = $ciudad;
    }

    public function setStatus(int $status): void
    {
        $this->_status = $status;
    }

}