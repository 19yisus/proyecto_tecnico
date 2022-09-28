<?php
  require_once("./db.php");

  class clsPrecios_prod extends db{
    private $id_pre, $monto_entrie_pre, $monto_salida_pre, $fecha_pre, $id_prod_pre, $estatus_pre;

    public function __construct($datos)
    {
      $this->id_pre = $this->monto_entrie_pre = $this->monto_salida_pre = $this->fecha_pre = $this-> id_prod_pre = $this->estatus_pre = null;
    }

    public function setDatos($datos)
    {
      $this->id_pre = isset($datos['id_pre']) ? $datos['id_pre'] : null;
      $this->monto_entrie_pre = isset($datos['monto_entrie_pre']) ? $datos['monto_entrie_pre'] : null;
      $this->monto_salida_pre = isset($datos['monto_salida_pre']) ? $datos['monto_salida_pre'] : null;
      $this->fecha_pre = isset($datos['fecha_pre']) ? $datos['fecha_pre'] : null;
      $this->id_prod_pre = isset($datos['id_prod_pre']) ? $datos['id_prod_pre'] : null;
      $this->estatus_pre = isset($datos['estatus_pre']) ? $datos['estatus_pre'] : null;
    }
  }
