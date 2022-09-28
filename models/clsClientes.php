<?php
  require_once("./db.php");

  class clsClientes extends db{
    private $ced_cli, $nom_cli, $tel_dec, $tel_alt_dec, $direccion_tel, $estatus_cli;

    public function __construct($datos)
    {
      $this->ced_cli = $this->nom_cli = $this->tel_dec = $this->tel_alt_dec = $this-> direccion_tel = $this->estatus_cli = null;
    }

    public function setDatos($datos)
    {
      $this->ced_cli = isset($datos['ced_cli']) ? $datos['ced_cli'] : null;
      $this->nom_cli = isset($datos['nom_cli']) ? $datos['nom_cli'] : null;
      $this->tel_dec = isset($datos['tel_dec']) ? $datos['tel_dec'] : null;
      $this->tel_alt_dec = isset($datos['tel_alt_dec']) ? $datos['tel_alt_dec'] : null;
      $this->direccion_tel = isset($datos['direccion_tel']) ? $datos['direccion_tel'] : null;
      $this->estatus_cli = isset($datos['estatus_cli']) ? $datos['estatus_cli'] : null;
    }
  }
