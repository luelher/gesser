<?php

/**
 * Amblcobr form base class.
 *
 * @method Amblcobr getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAmblcobrForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'ambusu'        => new sfWidgetFormInputHidden(),
      'amb_blco'      => new sfWidgetFormInputHidden(),
      'cob_num'       => new sfWidgetFormInputCheckbox(),
      'recibo'        => new sfWidgetFormInputCheckbox(),
      'vco_cli'       => new sfWidgetFormInputText(),
      'dco_cli'       => new sfWidgetFormInputCheckbox(),
      'co_cli'        => new sfWidgetFormInputCheckbox(),
      'vco_ven'       => new sfWidgetFormInputText(),
      'dco_ven'       => new sfWidgetFormInputCheckbox(),
      'co_ven'        => new sfWidgetFormInputCheckbox(),
      'fec_con'       => new sfWidgetFormInputCheckbox(),
      'monto_abo'     => new sfWidgetFormInputCheckbox(),
      'dxpp'          => new sfWidgetFormInputCheckbox(),
      'reten'         => new sfWidgetFormInputCheckbox(),
      'vtipo_cob'     => new sfWidgetFormInputText(),
      'dtipo_cob'     => new sfWidgetFormInputCheckbox(),
      'tipo_cob'      => new sfWidgetFormInputCheckbox(),
      'num_doc'       => new sfWidgetFormInputCheckbox(),
      'vtarjeta'      => new sfWidgetFormInputText(),
      'dtarjeta'      => new sfWidgetFormInputCheckbox(),
      'tarjeta'       => new sfWidgetFormInputCheckbox(),
      'vcuenta'       => new sfWidgetFormInputText(),
      'dcuenta'       => new sfWidgetFormInputCheckbox(),
      'cuenta'        => new sfWidgetFormInputCheckbox(),
      'vbanco'        => new sfWidgetFormInputText(),
      'dbanco'        => new sfWidgetFormInputCheckbox(),
      'banco'         => new sfWidgetFormInputCheckbox(),
      'fec_cheque'    => new sfWidgetFormInputCheckbox(),
      'vcaja'         => new sfWidgetFormInputText(),
      'dcaja'         => new sfWidgetFormInputCheckbox(),
      'caja'          => new sfWidgetFormInputCheckbox(),
      'monto_total'   => new sfWidgetFormInputCheckbox(),
      'bt_actualizar' => new sfWidgetFormInputCheckbox(),
      'bt_cancelar'   => new sfWidgetFormInputCheckbox(),
      'bt_cheque'     => new sfWidgetFormInputCheckbox(),
      'bt_pago'       => new sfWidgetFormInputCheckbox(),
      'bt_reverso'    => new sfWidgetFormInputCheckbox(),
      'bt_despacho'   => new sfWidgetFormInputCheckbox(),
      'bt_facturas'   => new sfWidgetFormInputCheckbox(),
      'bt_caja'       => new sfWidgetFormInputCheckbox(),
      'bt_camb'       => new sfWidgetFormInputCheckbox(),
      'tasa'          => new sfWidgetFormInputText(),
      'dmoneda'       => new sfWidgetFormInputCheckbox(),
      'moneda'        => new sfWidgetFormInputCheckbox(),
      'vmoneda'       => new sfWidgetFormInputText(),
      'p_abrir_ca'    => new sfWidgetFormInputCheckbox(),
      'p_detal'       => new sfWidgetFormInputCheckbox(),
      'campo1'        => new sfWidgetFormInputText(),
      'campo2'        => new sfWidgetFormInputText(),
      'campo3'        => new sfWidgetFormInputText(),
      'campo4'        => new sfWidgetFormInputText(),
      'campo5'        => new sfWidgetFormInputText(),
      'campo6'        => new sfWidgetFormInputText(),
      'campo7'        => new sfWidgetFormInputText(),
      'campo8'        => new sfWidgetFormInputText(),
      'co_us_in'      => new sfWidgetFormInputText(),
      'fe_us_in'      => new sfWidgetFormDateTime(),
      'co_us_mo'      => new sfWidgetFormInputText(),
      'fe_us_mo'      => new sfWidgetFormDateTime(),
      'co_us_el'      => new sfWidgetFormInputText(),
      'fe_us_el'      => new sfWidgetFormDateTime(),
      'revisado'      => new sfWidgetFormInputText(),
      'trasnfe'       => new sfWidgetFormInputText(),
      'p_para1'       => new sfWidgetFormInputCheckbox(),
      'p_para2'       => new sfWidgetFormInputCheckbox(),
      'p_para3'       => new sfWidgetFormInputCheckbox(),
      'p_para4'       => new sfWidgetFormInputCheckbox(),
      'p_para5'       => new sfWidgetFormInputCheckbox(),
      'co_sucu'       => new sfWidgetFormInputText(),
      'rowguid'       => new sfWidgetFormInputText(),
      'edppago'       => new sfWidgetFormInputCheckbox(),
      'bt_reactiva'   => new sfWidgetFormInputCheckbox(),
      'bt_anulado'    => new sfWidgetFormInputCheckbox(),
      'des_crip'      => new sfWidgetFormInputCheckbox(),
      'max_per'       => new sfWidgetFormInputText(),
      'permodret'     => new sfWidgetFormInputCheckbox(),
    ));

    $this->setValidators(array(
      'ambusu'        => new sfValidatorChoice(array('choices' => array($this->getObject()->get('ambusu')), 'empty_value' => $this->getObject()->get('ambusu'), 'required' => false)),
      'amb_blco'      => new sfValidatorChoice(array('choices' => array($this->getObject()->get('amb_blco')), 'empty_value' => $this->getObject()->get('amb_blco'), 'required' => false)),
      'cob_num'       => new sfValidatorBoolean(array('required' => false)),
      'recibo'        => new sfValidatorBoolean(array('required' => false)),
      'vco_cli'       => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'dco_cli'       => new sfValidatorBoolean(array('required' => false)),
      'co_cli'        => new sfValidatorBoolean(array('required' => false)),
      'vco_ven'       => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'dco_ven'       => new sfValidatorBoolean(array('required' => false)),
      'co_ven'        => new sfValidatorBoolean(array('required' => false)),
      'fec_con'       => new sfValidatorBoolean(array('required' => false)),
      'monto_abo'     => new sfValidatorBoolean(array('required' => false)),
      'dxpp'          => new sfValidatorBoolean(array('required' => false)),
      'reten'         => new sfValidatorBoolean(array('required' => false)),
      'vtipo_cob'     => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'dtipo_cob'     => new sfValidatorBoolean(array('required' => false)),
      'tipo_cob'      => new sfValidatorBoolean(array('required' => false)),
      'num_doc'       => new sfValidatorBoolean(array('required' => false)),
      'vtarjeta'      => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'dtarjeta'      => new sfValidatorBoolean(array('required' => false)),
      'tarjeta'       => new sfValidatorBoolean(array('required' => false)),
      'vcuenta'       => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'dcuenta'       => new sfValidatorBoolean(array('required' => false)),
      'cuenta'        => new sfValidatorBoolean(array('required' => false)),
      'vbanco'        => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'dbanco'        => new sfValidatorBoolean(array('required' => false)),
      'banco'         => new sfValidatorBoolean(array('required' => false)),
      'fec_cheque'    => new sfValidatorBoolean(array('required' => false)),
      'vcaja'         => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'dcaja'         => new sfValidatorBoolean(array('required' => false)),
      'caja'          => new sfValidatorBoolean(array('required' => false)),
      'monto_total'   => new sfValidatorBoolean(array('required' => false)),
      'bt_actualizar' => new sfValidatorBoolean(array('required' => false)),
      'bt_cancelar'   => new sfValidatorBoolean(array('required' => false)),
      'bt_cheque'     => new sfValidatorBoolean(array('required' => false)),
      'bt_pago'       => new sfValidatorBoolean(array('required' => false)),
      'bt_reverso'    => new sfValidatorBoolean(array('required' => false)),
      'bt_despacho'   => new sfValidatorBoolean(array('required' => false)),
      'bt_facturas'   => new sfValidatorBoolean(array('required' => false)),
      'bt_caja'       => new sfValidatorBoolean(array('required' => false)),
      'bt_camb'       => new sfValidatorBoolean(array('required' => false)),
      'tasa'          => new sfValidatorNumber(array('required' => false)),
      'dmoneda'       => new sfValidatorBoolean(array('required' => false)),
      'moneda'        => new sfValidatorBoolean(array('required' => false)),
      'vmoneda'       => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'p_abrir_ca'    => new sfValidatorBoolean(array('required' => false)),
      'p_detal'       => new sfValidatorBoolean(array('required' => false)),
      'campo1'        => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo2'        => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo3'        => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo4'        => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo5'        => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo6'        => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo7'        => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'campo8'        => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'co_us_in'      => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'fe_us_in'      => new sfValidatorDateTime(array('required' => false)),
      'co_us_mo'      => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'fe_us_mo'      => new sfValidatorDateTime(array('required' => false)),
      'co_us_el'      => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'fe_us_el'      => new sfValidatorDateTime(array('required' => false)),
      'revisado'      => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'trasnfe'       => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'p_para1'       => new sfValidatorBoolean(array('required' => false)),
      'p_para2'       => new sfValidatorBoolean(array('required' => false)),
      'p_para3'       => new sfValidatorBoolean(array('required' => false)),
      'p_para4'       => new sfValidatorBoolean(array('required' => false)),
      'p_para5'       => new sfValidatorBoolean(array('required' => false)),
      'co_sucu'       => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'rowguid'       => new sfValidatorString(array('max_length' => 36, 'required' => false)),
      'edppago'       => new sfValidatorBoolean(array('required' => false)),
      'bt_reactiva'   => new sfValidatorBoolean(array('required' => false)),
      'bt_anulado'    => new sfValidatorBoolean(array('required' => false)),
      'des_crip'      => new sfValidatorBoolean(array('required' => false)),
      'max_per'       => new sfValidatorNumber(array('required' => false)),
      'permodret'     => new sfValidatorBoolean(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('amblcobr[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Amblcobr';
  }

}
