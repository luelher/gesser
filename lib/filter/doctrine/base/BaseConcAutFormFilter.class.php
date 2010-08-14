<?php

/**
 * ConcAut filter form base class.
 *
 * @package    gesser
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseConcAutFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'fec_load' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'status'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'descrip'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'archivo'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rowguid'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'saldo_ec' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'revisado' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'trasnfe'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_us_in' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fe_us_in' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'co_us_mo' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fe_us_mo' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'co_us_el' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fe_us_el' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'fec_load' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'status'   => new sfValidatorPass(array('required' => false)),
      'descrip'  => new sfValidatorPass(array('required' => false)),
      'archivo'  => new sfValidatorPass(array('required' => false)),
      'rowguid'  => new sfValidatorPass(array('required' => false)),
      'saldo_ec' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'revisado' => new sfValidatorPass(array('required' => false)),
      'trasnfe'  => new sfValidatorPass(array('required' => false)),
      'co_us_in' => new sfValidatorPass(array('required' => false)),
      'fe_us_in' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'co_us_mo' => new sfValidatorPass(array('required' => false)),
      'fe_us_mo' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'co_us_el' => new sfValidatorPass(array('required' => false)),
      'fe_us_el' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('conc_aut_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ConcAut';
  }

  public function getFields()
  {
    return array(
      'cod_cta'  => 'Text',
      'mes'      => 'Number',
      'ano'      => 'Number',
      'fec_load' => 'Date',
      'status'   => 'Text',
      'descrip'  => 'Text',
      'archivo'  => 'Text',
      'rowguid'  => 'Text',
      'saldo_ec' => 'Number',
      'revisado' => 'Text',
      'trasnfe'  => 'Text',
      'co_us_in' => 'Text',
      'fe_us_in' => 'Date',
      'co_us_mo' => 'Text',
      'fe_us_mo' => 'Date',
      'co_us_el' => 'Text',
      'fe_us_el' => 'Date',
    );
  }
}
