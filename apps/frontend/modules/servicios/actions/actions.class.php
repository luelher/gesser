<?php

require_once dirname(__FILE__).'/../lib/serviciosGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/serviciosGeneratorHelper.class.php';

/**
 * servicios actions.
 *
 * @package    sf_sandbox
 * @subpackage servicios
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class serviciosActions extends autoServiciosActions
{

  public function executeAjaxFacturas(sfWebRequest $request)
  {
    if ($request->isXmlHttpRequest())
    {
      if (!$value = $request->getParameter('value'))
      {
        return $this->renderText('Sin Facturas.');
      }

      $q = Doctrine_Query::create()->from('Factura f')->where('co_cli = ?', $value);

      $facturas = new sfWidgetFormDoctrineChoice(array('model' => 'Factura', 'key_method' => 'getFactNum', 'method' => 'getFactNum', 'query' => $q, 'add_empty' => true), array());

      return $this->renderPartial('servicios/facturas', array('facturas' => $facturas));
    }
  }

  public function executeAjaxArticulos(sfWebRequest $request)
  {
    if ($request->isXmlHttpRequest())
    {
      if (!$value = $request->getParameter('value'))
      {
        return $this->renderText('Sin Articulos.');
      }

      //select * from art a inner join Fact_reng b on a.co_art=b.co_art where b.fact_num='22281'

      $q = Doctrine_Query::create()->from('Art a')
              ->innerJoin('a.RengFac f')
              ->where('f.fact_num = ?', $value);

      $articulos = new sfWidgetFormDoctrineChoice(array('model' => 'Art', 'key_method' => 'getCoArt', 'method' => 'getArticulo', 'query' => $q, 'add_empty' => true), array());

      return $this->renderPartial('servicios/articulos', array('articulos' => $articulos));
    }
  }

  public function executeRecibo(sfWebRequest $request)
  {
    $this->forward('informenes', 'recibo');
  }

}
