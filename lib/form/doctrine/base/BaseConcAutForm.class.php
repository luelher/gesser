<?php

/**
 * ConcAut form base class.
 *
 * @method ConcAut getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseConcAutForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'cod_cta'  => new sfWidgetFormInputHidden(),
      'mes'      => new sfWidgetFormInputHidden(),
      'ano'      => new sfWidgetFormInputHidden(),
      'fec_load' => new sfWidgetFormDateTime(),
      'status'   => new sfWidgetFormInputText(),
      'descrip'  => new sfWidgetFormInputText(),
      'archivo'  => new sfWidgetFormTextarea(),
      'rowguid'  => new sfWidgetFormInputText(),
      'saldo_ec' => new sfWidgetFormInputText(),
      'revisado' => new sfWidgetFormInputText(),
      'trasnfe'  => new sfWidgetFormInputText(),
      'co_us_in' => new sfWidgetFormInputText(),
      'fe_us_in' => new sfWidgetFormDateTime(),
      'co_us_mo' => new sfWidgetFormInputText(),
      'fe_us_mo' => new sfWidgetFormDateTime(),
      'co_us_el' => new sfWidgetFormInputText(),
      'fe_us_el' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'cod_cta'  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('cod_cta')), 'empty_value' => $this->getObject()->get('cod_cta'), 'required' => false)),
      'mes'      => new sfValidatorChoice(array('choices' => array($this->getObject()->get('mes')), 'empty_value' => $this->getObject()->get('mes'), 'required' => false)),
      'ano'      => new sfValidatorChoice(array('choices' => array($this->getObject()->get('ano')), 'empty_value' => $this->getObject()->get('ano'), 'required' => false)),
      'fec_load' => new sfValidatorDateTime(array('required' => false)),
      'status'   => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'descrip'  => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'archivo'  => new sfValidatorString(array('max_length' => 2147483647, 'required' => false)),
      'rowguid'  => new sfValidatorString(array('max_length' => 36, 'required' => false)),
      'saldo_ec' => new sfValidatorNumber(array('required' => false)),
      'revisado' => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'trasnfe'  => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'co_us_in' => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'fe_us_in' => new sfValidatorDateTime(array('required' => false)),
      'co_us_mo' => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'fe_us_mo' => new sfValidatorDateTime(array('required' => false)),
      'co_us_el' => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'fe_us_el' => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('conc_aut[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ConcAut';
  }

}
