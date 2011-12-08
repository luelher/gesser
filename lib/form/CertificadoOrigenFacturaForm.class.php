<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class CertificadoOrigenFacturaForm extends BaseForm
{
  public function configure()
  {
    $this->setWidgets(array(
      'factura'    => new sfWidgetFormInputText (array(),array('class' => 'clearfix')),
    ));

    $this->setValidators(array(
      'factura' => new sfValidatorString(array('min_length' => 1, 'max_length' => 20, 'required' => true), array('required' => 'Debe agregar el número de la factura', 'min_length' =>'El número de factura debe tener al menos un caracter', 'max_length' => 'El número de factura debe tener menos de 10 caracteres')),
    ));

    $this->widgetSchema->setNameFormat('factura[%s]');

  	$decorator = new BootstrapCalculadoraWidgetFormSchemaFormatterCustom($this->getWidgetSchema());
  	$this->widgetSchema->addFormFormatter('custom', $decorator);
  	$this->widgetSchema->setFormFormatterName('custom');

    $this->validatorSchema->setOption('allow_extra_fields', true);
    $this->validatorSchema->setOption('filter_extra_fields', false);

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

  }
}

?>
