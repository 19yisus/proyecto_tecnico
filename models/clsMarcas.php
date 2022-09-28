<?php
  require_once("./db.php");

  class clsMarcas extends db{
    private $id_mar, $des_mar, $estatus_mar;

    public function __construct($datos)
    {
      $this->id_mar = $this->des_mar = $this->estatus_mar = null;
    }

    public function setDatos($datos)
    {
      $this->id_mar = isset($datos['id_mar']) ? $datos['id_mar'] : null;
      $this->des_mar = isset($datos['des_mar']) ? $datos['des_mar'] : null;
      $this->estatus_mar = isset($datos['estatus_mar']) ? $datos['estatus_mar'] : null;
    }
  }
