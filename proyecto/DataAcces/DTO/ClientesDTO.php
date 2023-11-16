<?php
class cliente{
   
    private int $_idCliente;
    public string $_nombre;
    public string $_apellidoP;
    public string $_apellidoM;
    private string $_correo_electronico;
    private string $_telefono;
    private string $_direccion;


    // constructor de la clase
    
    function __construct($id, $nomb,$apep,$apem,$corr,$tel,$dir){
      $this->_idCliente=$id;
      $this->_nombre =$nomb;
      $this->_apellidoP= $apep;
      $this->_apellidoM= $apem;
      $this->_correo_electronico= $corr;
      $this->_telefono= $tel;
      $this->_direccion= $dir;
      }

    public function set_idCliente(int $idCliente){
        $this->_idCliente = $idCliente;
     }
     
     public function get_idCliente(): int{
        return $this->_idCliente;
     }
     
     public function set_nombre(string $nombre){
        $this->_nombre = $nombre;
     }
     
     public function get_nombre(): string{
        return $this->_nombre;
     }
     
     public function set_apellidoP(string $apellidoP){
        $this->_apellidoP = $apellidoP;
     }
     
     public function get_apellidoP(): string{
        return $this->_apellidoP;
     }
     
     public function set_apellidoM(string $apellidoM){
        $this->_apellidoM = $apellidoM;
     }
     
     public function get_apellidoM(): string{
        return $this->_apellidoM;
     }
     
     public function set_correo_electronico(string $correo_electronico){
        $this->_correo_electronico = $correo_electronico;
     }
     
     public function get_correo_electronico(): string{
        return $this->_correo_electronico;
     }
     
     public function set_telefono(string $telefono){
        $this->_telefono = $telefono;
     }
     
     public function get_telefono(): string{
        return $this->_telefono;
     }
     
     public function set_direccion(string $direccion){
        $this->_direccion = $direccion;
     }
     
     public function get_direccion(): string{
        return $this->_direccion;
     }
 
   
}