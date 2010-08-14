<?php

/**
 * TabEnc form base class.
 *
 * @method TabEnc getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTabEncForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'fecha'    => new sfWidgetFormInputHidden(),
      'tasa'     => new sfWidgetFormInputText(),
      'tasag10'  => new sfWidgetFormInputText(),
      'tasag20'  => new sfWidgetFormInputText(),
      'tipo_imp' => new sfWidgetFormInputText(),
      'co_us_in' => new sfWidgetFormInputText(),
      'fe_us_in' => new sfWidgetFormDateTime(),
      'co_us_mo' => new sfWidgetFormInputText(),
      'fe_us_mo' => new sfWidgetFormDateTime(),
      'co_us_el' => new sfWidgetFormInputText(),
      'fe_us_el' => new sfWidgetFormDateTime(),
      'revisado' => new sfWidgetFormInputText(),
      'trasnfe'  => new sfWidgetFormInputText(),
      'rowguid'  => new sfWidgetFormInputText(),
      'tasa3'    => new sfWidgetFormInputText(),
      'tasa4'    => new sfWidgetFormInputText(),
      'tasa5'    => new sfWidgetFormInputText(),
      'compras'  => new sfWidgetFormInputCheckbox(),
    ));

    $this->setValidators(array(
      'fecha'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('fecha')), 'empty_value' => $this->getObject()->get('fecha'), 'required' => false)),
      'tasa'     => new sfValidatorNumber(array('required' => false)),
      'tasag10'  => new sfValidatorNumber(array('required' => false)),
      'tasag20'  => new sfValidatorNumber(array('required' => false)),
      'tipo_imp' => new sfValidatorInteger(array('required' => false)),
      'co_us_in' => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'fe_us_in' => new sfValidatorDateTime(array('required' => false)),
      'co_us_mo' => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'fe_us_mo' => new sfValidatorDateTime(array('required' => false)),
      'co_us_el' => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'fe_us_el' => new sfValidatorDateTime(array('required' => false)),
      'revisado' => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'trasnfe'  => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'rowguid'  => new sfValidatorString(array('max_length' => 36, 'required' => false)),
      'tasa3'    => new sfValidatorNumber(array('required' => false)),
      'tasa4'    => new sfValidatorNumber(array('required' => false)),
      'tasa5'    => new sfValidatorNumber(array('required' => false)),
      'compras'  => new sfValidatorBoolean(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tab_enc[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TabEnc';
  }

}
