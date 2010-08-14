<?php

/**
 * Cobpvta form base class.
 *
 * @method Cobpvta getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseCobpvtaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'fact_num'   => new sfWidgetFormInputHidden(),
      'num_turno'  => new sfWidgetFormInputText(),
      'efec1'      => new sfWidgetFormInputText(),
      'cheq1'      => new sfWidgetFormInputText(),
      'cheq2'      => new sfWidgetFormInputText(),
      'tarj1'      => new sfWidgetFormInputText(),
      'tarj2'      => new sfWidgetFormInputText(),
      'doc_num1'   => new sfWidgetFormInputText(),
      'doc_num2'   => new sfWidgetFormInputText(),
      'doc_num3'   => new sfWidgetFormInputText(),
      'doc_num4'   => new sfWidgetFormInputText(),
      'banc_tarj1' => new sfWidgetFormInputText(),
      'banc_tarj2' => new sfWidgetFormInputText(),
      'banc_tarj3' => new sfWidgetFormInputText(),
      'banc_tarj4' => new sfWidgetFormInputText(),
      'fecha_che1' => new sfWidgetFormDateTime(),
      'fecha_che2' => new sfWidgetFormDateTime(),
      'fecha_che3' => new sfWidgetFormDateTime(),
      'fecha_che4' => new sfWidgetFormDateTime(),
      'op1'        => new sfWidgetFormInputText(),
      'op2'        => new sfWidgetFormInputText(),
      'op3'        => new sfWidgetFormInputText(),
      'op4'        => new sfWidgetFormInputText(),
      'clave1'     => new sfWidgetFormInputText(),
      'clave2'     => new sfWidgetFormInputText(),
      'clave3'     => new sfWidgetFormInputText(),
      'clave4'     => new sfWidgetFormInputText(),
      'cobrador'   => new sfWidgetFormInputText(),
      'moneda'     => new sfWidgetFormInputText(),
      'tasa'       => new sfWidgetFormInputText(),
      'co_us_in'   => new sfWidgetFormInputText(),
      'fe_us_in'   => new sfWidgetFormDateTime(),
      'co_us_mo'   => new sfWidgetFormInputText(),
      'fe_us_mo'   => new sfWidgetFormDateTime(),
      'co_us_el'   => new sfWidgetFormInputText(),
      'fe_us_el'   => new sfWidgetFormDateTime(),
      'revisado'   => new sfWidgetFormInputText(),
      'trasnfe'    => new sfWidgetFormInputText(),
      'co_sucu'    => new sfWidgetFormInputText(),
      'total'      => new sfWidgetFormInputText(),
      'vuelto'     => new sfWidgetFormInputText(),
      'rowguid'    => new sfWidgetFormInputText(),
      'aux01'      => new sfWidgetFormInputText(),
      'aux02'      => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'fact_num'   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('fact_num')), 'empty_value' => $this->getObject()->get('fact_num'), 'required' => false)),
      'num_turno'  => new sfValidatorInteger(array('required' => false)),
      'efec1'      => new sfValidatorNumber(array('required' => false)),
      'cheq1'      => new sfValidatorNumber(array('required' => false)),
      'cheq2'      => new sfValidatorNumber(array('required' => false)),
      'tarj1'      => new sfValidatorNumber(array('required' => false)),
      'tarj2'      => new sfValidatorNumber(array('required' => false)),
      'doc_num1'   => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'doc_num2'   => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'doc_num3'   => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'doc_num4'   => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'banc_tarj1' => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'banc_tarj2' => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'banc_tarj3' => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'banc_tarj4' => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'fecha_che1' => new sfValidatorDateTime(array('required' => false)),
      'fecha_che2' => new sfValidatorDateTime(array('required' => false)),
      'fecha_che3' => new sfValidatorDateTime(array('required' => false)),
      'fecha_che4' => new sfValidatorDateTime(array('required' => false)),
      'op1'        => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'op2'        => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'op3'        => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'op4'        => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'clave1'     => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'clave2'     => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'clave3'     => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'clave4'     => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'cobrador'   => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'moneda'     => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'tasa'       => new sfValidatorNumber(array('required' => false)),
      'co_us_in'   => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'fe_us_in'   => new sfValidatorDateTime(array('required' => false)),
      'co_us_mo'   => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'fe_us_mo'   => new sfValidatorDateTime(array('required' => false)),
      'co_us_el'   => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'fe_us_el'   => new sfValidatorDateTime(array('required' => false)),
      'revisado'   => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'trasnfe'    => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'co_sucu'    => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'total'      => new sfValidatorNumber(array('required' => false)),
      'vuelto'     => new sfValidatorNumber(array('required' => false)),
      'rowguid'    => new sfValidatorString(array('max_length' => 36, 'required' => false)),
      'aux01'      => new sfValidatorNumber(array('required' => false)),
      'aux02'      => new sfValidatorString(array('max_length' => 30, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cobpvta[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Cobpvta';
  }

}
