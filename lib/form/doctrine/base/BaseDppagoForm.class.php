<?php

/**
 * Dppago form base class.
 *
 * @method Dppago getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseDppagoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'tipo_cli' => new sfWidgetFormInputHidden(),
      'descrip'  => new sfWidgetFormInputText(),
      'desde1'   => new sfWidgetFormInputText(),
      'hasta1'   => new sfWidgetFormInputText(),
      'hasta2'   => new sfWidgetFormInputText(),
      'hasta3'   => new sfWidgetFormInputText(),
      'hasta4'   => new sfWidgetFormInputText(),
      'hasta5'   => new sfWidgetFormInputText(),
      'porc1'    => new sfWidgetFormInputText(),
      'porc2'    => new sfWidgetFormInputText(),
      'porc3'    => new sfWidgetFormInputText(),
      'porc4'    => new sfWidgetFormInputText(),
      'porc5'    => new sfWidgetFormInputText(),
      'porc6'    => new sfWidgetFormInputText(),
      'campo1'   => new sfWidgetFormInputText(),
      'campo2'   => new sfWidgetFormInputText(),
      'campo3'   => new sfWidgetFormInputText(),
      'campo4'   => new sfWidgetFormInputText(),
      'campo5'   => new sfWidgetFormInputText(),
      'campo6'   => new sfWidgetFormInputText(),
      'campo7'   => new sfWidgetFormInputText(),
      'campo8'   => new sfWidgetFormInputText(),
      'co_us_in' => new sfWidgetFormInputText(),
      'fe_us_in' => new sfWidgetFormDateTime(),
      'co_us_mo' => new sfWidgetFormInputText(),
      'fe_us_mo' => new sfWidgetFormDateTime(),
      'co_us_el' => new sfWidgetFormInputText(),
      'fe_us_el' => new sfWidgetFormDateTime(),
      'revisado' => new sfWidgetFormInputText(),
      'trasnfe'  => new sfWidgetFormInputText(),
      'co_sucu'  => new sfWidgetFormInputText(),
      'rowguid'  => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'tipo_cli' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('tipo_cli')), 'empty_value' => $this->getObject()->get('tipo_cli'), 'required' => false)),
      'descrip'  => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'desde1'   => new sfValidatorNumber(array('required' => false)),
      'hasta1'   => new sfValidatorNumber(array('required' => false)),
      'hasta2'   => new sfValidatorNumber(array('required' => false)),
      'hasta3'   => new sfValidatorNumber(array('required' => false)),
      'hasta4'   => new sfValidatorNumber(array('required' => false)),
      'hasta5'   => new sfValidatorNumber(array('required' => false)),
      'porc1'    => new sfValidatorNumber(array('required' => false)),
      'porc2'    => new sfValidatorNumber(array('required' => false)),
      'porc3'    => new sfValidatorNumber(array('required' => false)),
      'porc4'    => new sfValidatorNumber(array('required' => false)),
      'porc5'    => new sfValidatorNumber(array('required' => false)),
      'porc6'    => new sfValidatorNumber(array('required' => false)),
      'campo1'   => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo2'   => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo3'   => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo4'   => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo5'   => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo6'   => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo7'   => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo8'   => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'co_us_in' => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'fe_us_in' => new sfValidatorDateTime(array('required' => false)),
      'co_us_mo' => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'fe_us_mo' => new sfValidatorDateTime(array('required' => false)),
      'co_us_el' => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'fe_us_el' => new sfValidatorDateTime(array('required' => false)),
      'revisado' => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'trasnfe'  => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'co_sucu'  => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'rowguid'  => new sfValidatorString(array('max_length' => 36, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('dppago[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Dppago';
  }

}
