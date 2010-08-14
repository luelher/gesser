<?php

/**
 * OrdPago filter form base class.
 *
 * @package    gesser
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseOrdPagoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'status'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fecha'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'cod_ben'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Benefici'), 'add_empty' => true)),
      'descrip'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'forma_pag'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'monto'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tipo_imp'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fec_pag'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'cod_cta'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cheque'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cod_caja'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'mov_num'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cta_egre'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('CtaIngr'), 'add_empty' => true)),
      'feccom'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'dis_cen'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'numcom'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tasa'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'moneda'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo1'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo2'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo3'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo4'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo5'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo6'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo7'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo8'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_us_in'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fe_us_in'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'co_us_mo'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fe_us_mo'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'co_us_el'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fe_us_el'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'revisado'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'trasnfe'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_sucu'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Almacen'), 'add_empty' => true)),
      'rowguid'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'mov_islr'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'sino_reten'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'reng_si'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'monto_reten' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'monto_obj'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'sustraen'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_islr'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'pagar'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'anulada'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'porc_retn'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'aux01'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'aux02'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'salestax'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'origen'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'origen_d'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'status'      => new sfValidatorPass(array('required' => false)),
      'fecha'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'cod_ben'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Benefici'), 'column' => 'cod_ben')),
      'descrip'     => new sfValidatorPass(array('required' => false)),
      'forma_pag'   => new sfValidatorPass(array('required' => false)),
      'monto'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'tipo_imp'    => new sfValidatorPass(array('required' => false)),
      'fec_pag'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'cod_cta'     => new sfValidatorPass(array('required' => false)),
      'cheque'      => new sfValidatorPass(array('required' => false)),
      'cod_caja'    => new sfValidatorPass(array('required' => false)),
      'mov_num'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'cta_egre'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('CtaIngr'), 'column' => 'co_ingr')),
      'feccom'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'dis_cen'     => new sfValidatorPass(array('required' => false)),
      'numcom'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'tasa'        => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'moneda'      => new sfValidatorPass(array('required' => false)),
      'campo1'      => new sfValidatorPass(array('required' => false)),
      'campo2'      => new sfValidatorPass(array('required' => false)),
      'campo3'      => new sfValidatorPass(array('required' => false)),
      'campo4'      => new sfValidatorPass(array('required' => false)),
      'campo5'      => new sfValidatorPass(array('required' => false)),
      'campo6'      => new sfValidatorPass(array('required' => false)),
      'campo7'      => new sfValidatorPass(array('required' => false)),
      'campo8'      => new sfValidatorPass(array('required' => false)),
      'co_us_in'    => new sfValidatorPass(array('required' => false)),
      'fe_us_in'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'co_us_mo'    => new sfValidatorPass(array('required' => false)),
      'fe_us_mo'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'co_us_el'    => new sfValidatorPass(array('required' => false)),
      'fe_us_el'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'revisado'    => new sfValidatorPass(array('required' => false)),
      'trasnfe'     => new sfValidatorPass(array('required' => false)),
      'co_sucu'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Almacen'), 'column' => 'co_alma')),
      'rowguid'     => new sfValidatorPass(array('required' => false)),
      'mov_islr'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'sino_reten'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'reng_si'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'monto_reten' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'monto_obj'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'sustraen'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'co_islr'     => new sfValidatorPass(array('required' => false)),
      'pagar'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'anulada'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'porc_retn'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'aux01'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'aux02'       => new sfValidatorPass(array('required' => false)),
      'salestax'    => new sfValidatorPass(array('required' => false)),
      'origen'      => new sfValidatorPass(array('required' => false)),
      'origen_d'    => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ord_pago_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'OrdPago';
  }

  public function getFields()
  {
    return array(
      'ord_num'     => 'Number',
      'status'      => 'Text',
      'fecha'       => 'Date',
      'cod_ben'     => 'ForeignKey',
      'descrip'     => 'Text',
      'forma_pag'   => 'Text',
      'monto'       => 'Number',
      'tipo_imp'    => 'Text',
      'fec_pag'     => 'Date',
      'cod_cta'     => 'Text',
      'cheque'      => 'Text',
      'cod_caja'    => 'Text',
      'mov_num'     => 'Number',
      'cta_egre'    => 'ForeignKey',
      'feccom'      => 'Date',
      'dis_cen'     => 'Text',
      'numcom'      => 'Number',
      'tasa'        => 'Number',
      'moneda'      => 'Text',
      'campo1'      => 'Text',
      'campo2'      => 'Text',
      'campo3'      => 'Text',
      'campo4'      => 'Text',
      'campo5'      => 'Text',
      'campo6'      => 'Text',
      'campo7'      => 'Text',
      'campo8'      => 'Text',
      'co_us_in'    => 'Text',
      'fe_us_in'    => 'Date',
      'co_us_mo'    => 'Text',
      'fe_us_mo'    => 'Date',
      'co_us_el'    => 'Text',
      'fe_us_el'    => 'Date',
      'revisado'    => 'Text',
      'trasnfe'     => 'Text',
      'co_sucu'     => 'ForeignKey',
      'rowguid'     => 'Text',
      'mov_islr'    => 'Number',
      'sino_reten'  => 'Boolean',
      'reng_si'     => 'Boolean',
      'monto_reten' => 'Number',
      'monto_obj'   => 'Number',
      'sustraen'    => 'Number',
      'co_islr'     => 'Text',
      'pagar'       => 'Number',
      'anulada'     => 'Boolean',
      'porc_retn'   => 'Number',
      'aux01'       => 'Number',
      'aux02'       => 'Text',
      'salestax'    => 'Text',
      'origen'      => 'Text',
      'origen_d'    => 'Text',
    );
  }
}
