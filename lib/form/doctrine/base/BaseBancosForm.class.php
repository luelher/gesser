<?php

/**
 * Bancos form base class.
 *
 * @method Bancos getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseBancosForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'co_ban'    => new sfWidgetFormInputHidden(),
      'des_ban'   => new sfWidgetFormInputText(),
      'telefonos' => new sfWidgetFormInputText(),
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
      'plazo1'    => new sfWidgetFormInputText(),
      'plazo2'    => new sfWidgetFormInputText(),
      'plazo3'    => new sfWidgetFormInputText(),
      'plazo4'    => new sfWidgetFormInputText(),
      'row_id'    => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'co_ban'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('co_ban')), 'empty_value' => $this->getObject()->get('co_ban'), 'required' => false)),
      'des_ban'   => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'telefonos' => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo1'    => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo2'    => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo3'    => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo4'    => new sfValidatorString(array('max_length' => 60, 'required' => false)),
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
      'plazo1'    => new sfValidatorNumber(array('required' => false)),
      'plazo2'    => new sfValidatorNumber(array('required' => false)),
      'plazo3'    => new sfValidatorNumber(array('required' => false)),
      'plazo4'    => new sfValidatorNumber(array('required' => false)),
      'row_id'    => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('bancos[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Bancos';
  }

}
