<?php

/**
 * Cajas form base class.
 *
 * @method Cajas getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseCajasForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'cod_caja'   => new sfWidgetFormInputHidden(),
      'descrip'    => new sfWidgetFormInputText(),
      'mes_ini'    => new sfWidgetFormDateTime(),
      'saldo_i'    => new sfWidgetFormInputText(),
      'saldo_ei'   => new sfWidgetFormInputText(),
      'saldo_a'    => new sfWidgetFormInputText(),
      'saldo_e'    => new sfWidgetFormInputText(),
      'moneda'     => new sfWidgetFormInputText(),
      'campo1'     => new sfWidgetFormInputText(),
      'campo2'     => new sfWidgetFormInputText(),
      'campo3'     => new sfWidgetFormInputText(),
      'campo4'     => new sfWidgetFormInputText(),
      'dis_cen'    => new sfWidgetFormTextarea(),
      'deb_ant'    => new sfWidgetFormInputText(),
      'hab_ant'    => new sfWidgetFormInputText(),
      'co_us_in'   => new sfWidgetFormInputText(),
      'fe_us_in'   => new sfWidgetFormDateTime(),
      'co_us_mo'   => new sfWidgetFormInputText(),
      'fe_us_mo'   => new sfWidgetFormDateTime(),
      'co_us_el'   => new sfWidgetFormInputText(),
      'fe_us_el'   => new sfWidgetFormDateTime(),
      'revisado'   => new sfWidgetFormInputText(),
      'trasnfe'    => new sfWidgetFormInputText(),
      'co_sucu'    => new sfWidgetFormInputText(),
      'rowguid'    => new sfWidgetFormInputText(),
      'inactivo'   => new sfWidgetFormInputCheckbox(),
      'gavetaser'  => new sfWidgetFormInputCheckbox(),
      'cajapri'    => new sfWidgetFormInputCheckbox(),
      'sidisplay'  => new sfWidgetFormInputCheckbox(),
      'puerto'     => new sfWidgetFormInputText(),
      'bitdatos'   => new sfWidgetFormInputText(),
      'bitstop'    => new sfWidgetFormInputText(),
      'paridad'    => new sfWidgetFormInputText(),
      'velocidad'  => new sfWidgetFormInputText(),
      'puerto2'    => new sfWidgetFormInputText(),
      'bitdatos2'  => new sfWidgetFormInputText(),
      'bitstop2'   => new sfWidgetFormInputText(),
      'paridad2'   => new sfWidgetFormInputText(),
      'gcadena'    => new sfWidgetFormInputText(),
      'velocidad2' => new sfWidgetFormInputText(),
      'cajapvta'   => new sfWidgetFormInputCheckbox(),
      'mvisa'      => new sfWidgetFormInputCheckbox(),
      'vpostipo'   => new sfWidgetFormInputText(),
      'impfis'     => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cod_caja'   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('cod_caja')), 'empty_value' => $this->getObject()->get('cod_caja'), 'required' => false)),
      'descrip'    => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'mes_ini'    => new sfValidatorDateTime(array('required' => false)),
      'saldo_i'    => new sfValidatorNumber(array('required' => false)),
      'saldo_ei'   => new sfValidatorNumber(array('required' => false)),
      'saldo_a'    => new sfValidatorNumber(array('required' => false)),
      'saldo_e'    => new sfValidatorNumber(array('required' => false)),
      'moneda'     => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'campo1'     => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo2'     => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo3'     => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo4'     => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'dis_cen'    => new sfValidatorString(array('max_length' => 2147483647, 'required' => false)),
      'deb_ant'    => new sfValidatorNumber(array('required' => false)),
      'hab_ant'    => new sfValidatorNumber(array('required' => false)),
      'co_us_in'   => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'fe_us_in'   => new sfValidatorDateTime(array('required' => false)),
      'co_us_mo'   => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'fe_us_mo'   => new sfValidatorDateTime(array('required' => false)),
      'co_us_el'   => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'fe_us_el'   => new sfValidatorDateTime(array('required' => false)),
      'revisado'   => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'trasnfe'    => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'co_sucu'    => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'rowguid'    => new sfValidatorString(array('max_length' => 36, 'required' => false)),
      'inactivo'   => new sfValidatorBoolean(array('required' => false)),
      'gavetaser'  => new sfValidatorBoolean(array('required' => false)),
      'cajapri'    => new sfValidatorBoolean(array('required' => false)),
      'sidisplay'  => new sfValidatorBoolean(array('required' => false)),
      'puerto'     => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'bitdatos'   => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'bitstop'    => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'paridad'    => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'velocidad'  => new sfValidatorString(array('max_length' => 5, 'required' => false)),
      'puerto2'    => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'bitdatos2'  => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'bitstop2'   => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'paridad2'   => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'gcadena'    => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'velocidad2' => new sfValidatorString(array('max_length' => 5, 'required' => false)),
      'cajapvta'   => new sfValidatorBoolean(array('required' => false)),
      'mvisa'      => new sfValidatorBoolean(array('required' => false)),
      'vpostipo'   => new sfValidatorInteger(array('required' => false)),
      'impfis'     => new sfValidatorString(array('max_length' => 20, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cajas[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Cajas';
  }

}
