<?php

/**
 * Servicios
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    sf_sandbox
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
class Servicios extends BaseServicios
{
  public function __toString()
  {
    return $this->getCliente().' '.$this->getNombre();
  }

  public function getNombre()
  {
    $cli = Doctrine::getTable('Clientes')->findOneBy('co_cli', $this->getCliente());
    if($cli) return $cli->getCliDes();
    else return '';
  }

  public function getDireccion()
  {
    $cli = Doctrine::getTable('Clientes')->findOneBy('co_cli', $this->getCliente());
    if($cli) return $cli->getDirec1().' '.$cli->getDirec2();
    else return '';
  }

  public function getTelefonos()
  {
    $cli = Doctrine::getTable('Clientes')->findOneBy('co_cli', $this->getCliente());
    if($cli) return $cli->getTelefonos();
    else return '';
  }



  public function getNomart()
  {
    $art = Doctrine::getTable('Art')->findOneBy('co_art', $this->getArticulo());
    if($art) return $art->getArtDes();
    else return '';
  }

  public function getFactFecEmis()
  {
    $fact = Doctrine::getTable('Factura')->findOneBy('fact_num', $this->getFactura());
    if($fact) $fecha = $fact->getFecEmis('d/M/y');
    else return '';

    $fecha = explode(' ',$fecha);
    if(count($fecha)==2) return $fecha[0];
    else return '';
  }
}
