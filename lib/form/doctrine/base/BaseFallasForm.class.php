<?php

/**
 * Fallas form base class.
 *
 * @method Fallas getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseFallasForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'co_falla'  => new sfWidgetFormInputHidden(),
      'falla_des' => new sfWidgetFormInputText(),
      'co_lin'    => new sfWidgetFormInputHidden(),
      'campo1'    => new sfWidgetFormInputText(),
      'campo2'    => new sfWidgetFormInputText(),
      'campo3'    => new sfWidgetFormInputText(),
      'campo4'    => new sfWidgetFormInputText(),
      'co_us_in'  => new sfWidgetFormInputText(),
      'fe_us_in'  => new sfWidgetFormDateTime(),
      'co_us_mo'  => new sfWidgetFormInputText(),
      'fe_us_mo'  => new sfWidgetFormDateTime(),
      'co_us_el'  => new sfWidgetFormInputText(),
      'fe_us_el'  => new sfWidgetFormDateTime(),
      'revisado'  => new sfWidgetFormInputText(),
      'trasnfe'   => new sfWidgetFormInputText(),
      'co_sucu'   => new sfWidgetFormInputText(),
      'rowguid'   => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'co_falla'  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('co_falla')), 'empty_value' => $this->getObject()->get('co_falla'), 'required' => false)),
      'falla_des' => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'co_lin'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('co_lin')), 'empty_value' => $this->getObject()->get('co_lin'), 'required' => false)),
      'campo1'    => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'campo2'    => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'campo3'    => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'campo4'    => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'co_us_in'  => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'fe_us_in'  => new sfValidatorDateTime(array('required' => false)),
      'co_us_mo'  => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'fe_us_mo'  => new sfValidatorDateTime(array('required' => false)),
      'co_us_el'  => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'fe_us_el'  => new sfValidatorDateTime(array('required' => false)),
      'revisado'  => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'trasnfe'   => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'co_sucu'   => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'rowguid'   => new sfValidatorString(array('max_length' => 36, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('fallas[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Fallas';
  }

}
