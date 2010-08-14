<?php

/**
 * Spcostest form base class.
 *
 * @method Spcostest getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseSpcostestForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'cost_num' => new sfWidgetFormInputHidden(),
      'fec_vig'  => new sfWidgetFormDateTime(),
      'fe_emis'  => new sfWidgetFormDateTime(),
      'cost_des' => new sfWidgetFormInputText(),
      'campo1'   => new sfWidgetFormInputText(),
      'campo2'   => new sfWidgetFormInputText(),
      'campo3'   => new sfWidgetFormInputText(),
      'campo4'   => new sfWidgetFormInputText(),
      'campo5'   => new sfWidgetFormInputText(),
      'campo6'   => new sfWidgetFormInputText(),
      'campo7'   => new sfWidgetFormInputText(),
      'campo8'   => new sfWidgetFormInputText(),
      'co_us_in' => new sfWidgetFormInputText(),
      'co_us_mo' => new sfWidgetFormInputText(),
      'co_us_el' => new sfWidgetFormInputText(),
      'fe_us_in' => new sfWidgetFormDateTime(),
      'fe_us_mo' => new sfWidgetFormDateTime(),
      'fe_us_el' => new sfWidgetFormDateTime(),
      'rowguid'  => new sfWidgetFormInputText(),
      'co_sucu'  => new sfWidgetFormInputText(),
      'trasnfe'  => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cost_num' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('cost_num')), 'empty_value' => $this->getObject()->get('cost_num'), 'required' => false)),
      'fec_vig'  => new sfValidatorDateTime(array('required' => false)),
      'fe_emis'  => new sfValidatorDateTime(array('required' => false)),
      'cost_des' => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo1'   => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'campo2'   => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'campo3'   => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'campo4'   => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'campo5'   => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'campo6'   => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'campo7'   => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'campo8'   => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'co_us_in' => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'co_us_mo' => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'co_us_el' => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'fe_us_in' => new sfValidatorDateTime(array('required' => false)),
      'fe_us_mo' => new sfValidatorDateTime(array('required' => false)),
      'fe_us_el' => new sfValidatorDateTime(array('required' => false)),
      'rowguid'  => new sfValidatorString(array('max_length' => 36, 'required' => false)),
      'co_sucu'  => new sfValidatorString(array('max_length' => 6)),
      'trasnfe'  => new sfValidatorString(array('max_length' => 1)),
    ));

    $this->widgetSchema->setNameFormat('spcostest[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Spcostest';
  }

}
