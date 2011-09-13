<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class CalculadoraForm extends BaseForm
{
  public function configure()
  {
    $this->setWidgets(array(
      'monto_venta'    => new sfWidgetFormInputText(array(),array('class' => 'clearfix')),
      'porcentaje_inicial' => new sfWidgetFormInputText(array('default' => 0),array('class' => 'clearfix')),
      'monto_inicial' => new sfWidgetFormInputText(array('default' => 0),array('class' => 'clearfix')),
      'cuotas'   => new sfWidgetFormInputText(array(),array('class' => 'clearfix')),
      'descuento' => new sfWidgetFormInputText(array('default' => 0),array('class' => 'clearfix')),
    ));

    $this->setValidators(array(
      'monto_venta' => new sfValidatorNumber(array('min' => 1, 'max' => 999999999, 'required' => true), array('required' => 'Debe agregar el monto de la venta', 'min' =>'El número debe ser mayor a 1', 'max' => 'El número debe ser menor a 999.999.999')),
      'porcentaje_inicial'  => new sfValidatorNumber(array('min' => 0, 'max' => 999999999, 'required' => true), array('required' => 'Debe agregar el porcentaje a aplicar', 'min' =>'El número debe ser mayor a  0', 'max' => 'El número debe ser menor a 999.999.999')),
      'monto_inicial'  => new sfValidatorNumber(array('min' => 0, 'max' => 999999999, 'required' => true), array('required' => 'Debe agregar el porcentaje a aplicar', 'min' =>'El número debe ser mayor a  0', 'max' => 'El número debe ser menor a 999.999.999')),
      'cuotas'      => new sfValidatorNumber(array('min' => 1, 'max' => 999999999, 'required' => true), array('required' => 'Debe agregar la cantidad de cuotas', 'min' =>'El número debe ser mayor a 1', 'max' => 'El número debe ser menor a 999.999.999')),
      'descuento'   => new sfValidatorNumber(array('min' => 0, 'max' => 999999999, 'required' => true), array('required' => 'Debe agregar el monto de descuento', 'min' =>'El número debe ser mayor a 1', 'max' => 'El número debe ser menor a 999.999.999')),
    ));

    $this->widgetSchema->setNameFormat('calculadora[%s]');

  	$decorator = new BootstrapCalculadoraWidgetFormSchemaFormatterCustom($this->getWidgetSchema());
  	$this->widgetSchema->addFormFormatter('custom', $decorator);
  	$this->widgetSchema->setFormFormatterName('custom');

    $this->validatorSchema->setOption('allow_extra_fields', true);
    $this->validatorSchema->setOption('filter_extra_fields', false);

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

  }
}

?>
