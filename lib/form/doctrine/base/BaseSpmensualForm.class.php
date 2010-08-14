<?php

/**
 * Spmensual form base class.
 *
 * @method Spmensual getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseSpmensualForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'co_art'   => new sfWidgetFormInputHidden(),
      'cantidad' => new sfWidgetFormInputText(),
      'diasinv'  => new sfWidgetFormInputText(),
      'diasprod' => new sfWidgetFormInputText(),
      'holgura'  => new sfWidgetFormInputText(),
      'periodo'  => new sfWidgetFormInputText(),
      'cantprod' => new sfWidgetFormInputText(),
      'trasnfe'  => new sfWidgetFormInputText(),
      'co_us_in' => new sfWidgetFormInputText(),
      'co_us_mo' => new sfWidgetFormInputText(),
      'co_us_el' => new sfWidgetFormInputText(),
      'fe_us_in' => new sfWidgetFormDateTime(),
      'fe_us_mo' => new sfWidgetFormDateTime(),
      'fe_us_el' => new sfWidgetFormDateTime(),
      'co_sucu'  => new sfWidgetFormInputText(),
      'cod_ced'  => new sfWidgetFormInputText(),
      'pendpro'  => new sfWidgetFormInputText(),
      'mesprox'  => new sfWidgetFormInputText(),
      'stockop'  => new sfWidgetFormInputText(),
      'stockact' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'co_art'   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('co_art')), 'empty_value' => $this->getObject()->get('co_art'), 'required' => false)),
      'cantidad' => new sfValidatorNumber(array('required' => false)),
      'diasinv'  => new sfValidatorNumber(array('required' => false)),
      'diasprod' => new sfValidatorInteger(array('required' => false)),
      'holgura'  => new sfValidatorInteger(array('required' => false)),
      'periodo'  => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'cantprod' => new sfValidatorNumber(array('required' => false)),
      'trasnfe'  => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'co_us_in' => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'co_us_mo' => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'co_us_el' => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'fe_us_in' => new sfValidatorDateTime(array('required' => false)),
      'fe_us_mo' => new sfValidatorDateTime(array('required' => false)),
      'fe_us_el' => new sfValidatorDateTime(array('required' => false)),
      'co_sucu'  => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'cod_ced'  => new sfValidatorInteger(),
      'pendpro'  => new sfValidatorNumber(array('required' => false)),
      'mesprox'  => new sfValidatorNumber(array('required' => false)),
      'stockop'  => new sfValidatorNumber(array('required' => false)),
      'stockact' => new sfValidatorNumber(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('spmensual[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Spmensual';
  }

}
