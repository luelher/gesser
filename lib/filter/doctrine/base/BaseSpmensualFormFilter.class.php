<?php

/**
 * Spmensual filter form base class.
 *
 * @package    gesser
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseSpmensualFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'cantidad' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'diasinv'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'diasprod' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'holgura'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'periodo'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cantprod' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'trasnfe'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_us_in' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_us_mo' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_us_el' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fe_us_in' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'fe_us_mo' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'fe_us_el' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'co_sucu'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cod_ced'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'pendpro'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'mesprox'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'stockop'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'stockact' => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'cantidad' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'diasinv'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'diasprod' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'holgura'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'periodo'  => new sfValidatorPass(array('required' => false)),
      'cantprod' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'trasnfe'  => new sfValidatorPass(array('required' => false)),
      'co_us_in' => new sfValidatorPass(array('required' => false)),
      'co_us_mo' => new sfValidatorPass(array('required' => false)),
      'co_us_el' => new sfValidatorPass(array('required' => false)),
      'fe_us_in' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'fe_us_mo' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'fe_us_el' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'co_sucu'  => new sfValidatorPass(array('required' => false)),
      'cod_ced'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'pendpro'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'mesprox'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'stockop'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'stockact' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('spmensual_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Spmensual';
  }

  public function getFields()
  {
    return array(
      'co_art'   => 'Text',
      'cantidad' => 'Number',
      'diasinv'  => 'Number',
      'diasprod' => 'Number',
      'holgura'  => 'Number',
      'periodo'  => 'Text',
      'cantprod' => 'Number',
      'trasnfe'  => 'Text',
      'co_us_in' => 'Text',
      'co_us_mo' => 'Text',
      'co_us_el' => 'Text',
      'fe_us_in' => 'Date',
      'fe_us_mo' => 'Date',
      'fe_us_el' => 'Date',
      'co_sucu'  => 'Text',
      'cod_ced'  => 'Number',
      'pendpro'  => 'Number',
      'mesprox'  => 'Number',
      'stockop'  => 'Number',
      'stockact' => 'Number',
    );
  }
}
