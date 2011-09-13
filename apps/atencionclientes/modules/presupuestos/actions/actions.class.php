<?php

/**
 * presupuestos actions.
 *
 * @package    gesser
 * @subpackage presupuestos
 * @author     Luis Hernández
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class presupuestosActions extends sfActions
{



 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->forward('presupuestos', 'presupuesto');
  }

  public function executePresupuesto(sfWebRequest $request)
  {
    $D25 = 0.028333333;
    $this->form = new CalculadoraForm();
    //$this->result = new ResultadoForm();

    if($this->getRequest()->getMethod()==sfRequest::POST){
      $this->form->bind($request->getParameter('calculadora'), $request->getFiles('calculadora'));
      if ($this->form->isValid())
      {
        $cal = $request->getParameter('calculadora');

        $D18 = (float)$cal['monto_venta'];
        $C20 = (float)$cal['porcentaje_inicial'];

        $inicial = $D18*$C20/100;

        $H19 = (float)$cal['cuotas'];
        $saldo = (float)$cal['monto_venta']-$inicial;
        $G18 = $saldo;
        $cuotas = (float)$cal['cuotas'];
        $cuota_mensual = (($D25)*pow((1+$D25),$H19)/(pow((1+$D25),$H19)-1))*$G18;
        $G23 = $cuota_mensual;
        $D20 = $inicial;
        $venta_credito = ($G23*$H19)+$D20;
        $G27 = $venta_credito;
        $G18 = $saldo;
        $intereses = $G27-$G18-$D20;

        $this->saldo = $saldo;
        $this->cuotas = $cuotas;
        $this->cuota_mensual = $cuota_mensual;
        $this->venta_credito = $venta_credito;
        $this->intereses = $intereses;
        $this->inicial = $inicial;

        $this->getUser()->setFlash('notice', 'Calculado', false);

      }
      else
      {
        $this->saldo = '';
        $this->cuotas = '';
        $this->cuota_mensual = '';
        $this->venta_credito = '';
        $this->intereses = '';
        $this->inicial = '';
        
        $this->getUser()->setFlash('error', 'No se puede calcular si no se completan los datos necesarios', false);
      }
    }else{
      $this->saldo = '';
      $this->cuotas = '';
      $this->cuota_mensual = '';
      $this->venta_credito = '';
      $this->intereses = '';
      $this->inicial = '';
    }

  }

  public function executeInventario(sfWebRequest $request)
  {
    $this->form = new InventarioForm();
    $this->articulos = null;
    if($this->getRequest()->getMethod()==sfRequest::POST){
      $this->form->bind($request->getParameter('art'), $request->getFiles('art'));
      if ($this->form->isValid())
      {
        $art = $request->getParameter('art');

        $this->articulos = Doctrine_Query::create()->from('Art a');
        $this->articulos->limit(10);
        foreach($art as $name => $val){
          if($name!='_csrf_token'){
            if($val!=''){
              $val = "%$val%";
              $this->articulos->orWhere ("$name like '$val'");
            }
          }
        }
        
        $this->articulos->execute();

        $this->getUser()->setFlash('notice', 'Se encontrados '.$this->articulos->count().' Artículos, sólo se muestran 10', false);

      }
      else
      {
        $this->getUser()->setFlash('error', 'No se puede buscar si no se completan los datos necesarios', false);
      }
    }else{
      
    }

  }


}