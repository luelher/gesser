<?php

/**
 * RengPag form base class.
 *
 * @method RengPag getObject() Returns the current form's model object
 *
 * @package    gesser
 * @subpackage form
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseRengPagForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'cob_num'      => new sfWidgetFormInputHidden(),
      'reng_num'     => new sfWidgetFormInputHidden(),
      'tp_doc_cob'   => new sfWidgetFormInputText(),
      'doc_num'      => new sfWidgetFormInputText(),
      'neto'         => new sfWidgetFormInputText(),
      'neto_tmp'     => new sfWidgetFormInputText(),
      'dppago'       => new sfWidgetFormInputText(),
      'dppago_tmp'   => new sfWidgetFormInputText(),
      'reng_ncr'     => new sfWidgetFormInputText(),
      'co_ven'       => new sfWidgetFormInputText(),
      'comi_porc'    => new sfWidgetFormInputText(),
      'comi_linea'   => new sfWidgetFormInputText(),
      'comi_conc'    => new sfWidgetFormInputText(),
      'comi_art'     => new sfWidgetFormInputText(),
      'sign_aju_c'   => new sfWidgetFormInputText(),
      'porc_aju_c'   => new sfWidgetFormInputText(),
      'por_cob'      => new sfWidgetFormInputText(),
      'comi_cob'     => new sfWidgetFormInputText(),
      'mont_cob'     => new sfWidgetFormInputText(),
      'sino_pago'    => new sfWidgetFormInputCheckbox(),
      'sino_reten'   => new sfWidgetFormInputCheckbox(),
      'monto_reten'  => new sfWidgetFormInputText(),
      'monto_dppago' => new sfWidgetFormInputText(),
      'imp_pago'     => new sfWidgetFormInputText(),
      'monto_obj'    => new sfWidgetFormInputText(),
      'isv'          => new sfWidgetFormInputText(),
      'nro_fact'     => new sfWidgetFormInputText(),
      'moneda'       => new sfWidgetFormInputText(),
      'tasa'         => new sfWidgetFormInputText(),
      'sustraen'     => new sfWidgetFormInputText(),
      'rowguid'      => new sfWidgetFormInputText(),
      'co_islr'      => new sfWidgetFormInputText(),
      'fec_emis'     => new sfWidgetFormDateTime(),
      'fec_venc'     => new sfWidgetFormDateTime(),
      'ret_iva'      => new sfWidgetFormInputText(),
      'fact_iva'     => new sfWidgetFormInputText(),
      'numcon'       => new sfWidgetFormInputText(),
      'porc_retn'    => new sfWidgetFormInputText(),
      'porc_desc'    => new sfWidgetFormInputText(),
      'aux01'        => new sfWidgetFormInputText(),
      'aux02'        => new sfWidgetFormInputText(),
      'prov_ter'     => new sfWidgetFormInputText(),
      'reng_ter'     => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cob_num'      => new sfValidatorChoice(array('choices' => array($this->getObject()->get('cob_num')), 'empty_value' => $this->getObject()->get('cob_num'), 'required' => false)),
      'reng_num'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('reng_num')), 'empty_value' => $this->getObject()->get('reng_num'), 'required' => false)),
      'tp_doc_cob'   => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'doc_num'      => new sfValidatorInteger(array('required' => false)),
      'neto'         => new sfValidatorNumber(array('required' => false)),
      'neto_tmp'     => new sfValidatorNumber(array('required' => false)),
      'dppago'       => new sfValidatorNumber(array('required' => false)),
      'dppago_tmp'   => new sfValidatorNumber(array('required' => false)),
      'reng_ncr'     => new sfValidatorNumber(array('required' => false)),
      'co_ven'       => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'comi_porc'    => new sfValidatorNumber(array('required' => false)),
      'comi_linea'   => new sfValidatorNumber(array('required' => false)),
      'comi_conc'    => new sfValidatorNumber(array('required' => false)),
      'comi_art'     => new sfValidatorNumber(array('required' => false)),
      'sign_aju_c'   => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'porc_aju_c'   => new sfValidatorNumber(array('required' => false)),
      'por_cob'      => new sfValidatorNumber(array('required' => false)),
      'comi_cob'     => new sfValidatorNumber(array('required' => false)),
      'mont_cob'     => new sfValidatorNumber(array('required' => false)),
      'sino_pago'    => new sfValidatorBoolean(array('required' => false)),
      'sino_reten'   => new sfValidatorBoolean(array('required' => false)),
      'monto_reten'  => new sfValidatorNumber(array('required' => false)),
      'monto_dppago' => new sfValidatorNumber(array('required' => false)),
      'imp_pago'     => new sfValidatorNumber(array('required' => false)),
      'monto_obj'    => new sfValidatorNumber(array('required' => false)),
      'isv'          => new sfValidatorNumber(array('required' => false)),
      'nro_fact'     => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'moneda'       => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'tasa'         => new sfValidatorNumber(array('required' => false)),
      'sustraen'     => new sfValidatorNumber(array('required' => false)),
      'rowguid'      => new sfValidatorString(array('max_length' => 36, 'required' => false)),
      'co_islr'      => new sfValidatorString(array('max_length' => 6, 'required' => false)),
      'fec_emis'     => new sfValidatorDateTime(array('required' => false)),
      'fec_venc'     => new sfValidatorDateTime(array('required' => false)),
      'ret_iva'      => new sfValidatorNumber(array('required' => false)),
      'fact_iva'     => new sfValidatorInteger(array('required' => false)),
      'numcon'       => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'porc_retn'    => new sfValidatorNumber(array('required' => false)),
      'porc_desc'    => new sfValidatorNumber(array('required' => false)),
      'aux01'        => new sfValidatorNumber(array('required' => false)),
      'aux02'        => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'prov_ter'     => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'reng_ter'     => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('reng_pag[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RengPag';
  }

}
