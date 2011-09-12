<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class ResultadoForm extends BaseForm
{
  public function configure()
  {
    $this->setWidgets(array(
      'saldo_financiar'    => new sfWidgetFormInputText(),
      'numero_cuotas'   => new sfWidgetFormInputText(),
      'cuota_mensual' => new sfWidgetFormInputText(),
      'total_venta_a_credito' => new sfWidgetFormInputText(),
      'intereses' => new sfWidgetFormInputText(),
    ));

//    $this->setValidators(array(
//      'servicios_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Servicio'))),
//      'accion'       => new sfValidatorString(array('max_length' => 1000)),
//      'fecha'        => new sfValidatorDateTime(array('required' => true, 'date_format' => '^([0][1-9]|[12][0-9]|3[01])(/|-)(0[1-9]|1[012])\2(\d{4})$^')),
//      'id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
//    ));
  	$decorator = new BootstrapResultadoWidgetFormSchemaFormatterCustom($this->getWidgetSchema());
  	$this->widgetSchema->addFormFormatter('custom', $decorator);
  	$this->widgetSchema->setFormFormatterName('custom');

  }
}

?>
