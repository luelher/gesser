<?php

/**
 * Empaques form base class.
 *
 * @method Empaques getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseEmpaquesForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'emp_num'  => new sfWidgetFormInputHidden(),
      'fecha'    => new sfWidgetFormDateTime(),
      'nro_orig' => new sfWidgetFormInputText(),
      'tipo_doc' => new sfWidgetFormInputText(),
      'descrip'  => new sfWidgetFormInputText(),
      'co_cli'   => new sfWidgetFormInputText(),
      'status'   => new sfWidgetFormInputText(),
      'campo1'   => new sfWidgetFormInputText(),
      'campo2'   => new sfWidgetFormInputText(),
      'campo3'   => new sfWidgetFormInputText(),
      'campo4'   => new sfWidgetFormInputText(),
      'campo5'   => new sfWidgetFormInputText(),
      'campo6'   => new sfWidgetFormInputText(),
      'campo7'   => new sfWidgetFormInputText(),
      'campo8'   => new sfWidgetFormInputText(),
      'co_us_in' => new sfWidgetFormInputText(),
      'fe_us_in' => new sfWidgetFormDateTime(),
      'co_us_mo' => new sfWidgetFormInputText(),
      'fe_us_mo' => new sfWidgetFormDateTime(),
      'co_us_el' => new sfWidgetFormInputText(),
      'fe_us_el' => new sfWidgetFormDateTime(),
      'co_envio' => new sfWidgetFormInputText(),
      'fe_envio' => new sfWidgetFormDateTime(),
      'co_resrc' => new sfWidgetFormInputText(),
      'fe_resrc' => new sfWidgetFormDateTime(),
      'co_resem' => new sfWidgetFormInputText(),
      'co_sucu'  => new sfWidgetFormInputText(),
      'fe_emp'   => new sfWidgetFormDateTime(),
      'rowguid'  => new sfWidgetFormInputText(),
      'revisado' => new sfWidgetFormInputText(),
      'trasnfe'  => new sfWidgetFormInputText(),
      'anulada'  => new sfWidgetFormInputCheckbox(),
      'fact_num' => new sfWidgetFormInputText(),
      'empr'     => new sfWidgetFormInputCheckbox(),
    ));

    $this->setValidators(array(
      'emp_num'  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('emp_num')), 'empty_value' => $this->getObject()->get('emp_num'), 'required' => false)),
      'fecha'    => new sfValidatorDateTime(array('required' => false)),
      'nro_orig' => new sfValidatorInteger(array('required' => false)),
      'tipo_doc' => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'descrip'  => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'co_cli'   => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'status'   => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'campo1'   => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo2'   => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo3'   => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo4'   => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo5'   => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo6'   => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo7'   => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo8'   => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'co_us_in' => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'fe_us_in' => new sfValidatorDateTime(array('required' => false)),
      'co_us_mo' => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'fe_us_mo' => new sfValidatorDateTime(array('required' => false)),
      'co_us_el' => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'fe_us_el' => new sfValidatorDateTime(array('required' => false)),
      'co_envio' => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'fe_envio' => new sfValidatorDateTime(array('required' => false)),
      'co_resrc' => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'fe_resrc' => new sfValidatorDateTime(array('required' => false)),
      'co_resem' => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'co_sucu'  => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'fe_emp'   => new sfValidatorDateTime(array('required' => false)),
      'rowguid'  => new sfValidatorString(array('max_length' => 36, 'required' => false)),
      'revisado' => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'trasnfe'  => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'anulada'  => new sfValidatorBoolean(array('required' => false)),
      'fact_num' => new sfValidatorInteger(array('required' => false)),
      'empr'     => new sfValidatorBoolean(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('empaques[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Empaques';
  }

}
