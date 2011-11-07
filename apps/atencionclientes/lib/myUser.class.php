<?php

class myUser extends sfBasicSecurityUser
{

  public function resetCarrito()
  {
    $this->getAttributeHolder()->remove('carrito');
  }

  public function addArt(Art $art)
  {
    $coarts = $this->getAttribute('carrito', array());

    if (!array_key_exists($art->getCoArt(), $coarts))
    {
      $coarts[$art->getCoArt()] = 1;
    }else{
      $coarts[$art->getCoArt()] += 1;
    }

    $this->setAttribute('carrito', $coarts);
  }

  public function getCarrito()
  {
    $carrito = $this->getAttribute('carrito', array());

    if($carrito) $arts = Doctrine_Query::create()->from('Art a')->whereIn('co_art', array_keys($carrito))->execute();
    else $arts = array();

    foreach($arts as $art){
      if(isset($carrito[$art->getCoArt()])) $art->setCantidad($carrito[$art->getCoArt()]);
    }

    return $arts;
  }

}
