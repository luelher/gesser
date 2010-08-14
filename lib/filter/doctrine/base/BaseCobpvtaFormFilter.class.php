<?php

/**
 * Cobpvta filter form base class.
 *
 * @package    gesser
 * @subpackage filter
 * @author     Luis Hernández
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseCobpvtaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'num_turno'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'efec1'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cheq1'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cheq2'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tarj1'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tarj2'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'doc_num1'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'doc_num2'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'doc_num3'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'doc_num4'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'banc_tarj1' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'banc_tarj2' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'banc_tarj3' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'banc_tarj4' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fecha_che1' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'fecha_che2' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'fecha_che3' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'fecha_che4' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'op1'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'op2'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'op3'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'op4'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'clave1'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'clave2'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'clave3'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'clave4'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cobrador'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'moneda'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tasa'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_us_in'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fe_us_in'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'co_us_mo'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fe_us_mo'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'co_us_el'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'fe_us_el'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'revisado'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'trasnfe'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'co_sucu'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'total'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'vuelto'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rowguid'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'aux01'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'aux02'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'num_turno'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'efec1'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'cheq1'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'cheq2'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'tarj1'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'tarj2'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'doc_num1'   => new sfValidatorPass(array('required' => false)),
      'doc_num2'   => new sfValidatorPass(array('required' => false)),
      'doc_num3'   => new sfValidatorPass(array('required' => false)),
      'doc_num4'   => new sfValidatorPass(array('required' => false)),
      'banc_tarj1' => new sfValidatorPass(array('required' => false)),
      'banc_tarj2' => new sfValidatorPass(array('required' => false)),
      'banc_tarj3' => new sfValidatorPass(array('required' => false)),
      'banc_tarj4' => new sfValidatorPass(array('required' => false)),
      'fecha_che1' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'fecha_che2' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'fecha_che3' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'fecha_che4' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'op1'        => new sfValidatorPass(array('required' => false)),
      'op2'        => new sfValidatorPass(array('required' => false)),
      'op3'        => new sfValidatorPass(array('required' => false)),
      'op4'        => new sfValidatorPass(array('required' => false)),
      'clave1'     => new sfValidatorPass(array('required' => false)),
      'clave2'     => new sfValidatorPass(array('required' => false)),
      'clave3'     => new sfValidatorPass(array('required' => false)),
      'clave4'     => new sfValidatorPass(array('required' => false)),
      'cobrador'   => new sfValidatorPass(array('required' => false)),
      'moneda'     => new sfValidatorPass(array('required' => false)),
      'tasa'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'co_us_in'   => new sfValidatorPass(array('required' => false)),
      'fe_us_in'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'co_us_mo'   => new sfValidatorPass(array('required' => false)),
      'fe_us_mo'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'co_us_el'   => new sfValidatorPass(array('required' => false)),
      'fe_us_el'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'revisado'   => new sfValidatorPass(array('required' => false)),
      'trasnfe'    => new sfValidatorPass(array('required' => false)),
      'co_sucu'    => new sfValidatorPass(array('required' => false)),
      'total'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'vuelto'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'rowguid'    => new sfValidatorPass(array('required' => false)),
      'aux01'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'aux02'      => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('cobpvta_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Cobpvta';
  }

  public function getFields()
  {
    return array(
      'fact_num'   => 'Number',
      'num_turno'  => 'Number',
      'efec1'      => 'Number',
      'cheq1'      => 'Number',
      'cheq2'      => 'Number',
      'tarj1'      => 'Number',
      'tarj2'      => 'Number',
      'doc_num1'   => 'Text',
      'doc_num2'   => 'Text',
      'doc_num3'   => 'Text',
      'doc_num4'   => 'Text',
      'banc_tarj1' => 'Text',
      'banc_tarj2' => 'Text',
      'banc_tarj3' => 'Text',
      'banc_tarj4' => 'Text',
      'fecha_che1' => 'Date',
      'fecha_che2' => 'Date',
      'fecha_che3' => 'Date',
      'fecha_che4' => 'Date',
      'op1'        => 'Text',
      'op2'        => 'Text',
      'op3'        => 'Text',
      'op4'        => 'Text',
      'clave1'     => 'Text',
      'clave2'     => 'Text',
      'clave3'     => 'Text',
      'clave4'     => 'Text',
      'cobrador'   => 'Text',
      'moneda'     => 'Text',
      'tasa'       => 'Number',
      'co_us_in'   => 'Text',
      'fe_us_in'   => 'Date',
      'co_us_mo'   => 'Text',
      'fe_us_mo'   => 'Date',
      'co_us_el'   => 'Text',
      'fe_us_el'   => 'Date',
      'revisado'   => 'Text',
      'trasnfe'    => 'Text',
      'co_sucu'    => 'Text',
      'total'      => 'Number',
      'vuelto'     => 'Number',
      'rowguid'    => 'Text',
      'aux01'      => 'Number',
      'aux02'      => 'Text',
    );
  }
}
