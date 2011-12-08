<?php

/**
 * certificados actions.
 *
 * @package    gesser
 * @subpackage certificados
 * @author     Luis Hernández
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class certificadosActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->formFactura = new CertificadoOrigenFacturaForm();
    $this->formDetalle = new CertificadoOrigenDetalleForm();

    if($this->getRequest()->getMethod()==sfRequest::POST){
      $this->formFactura->bind($request->getParameter('factura'), $request->getFiles('factura'));
      if ($this->formFactura->isValid())
      {
        $factura = $request->getParameter('factura');
        $detalle = $request->getParameter('detalle');

        if(isset($factura['buscar'])){
          $factura = Doctrine_Query::create()->from('Factura a')->where("a.fact_num = '".$factura['factura']."'")->limit(1)->execute();

          if($factura->count()>0){
            $this->formDetalle->setDefault('fecha_factura', $factura[0]->fec_emis);
            $this->formDetalle->setDefault('cedula', $factura[0]->co_cli);
            $this->formDetalle->setDefault('nombre', $factura[0]->Clientes->cli_des);
            $this->formDetalle->setDefault('casa', $factura[0]->Clientes->direc1);
            $this->getUser()->setFlash('notice', 'Se encontró la Factura', false);
          }else{
            $this->getUser()->setFlash('error', 'No se encontró la Factura', false);
          }

        }elseif(isset($detalle['imprimir'])){

          $this->formDetalle->bind($request->getParameter('detalle'), $request->getFiles('detalle'));

          if($this->formDetalle->isValid()){
            $config = sfTCPDFPluginConfigHandler::loadConfig();

            // pdf object
            $pdf = new PDFCertificado();

            // settings
            //$pdf->SetFont('FreeSerif', '', 12);
            $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
            $pdf->setHeaderFont(array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
            $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING, PDF_AUTHOR );
            $pdf->setFooterFont(array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
            $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
            $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

            $pdf->Body($detalle['cedula'], $factura['factura'], $detalle['fecha_factura'], $detalle['nombre'], $detalle['casa'], $detalle['avenida'], $detalle['urbanizacion'], $detalle['ciudad'], $detalle['distrito']);
            // output
            $pdf->Output();

            // Stop symfony process
            throw new sfStopException();
          }else
          {
            $this->getUser()->setFlash('error', 'No se puede buscar si no se completan los datos necesarios', false);
          }

        }else{
          $this->redirect('certificados/index');
        }


        

      }
      else
      {
        $this->getUser()->setFlash('error', 'No se puede buscar si no se completan los datos necesarios', false);
      }
    }else{

    }
  }
}
