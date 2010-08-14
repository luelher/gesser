<?php

/**
 * Spemple form base class.
 *
 * @method Spemple getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseSpempleForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'co_emp'     => new sfWidgetFormInputHidden(),
      'nombres'    => new sfWidgetFormInputText(),
      'sueldo_bas' => new sfWidgetFormInputText(),
      'campo1'     => new sfWidgetFormInputText(),
      'campo2'     => new sfWidgetFormInputText(),
      'campo3'     => new sfWidgetFormInputText(),
      'campo4'     => new sfWidgetFormInputText(),
      'co_us_in'   => new sfWidgetFormInputText(),
      'co_us_mo'   => new sfWidgetFormInputText(),
      'co_us_el'   => new sfWidgetFormInputText(),
      'fe_us_in'   => new sfWidgetFormDateTime(),
      'fe_us_mo'   => new sfWidgetFormDateTime(),
      'fe_us_el'   => new sfWidgetFormDateTime(),
      'rowguid'    => new sfWidgetFormInputText(),
      'co_sucu'    => new sfWidgetFormInputText(),
      'revisado'   => new sfWidgetFormInputText(),
      'trasnfe'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'co_emp'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('co_emp')), 'empty_value' => $this->getObject()->get('co_emp'), 'required' => false)),
      'nombres'    => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'sueldo_bas' => new sfValidatorNumber(array('required' => false)),
      'campo1'     => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'campo2'     => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'campo3'     => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'campo4'     => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'co_us_in'   => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'co_us_mo'   => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'co_us_el'   => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'fe_us_in'   => new sfValidatorDateTime(array('required' => false)),
      'fe_us_mo'   => new sfValidatorDateTime(array('required' => false)),
      'fe_us_el'   => new sfValidatorDateTime(array('required' => false)),
      'rowguid'    => new sfValidatorString(array('max_length' => 36, 'required' => false)),
      'co_sucu'    => new sfValidatorString(array('max_length' => 6)),
      'revisado'   => new sfValidatorString(array('max_length' => 1)),
      'trasnfe'    => new sfValidatorString(array('max_length' => 1)),
    ));

    $this->widgetSchema->setNameFormat('spemple[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Spemple';
  }

}
