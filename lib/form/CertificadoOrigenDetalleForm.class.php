<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class CertificadoOrigenDetalleForm extends BaseForm
{
  public function configure()
  {
    //Body($cedula, $factura, $fecha_factura, $nombre, $casa, $avenida, $urbanizacion, $ciudad, $distrito)
    $this->setWidgets(array(
      'fecha_factura' => new sfWidgetFormDate(array('format' => '%day%/%month%/%year%'),array('class' => 'clearfix')),
      'cedula' => new sfWidgetFormInputText(array(),array('class' => 'clearfix span9', 'readonly' => true)),
      'nombre' => new sfWidgetFormInputText(array(),array('class' => 'clearfix span9', 'readonly' => true)),
      'casa'   => new sfWidgetFormInputText(array('label' => 'Casa Nro, Edil. Apto Nro'),array('class' => 'clearfix span9')),
      'avenida'   => new sfWidgetFormInputText(array('label' => 'Avenida,Calle,Esquina'),array('class' => 'clearfix span9')),
      'urbanizacion'   => new sfWidgetFormInputText(array('label' => 'Urbanización o Barrio'),array('class' => 'clearfix span9')),
      'ciudad'   => new sfWidgetFormInputText(array('label' => 'Ciudad', 'default' => 'Barquisimeto'),array('class' => 'clearfix span9')),
      'distrito'   => new sfWidgetFormInputText(array('label' => 'Distrito, Municipio o Parroquia'),array('class' => 'clearfix span9')),
    ));

    $this->setValidators(array(
      'fecha_factura' => new sfValidatorDate(array('required' => true), array('required' => 'Debe buscar la factura antes de imprimir el certificado (fecha)')),
      'cedula' => new sfValidatorString(array('min_length' => 1, 'max_length' => 20, 'required' => true), array('required' => 'Debe buscar la factura antes de imprimir el certificado (cedula)')),
      'nombre' => new sfValidatorString(array('min_length' => 1, 'max_length' => 500, 'required' => true), array('required' => 'Debe buscar la factura antes de imprimir el certificado (nombre)')),
      'casa' => new sfValidatorString(array('min_length' => 1, 'max_length' => 500, 'required' => true), array('required' => 'Debe buscar la factura antes de imprimir el certificado (casa)')),
    ));

    $this->widgetSchema->setNameFormat('detalle[%s]');

  	$decorator = new BootstrapCalculadoraWidgetFormSchemaFormatterCustom($this->getWidgetSchema());
  	$this->widgetSchema->addFormFormatter('custom', $decorator);
  	$this->widgetSchema->setFormFormatterName('custom');

    $this->validatorSchema->setOption('allow_extra_fields', true);
    $this->validatorSchema->setOption('filter_extra_fields', false);

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

  }
}

?>
