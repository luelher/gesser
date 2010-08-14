<?php

/**
 * InfDmc form base class.
 *
 * @method InfDmc getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseInfDmcForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'inf_num'  => new sfWidgetFormInputHidden(),
      'inf_desc' => new sfWidgetFormInputText(),
      'clave'    => new sfWidgetFormInputText(),
      'tipo'     => new sfWidgetFormInputHidden(),
      'telefono' => new sfWidgetFormInputText(),
      'co_us_el' => new sfWidgetFormInputText(),
      'fe_us_el' => new sfWidgetFormDateTime(),
      'revisado' => new sfWidgetFormInputText(),
      'trasnfe'  => new sfWidgetFormInputText(),
      'co_sucu'  => new sfWidgetFormInputText(),
      'rowguid'  => new sfWidgetFormInputText(),
      'co_us_in' => new sfWidgetFormInputText(),
      'co_us_mo' => new sfWidgetFormInputText(),
      'fe_us_in' => new sfWidgetFormDateTime(),
      'fe_us_mo' => new sfWidgetFormDateTime(),
      'campo1'   => new sfWidgetFormInputText(),
      'campo2'   => new sfWidgetFormInputText(),
      'campo3'   => new sfWidgetFormInputText(),
      'campo4'   => new sfWidgetFormInputText(),
      'dir'      => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'inf_num'  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('inf_num')), 'empty_value' => $this->getObject()->get('inf_num'), 'required' => false)),
      'inf_desc' => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'clave'    => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'tipo'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('tipo')), 'empty_value' => $this->getObject()->get('tipo'), 'required' => false)),
      'telefono' => new sfValidatorString(array('max_length' => 15, 'required' => false)),
      'co_us_el' => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'fe_us_el' => new sfValidatorDateTime(array('required' => false)),
      'revisado' => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'trasnfe'  => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'co_sucu'  => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'rowguid'  => new sfValidatorString(array('max_length' => 36, 'required' => false)),
      'co_us_in' => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'co_us_mo' => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'fe_us_in' => new sfValidatorDateTime(array('required' => false)),
      'fe_us_mo' => new sfValidatorDateTime(array('required' => false)),
      'campo1'   => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo2'   => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo3'   => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo4'   => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'dir'      => new sfValidatorString(array('max_length' => 60, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('inf_dmc[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'InfDmc';
  }

}
