<?php
  require_once("./db.php");

  class clsModelos extends db{
    private $id_mod, $des_mod, $id_marca_mod, $estatus_mod;

    public function __construct($datos)
    {
      $this->id_mod = $this->des_mod = $this->id_marca_mod = $this->estatus_mod = null;
    }

    public function setDatos($datos)
    {
      $this->id_mod = isset($datos['id_mod']) ? $datos['id_mod'] : null;
      $this->des_mod = isset($datos['des_mod']) ? $datos['des_mod'] : null;
      $this->id_marca_mod = isset($datos['id_marca_mod']) ? $datos['id_marca_mod'] : null;
      $this->estatus_mod = isset($datos['estatus_mod']) ? $datos['estatus_mod'] : null;
    }
  }
