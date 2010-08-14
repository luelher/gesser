<?php

/**
 * Chequeras form base class.
 *
 * @method Chequeras getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseChequerasForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'co_chra'  => new sfWidgetFormInputHidden(),
      'chra_des' => new sfWidgetFormInputText(),
      'cod_cta'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Cuentas'), 'add_empty' => false)),
      'fecha_re' => new sfWidgetFormDateTime(),
      'num_ch_p' => new sfWidgetFormInputText(),
      'num_ch_u' => new sfWidgetFormInputText(),
      'respons'  => new sfWidgetFormInputText(),
      'campo1'   => new sfWidgetFormInputText(),
      'campo2'   => new sfWidgetFormInputText(),
      'campo3'   => new sfWidgetFormInputText(),
      'campo4'   => new sfWidgetFormInputText(),
      'co_us_in' => new sfWidgetFormInputText(),
      'fe_us_in' => new sfWidgetFormDateTime(),
      'co_us_mo' => new sfWidgetFormInputText(),
      'fe_us_mo' => new sfWidgetFormDateTime(),
      'co_us_el' => new sfWidgetFormInputText(),
      'fe_us_el' => new sfWidgetFormDateTime(),
      'revisado' => new sfWidgetFormInputText(),
      'trasnfe'  => new sfWidgetFormInputText(),
      'co_sucu'  => new sfWidgetFormInputText(),
      'status'   => new sfWidgetFormInputText(),
      'limusore' => new sfWidgetFormInputCheckbox(),
      'ch_gen'   => new sfWidgetFormInputCheckbox(),
      'rowguid'  => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'co_chra'  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('co_chra')), 'empty_value' => $this->getObject()->get('co_chra'), 'required' => false)),
      'chra_des' => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'cod_cta'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Cuentas'))),
      'fecha_re' => new sfValidatorDateTime(array('required' => false)),
      'num_ch_p' => new sfValidatorInteger(array('required' => false)),
      'num_ch_u' => new sfValidatorInteger(array('required' => false)),
      'respons'  => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'campo1'   => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo2'   => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo3'   => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo4'   => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'co_us_in' => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'fe_us_in' => new sfValidatorDateTime(array('required' => false)),
      'co_us_mo' => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'fe_us_mo' => new sfValidatorDateTime(array('required' => false)),
      'co_us_el' => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'fe_us_el' => new sfValidatorDateTime(array('required' => false)),
      'revisado' => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'trasnfe'  => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'co_sucu'  => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'status'   => new sfValidatorString(array('max_length' => 3, 'required' => false)),
      'limusore' => new sfValidatorBoolean(array('required' => false)),
      'ch_gen'   => new sfValidatorBoolean(array('required' => false)),
      'rowguid'  => new sfValidatorString(array('max_length' => 36, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('chequeras[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Chequeras';
  }

}
