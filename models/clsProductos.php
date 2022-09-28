<?php
  require_once("./db.php");

  class clsProductos extends db{
    private $id_prod, $des_prod, $num_prod, $stock_prod, $id_mod_prod, $estatus_prod;

    public function __construct($datos)
    {
      $this->id_prod = $this->des_prod = $this->num_prod = $this->stock_prod = $this-> id_mod_prod = $this->estatus_prod = null;
    }

    public function setDatos($datos)
    {
      $this->id_prod = isset($datos['id_prod']) ? $datos['id_prod'] : null;
      $this->des_prod = isset($datos['des_prod']) ? $datos['des_prod'] : null;
      $this->num_prod = isset($datos['num_prod']) ? $datos['num_prod'] : null;
      $this->stock_prod = isset($datos['stock_prod']) ? $datos['stock_prod'] : null;
      $this->id_mod_prod = isset($datos['id_mod_prod']) ? $datos['id_mod_prod'] : null;
      $this->estatus_prod = isset($datos['estatus_prod']) ? $datos['estatus_prod'] : null;
    }
  }
