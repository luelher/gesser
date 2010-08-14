<?php

/**
 * Cuentas form base class.
 *
 * @method Cuentas getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseCuentasForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'cod_cta'    => new sfWidgetFormInputHidden(),
      'co_banco'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Bancos'), 'add_empty' => false)),
      'num_cta'    => new sfWidgetFormInputText(),
      'dis_cen'    => new sfWidgetFormTextarea(),
      'sucursal'   => new sfWidgetFormInputText(),
      'cta_contab' => new sfWidgetFormInputText(),
      'telefono'   => new sfWidgetFormInputText(),
      'mes_ini'    => new sfWidgetFormDateTime(),
      'saldo_i'    => new sfWidgetFormInputText(),
      'saldo_ic'   => new sfWidgetFormInputText(),
      'saldo_a'    => new sfWidgetFormInputText(),
      'saldo_c'    => new sfWidgetFormInputText(),
      'moneda'     => new sfWidgetFormInputText(),
      'campo1'     => new sfWidgetFormInputText(),
      'campo2'     => new sfWidgetFormInputText(),
      'campo3'     => new sfWidgetFormInputText(),
      'campo4'     => new sfWidgetFormInputText(),
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
      'row_id'     => new sfWidgetFormDateTime(),
      'usa_chra'   => new sfWidgetFormInputCheckbox(),
      'ejec_cu'    => new sfWidgetFormInputText(),
      'direccion'  => new sfWidgetFormInputText(),
      'email'      => new sfWidgetFormInputText(),
      'saldo_co'   => new sfWidgetFormInputText(),
      'tipo_cu'    => new sfWidgetFormInputText(),
      'fecini'     => new sfWidgetFormDateTime(),
      'fec_chra'   => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'cod_cta'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('cod_cta')), 'empty_value' => $this->getObject()->get('cod_cta'), 'required' => false)),
      'co_banco'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Bancos'), 'required' => false)),
      'num_cta'    => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'dis_cen'    => new sfValidatorString(array('max_length' => 2147483647, 'required' => false)),
      'sucursal'   => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'cta_contab' => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'telefono'   => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'mes_ini'    => new sfValidatorDateTime(array('required' => false)),
      'saldo_i'    => new sfValidatorNumber(array('required' => false)),
      'saldo_ic'   => new sfValidatorNumber(array('required' => false)),
      'saldo_a'    => new sfValidatorNumber(array('required' => false)),
      'saldo_c'    => new sfValidatorNumber(array('required' => false)),
      'moneda'     => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'campo1'     => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo2'     => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo3'     => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo4'     => new sfValidatorString(array('max_length' => 60, 'required' => false)),
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
      'row_id'     => new sfValidatorDateTime(),
      'usa_chra'   => new sfValidatorBoolean(array('required' => false)),
      'ejec_cu'    => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'direccion'  => new sfValidatorString(array('max_length' => 120, 'required' => false)),
      'email'      => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'saldo_co'   => new sfValidatorNumber(array('required' => false)),
      'tipo_cu'    => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'fecini'     => new sfValidatorDateTime(array('required' => false)),
      'fec_chra'   => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cuentas[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Cuentas';
  }

}
