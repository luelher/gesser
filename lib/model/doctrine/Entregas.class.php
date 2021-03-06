<?php

/**
 * Entregas
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    sf_sandbox
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
class Entregas extends BaseEntregas
{
  public function getNombre()
  {

    $serv = $this->getServicio();

    if($serv){
      $cli = Doctrine::getTable('Clientes')->findOneBy('co_cli', $serv->getCliente() != null ? $serv->getCliente() : '' );
      if($cli) return $cli->getCliDes();
      else return 'No Encontrado';
    }else return '';
  }
}
