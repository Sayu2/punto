<?php

 class Usuario{
   
    private int $_idUsuario;
    public string $_nombre;
    public string $_apellidoP;
    public string $_apellidoM;
    private string $_telefono;
    private string $_correo;
    private string $_contrasena;
    private string $_direccion;

    
    function __construct($id, $nomb,$apep,$apem,$tel,$corr,$cont,$dir){
        $this->_idUsuario = $id;
        $this->_nombre=$nomb;
        $this->_apellidoP= $apep;
        $this->_apellidoM= $apem;
        $this->_telefono= $tel;
        $this->_correo= $corr;
        $this->_contrasena= $cont;
        $this->_direccion= $dir;
        }

    // Setters
    public function setIdUsuario(int $idUsuario): void {
        $this->_idUsuario = $idUsuario;
    }

    public function setNombre(string $nombre): void {
        $this->_nombre = $nombre;
    }

    public function setApellidoP(string $apellidoP): void {
        $this->_apellidoP = $apellidoP;
    }

    public function setApellidoM(string $apellidoM): void {
        $this->_apellidoM = $apellidoM;
    }

    public function setTelefono(string $telefono): void {
        $this->_telefono = $telefono;
    }

    public function setCorreo(string $correo): void {
        $this->_correo = $correo;
    }

    public function setContrasena(string $contrasena): void {
        $this->_contrasena = $contrasena;
    }

    public function setDireccion(string $direccion): void {
        $this->_direccion = $direccion;
    }

    // Getters
    public function getIdUsuario(): int {
        return $this->_idUsuario;
    }

    public function getNombre(): string {
        return $this->_nombre;
    }

    public function getApellidoP(): string {
        return $this->_apellidoP;
    }

    public function getApellidoM(): string {
        return $this->_apellidoM;
    }

    public function getTelefono(): string {
        return $this->_telefono;
    }
    public function getCorreo(): string {
        return $this->_correo;
    }
    public function getContrasena(): string {
        return $this->_contrasena;
    }
    public function getDIreccion():string {
        return $this->_direccion;
    }
}