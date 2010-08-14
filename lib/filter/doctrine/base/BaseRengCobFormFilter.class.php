<?php

/**
 * RengCob filter form base class.
 *
 * @package    gesser
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseRengCobFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'tp_doc_cob'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'doc_num'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'neto'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'neto_tmp'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'dppago'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'dppago_tmp'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'reng_ncr'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_ven'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'comis1'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'comis2'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'comis3'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'comis4'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'sign_aju_c'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'porc_aju_c'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'por_cob'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'comi_cob'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'mont_cob'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'sino_pago'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'sino_reten'   => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'monto_dppago' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'monto_reten'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'imp_pago'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'monto_obj'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'isv'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nro_fact'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'moneda'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tasa'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'numcon'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'sustraen'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rowguid'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_islr'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fec_emis'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'fec_venc'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'comis5'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'comis6'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fact_iva'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ret_iva'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'porc_retn'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'porc_desc'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'aux01'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'aux02'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'prov_ter'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'reng_ter'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'tp_doc_cob'   => new sfValidatorPass(array('required' => false)),
      'doc_num'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'neto'         => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'neto_tmp'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'dppago'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'dppago_tmp'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'reng_ncr'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'co_ven'       => new sfValidatorPass(array('required' => false)),
      'comis1'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'comis2'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'comis3'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'comis4'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'sign_aju_c'   => new sfValidatorPass(array('required' => false)),
      'porc_aju_c'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'por_cob'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'comi_cob'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'mont_cob'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'sino_pago'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'sino_reten'   => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'monto_dppago' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'monto_reten'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'imp_pago'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'monto_obj'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'isv'          => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'nro_fact'     => new sfValidatorPass(array('required' => false)),
      'moneda'       => new sfValidatorPass(array('required' => false)),
      'tasa'         => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'numcon'       => new sfValidatorPass(array('required' => false)),
      'sustraen'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'rowguid'      => new sfValidatorPass(array('required' => false)),
      'co_islr'      => new sfValidatorPass(array('required' => false)),
      'fec_emis'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'fec_venc'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'comis5'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'comis6'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'fact_iva'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'ret_iva'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'porc_retn'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'porc_desc'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'aux01'        => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'aux02'        => new sfValidatorPass(array('required' => false)),
      'prov_ter'     => new sfValidatorPass(array('required' => false)),
      'reng_ter'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('reng_cob_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'RengCob';
  }

  public function getFields()
  {
    return array(
      'cob_num'      => 'Number',
      'reng_num'     => 'Number',
      'tp_doc_cob'   => 'Text',
      'doc_num'      => 'Number',
      'neto'         => 'Number',
      'neto_tmp'     => 'Number',
      'dppago'       => 'Number',
      'dppago_tmp'   => 'Number',
      'reng_ncr'     => 'Number',
      'co_ven'       => 'Text',
      'comis1'       => 'Number',
      'comis2'       => 'Number',
      'comis3'       => 'Number',
      'comis4'       => 'Number',
      'sign_aju_c'   => 'Text',
      'porc_aju_c'   => 'Number',
      'por_cob'      => 'Number',
      'comi_cob'     => 'Number',
      'mont_cob'     => 'Number',
      'sino_pago'    => 'Boolean',
      'sino_reten'   => 'Boolean',
      'monto_dppago' => 'Number',
      'monto_reten'  => 'Number',
      'imp_pago'     => 'Number',
      'monto_obj'    => 'Number',
      'isv'          => 'Number',
      'nro_fact'     => 'Text',
      'moneda'       => 'Text',
      'tasa'         => 'Number',
      'numcon'       => 'Text',
      'sustraen'     => 'Number',
      'rowguid'      => 'Text',
      'co_islr'      => 'Text',
      'fec_emis'     => 'Date',
      'fec_venc'     => 'Date',
      'comis5'       => 'Number',
      'comis6'       => 'Number',
      'fact_iva'     => 'Number',
      'ret_iva'      => 'Number',
      'porc_retn'    => 'Number',
      'porc_desc'    => 'Number',
      'aux01'        => 'Number',
      'aux02'        => 'Text',
      'prov_ter'     => 'Text',
      'reng_ter'     => 'Number',
    );
  }
}
