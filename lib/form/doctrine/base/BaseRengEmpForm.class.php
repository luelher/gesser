<?php

/**
 * RengEmp form base class.
 *
 * @method RengEmp getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseRengEmpForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'emp_num'    => new sfWidgetFormInputHidden(),
      'reng_num'   => new sfWidgetFormInputHidden(),
      'co_art'     => new sfWidgetFormInputText(),
      'total_art'  => new sfWidgetFormInputText(),
      'stotal_art' => new sfWidgetFormInputText(),
      'prec_vta'   => new sfWidgetFormInputText(),
      'unid'       => new sfWidgetFormInputText(),
      'num_blto'   => new sfWidgetFormInputText(),
      'nro_lote'   => new sfWidgetFormInputText(),
      'fec_lote'   => new sfWidgetFormDateTime(),
      'rowguid'    => new sfWidgetFormInputText(),
      'co_alma'    => new sfWidgetFormInputText(),
      'cant_orgt'  => new sfWidgetFormInputText(),
      'cant_orgs'  => new sfWidgetFormInputText(),
      'agrupar'    => new sfWidgetFormInputText(),
      'unid_r'     => new sfWidgetFormInputText(),
      'nro_reng'   => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'emp_num'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('emp_num')), 'empty_value' => $this->getObject()->get('emp_num'), 'required' => false)),
      'reng_num'   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('reng_num')), 'empty_value' => $this->getObject()->get('reng_num'), 'required' => false)),
      'co_art'     => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'total_art'  => new sfValidatorNumber(array('required' => false)),
      'stotal_art' => new sfValidatorNumber(array('required' => false)),
      'prec_vta'   => new sfValidatorNumber(array('required' => false)),
      'unid'       => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'num_blto'   => new sfValidatorInteger(array('required' => false)),
      'nro_lote'   => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'fec_lote'   => new sfValidatorDateTime(array('required' => false)),
      'rowguid'    => new sfValidatorString(array('max_length' => 36, 'required' => false)),
      'co_alma'    => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'cant_orgt'  => new sfValidatorNumber(array('required' => false)),
      'cant_orgs'  => new sfValidatorNumber(array('required' => false)),
      'agrupar'    => new sfValidatorInteger(array('required' => false)),
      'unid_r'     => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'nro_reng'   => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('reng_emp[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RengEmp';
  }

}
