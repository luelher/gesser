<?php

/**
 * Pagos filter form base class.
 *
 * @package    gesser
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasePagosFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'recibo'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_cli'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Prov'), 'add_empty' => true)),
      'co_ven'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fec_cob'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'anulado'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'monto'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'dppago'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'mont_ncr'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ncr'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tcomi_porc' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tcomi_line' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tcomi_art'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tcomi_conc' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'feccom'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'tasa'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'moneda'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Moneda'), 'add_empty' => true)),
      'dis_cen'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'numcom'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo1'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo2'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo3'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo4'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo5'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo6'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo7'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo8'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_us_in'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fe_us_in'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'co_us_mo'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fe_us_mo'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'co_us_el'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fe_us_el'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'adel_num'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'revisado'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'trasnfe'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_sucu'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Almacen'), 'add_empty' => true)),
      'rowguid'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'descrip'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'num_dev'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'devdinero'  => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'aux01'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'aux02'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'origen'     => new sfWidgetFormFilterInput(),
      'origen_d'   => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'recibo'     => new sfValidatorPass(array('required' => false)),
      'co_cli'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Prov'), 'column' => 'co_prov')),
      'co_ven'     => new sfValidatorPass(array('required' => false)),
      'fec_cob'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'anulado'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'monto'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'dppago'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'mont_ncr'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'ncr'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'tcomi_porc' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'tcomi_line' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'tcomi_art'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'tcomi_conc' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'feccom'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'tasa'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'moneda'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Moneda'), 'column' => 'co_mone')),
      'dis_cen'    => new sfValidatorPass(array('required' => false)),
      'numcom'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'campo1'     => new sfValidatorPass(array('required' => false)),
      'campo2'     => new sfValidatorPass(array('required' => false)),
      'campo3'     => new sfValidatorPass(array('required' => false)),
      'campo4'     => new sfValidatorPass(array('required' => false)),
      'campo5'     => new sfValidatorPass(array('required' => false)),
      'campo6'     => new sfValidatorPass(array('required' => false)),
      'campo7'     => new sfValidatorPass(array('required' => false)),
      'campo8'     => new sfValidatorPass(array('required' => false)),
      'co_us_in'   => new sfValidatorPass(array('required' => false)),
      'fe_us_in'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'co_us_mo'   => new sfValidatorPass(array('required' => false)),
      'fe_us_mo'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'co_us_el'   => new sfValidatorPass(array('required' => false)),
      'fe_us_el'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'adel_num'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'revisado'   => new sfValidatorPass(array('required' => false)),
      'trasnfe'    => new sfValidatorPass(array('required' => false)),
      'co_sucu'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Almacen'), 'column' => 'co_alma')),
      'rowguid'    => new sfValidatorPass(array('required' => false)),
      'descrip'    => new sfValidatorPass(array('required' => false)),
      'num_dev'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'devdinero'  => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'aux01'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'aux02'      => new sfValidatorPass(array('required' => false)),
      'origen'     => new sfValidatorPass(array('required' => false)),
      'origen_d'   => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('pagos_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Pagos';
  }

  public function getFields()
  {
    return array(
      'cob_num'    => 'Number',
      'recibo'     => 'Text',
      'co_cli'     => 'ForeignKey',
      'co_ven'     => 'Text',
      'fec_cob'    => 'Date',
      'anulado'    => 'Boolean',
      'monto'      => 'Number',
      'dppago'     => 'Number',
      'mont_ncr'   => 'Number',
      'ncr'        => 'Number',
      'tcomi_porc' => 'Number',
      'tcomi_line' => 'Number',
      'tcomi_art'  => 'Number',
      'tcomi_conc' => 'Number',
      'feccom'     => 'Date',
      'tasa'       => 'Number',
      'moneda'     => 'ForeignKey',
      'dis_cen'    => 'Text',
      'numcom'     => 'Number',
      'campo1'     => 'Text',
      'campo2'     => 'Text',
      'campo3'     => 'Text',
      'campo4'     => 'Text',
      'campo5'     => 'Text',
      'campo6'     => 'Text',
      'campo7'     => 'Text',
      'campo8'     => 'Text',
      'co_us_in'   => 'Text',
      'fe_us_in'   => 'Date',
      'co_us_mo'   => 'Text',
      'fe_us_mo'   => 'Date',
      'co_us_el'   => 'Text',
      'fe_us_el'   => 'Date',
      'adel_num'   => 'Number',
      'revisado'   => 'Text',
      'trasnfe'    => 'Text',
      'co_sucu'    => 'ForeignKey',
      'rowguid'    => 'Text',
      'descrip'    => 'Text',
      'num_dev'    => 'Number',
      'devdinero'  => 'Boolean',
      'aux01'      => 'Number',
      'aux02'      => 'Text',
      'origen'     => 'Text',
      'origen_d'   => 'Text',
    );
  }
}
