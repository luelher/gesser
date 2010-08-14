<?php

/**
 * Fisico filter form base class.
 *
 * @package    gesser
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseFisicoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'fecha_fis'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'observac'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_alma'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SubAlma'), 'add_empty' => true)),
      'cerrado'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'nro_ajuste' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'anulado'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
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
      'fecha_fis'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'observac'   => new sfValidatorPass(array('required' => false)),
      'co_alma'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('SubAlma'), 'column' => 'co_sub')),
      'cerrado'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'nro_ajuste' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'anulado'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
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

    $this->widgetSchema->setNameFormat('fisico_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Fisico';
  }

  public function getFields()
  {
    return array(
      'num_fis'    => 'Number',
      'fecha_fis'  => 'Date',
      'observac'   => 'Text',
      'co_alma'    => 'ForeignKey',
      'cerrado'    => 'Boolean',
      'nro_ajuste' => 'Number',
      'anulado'    => 'Boolean',
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
