<?php
  require_once("./db.php");

  class clsTecnicos extends db{
    private $ced_tec, $nom_tec, $tel_dec, $direccion_tel, $estatus_tec;

    public function __construct($datos)
    {
      $this->ced_tec = $this->nom_tec = $this->tel_dec = $this-> direccion_tel = $this->estatus_tec = null;
    }

    public function setDatos($datos)
    {
      $this->ced_tec = isset($datos['ced_tec']) ? $datos['ced_tec'] : null;
      $this->nom_tec = isset($datos['nom_tec']) ? $datos['nom_tec'] : null;
      $this->tel_dec = isset($datos['tel_dec']) ? $datos['tel_dec'] : null;
      $this->direccion_tel = isset($datos['direccion_tel']) ? $datos['direccion_tel'] : null;
      $this->estatus_tec = isset($datos['estatus_tec']) ? $datos['estatus_tec'] : null;
    }
  }
