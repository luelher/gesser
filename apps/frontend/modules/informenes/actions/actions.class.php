<?php

/**
 * informenes actions.
 *
 * @package    gesser
 * @subpackage informenes
 * @author     Luis Hernández
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class informenesActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    
  }

  public function executeServicios(sfWebRequest $request)
  {
    
    if($request->getMethod()==sfRequest::GET){
      $this->form = new CriterioBusquedaForm();
      $this->mensaje = '';
    }else{
      $criterios = $request->getParameter('criterio','');
      if($criterios){
        if(isset($criterios['fecha_desde']) && isset($criterios['fecha_hasta'])){
        if( $criterios['fecha_desde']!='' && $criterios['fecha_hasta']!='') {
          $config = sfTCPDFPluginConfigHandler::loadConfig();

          // pdf object
          $pdf = new PDFServicios();

          // settings
          //$pdf->SetFont('FreeSerif', '', 12);
          $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
          $pdf->setHeaderFont(array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
          $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING, PDF_AUTHOR );
          $pdf->setFooterFont(array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
          $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
          $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

          $desde = explode('/', $criterios['fecha_desde']);
          $hasta = explode('/', $criterios['fecha_hasta']);

          $pdf->Body($desde[2].'-'.$desde[1].'-'.$desde[1],$hasta[2].'-'.$hasta[1].'-'.$hasta[1]);
          // output
          $pdf->Output();

          // Stop symfony process
          throw new sfStopException();

        }else{
          $this->form = new CriterioBusquedaForm();
          $this->mensaje = 'Debe ingresar un rango de fechas válidas';
        }}else{
          $this->form = new CriterioBusquedaForm();
          $this->mensaje = 'Debe ingresar un rango de fechas válidas';
        }
      }else{
        $this->form = new CriterioBusquedaForm();
        $this->mensaje = 'Debe ingresar un rango de fechas válidas';
      }
    }

  }

  public function executeRecibo(sfWebRequest $request)
  {

    $config = sfTCPDFPluginConfigHandler::loadConfig();

    // pdf object
    $pdf = new PDFRecibo();

    // settings
    //$pdf->SetFont('FreeSerif', '', 12);
    $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
    $pdf->setHeaderFont(array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
    $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING, PDF_AUTHOR );
    $pdf->setFooterFont(array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
    $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
    $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

    $pdf->Body($request->getParameter('id'));
    // output
    $pdf->Output();

    // Stop symfony process
    throw new sfStopException();
  }

  public function executeNotaEntrega(sfWebRequest $request)
  {

    $config = sfTCPDFPluginConfigHandler::loadConfig();

    // pdf object
    $pdf = new PDFNotaEntrega();

    // settings
    //$pdf->SetFont('FreeSerif', '', 12);
    $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
    $pdf->setHeaderFont(array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
    $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING, PDF_AUTHOR );
    $pdf->setFooterFont(array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
    $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
    $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

    $pdf->Body($request->getParameter('id'));
    // output
    $pdf->Output();

    // Stop symfony process
    throw new sfStopException();
  }
}
