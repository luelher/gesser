<?php

/**
 * DepCaj filter form base class.
 *
 * @package    gesser
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseDepCajFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'deposito'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fecha'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'movi'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cod_cta'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Cuentas'), 'add_empty' => true)),
      'cod_caja'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'movie'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'total_efec' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'total_cheq' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'total_tarj' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'che_dev'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cta_egre'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('CtaIngr'), 'add_empty' => true)),
      'feccom'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'numcom'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cta_cont01' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cta_cont02' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cta_cont03' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'dis_cen'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'moneda'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Moneda'), 'add_empty' => true)),
      'tasa'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
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
      'revisado'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'trasnfe'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_sucu'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Almacen'), 'add_empty' => true)),
      'rowguid'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'aux01'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'aux02'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'deposito'   => new sfValidatorPass(array('required' => false)),
      'fecha'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'movi'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'cod_cta'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Cuentas'), 'column' => 'cod_cta')),
      'cod_caja'   => new sfValidatorPass(array('required' => false)),
      'movie'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'total_efec' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'total_cheq' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'total_tarj' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'che_dev'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'cta_egre'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('CtaIngr'), 'column' => 'co_ingr')),
      'feccom'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'numcom'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'cta_cont01' => new sfValidatorPass(array('required' => false)),
      'cta_cont02' => new sfValidatorPass(array('required' => false)),
      'cta_cont03' => new sfValidatorPass(array('required' => false)),
      'dis_cen'    => new sfValidatorPass(array('required' => false)),
      'moneda'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Moneda'), 'column' => 'co_mone')),
      'tasa'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
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
      'revisado'   => new sfValidatorPass(array('required' => false)),
      'trasnfe'    => new sfValidatorPass(array('required' => false)),
      'co_sucu'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Almacen'), 'column' => 'co_alma')),
      'rowguid'    => new sfValidatorPass(array('required' => false)),
      'aux01'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'aux02'      => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('dep_caj_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DepCaj';
  }

  public function getFields()
  {
    return array(
      'dep_num'    => 'Number',
      'deposito'   => 'Text',
      'fecha'      => 'Date',
      'movi'       => 'Number',
      'cod_cta'    => 'ForeignKey',
      'cod_caja'   => 'Text',
      'movie'      => 'Number',
      'total_efec' => 'Number',
      'total_cheq' => 'Number',
      'total_tarj' => 'Number',
      'che_dev'    => 'Number',
      'cta_egre'   => 'ForeignKey',
      'feccom'     => 'Date',
      'numcom'     => 'Number',
      'cta_cont01' => 'Text',
      'cta_cont02' => 'Text',
      'cta_cont03' => 'Text',
      'dis_cen'    => 'Text',
      'moneda'     => 'ForeignKey',
      'tasa'       => 'Number',
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
      'revisado'   => 'Text',
      'trasnfe'    => 'Text',
      'co_sucu'    => 'ForeignKey',
      'rowguid'    => 'Text',
      'aux01'      => 'Number',
      'aux02'      => 'Text',
    );
  }
}
