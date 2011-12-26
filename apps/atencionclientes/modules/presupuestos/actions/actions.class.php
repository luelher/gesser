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
    $this->seleccionados = $this->getUser()->getCarrito();
    $this->total = 0;
    

    if($request->getMethod()==sfRequest::POST){
      $this->form->bind($request->getParameter('calculadora'), $request->getFiles('calculadora'));
      if ($this->form->isValid())
      {
        $cal = $request->getParameter('calculadora');

        $D18 = (float)$cal['monto_venta'];
        $C20 = (float)$cal['porcentaje_inicial'];

        if($cal['giro_a_la_vista']!=''){
          if($cal['giro_a_la_vista']=='12'){
            $cal['monto_inicial'] = $D18 * (0.09046679);
            $cal['cuotas'] = '12';
          }elseif($cal['giro_a_la_vista']=='18'){
            $cal['monto_inicial'] = $D18 * (0.06689259);
            $cal['cuotas'] = '18';
          }
        }

        if($cal['porcentaje_inicial']>0){
          $inicial = $D18*$C20/100;
          $porcentaje_inicial = $cal['porcentaje_inicial'];
        }else{
          if($cal['monto_inicial']>0){
            $inicial = $cal['monto_inicial'];
            $porcentaje_inicial = ($inicial * 100) / $D18;
          }
          else {
            $inicial = 0;
            $porcentaje_inicial = 0;
          }
        }

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
        $this->porcentaje_inicial = $porcentaje_inicial;

        $this->getUser()->setFlash('notice', 'Calculado', false);

        if(isset($cal['imprimir'])){

          $config = sfTCPDFPluginConfigHandler::loadConfig();

          // pdf object
          $pdf = new PDFPresupuesto();

          // settings
          //$pdf->SetFont('FreeSerif', '', 12);
          $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
          $pdf->setHeaderFont(array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
          $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING, PDF_AUTHOR );
          $pdf->setFooterFont(array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
          $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
          $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

          $pdf->Body($this->seleccionados, $this->saldo, $this->cuotas, $this->cuota_mensual, $this->venta_credito, $this->intereses, $this->inicial, $this->porcentaje_inicial);
          // output
          $pdf->Output();

          // Stop symfony process
          throw new sfStopException();
        }


      }
      else
      {
        $this->saldo = '';
        $this->cuotas = '';
        $this->cuota_mensual = '';
        $this->venta_credito = '';
        $this->intereses = '';
        $this->inicial = '';
        $this->porcentaje_inicial = '';
        
        $this->getUser()->setFlash('error', 'No se puede calcular si no se completan los datos necesarios', false);
      }
    }else{
      $this->saldo = '';
      $this->cuotas = '';
      $this->cuota_mensual = '';
      $this->venta_credito = '';
      $this->intereses = '';
      $this->inicial = '';
      $this->porcentaje_inicial = '';

      foreach($this->seleccionados as $selec){
        $this->total += ($selec->getCantidad()*$selec->getPrecVta5());
      }

      if($this->total>0) $this->form->setDefault ('monto_venta', round ($this->total,2) );

    }

  }

  public function executeInventario(sfWebRequest $request)
  {
    $this->form = new InventarioForm();
    $this->articulos = null;
    $this->pagina = 1;
    $this->total = 0;
    $this->seleccionados = $this->getUser()->getCarrito();
    if($this->getRequest()->getMethod()==sfRequest::POST){
      $this->form->bind($request->getParameter('art'), $request->getFiles('art'));
      if ($this->form->isValid())
      {
        $art = $request->getParameter('art');


        $articulos = Doctrine_Query::create()->from('Art a');
        foreach($art as $name => $val){
          if($name!='_csrf_token'){
            if($val!=''){
              $val = "%$val%";
              $articulos->orWhere ("$name like '$val'");
            }
          }
        }

        $offset = (integer)$request->getParameter('page', 1);

        $articulos->orderBy('a.co_art');
        $articulos->offset($offset*5);

        $this->pager = new sfDoctrinePager('Art', '5');
        $this->pager->setQuery($articulos);
        $this->pager->setPage($request->getParameter('page', 1));
        $this->pager->init();

        $this->articulos = $this->pager->getResults();
        $this->pagina=$this->pager->getPage();
        $this->total = $this->pager->getLastPage();

        $this->getUser()->setFlash('notice', 'Se encontrados '.$this->pager->count().' Artículos, sólo se muestran 5', false);

      }
      else
      {
        $this->getUser()->setFlash('error', 'No se puede buscar si no se completan los datos necesarios', false);
      }
    }else{
      
    }

  }

  public function executeAgregar(sfWebRequest $request)
  {
    $this->seleccionados = null;
    $this->error = false;

    $co_art = $request->getParameter('co_art');
    
    $art = Doctrine::getTable('Art')->findOneByCoArt($co_art);

    if($art) $this->getUser()->addArt($art);
    else $this->error = true;

    $this->seleccionados = $this->getUser()->getCarrito();


  }

  public function executeLimpiar(sfWebRequest $request)
  {
    $this->getUser()->resetCarrito();
    
    $this->redirect($request->getReferer());
  }


}
