<?php

/**
 * Spcostest filter form base class.
 *
 * @package    gesser
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseSpcostestFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'fec_vig'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'fe_emis'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'cost_des' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo1'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo2'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo3'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo4'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo5'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo6'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo7'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campo8'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_us_in' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_us_mo' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_us_el' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fe_us_in' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'fe_us_mo' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'fe_us_el' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'rowguid'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_sucu'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'trasnfe'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'fec_vig'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'fe_emis'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'cost_des' => new sfValidatorPass(array('required' => false)),
      'campo1'   => new sfValidatorPass(array('required' => false)),
      'campo2'   => new sfValidatorPass(array('required' => false)),
      'campo3'   => new sfValidatorPass(array('required' => false)),
      'campo4'   => new sfValidatorPass(array('required' => false)),
      'campo5'   => new sfValidatorPass(array('required' => false)),
      'campo6'   => new sfValidatorPass(array('required' => false)),
      'campo7'   => new sfValidatorPass(array('required' => false)),
      'campo8'   => new sfValidatorPass(array('required' => false)),
      'co_us_in' => new sfValidatorPass(array('required' => false)),
      'co_us_mo' => new sfValidatorPass(array('required' => false)),
      'co_us_el' => new sfValidatorPass(array('required' => false)),
      'fe_us_in' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'fe_us_mo' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'fe_us_el' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'rowguid'  => new sfValidatorPass(array('required' => false)),
      'co_sucu'  => new sfValidatorPass(array('required' => false)),
      'trasnfe'  => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('spcostest_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Spcostest';
  }

  public function getFields()
  {
    return array(
      'cost_num' => 'Number',
      'fec_vig'  => 'Date',
      'fe_emis'  => 'Date',
      'cost_des' => 'Text',
      'campo1'   => 'Text',
      'campo2'   => 'Text',
      'campo3'   => 'Text',
      'campo4'   => 'Text',
      'campo5'   => 'Text',
      'campo6'   => 'Text',
      'campo7'   => 'Text',
      'campo8'   => 'Text',
      'co_us_in' => 'Text',
      'co_us_mo' => 'Text',
      'co_us_el' => 'Text',
      'fe_us_in' => 'Date',
      'fe_us_mo' => 'Date',
      'fe_us_el' => 'Date',
      'rowguid'  => 'Text',
      'co_sucu'  => 'Text',
      'trasnfe'  => 'Text',
    );
  }
}
