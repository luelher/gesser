<?php

/**
 * Spmenenc form base class.
 *
 * @method Spmenenc getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseSpmenencForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'men_num'   => new sfWidgetFormInputHidden(),
      'des_men'   => new sfWidgetFormInputText(),
      'fec_emis'  => new sfWidgetFormDateTime(),
      'comprom'   => new sfWidgetFormInputCheckbox(),
      'procesado' => new sfWidgetFormInputCheckbox(),
      'campo1'    => new sfWidgetFormInputText(),
      'campo2'    => new sfWidgetFormInputText(),
      'campo3'    => new sfWidgetFormInputText(),
      'campo4'    => new sfWidgetFormInputText(),
      'campo5'    => new sfWidgetFormInputText(),
      'campo6'    => new sfWidgetFormInputText(),
      'campo7'    => new sfWidgetFormInputText(),
      'campo8'    => new sfWidgetFormInputText(),
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
      'men_num'   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('men_num')), 'empty_value' => $this->getObject()->get('men_num'), 'required' => false)),
      'des_men'   => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'fec_emis'  => new sfValidatorDateTime(array('required' => false)),
      'comprom'   => new sfValidatorBoolean(array('required' => false)),
      'procesado' => new sfValidatorBoolean(array('required' => false)),
      'campo1'    => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo2'    => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo3'    => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo4'    => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo5'    => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo6'    => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo7'    => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo8'    => new sfValidatorString(array('max_length' => 60, 'required' => false)),
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

    $this->widgetSchema->setNameFormat('spmenenc[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Spmenenc';
  }

}
