<?php

/**
 * Import filter form base class.
 *
 * @package    gesser
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseImportFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'status'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fec_imp'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'descrip'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_mone'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Moneda'), 'add_empty' => true)),
      'co_sucu'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'trasnfe'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'revisado' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_us_in' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fe_us_in' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'co_us_mo' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fe_us_mo' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'co_us_el' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fe_us_el' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'ajus_num' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'n_cost_b' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rowguid'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo1'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo2'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo3'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo4'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo5'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo6'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo7'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo8'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tasa'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'd_gasto'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'status'   => new sfValidatorPass(array('required' => false)),
      'fec_imp'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'descrip'  => new sfValidatorPass(array('required' => false)),
      'co_mone'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Moneda'), 'column' => 'co_mone')),
      'co_sucu'  => new sfValidatorPass(array('required' => false)),
      'trasnfe'  => new sfValidatorPass(array('required' => false)),
      'revisado' => new sfValidatorPass(array('required' => false)),
      'co_us_in' => new sfValidatorPass(array('required' => false)),
      'fe_us_in' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'co_us_mo' => new sfValidatorPass(array('required' => false)),
      'fe_us_mo' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'co_us_el' => new sfValidatorPass(array('required' => false)),
      'fe_us_el' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'ajus_num' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'n_cost_b' => new sfValidatorPass(array('required' => false)),
      'rowguid'  => new sfValidatorPass(array('required' => false)),
      'campo1'   => new sfValidatorPass(array('required' => false)),
      'campo2'   => new sfValidatorPass(array('required' => false)),
      'campo3'   => new sfValidatorPass(array('required' => false)),
      'campo4'   => new sfValidatorPass(array('required' => false)),
      'campo5'   => new sfValidatorPass(array('required' => false)),
      'campo6'   => new sfValidatorPass(array('required' => false)),
      'campo7'   => new sfValidatorPass(array('required' => false)),
      'campo8'   => new sfValidatorPass(array('required' => false)),
      'tasa'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'd_gasto'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('import_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Import';
  }

  public function getFields()
  {
    return array(
      'imp_num'  => 'Number',
      'status'   => 'Text',
      'fec_imp'  => 'Date',
      'descrip'  => 'Text',
      'co_mone'  => 'ForeignKey',
      'co_sucu'  => 'Text',
      'trasnfe'  => 'Text',
      'revisado' => 'Text',
      'co_us_in' => 'Text',
      'fe_us_in' => 'Date',
      'co_us_mo' => 'Text',
      'fe_us_mo' => 'Date',
      'co_us_el' => 'Text',
      'fe_us_el' => 'Date',
      'ajus_num' => 'Number',
      'n_cost_b' => 'Text',
      'rowguid'  => 'Text',
      'campo1'   => 'Text',
      'campo2'   => 'Text',
      'campo3'   => 'Text',
      'campo4'   => 'Text',
      'campo5'   => 'Text',
      'campo6'   => 'Text',
      'campo7'   => 'Text',
      'campo8'   => 'Text',
      'tasa'     => 'Number',
      'd_gasto'  => 'Number',
    );
  }
}
