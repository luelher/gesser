<?php

/**
 * Servicios form.
 *
 * @package    sf_sandbox
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ServiciosForm extends BaseServiciosForm
{
  public function configure()
  {

    $format = 'd/m/Y';

    $this->setWidgets(array(
      //'cliente'     => new sfWidgetFormExtCatalogData(),
      'cliente'     => new sfWidgetFormCatalogData(array('table' => 'Clientes', 'field_index' => 'co_cli', 'field_search' => 'co_cli', 'field_description' => 'cli_des'),array()),
      'situacion'   => new sfWidgetFormTextarea(),
      'observacion' => new sfWidgetFormTextarea(),
      'fecha'       => new sfWidgetFormDateJQueryUI(array("change_month" => true, "change_year" => true, 'culture' => 'es', 'format' => $format)),
      //'fecha'       => new sfWidgetFormDate(),
      'id'          => new sfWidgetFormInputHidden(),
      'factura'     => new sfWidgetFormChoice(array('choices' => array($this->object->factura))),
      'articulo'    => new sfWidgetFormChoice(array('choices' => array($this->object->articulo))),
      'estado'      => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cliente'     => new sfValidatorString(array('max_length' => 10, 'required' => true)),
      'situacion'   => new sfValidatorString(array('max_length' => 1000, 'required' => true)),
      'observacion' => new sfValidatorString(array('max_length' => 1000, 'required' => true)),
      'fecha'       => new sfValidatorDateTime(array('required' => true, 'date_format' => '^([0][1-9]|[12][0-9]|3[01])(/|-)(0[1-9]|1[012])\2(\d{4})$^')),
      'id'          => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'factura'     => new sfValidatorInteger(array('min' => 1)),
      'articulo'    => new sfValidatorString(array('max_length' => 30, 'required' => true)),
      'estado'      => new sfValidatorString(array('max_length' => 1, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('servicios[%s]');

    $this->setDefault('fecha',date('Y-m-d'));

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();


  }
}
